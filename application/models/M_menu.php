<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * 
 */
class M_menu extends CI_Model
{
	function get_menu($id) {
		$db = $this->db->where('menu_id', $id);
		$db = $this->db->get('t_menu');
		return $db;
	}
}