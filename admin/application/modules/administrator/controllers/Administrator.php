<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * 
 */
class Administrator extends CI_Controller
{
	public function __construct()
	{ 
		parent::__construct();
		$this->template->isLogin();
		$this->template->getAccess($this->router->fetch_class());
		$this->load->model('m_administrator', 'm');
	}

	//admin

	public function index() {
		$data['admin'] = $this->m->get_administrator()->result_array();
		$this->template->view('index', $data);
	}

	public function add() {
		$data['level'] = $this->m->get_level()->result_array();
		$this->template->view('add', $data);
	}

	public function edit($user_id='') {
		$data['level'] = $this->m->get_level()->result_array();
		$data['admin'] = $this->m->get_administrator($user_id)->row_array();
		$this->template->view('edit', $data);
	}

	public function edit_post() {
		$user_id = $this->input->post("user_id");
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
		} else {
			$this->session->set_flashdata('success', 'n');
		}

		redirect('administrator/index','refresh');
	}

	public function insert_post() {
		$user_id = intval($this->db->get("t_admin_user")->num_rows()) + 1;
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

		$m = $this->m->ins_administrator($_POST);
		if ($m) {
			$this->session->set_flashdata('success', 'y');
		} else {
			$this->session->set_flashdata('success', 'n');
		}

		redirect('administrator/index','refresh');
	}

	public function delete_post() {
		$user_id = $this->input->post("user_id");
		$m = $this->m->del_administrator($user_id);
		if ($m) {
			$this->session->set_flashdata('success', 'y');
		} else {
			$this->session->set_flashdata('success', 'n');
		}

		echo "1";
	}

	//level
	public function level() {
		$data['level'] = $this->m->get_level()->result_array();
		$this->template->view('level_index', $data);
	}

	public function level_add() {
		$this->template->view('level_add');
	}

	public function level_edit($level_id='') {
		$data['level'] = $this->m->get_level($level_id)->row_array();
		$this->template->view('level_edit', $data);
	}

	public function level_edit_post() {
		$level_id = $_POST['level_id'];
		$_POST['level_akses'] = serialize($_POST['menu']);
		unset($_POST['menu']); unset($_POST['level_id']);
		$m = $this->m->set_level($level_id, $_POST);
		if ($m) {
			$this->session->set_flashdata('success', 'y');
		} else {
			$this->session->set_flashdata('success', 'n');
		}

		redirect('administrator/level','refresh');
	}

	public function level_insert_post() {
		$_POST['level_akses'] = serialize($_POST['menu']);
		unset($_POST['menu']);
		$m = $this->m->ins_level($_POST);
		if ($m) {
			$this->session->set_flashdata('success', 'y');
		} else {
			$this->session->set_flashdata('success', 'n');
		}

		redirect('administrator/level','refresh');
	}

	public function level_delete_post() {
		$level_id = $this->input->post("level_id");
		$m = $this->m->del_level($level_id);
		if ($m) {
			$this->session->set_flashdata('success', 'y');
		} else {
			$this->session->set_flashdata('success', 'n');
		}
		
		echo "1";
	}
}