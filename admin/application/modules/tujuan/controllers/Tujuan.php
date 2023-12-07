<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tujuan extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_menu', 'm');
		$this->template->isLogin();
		$this->template->getAccess($this->router->fetch_class());
		//Do your magic here
	}

	function index() {
		$this->tujuan_pembelajaran();
	}

	function tujuan_pembelajaran() {
		if (!empty($_POST)) {
			$data['menu_detail'] = $this->input->post('post');
			if(!empty($_FILES['gambar']['name'])) $data['menu_foto'] = 'tujuan_pembelajaran.jpg';
			if(!empty($_FILES['gambar']['name'])) $this->template->imgUpload('gambar', 'tujuan_pembelajaran.jpg');
			$this->m->update_menu('3', $data);
			$this->session->set_flashdata('success', 'y');

			redirect('tujuan/tujuan_pembelajaran','refresh');
		} else {
			$data['data'] = $this->m->get_detail('3');
			$this->template->view('tujuan_pembelajaran', $data);
		}
	}

	function indikator() {
		if (!empty($_POST)) {
			$data['menu_detail'] = $this->input->post('post');
			if(!empty($_FILES['gambar']['name'])) $data['menu_foto'] = 'indikator.jpg';
			if(!empty($_FILES['gambar']['name'])) $this->template->imgUpload('gambar', 'indikator.jpg');
			$this->m->update_menu('4', $data);
			$this->session->set_flashdata('success', 'y');
			
			redirect('tujuan/indikator','refresh');
		} else {
			$data['data'] = $this->m->get_detail('4');
			$this->template->view('indikator', $data);
		}
	}
}