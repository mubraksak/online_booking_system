<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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
	public function index($user_id = "user_id"){
		$data['user'] = $this->User_model->get_single_user($user_id);
		$data = $this->User_model->get_single_user($user_id);
		// this loads the index view
		$this->load->view('index', $data);
	}
	
	// this loads login page
	public function login_page(){
		
		$this->load->view('login');
	}

	public function sign_up(){
		$this->load->view('sign_up');
	}

	// thsi validate user registrtion
	public function User_registration() {
        //rules for validation
        $this->form_validation->set_rules('fullname', 'fullname', 'trim|required');
		$this->form_validation->set_rules('email', 'email', 'trim|required');
		$this->form_validation->set_rules('phone', 'phone', 'trim|required');
		$this->form_validation->set_rules('contact_address', 'contact_address', 'trim|required');
		$this->form_validation->set_rules('age', 'age', 'trim|required');
		$this->form_validation->set_rules('gender', 'gender', 'trim|required');
		$this->form_validation->set_rules('password', 'password', 'trim|required');
		//check if validation run 
        if ($this->form_validation->run() == FALSE) {
			redirect('homepage/error');
        } else {
		
            $this->Registration_model-> user_registration();
            $this->session->set_flashdata('success', 'Registration Successfull. Check Your Mail to confirm your email address');
            redirect('Home/login_page');
        }
	}

	//this validate login process
	public function login(){
			$this->form_validation->set_rules('email', 'email', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');
	
			if ($this->form_validation->run() == FALSE) {
				redirect("Home/login_page");
			} else {
				//get post Data 
				$email = $this->input->post('email');
				$password = $this->input->post('password');

				//this fetch login detail from database..
				$admin = $this->Login_model->can_login_admin($email);
				$user = $this->Login_model->can_login_user($email);
				
				
	
				//this statement validate the admin login process...
				if ($admin && $admin->password == $password) {
					$admin_data = array(
						'admin' => $admin
					);
					//set Session Data
					$this->session->set_userdata($admin_data);
					//set Message 
					$this->session->set_flashdata('success', 'Welcome ' . $admin->firstname . ' ' . $admin->lastname);
					//redirect
					redirect('Admin/index');
				}
				//this statement validate the seller login process...
				else if ($user && $user->password == $password) {		
					$user_data = array(
								'user' => $user
							);
							$this->session->set_userdata($user_data);
							$this->session->set_flashdata('success', 'Welcome ' . $user->firstname . ' ' . $user->lastname);
							redirect('booking/bookings/0/'.$user->user_id);
					}else{
						$this->session->set_flashdata('error', 'Invald username and password ');
						redirect("Home/login_page");
					}
				}
			}

			public function logout_user() {
				$this->session->unset_userdata("user");
				$this->session->set_flashdata('success', 'Logged out Successful');
				redirect('Home/index');
			}

			
			public function logout_admin() {
				$this->session->unset_userdata("admin");
				$this->session->set_flashdata('success', 'Logged out Successful');
				redirect('Home/index');
			}



}
