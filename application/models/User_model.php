<?php 


Class User_model extends CI_Model{

    //this function get all users data
     public function get_all_user() {

        $this->db->select('*');
        $this->db->from('users');
        $query = $this->db->get();
        return $query->row();
    }

    //this model get single your data
    public function get_single_user($user_id) {

        $this->db->select('*');
        $this->db->where('user_id', $user_id);
        $this->db->from('users');
        $query = $this->db->get();
        return $query->row();
    }

    public function add_user() {
        $data = array(
            'fullname' => $this->input->post('fullname'),
            'booking_id' => $this->input->post('booking_id'),
            'gender' => $this->input->post('gender'),
            'age' => $this->input->post('age'),
            'phone' => $this->input->post('phnoe'),
            'address' => $this->input->post('address'),
            'email' => $this->input->post('email'),
            
            
        );

        $this->db->insert('users', $data);
    }
    
    //
    // public function get_all_kids($parent_id) {
    //     $this->db->select('*');
    //     $this->db->where('parent', $parent_id);
    //     $this->db->from('kid');
    //     $this->db->join('parent', 'parent_id = parent');
    //     $this->db->join('status', 'status_id = status');
    //     $query = $this->db->get();
    //     return $query->result();
    // }


}

