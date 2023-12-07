<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * 
 */
class M_menu extends CI_Model
{
	function update_menu($id, $data) {
		$db = $this->db->where('menu_id', $id);
		$db = $this->db->update('t_menu', $data);
		return $db;
	}

	function get_detail($id) {
		$db = $this->db->where('menu_id', $id);
		$db = $this->db->get('t_menu')->row();
		return $db;
	}
}