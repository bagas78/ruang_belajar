<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * 
 */
class Materi extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_materi', "m");
	}

	public function index($offset = 0) {
		$limit = 5;
		$materi = $this->m->list_materi($limit, $offset);
		$this->load->library('pagination');
		$this->pagination->initialize($this->config_pagination($limit));
		$data['list_materi'] = $materi->result_array();
		$data['side_banner'] = 'home-materi.jpg';
		$this->template->soal('index', $data);
	}

	public function show_post($materi_id ='', $materi_judul = '') {
		if (empty($materi_id) && empty($materi_judul)) {
			redirect('materi','refresh');
		}
		$menu = $this->m->row_materi($materi_id);
		$data['content'] = $menu->row('materi_post');
		$data['banner'] = $menu->row('materi_foto');
		$data['side_banner'] = 'home-materi.jpg';
		$this->template->blog($data);
	}

	public function config_pagination($limit) {
		 // Membuat Style pagination untuk BootStrap v4
		$config['base_url'] 		= base_url('materi/index');
		$config['total_rows'] 		= $this->db->get('t_materi')->num_rows();
		$config['per_page'] 		= $limit;
      	$config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';
        return $config;
	}
}