<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * 
 */
class M_materi extends CI_Model
{
	function insert_materi($data) {
		$db = $this->db->insert('t_materi', $data);
		return $db;
	}

	function update_materi($data) {
		$db = $this->db->where('materi_id', $data['materi_id']);
		unset($data['materi_id']);
		$db = $this->db->update('t_materi', $data);
		return $db;
	}

	function get_materi($materi_id = '') {
		$db = $this->db;
		if (!empty($materi_id)) {
			$db = $this->db->where('materi_id', $materi_id);
			$db = $this->db->get('t_materi')->row_array();
		} else {
			$db = $this->db->get('t_materi')->result_array();
		}
		return $db;
	}

	function del_materi($materi_id) {
		$db = $this->db->where('materi_id', $materi_id);
		$db = $this->db->delete('t_materi');
		return $db;
	}
}