<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Users extends CI_Controller{

	public function __construct()
	{
		parent::__construct();
				
		$this->load->library('form_validation');
		//$this->load->helper('MY');
		$this->load->model('user_model');
	}

	// Register user
	public function register(){
		$data['page_title'] = 'Pendaftaran User';

		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('username', 'Username', 'required|is_unique[users.username]');
		$this->form_validation->set_rules('email', 'Email', 'required|is_unique[users.email]');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('password2', 'Konfirmasi Password', 'matches[password]');

		if($this->form_validation->run() === FALSE){
			$this->load->view('header');
			$this->load->view('users/register', $data);
			$this->load->view('footer');
		} else {
			// Encrypt password
			$enc_password = md5($this->input->post('password'));

			$this->user_model->register($enc_password);

			// Set message
			$this->session->set_flashdata('user_registered', 'Anda telah teregistrasi.');

			redirect('blog');
		}
	}

	// Log in user
	public function login(){
		$data['page_title'] = 'Log In';

		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if($this->form_validation->run() === FALSE){
			$this->load->view('header');
			$this->load->view('users/login');
			$this->load->view('footer');
		} else {
			
	// Get username
			$username = $this->input->post('username');
			// Get & encrypt password
			$password = md5($this->input->post('password'));

			// Login user
			$user_id = $this->user_model->login($username, $password);

			if($user_id){
				// Buat session
				$user_data = array(
					'user_id' => $user_id,
					'username' => $username,
					'logged_in' => true,
					'fk_level_id' => $this->user_model->get_user_level($user_id),
				);

				$this->session->set_userdata($user_data);

				// Set message
				$this->session->set_flashdata('user_loggedin', 'Anda sudah login');

				redirect('users/dashboard');
			} else {
				// Set message
				$this->session->set_flashdata('login_failed', 'Login invalid');

				redirect('users/login');
			}		
 		}
 	}

 	// Log user out
 	 function logout(){
 		// Unset user data
 		$this->session->unset_userdata('logged_in');
 		$this->session->unset_userdata('user_id');
 		$this->session->unset_userdata('username');
 
 		// Set message
 		$this->session->set_flashdata('user_loggedout', 'Anda sudah log out');
 
 		redirect('users/login');
 	}
 
 	//untuk memanggil sesion level 
	public function get_userdata(){
        $userData = $this->session->userdata();
        return $userData;
      }


	// Fungsi Dashboard
	public function dashboard(){

        if(!$this->session->userdata('logged_in')){
            redirect('users/login');
        }

        $username = $this->session->userdata('username');

        // Dapatkan detail user
        $data['user'] = $this->user_model->get_user_details( $username );

 		$userData = $this->get_userdata();
        if ($userData['fk_level_id'] === '1'){
            $this->load->view('header');
            $this->load->view('v_admin', $data);
            $this->load->view('footer');
        } else if ($userData['fk_level_id'] === '2'){
            $this->load->view('header');
            $this->load->view('users/v_user1', $data);
            $this->load->view('footer');
        } else if ($userData['fk_level_id'] === '3') {
            $this->load->view('header');
            $this->load->view('v_user2', $data);
            $this->load->view('footer');
        }
    }

	public function index()
	{
		$this->load->model('user_model');
		$data['users'] = $this->user_model->get_user();
		$this->load->view('header');
		$this->load->view('user_view', $data);
		$this->load->view('footer');
	}

	public function create()    
 	{
 		$this->load->model('user_model');
 		$data = array();
 		$this->load->library('form_validation');
    	// Form validasi untuk Nama Kategori        
 		$this->form_validation->set_rules('nama','Nama User','required|is_unique[users.nama]',      
 		array('required' => 'Isi %s donk, jangan kosong.'));
 		$this->form_validation->set_rules('kodepos','Kodepos','required|is_unique[users.kodepos]', 
 		array('required' => 'Isi %s donk, jangan kosong.'));
 		$this->form_validation->set_rules('email','Email','required|is_unique[users.email]',      
 		array('required' => 'Isi %s donk, jangan kosong.'));
 		$this->form_validation->set_rules('username','username','required|is_unique[users.username]',
 		array('required' => 'Isi %s donk, jangan kosong.'));
 		$this->form_validation->set_rules('password','Password','required|is_unique[users.password]',
 		array('required' => 'Isi %s donk, jangan kosong.'));
 		$this->form_validation->set_rules('register_date','Register Date','required|is_unique[users.register_date]',      
 		array('required' => 'Isi %s donk, jangan kosong.'));

	 	 if($this->form_validation->run() === FALSE){  
	 	 		$this->load->view('header');          
		 	 	$this->load->view('user_create', $data);
		 	 	$this->load->view('footer');
		 } else {            
		 	 	$this->user_model->create_user();            
		 	 	redirect('users');        
		}    
	}

	public function Delete($id){
		$this->load->model('user_model');
		$this->user_model->hapus($id);
		redirect('users');
	}

	public function Edit($id){
		$this->load->model('user_model');
		// $data['tipe'] = "Edit";
		$data['single'] = $this->user_model->get_single($id);

		if($this->input->post('simpan')){
			$this->user_model->update($id);
			redirect('users');
		}
		$this->load->view('header');
		$this->load->view('update_user', $data);
		$this->load->view('footer');
	}

 }