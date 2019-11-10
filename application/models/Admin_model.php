<?php 


Class Admin_model extends CI_Model{

    //
     public function add_product()
    {
        $data = array(
            'product_name' => $this->input->post('product_name'),
            'product_category' => $this->input->post('product_category'),
            'product_price' => $this->input->post('product_price'),
            'vat' => $this->input->post('vat'),
            'room_number' => $this->input->post('room_number'),
        );
        $this->db->insert('product', $data);
    }

    //
    public function get_bookings($booking_id) {
        $this->db->select('*');
        //$this->db->where('kid_id', $kid_id);
        $this->db->from('booking');
        $this->db->join('users', 'user_id = users');
        $this->db->join('status', 'status_id = status');
        $this->db->join('product', 'product_id = product');
        $query = $this->db->get();
        return $query->result();
    }

    public function get_booking_id($booking_id){
        $this->db->where('booking_id', $booking_id);
        $this->db->select('*');
        $this->db->from('booking');
        $query = $this->db->get();
        return $query->row();
    }

    //
    public function get_single_booking($booking_id) {
        $this->db->select('*');
        //$this->db->where('booking_id', $booking_id);
        $this->db->from('booking');
        $this->db->join('users', 'user_id = users');
        $this->db->join('status', 'status_id = status');
        $this->db->join('product', 'product_id = product');
        $query = $this->db->get();
        return $query->result();
    }

    // model allow to update booking status
    public function update_booking($booking_id, $data) {
        $this->table = 'booking';
        $this->db->where('booking_id', $booking_id);
        $this->db->update($this->table, $data);
    }


}

