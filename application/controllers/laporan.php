<?php
class laporan extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();

    $this->load->model('m_dashboard');
    $this->load->helper('tgl_indo_helper');
  }

  public function index()
  {
    $this->m_squrity->getSecurity();
    $isi['user'] = $this->m_dashboard->ambil_data($this->session->userdata('username'));
    $isi['content'] = 'backend/laporan/f_laporan';
    $isi['judul'] = '<i class="fas fa-fw fa-file-alt"></i> Laporan Transaksi Kiloan';
    $this->load->view('backend/dashboard', $isi);
  }
}
