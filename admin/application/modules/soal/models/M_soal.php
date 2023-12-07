<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * 
 */
class M_soal extends CI_Model
{
	function insert_soal($data) {
		$db = $this->db->insert('t_soal', $data);
		return $db;
	}

	function insert_soal_uraian($data) {
		$db = $this->db->insert('t_soal_uraian', $data);
		return $db;
	}

	function update_soal($data) {
		$db = $this->db->where('soal_id', $data['soal_id']);
		unset($data['soal_id']);
		$db = $this->db->update('t_soal', $data);
		return $db;
	}

	function update_soal_uraian($data) {
		$db = $this->db->where('soal_uraian_id', $data['soal_uraian_id']);
		unset($data['soal_uraian_id']);
		$db = $this->db->update('t_soal_uraian', $data);
		return $db;
	}

	function get_soal($soal_id = '') {
		$db = $this->db;
		if (!empty($soal_id)) {
			$db = $this->db->where('soal_id', $soal_id);
			$db = $this->db->get('t_soal')->row_array();
		} else {
			$db = $this->db->get('t_soal')->result_array();
		}
		return $db;
	}

	function get_soal_uraian($soal_uraian_id = '') {
		$db = $this->db;
		if (!empty($soal_uraian_id)) {
			$db = $this->db->where('soal_uraian_id', $soal_uraian_id);
			$db = $this->db->get('t_soal_uraian')->row_array();
		} else {
			$db = $this->db->get('t_soal_uraian')->result_array();
		}
		return $db;
	}

	function get_last_work() {
		$db = $this->db->order_by("soal_id", "asc")->get("v_last_work")->result_array();
		return $db;
	}

	function del_soal($soal_id) {
		$db = $this->db->where('soal_id', $soal_id);
		$db = $this->db->delete('t_soal');
		return $db;
	}

	function del_soal_uraian($soal_uraian_id) {
		$db = $this->db->where('soal_uraian_id', $soal_uraian_id);
		$db = $this->db->delete('t_soal_uraian');
		return $db;
	}

	//
	function get_koreksi_uraian_by_id($soal_uraian_detail_id) {
		$db = $this->db->where("soal_uraian_detail_id", $soal_uraian_detail_id);
		$db = $this->db->get("v_last_work_uraian")->row_array();
		return $db;
	}

	function get_koreksi_uraian() {
		$db = $this->db->order_by("soal_uraian_id")->get("v_last_work_uraian")->result_array();
		return $db;
	}
}