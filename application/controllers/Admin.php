<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	// this loads index page
	public function index($booking_id = 'booking_id'){
		//validate admin login
		if (!$this->session->userdata('admin')) {
            $this->session->set_flashdata('success', 'Login Required');
            redirect('homepage/login_page');
            return;
		}
		//load booking data
		$data['booking'] = $this->Admin_model-> get_bookings($booking_id);
		// this loads the index view
		$this->load->view('admin/admin', $data);
	}

	public function booking($booking_id = 'booking_id'){
		//validate admin login
		if (!$this->session->userdata('admin')) {
            $this->session->set_flashdata('success', 'Login Required');
            redirect('homepage/login_page');
            return;
		}
		//load booking data
		$data['booking'] = $this->Admin_model-> get_single_booking($booking_id);
		// this loads the index view
		$this->load->view('admin/single_booking', $data);
	}

	public function accept($booking_id) {
		$profile = $this->Admin_model->get_bookings($booking_id);
		if ( $profile->status == 1) {
			$data['status'] = '2';
			$this->Admin_model->update_booking($booking_id, $data);
			$this->session->set_flashdata('success', 'booking complited Successfully !!!');
			redirect('admin/index');
		} else {
			$this->session->set_flashdata('success', 'Not Applicable');
		}
		redirect('Home/error');
	}

	public function rejected($booking_id) {
		$profile = $this->Admin_model->get_bookings($booking_id);
		if ($profile->status == 1) {
			$data['status'] = '3';
			$this->Admin_model->update_booking($booking_id, $data);
			$this->session->set_flashdata('success', 'booking Rejected Successfully !!!');
			redirect('admin/index');
		} else {
			$this->session->set_flashdata('success', 'Not Applicable');
		}
		redirect('Home/error');
	}
	public function add_product(){
        //validate rules
        $this->form_validation->set_rules('produt_name', 'produt_name', 'trim|required');
		$this->form_validation->set_rules('product_category', 'product_category', 'trim|required');
		$this->form_validation->set_rules('product_price', 'product_price', 'trim|required');
		$this->form_validation->set_rules('vat', 'vat', 'trim|required');
        $this->form_validation->set_rules('room_number', 'room_number', 'trim|required');
        //check if validation run
        
        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('error', 'Registration Failed, sorry check and input your details again');
			redirect('Admin/error');
        } else {
		
            $this->Admin_model->add_product();
            $this->session->set_flashdata('success', 'Registration Successfull. Check Your withing 24 hours Mail to confirm your email address');
            redirect('Admin/index');
        }
    }

}