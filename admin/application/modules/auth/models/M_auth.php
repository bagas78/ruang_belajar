<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * 
 */
class M_auth extends CI_Model
{
	function get_auth($email, $pass) {
		$db = $this->db->where("user_email", $email);
		$db = $this->db->where("user_password", md5($pass));
		$db = $this->db->get("v_user_level");
		if ($db->num_rows() > 0) {
			$data = $db->row_array();
			$data['login'] = true;
			unset($data['user_password']);
			$this->session->set_userdata( $data );
			return true;
		} else {
			$this->session->set_flashdata('fail', 'y');
			return false;
		}
	}
}