<?php
class Registration_model extends CI_Model{




    public function update_user($user_id, $data) {
        $this->table = 'user';
        $this->db->where('user_id', $user_id);
        $this->db->update($this->table, $data);
    }

    public function user_registration() {
        $data = array(
            'fullname' => $this->input->post('fullname'),
            'age' => $this->input->post('age'),
            'gender' => $this->input->post('gender'),
            'password' => $this->input->post('password'),
            'phone' => $this->input->post('phone'),
            'email' => $this->input->post('email'),
        );

        $this->db->insert('users', $data);
    }

    //this category deal with product registration

    //this function register new product
    public function product_registration() {
        $data = array(
            'product_id' => $this->input->post('product_id'),
            'product_name' => $this->input->post('product_name'),
            'product_category' => $this->input->post('product_category'),
            'product_price' => $this->input->post('product_price'),
            'class' => $this->input->post('class'),
        );
        $this->db->insert('product', $data);
    }


    //this function updates products
    public function product_update($product_id, $data){

        $this->table = 'product';
        $this->db->where('product_id', $product_id);
        $this->db->update($this->table, $data);

    }



}