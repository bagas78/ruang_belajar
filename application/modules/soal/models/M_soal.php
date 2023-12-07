<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * 
 */
class M_soal extends CI_Model
{
	function get_soal() {
		$db = $this->db->get('t_soal')->result_array();
		return $db;
	}

	function get_soal_by_id($id) {
		$db = $this->db->where('soal_id', $id);
		$db = $this->db->get('t_soal')->row();
		return $db;
	}

	function num_siswa($id) {
		$db = $this->db->where('siswa_id', $id);
		$db = $this->db->get('t_siswa')->num_rows();
		return $db;
	}

	function insert_nilai($data) {
		$db = $this->db->insert("t_soal_detail", $data);
		return $db;
	}

	function insert_uraian($data) {
		$db = $this->db->insert("t_soal_uraian_detail", $data);
		return $db;
	}

	function get_last_work($soal_id, $siswa_id) {
		$db = $this->db->where('soal_id', $soal_id);
		$db = $this->db->where('siswa_id', $siswa_id);
		$db = $this->db->get('v_last_work')->row_array();
		return $db;
	}

	//--------------------------------------------------------//

	function get_soal_uraian() {
		$db = $this->db->get('t_soal_uraian')->result_array();
		return $db;
	}

	function get_soal_uraian_by_id($id) {
		$db = $this->db->where('soal_uraian_id', $id);
		$db = $this->db->get('t_soal_uraian')->row();
		return $db;
	}
}