<?php
defined('BASEPATH') or exit('No direct script access allowed');

class m_squrity extends CI_Model
{

  public function getSecurity()
  {
    if (empty($this->session->userdata('username'))) {
      $this->session->sess_destroy();
      redirect('login', 'refresh');
    }
  }
}