<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Siswa extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_siswa', 'm');
		$this->template->isLogin();
		$this->template->getAccess($this->router->fetch_class());
		//Do your magic here
	}

	function index() {
		$this->management_siswa();
	}

	function management_siswa() {
		if (!empty($_POST)) {
			$insert = $this->m->insert_data($_POST);
			if ($insert) {
				$this->session->set_flashdata('success', 'y');
			} else {
				$this->session->set_flashdata('success', 'n');
			}

			redirect('siswa/management_siswa','refresh');
		} else {
			$data['siswa'] = $this->m->get_siswa();
			$this->template->view('siswa', $data);
		}
	}

	function hapus_siswa() {
		$siswa_id = $this->input->post('siswa_id');
		$delete = $this->m->delete_data($siswa_id);
		if ($delete) {
				$this->session->set_flashdata('success', 'y');
			} else {
				$this->session->set_flashdata('success', 'n');
		}
		
		echo "1";
	}

	function siswa_pekerjaan() {
		$this->template->view('siswa_pekerjaan');
	}
}