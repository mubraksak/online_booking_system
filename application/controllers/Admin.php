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
		$data['booking'] = $this->Admin_model-> get_bookings($booking_id);
		$this->load->view('admin/admin', $data);
	}

	// loads single booking page
	public function booking($booking_id = 'booking_id'){
		//validate admin login
		if (!$this->session->userdata('admin')) {
            $this->session->set_flashdata('success', 'Login Required');
            redirect('homepage/login_page');
            return;
		}
		//load booking data
		$data['booking'] = $this->Admin_model->get_single_booking($booking_id);
		// this loads the index view
		$this->load->view('admin/single_booking', $data);
	}

	public function add_product_page(){

		$this->load->view('admin/add_product');
	}

	// this function allow admin to accept user request.
	public function accept($booking_id) {
		$profile = $this->Admin_model->get_booking_id($booking_id);
		if ( $profile && $profile->status == 1) {
			$data['status'] = "2";
			$this->Admin_model->update_booking($booking_id, $data);
			$this->session->set_flashdata('success', 'booking complited Successfully !!!');
			redirect('admin/index');
		} else {
			$this->session->set_flashdata('success', 'Not Applicable');
		}
		redirect('Home/error');
	}

	// this function allow admin to disapprove a request
	public function rejected($booking_id) {
		$profile = $this->Admin_model->get_booking_id($booking_id);
		if ($profile && $profile->status == 1) {
			$data['status'] = "3";
			$this->Admin_model->update_booking($booking_id, $data);
			$this->session->set_flashdata('success', 'booking Rejected Successfully !!!');
			redirect('Admin/index');
		} else {
			$this->session->set_flashdata('success', 'request crashed');
		}
		redirect('Home/error');
	}

	// this function allow admin to add new product to their products
	public function add_product(){
        //validate rules
        $this->form_validation->set_rules('product_name', 'product_name', 'trim|required');
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
            redirect('Admin/add_product_page');
        }
	}

	public function product_list($product_id = 'product_id'){

		//validate admin login
		if (!$this->session->userdata('admin')) {
            $this->session->set_flashdata('success', 'Login Required');
            redirect('homepage/login_page');
            return;
		}

		$data['products'] = $this->Admin_model->get_all_product($product_id);

		$this->load->view('admin/product_list', $data);
	}

	public function edit_product($product_id = 'product_id'){

		//validate admin login
		if (!$this->session->userdata('admin')) {
			$this->session->set_flashdata('success', 'Login Required');
			redirect('homepage/login_page');
			return;
		}

		$data['product'] = $this->Admin_model->get_single_product($product_id);

		$this->load->view('admin/edit_product', $data);

	}

	public function update_product($product_id = 'product_id'){
		$this->form_validation->set_rules('product_name', 'product_name', 'trim|required');
        $this->form_validation->set_rules('product_category', 'product_category', 'trim|required');
        $this->form_validation->set_rules('product_price', 'product_price', 'trim|required');
        $this->form_validation->set_rules('vat', 'vat', 'trim|required');
        $this->form_validation->set_rules('room_number', 'room_number', 'required');
        if ($this->form_validation->run() === FALSE) {
            echo "Failed";
            $this->session->set_flashdata('error', 'Invalid Field ');
            redirect('Admin/edit_product', 'refresh');
        } else {
			$data = array(
                'product_name' => $this->input->post('product_name'),
                'product_category' => $this->input->post('product_category'),
                'product_price' => $this->input->post('product_price'),
                'vat' => $this->input->post('vat'),
                'room_number' => $this->input->post('room_number'),
            );
            echo "Success";
            $this->Admin_model->update_product($product_id, $data);
            $this->session->set_flashdata('success', 'profile was Updated Successfully.');
            redirect('Admin/product_list', 'refresh');
        }
	}

}
