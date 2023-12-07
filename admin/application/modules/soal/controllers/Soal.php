<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Soal extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_soal', 'm');
		$this->template->isLogin();
		$this->template->getAccess($this->router->fetch_class());
		//Do your magic here
	}

	function index() {
		$this->soal();
	}

	function soal() {
		$data['soal'] = $this->m->get_soal();
		$this->template->view('soal', $data);
	}

	function uraian() {
		$data['soal'] = $this->m->get_soal_uraian();
		$this->template->view('uraian', $data);
	}

	function uraian_koreksi() {
		$soal_id = $this->input->post("soal_id");
		$nilai = $this->input->post("nilai");
		$data = array(
			"nilai_siswa" => $nilai
		);
		$this->db->where("soal_uraian_detail_id", $soal_id)->set($data)->update("t_soal_uraian_detail");
		redirect('soal/list_work_uraian','refresh');
	}

	function list_work() {
		$data['soal'] = $this->m->get_last_work();
		$this->template->view("last_work", $data);
	}

	function list_work_uraian() {
		$data['soal'] = $this->m->get_koreksi_uraian();
		$this->template->view("last_work_uraian", $data);
	}

	function add() {
		$this->template->view('add');
	}

	function uraian_add() {
		$this->template->view('uraian_add');
	}

	function koreksi() {
		$data['uraian'] = $this->m->get_koreksi_uraian();
		$this->template->view('koreksi', $data);
	}

	function koreksi_soal($soal_id) {
		$data['uraian'] = $this->m->get_koreksi_uraian_by_id($soal_id);
		$this->template->view('koreksi_uraian', $data);
	}

	function edit($soal_id = '') {
		if (empty($soal_id)) redirect('soal/soal','refresh');
		if (!empty($_POST)) {
			$soal = $this->input->post('soal');
			$name = $this->input->post('soal_nama');
			$data = array(
				'soal_id' => $soal_id,
				'soal_nama' => $name,
				'soal_data' => serialize($soal),
				'soal_diperbarui' => date('Y-m-d'),
			);
			$this->m->update_soal($data);
			$this->session->set_flashdata('success', 'y');
			redirect('soal/soal','refresh');
		} else {
			$data['soal'] = $this->m->get_soal($soal_id);
			$this->template->view('edit', $data);
		}
	}

	function uraian_edit($soal_uraian_id = '') {
		if (empty($soal_uraian_id)) redirect('soal/uraian','refresh');
		if (!empty($_POST)) {
			$soal_uraian = $this->input->post('soal_uraian');
			$name = $this->input->post('soal_uraian_nama');
			$data = array(
				'soal_uraian_id' => $soal_uraian_id,
				'soal_uraian_nama' => $name,
				'soal_uraian_data' => serialize($soal_uraian)
			);
			$this->m->update_soal_uraian($data);
			$this->session->set_flashdata('success', 'y');
			redirect('soal/uraian','refresh');
		} else {
			$data['soal_uraian'] = $this->m->get_soal_uraian($soal_uraian_id);
			$this->template->view('uraian_edit', $data);
		}
	}

	function post() {
		$soal = $this->input->post('soal');
		$name = $this->input->post('soal_nama');
		$data = array(
			'soal_nama' => $name,
			'soal_data' => serialize($soal),
			'soal_diperbarui' => date('Y-m-d'),
		);
		$this->m->insert_soal($data);
		$this->session->set_flashdata('success', 'y');
		redirect('soal/soal','refresh');
	}

	function uraian_post() {
		$soal_uraian = $this->input->post('soal_uraian');
		$name = $this->input->post('soal_uraian_nama');
		$data = array(
			'soal_uraian_nama' => $name,
			'soal_uraian_data' => serialize($soal_uraian),
			'soal_uraian_diperbarui' => date('Y-m-d'),
		);
		$this->m->insert_soal_uraian($data);
		$this->session->set_flashdata('success', 'y');
		redirect('soal/uraian','refresh');
	}

	function del() {
		$soal_id = $this->input->post('soal_id');
		$this->m->del_soal($soal_id);
		$this->session->set_flashdata('success', 'y');
		echo "1";
	}

	function uraian_del() {
		$soal_id = $this->input->post('soal_uraian_id');
		$this->m->del_soal_uraian($soal_id);
		$this->session->set_flashdata('success', 'y');
		echo "1";
	}
}