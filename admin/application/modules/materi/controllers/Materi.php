<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * 
 */
class Materi extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_materi', 'm');
		$this->load->helper("file");
		$this->template->isLogin();
		$this->template->getAccess($this->router->fetch_class());
	}

	public function index() {
		$data['materi'] = $this->m->get_materi();
		$this->template->view('index', $data);
	}

	function add() {
		$this->template->view('add');
	}

	function edit($materi_id = '') {
		if (empty($materi_id)) redirect('materi','refresh');
		if (!empty($_POST)) {
			$post = $this->input->post('post');
			$name = $this->input->post('materi');
			$filename = $materi_id.'.jpg';
			if(!empty($_FILES['gambar']['name'])) $this->template->imgUpload('gambar', $filename);
			$data = array(
				'materi_id' => $materi_id,
				'materi_judul' => $name,
				'materi_post' => $post
			);
			if(!empty($_FILES['gambar']['name'])) $data['materi_foto'] = $filename;
			$this->m->update_materi($data);
			$this->session->set_flashdata('success', 'y');

			redirect('materi','refresh');
		} else {
			$data['materi'] = $this->m->get_materi($materi_id);
			$this->template->view('edit', $data);
		}
	}

	function post() {
		$materi_id = time();
		$post = $this->input->post('post');
		$name = $this->input->post('materi');
		$filename = $materi_id.'.jpg';
		if(!empty($_FILES['gambar']['name'])) $this->template->imgUpload('gambar', $filename);
		$data = array(
			'materi_id' => $materi_id,
			'materi_judul' => $name,
			'materi_post' => $post,
			'materi_foto' => $filename
		);
		$this->m->insert_materi($data);
		$this->session->set_flashdata('success', 'y');

		redirect('materi','refresh');
	}

	function del() {
		$materi_id = $this->input->post('materi_id');
		unlink(FCPATH."assets/uploads/".$materi_id.".jpg");
		$this->m->del_materi($materi_id);
		$this->session->set_flashdata('success', 'y');
		
		echo "1";
	}
}