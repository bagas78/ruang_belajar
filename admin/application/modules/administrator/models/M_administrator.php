<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * 
 */
class M_administrator extends CI_Model
{
	public function get_administrator($user_id='') {
		$db = $this->db;
		if (!empty($user_id)) $db = $this->db->where("user_id", $user_id);
		$db = $this->db->get("v_user_level");
		return $db;
	}

	public function set_administrator($user_id='', $data=array()) {
		$db = $this->db->where("user_id", $user_id);
		$db = $this->db->set($data);
		$db = $this->db->update("t_admin_user");
		return $db;
	}

	public function ins_administrator($data=array()) {
		$db = $this->db->set($data);
		$db = $this->db->insert("t_admin_user");
		return $db;
	}

	public function del_administrator($user_id='') {
		$db = $this->db->where("user_id", $user_id);
		$db = $this->db->delete("t_admin_user");
		return $db;
	}

	//level
	public function get_level($level_id='') {
		$db = $this->db;
		if (!empty($level_id)) $db = $this->db->where("level_id", $level_id);
		$db = $this->db->get("t_admin_level");
		return $db;
	}

	public function set_level($level_id='', $data=array()) {
		$db = $this->db->where("level_id", $level_id);
		$db = $this->db->set($data);
		$db = $this->db->update("t_admin_level");
		return $db;
	}

	public function ins_level($data=array()) {
		$db = $this->db->set($data);
		$db = $this->db->insert("t_admin_level");
		return $db;
	}

	public function del_level($level_id='') {
		$db = $this->db->where("level_id", $level_id);
		$db = $this->db->delete("t_admin_level");
		return $db;
	}
}