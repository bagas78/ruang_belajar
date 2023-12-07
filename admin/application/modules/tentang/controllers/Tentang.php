<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tentang extends CI_Controller
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
		if (!empty($_POST)) {
			$data['menu_detail'] = $this->input->post('post');
			if(!empty($_FILES['gambar']['name'])) $data['menu_foto'] = 'tentang.jpg';
			if(!empty($_FILES['gambar']['name'])) $this->template->imgUpload('gambar', 'tentang.jpg');
			$this->m->update_menu('5', $data);
			$this->session->set_flashdata('success', 'y');
			
			redirect('tentang','refresh');
		} else {
			$data['data'] = $this->m->get_detail('5');
			$this->template->view('tentang', $data);
		}
	}
}