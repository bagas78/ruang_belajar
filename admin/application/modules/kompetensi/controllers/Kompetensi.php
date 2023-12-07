<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Kompetensi extends CI_Controller
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
		$this->komptensi_inti();
	}

	function komptensi_inti() { 
		if (!empty($_POST)) {
			$data['menu_detail'] = $this->input->post('post');
			if(!empty($_FILES['gambar']['name'])) $data['menu_foto'] = 'komptensi_inti.jpg';
			if(!empty($_FILES['gambar']['name'])) $this->template->imgUpload('gambar', 'komptensi_inti.jpg');
			$this->m->update_menu('1', $data);
			$this->session->set_flashdata('success', 'y');

			redirect('kompetensi/komptensi_inti','refresh');
		} else {
			$data['data'] = $this->m->get_detail('1');
			$this->template->view('komptensi_inti', $data);
		}
	}

	function komptensi_dasar() {
		if (!empty($_POST)) {
			$data['menu_detail'] = $this->input->post('post');
			if(!empty($_FILES['gambar']['name'])) $data['menu_foto'] = 'komptensi_dasar.jpg';
			if(!empty($_FILES['gambar']['name'])) $this->template->imgUpload('gambar', 'komptensi_dasar.jpg');
			$this->m->update_menu('2', $data);
			$this->session->set_flashdata('success', 'y');
			
			redirect('kompetensi/komptensi_dasar','refresh');
		} else {
			$data['data'] = $this->m->get_detail('2');
			$this->template->view('komptensi_dasar', $data);
		}
	}
}