<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * 
 */
class Kompetensi extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_menu', 'm');
	}

	function inti() {
		$menu = $this->m->get_menu('1');
		$data['content'] = $menu->row('menu_detail');
		$data['banner'] = $menu->row('menu_foto');
		$data['side_banner'] = 'home-kompetensi-inti.jpg';
		$this->template->blog($data);
	} 

	function dasar() {
		$menu = $this->m->get_menu('2');
		$data['content'] = $menu->row('menu_detail');
		$data['banner'] = $menu->row('menu_foto');
		$data['side_banner'] = 'home-kompetensi-dasar.jpg';
		$this->template->blog($data);
	} 
}