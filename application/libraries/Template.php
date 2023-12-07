<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
* 
*/
class Template{
  protected $_ci;

  function __construct(){
      $this->_ci = &get_instance();
  }
  
  function view($content, $data = NULL){
    $data['header'] = $this->_ci->load->view('template/header', $data, TRUE);
    $data['footer'] = $this->_ci->load->view('template/footer', $data, TRUE);
  	$data['content'] = $this->_ci->load->view($content, $data, TRUE);
  	$this->_ci->load->view('template/view', $data);
  }

  function blog($data = NULL) {
    $data['header'] = $this->_ci->load->view('template/header', $data, TRUE);
    $data['footer'] = $this->_ci->load->view('template/footer', $data, TRUE);
    $this->_ci->load->view('template/blog', $data);
    // $this->_ci->load->view('template/blog', $data);
  }

  function soal($content, $data = NULL) {
    $data['header'] = $this->_ci->load->view('template/header', $data, TRUE);
    $data['footer'] = $this->_ci->load->view('template/footer', $data, TRUE);
    $data['content'] = $this->_ci->load->view($content, $data, TRUE);
    $this->_ci->load->view('template/soal', $data);
  }

  function isLogin() {
  	$login = $this->_ci->session->userdata('login');
  	if ($login != "1") {
  		redirect(base_url('auth'), 'refresh');
  		die();
  	}
  }

  function imgUpload($name, $file_name) {
    $config['upload_path'] = './assets/uploads/';
    $config['allowed_types'] = 'gif|jpg|png';
    $config['file_name'] = $file_name;
    $config['overwrite'] = true;
    $config['max_size'] = '10240'; // 1MB
    
    $this->_ci->load->library('upload', $config);
    
    if ( ! $this->_ci->upload->do_upload($name)){
      $error = array('error' => $this->upload->_ci->display_errors());
      return false;
    }
    else{
      $data = array('upload_data' => $this->_ci->upload->data());
      return false;
    }
  }

}