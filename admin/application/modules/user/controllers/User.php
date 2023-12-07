<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * 
 */
class User extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('administrator/m_administrator', 'm');
	}

	function index() {
		$data['user'] = $this->m->get_administrator($this->session->userdata('user_id'))->row_array();
		$data['level'] = $this->m->get_level()->result_array();
		$this->template->view('index', $data);
	}

	public function edit_post() {
		$user_id = $this->session->userdata('user_id');;
		$filename = $user_id.'.jpg';
		unset($_POST['user_id']); unset($_POST['user_foto']);

		if(!empty($_FILES['user_foto']['name'])) {
			$this->template->imgUpload('user_foto', $filename);
			$_POST['user_foto'] = $filename;
		}

		if(empty($_POST['user_password'])) {
			unset($_POST['user_password']);
		} else {
			$_POST['user_password'] = md5($_POST['user_password']);
		}

		$m = $this->m->set_administrator($user_id, $_POST);
		if ($m) {
			$this->session->set_flashdata('success', 'y');
			$user = $this->m->get_administrator($this->session->userdata('user_id'))->row_array();
			$user['login'] = true;
			unset($user['user_password']);
			$this->session->set_userdata($user);
		} else {
			$this->session->set_flashdata('success', 'n');
		}
		
		redirect('home','refresh');
	}
}