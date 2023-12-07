<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * 
 */
class M_siswa extends CI_Model
{
	function get_siswa() {
		$db = $this->db->get('t_siswa')->result_array();
		return $db;
	}

	function insert_data($data) {
		$db = $this->db->insert_string('t_siswa', $data). ' ON DUPLICATE KEY UPDATE siswa_nama=\''.$data['siswa_nama'].'\'';
		// $db = str_replace('INSERT INTO','INSERT IGNORE INTO',$db);
		$db = $this->db->query($db);
		return $db;
	}

	function delete_data($siswa_id) {
		$db = $this->db->where('siswa_id', $siswa_id);
		$db = $this->db->delete('t_siswa');
		return $db;
	}
}