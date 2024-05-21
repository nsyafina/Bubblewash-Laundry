<?php

class service extends CI_Controller{

	public function index()
	{
		$this->load->view('frontend/header');
		$this->load->view('frontend/service');
		$this->load->view('frontend/footer');
	}
}