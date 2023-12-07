<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * 
 */
class Soal extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_soal', 'm');
	}

	function index() {
		$this->list_soal();
	}

	function list_soal() {
		$data['soal'] = $this->m->get_soal();
		$data['banner'] = 'banner.jpg';
		$data['side_banner'] = 'home-latihan-soal.jpg';
		$this->template->soal('list', $data);
	}

	function list_nilai() {
		$data['soal'] = $this->db->get("v_soal")->result_array();
		$data['banner'] = 'banner.jpg';
		$data['side_banner'] = 'home-latihan-soal.jpg';
		$this->template->soal('list_nilai', $data);
	}

	function list_nilai_siswa($type='', $soal_id) {
		$data = array();
		if ($type == '1') {
			$data['soal'] = $this->db->where("soal_id", $soal_id)->select("siswa_id, soal_nama, siswa_nama, nilai_siswa")->get("v_last_work")->result_array();
		} elseif ($type == '2') {
			$data['soal'] = $this->db->where("soal_uraian_id", $soal_id)->select("siswa_id, soal_uraian_nama as soal_nama, siswa_nama, nilai_siswa")->get("v_last_work_uraian")->result_array();
		}
		$data['banner'] = 'banner.jpg';
		$data['side_banner'] = 'home-latihan-soal.jpg';
		$this->template->soal('list_nilai_siswa', $data);
	}

	function list_soal_uraian() {
		$data['soal'] = $this->m->get_soal_uraian();
		$data['banner'] = 'banner.jpg';
		$data['side_banner'] = 'home-latihan-soal.jpg';
		$this->template->soal('list_uraian', $data);
	}

	function work($id = '') {
		$data['soal'] = $this->m->get_soal_by_id($id);
		$data['side_banner'] = 'home-latihan-soal.jpg';
		$this->template->soal('soal', $data);
	}

	function work_uraian($id = '') {
		$data['soal'] = $this->m->get_soal_uraian_by_id($id);
		$data['side_banner'] = 'home-latihan-soal.jpg';
		$this->template->soal('soal_uraian', $data);
	}

	function last_work($soal_id='') {
		$siswa_id = $this->session->flashdata('siswa_id');
		if ($this->isValid($soal_id, $siswa_id) < 1) {
			redirect('soal/list_soal','refresh');
			die();
		}
		$data['soal'] = $this->m->get_last_work($soal_id, $siswa_id);
		$this->template->soal('last_work', $data);
	}

	function fetch_siswa($id = '') {
		$m = $this->m->num_siswa($id);
		echo $m;
	}

	function post() {
		$nilai = 0;
		$soal = unserialize($this->m->get_soal_by_id($_POST['soal_id'])->soal_data);
		foreach ($soal as $key => $var) {
			if ($var['kunci'] == $_POST['jawaban'][$key]) {
				$nilai += 10;
			}
		}
		$data = array(
			"soal_id" => $_POST['soal_id'],
			"siswa_id" => $_POST['siswa_id'],
			"nilai_siswa" => $nilai,
			"soal_detail_data" => serialize( $_POST['jawaban']),
		);
		$this->session->set_flashdata('siswa_id', $_POST['siswa_id']);
		$this->m->insert_nilai($data);
		redirect('soal/last_work/'.$_POST['soal_id'],'refresh');
	}

	function uraian_post() {
		$data = array(
			"soal_uraian_id" => $_POST['soal_id'],
			"siswa_id" => $_POST['siswa_id'],
			"soal_uraian_detail_data" => serialize( $_POST['jawaban']),
		);
		$this->m->insert_uraian($data);
		redirect('soal/list_nilai','refresh');
	}

	function validasi($soal_id = '', $siswa_id = '') {
		$siswa = empty($siswa_id) ? $this->input->post('siswa_id') : $siswa_id;
		$soal = empty($soal_id) ? $this->input->post('soal_id') : $soal_id;
		$m = $this->db->where(array("soal_id" => $soal, "siswa_id" => $siswa))->get("v_last_work")->num_rows();
		if ($m > 0) {
			$this->session->set_flashdata('siswa_id', $siswa);
		}
		echo $m;
	}

	function validasi_uraian($soal_id = '', $siswa_id = '') {
		$siswa = empty($siswa_id) ? $this->input->post('siswa_id') : $siswa_id;
		$soal = empty($soal_id) ? $this->input->post('soal_id') : $soal_id;
		$m = $this->db->where(array("soal_uraian_id" => $soal, "siswa_id" => $siswa))->get("v_last_work_uraian")->num_rows();
		echo "1";
	}

	function isValid($soal_id = '', $siswa_id = '') {
		$siswa = empty($siswa_id) ? $this->input->post('siswa_id') : $siswa_id;
		$soal = empty($soal_id) ? $this->input->post('soal_id') : $soal_id;
		$m = $this->db->where(array("soal_id" => $soal, "siswa_id" => $siswa))->get("v_last_work")->num_rows();
		return $m;
	}
}