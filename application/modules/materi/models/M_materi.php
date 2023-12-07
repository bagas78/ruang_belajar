<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * 
 */
class M_materi extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function row_materi($materi_id) {
		$db = $this->db->where("materi_id", $materi_id);
		$db = $this->db->get("t_materi");
		return $db;
	}

	public function list_materi($limit = '', $offset = '') {
		$db = $this->db->limit($limit, $offset);
		$db = $this->db->get("t_materi");
		return $db;
	}
}