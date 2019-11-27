<?php
Class Booking_model extends CI_Model{
    //this functions register new product booking
    public function product_booking(){
        $data = array(
        'product_id' => $this->input->post('product_id'),
        'product_name' => $this->input->post('product_name'),
        );

        $this->db->insert('product', $data);
    }

    // this function register new bookings
    public function booking() {
        $data = array(
            'booking_number' => $this->input->post('booking_number'),
            'status' => $this->input->post('status'),
            'product' => $this->input->post('product'),
            'users' => $this->input->post('user'),
        );
        $this->db->insert('booking', $data);
    }

    // this function gets all bookings
    public function get_all_bookings() {
            $this->db->select('*');
            $this->db->from('booking');
            $query = $this->db->get();
            return $query->row();
    }

        // this function gets single booking using booking number
        public function get_single_booking($booking_id) {
            $this->db->select('*');
            $this->db->from('booking');
            $this->db->where('booking_id', $booking_id);
            $query = $this->db->get();
            return $query->row();
    }

    public function get_single_product() {
        $this->db->select('*');
        $this->db->from('booking');
        $this->db->where('booking_number', $booking_number);
        $query = $this->db->get();
        return $query->row();
    }

    // this function update single booking
    public function update_booking($booking_id, $data) {
        $this->table = 'booking';
        $this->db->where('booking_id', $booking_id);
        $this->db->update($this->table, $data);
    }

}
