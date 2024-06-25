<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class panel extends CI_Controller{

	public function index()
	{
		$this->load->view('backend/login');
	}

	public function logout()
  {
    $this->session->set_flashdata('info', '<div class="alert alert-warning alert-message" role="alert"><i class="icon fas fa-exclamation-triangle"></i> Anda Telah Keluar!!</div>');
    $this->load->view('backend/login');
  }
}