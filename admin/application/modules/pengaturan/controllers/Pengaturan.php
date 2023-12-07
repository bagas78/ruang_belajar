<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * 
 */
class Pengaturan extends CI_Controller
{
	function index() {
		$this->template->view("index");
	}

	function post() {
		if(!empty($_FILES['banner']['name'])) $this->template->imgUpload('banner', 'home-banner.jpg');
		if(!empty($_FILES['kompetensi-inti']['name'])) $this->template->imgUpload('kompetensi-inti', 'home-kompetensi-inti.jpg');
		if(!empty($_FILES['kompetensi-dasar']['name'])) $this->template->imgUpload('kompetensi-dasar', 'home-kompetensi-dasar.jpg');
		if(!empty($_FILES['tujuan-pembelajaran']['name'])) $this->template->imgUpload('tujuan-pembelajaran', 'home-tujuan-pembelajaran.jpg');
		if(!empty($_FILES['indikator']['name'])) $this->template->imgUpload('indikator', 'home-tujuan-indikator.jpg');
		if(!empty($_FILES['materi']['name'])) $this->template->imgUpload('materi', 'home-materi.jpg');
		if(!empty($_FILES['latihan-soal']['name'])) $this->template->imgUpload('latihan-soal', 'home-latihan-soal.jpg');
		if(!empty($_FILES['about-author']['name'])) $this->template->imgUpload('about-author', 'home-author.jpg');
		$this->db->update("t_text", array("text_banner" => $_POST['text-banner'], "text_author" => $_POST['text-footer']));
		
		redirect('pengaturan','refresh');
	}
}