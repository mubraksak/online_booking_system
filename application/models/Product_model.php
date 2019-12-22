<?php 


Class Product_model extends CI_Model{


    public function get_all_products($product_id) {
       // $this->db->where('product_id', $product_id);
        $this->db->select('*');
        $this->db->from('product');
        $query = $this->db->get();
        return $query->Result();
}

public function get_single_product($product_id) {
    $this->db->WHERE('product_id', $product_id);
    $this->db->select('*');
    $this->db->from('product');
    $query = $this->db->get();
    return $query->row();
}
 public function get_spring($product_id) {
	$this->db->WHERE('product_id', $product_id);
	$this->db->select('*');
	$this->db->from('product');
	$query = $this->db->get();
	return $query->row();

}

}

