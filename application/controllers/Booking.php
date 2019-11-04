<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Booking extends CI_Controller {
 

//this functions loads the products from database to view
public function bookings($product_id = 'product_id', $user_id = 'user_id') {
  $data['products'] = $this->Product_model->get_all_products($product_id);
  $data['user'] = $this->User_model->get_single_user($user_id);
  $this->load->view('bookings', $data);
  }


 // this function loads the hotel booking page
 public function book($product_id = 'product_id', $user_id= 'user_id'){   
    $data['product'] = $this->Product_model->get_single_product($product_id);
    $data['user'] = $this->User_model->get_single_user($user_id);
    $this->load->view('booknow', $data);
    }

 

  // this function loads the spring water booking page
  public function spring_booking(){   
  $this->load->view('spring_booking');
  }

  // this function laods the safari booking page
  public function safari_booking(){     
  $this->load->view('safari_booking');
  }

  // this function register the booking for hotels
  
    

}