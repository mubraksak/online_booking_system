<?php

class Email_model extends CI_Model {

    function __construct() {
        parent::__construct();
        define("MAIN_EMAIL", "mubraksak@gmail.com");
        define("IS_PRINT", true);
        $config = Array(
            'protocol' => 'smtp',
            'smtp_host' => 'http://localhost/yankari',
            'smtp_port' => 465,
            'smtp_user' => 'mubraksak@gmail.com',
            'smtp_pass' => 'admin',
            'mailtype' => 'html',
            'charset' => 'utf-8',
            'smtp_timeout' => '7'
        );
        $this->load->library('email', $config);
        $this->email->set_newline("\r\n");
    }

    public function sendBookingNumberToUser($user_id, $email) {
        // $key = uniqid();
        $bookin_number = $this->db->select('booking_number');
        $this->db->from('booking');
        $this->db->where('users', $user_id);
        $query = $this->db->get();
        return $query->row();

        /* @var $booking_number type */
        $this->add_email_verification($booking_number, $user_id);

        $data['header'] = "Email Verification for your yankari booking system";
        $data['body'] = "thank you for booking with yanakari game reserve. this is your booking number" . $booking_number . "<br/><br/> If you did not initiate this booking, kindly ignore this email.";
        $data['button_text'] = "Verify";
        $data['button_link'] = base_url() . "registration/email_verification_seller/" . $user_id . "/" . $key;

        $this->email->from(MAIN_EMAIL, 'yankari');
        $this->email->to($email);

        $this->email->subject('yankari Booking email');
        $this->email->message($this->load->view("email/template", $data, true));

        $this->email->send();
        if (IS_PRINT) {
            echo $this->email->print_debugger();
        }
        $this->email->clear();
    }

}
