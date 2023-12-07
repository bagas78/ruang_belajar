<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * 
 */
class Auth extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_auth', 'm');
	}

	function index() {
		$this->isLogin();
		redirect('auth/login','refresh');
	}

	function login() {
		$this->isLogin();
		$this->load->view('login');
	}

	function logout() {
		$this->session->sess_destroy();
		redirect('auth/login','refresh');
	}

	function login_post() {
		$email = $this->input->post("email");
		$pass = $this->input->post("password");
		$login = $this->m->get_auth($email, $pass);
		if ($login) {
			redirect('home','refresh');
		} else {
			redirect('auth/login','refresh');
		}
	}

	function isLogin() {
		$login = $this->session->userdata('login');
  		if ($login == true) {
  			redirect('home', 'refresh');
  			die();
  		}
	}
}