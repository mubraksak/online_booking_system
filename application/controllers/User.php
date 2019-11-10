<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class User  extends CI_Controller {

        // validate user login season
    //     function __construct() {
    //       parent::__construct();
    //       if (!$this->session->userdata('user')) {
    //           $this->session->set_flashdata('success', 'Login Required');
    //           redirect('home/login_page');
    //       }
    //   }

     //this function loads the checkout page.
  public function checkout($product_id = 'product_id', $user_id = 'user_id'){ 
    $this->session->unset_userdata("user");
    $data['product'] = $this->Product_model->get_single_product($product_id);
    $data['user'] = $this->User_model->get_single_user($user_id);
    $this->load->view('checkout',$data);
    }


    public function add_kid(){
        //validate rules
        $this->form_validation->set_rules('kid_name', 'kid_name', 'trim|required');
		$this->form_validation->set_rules('age', 'age', 'trim|required');
		$this->form_validation->set_rules('gender', 'gender', 'trim|required');
		$this->form_validation->set_rules('class', 'class', 'trim|required');
        $this->form_validation->set_rules('parent', 'parnet', 'trim|required');
        //check if validation run
        
        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('error', 'Registration Failed, sorry check and input your details again');
			redirect('parents/parent_dash');
        } else {
		
            $this->parent_model->add_kid();
            $this->session->set_flashdata('success', 'Registration Successfull. Check Your withing 24 hours Mail to confirm your email address');
            redirect('parents/parent_dash');
        }
    }
    //complete product booking
    public function order(){
        $this->form_validation->set_rules('booking_number', 'booking_number', 'trim|required');
        $this->form_validation->set_rules('product_id', 'product_id', 'trim|required');
        $this->form_validation->set_rules('user_id', 'user_id', 'trim|required');
        $this->form_validation->set_rules('status_id', 'status_id', 'trim|required');
            //check if validation run 
            if ($this->form_validation->run() == FALSE) {
                redirect('Booking/error');
            } else {
                $this->Booking_model->booking();
                $data = $this->booking_model->get_last_booking();
                $this->user_model->add_user();
                $this->session->set_flashdata('success', 'Registration Successfull. Check Your Mail to confirm your email address');
                redirect('booking/slip');
            }
      }        
}

