<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * 
 */
class Home extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->template->isLogin();
	}

	function index() {
		//tahun saat ini
			$tahun = date_format(date_create("Y"),"Y");

			//hitung view perbulan
			$data['Januari'] = $this->db->query("SELECT sum(hits) as view FROM t_statistik WHERE  MONTH(tanggal) = 1 AND YEAR(tanggal) = '$tahun'")->result_array();

			$data['Februari'] = $this->db->query("SELECT sum(hits) as view FROM t_statistik WHERE  MONTH(tanggal) = 2 AND YEAR(tanggal) = '$tahun'")->result_array();
			
			$data['Maret'] = $this->db->query("SELECT sum(hits) as view FROM t_statistik WHERE  MONTH(tanggal) = 3 AND YEAR(tanggal) = '$tahun'")->result_array();

			$data['April'] = $this->db->query("SELECT sum(hits) as view FROM t_statistik WHERE  MONTH(tanggal) = 4 AND YEAR(tanggal) = '$tahun'")->result_array();

			$data['Mei'] = $this->db->query("SELECT sum(hits) as view FROM t_statistik WHERE  MONTH(tanggal) = 5 AND YEAR(tanggal) = '$tahun'")->result_array();

			$data['Juni'] = $this->db->query("SELECT sum(hits) as view FROM t_statistik WHERE  MONTH(tanggal) = 6 AND YEAR(tanggal) = '$tahun'")->result_array();

			$data['Juli'] = $this->db->query("SELECT sum(hits) as view FROM t_statistik WHERE  MONTH(tanggal) = 7 AND YEAR(tanggal) = '$tahun'")->result_array();

			$data['Agustus'] = $this->db->query("SELECT sum(hits) as view FROM t_statistik WHERE  MONTH(tanggal) = 8 AND YEAR(tanggal) = '$tahun'")->result_array();

			$data['September'] = $this->db->query("SELECT sum(hits) as view FROM t_statistik WHERE  MONTH(tanggal) = 9 AND YEAR(tanggal) = '$tahun'")->result_array();

			$data['Oktober'] = $this->db->query("SELECT sum(hits) as view FROM t_statistik WHERE  MONTH(tanggal) = 10 AND YEAR(tanggal) = '$tahun'")->result_array();

			$data['November'] = $this->db->query("SELECT sum(hits) as view FROM t_statistik WHERE  MONTH(tanggal) = 11 AND YEAR(tanggal) = '$tahun'")->result_array();

			$data['Desember'] = $this->db->query("SELECT sum(hits) as view FROM t_statistik WHERE  MONTH(tanggal) = 12 AND YEAR(tanggal) = '$tahun'")->result_array();

		$this->template->view("home",$data);
	}
}