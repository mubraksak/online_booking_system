<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Booking extends CI_Controller {

      //validate user login season
        function __construct() {
          parent::__construct();
          if (!$this->session->userdata('user')) {
              $this->session->set_flashdata('success', 'Login Required');
              redirect('home/login_page');
          }
      }
//this functions loads the products from database to view
public function bookings($product_id = 'product_id', $user_id = 'user_id') {
  $data['products'] = $this->Product_model->get_all_products($product_id);
  $data['user'] = $this->User_model->get_single_user($this->session->userdata('user')->user_id);
  $this->load->view('bookings', $data);
  }

 // this function loads the hotel booking page
 public function book($product_id = 'product_id', $user_id= 'user_id'){
    $data['product'] = $this->Product_model->get_single_product($product_id);
    $data['user'] = $this->User_model->get_single_user($this->session->userdata('user')->user_id);
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
  public function checkout($product_id = 'product_id', $user_id = 'user_id'){ 
    $data['product'] = $this->Product_model->get_single_product($product_id);
    $data['user'] = $this->User_model->get_single_user($this->session->userdata('user')->user_id);
    $this->load->view('checkout',$data);
    }
    // this function complete bookng
  public function order(){
    $this->form_validation->set_rules('booking_number', 'booking_number', 'trim|required');
    $this->form_validation->set_rules('product', 'product', 'trim|required');
    $this->form_validation->set_rules('user', 'user', 'trim|required');
    $this->form_validation->set_rules('status', 'status', 'trim|required');
        //check if validation run
        if ($this->form_validation->run() == FALSE) {
            redirect('Booking/error');
        } else {
            $this->Booking_model->booking();
            $this->session->set_flashdata('success', 'Registration Successfull. Check Your Mail to confirm your email address');
            redirect('booking/slip');
        }
  }

  public function slip($booking_id = 'booking_id'){

    $data['booked'] = $this->Booking_model->get_single_booking($booking_id);
    $data['user'] = $this->User_model->get_single_user($this->session->userdata('user')->user_id);
    $booking =$this->Booking_model->get_single_booking($booking_id);
    //the function load the slip view...
		$this->load->view('slip', $data);
  }

}
