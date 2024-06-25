<?php
defined('BASEPATH') OR exit('No derict script access allowed');

class dashboard extends CI_Controller 
{
	public function __construct()
	{
     parent::__construct();
     $this->load->model('m_dashboard');
 }

 public function index()
 {
  $this->m_squrity->getSecurity();
  $isi['user'] = $this->m_dashboard->ambil_data($this->session->userdata('username'));
  $this->m_squrity->getSecurity();
  $isi['content'] = 'backend/home';
  $isi['judul'] = '<i class="fas fa-fw fa-tachometer-alt"></i> Dashboard';
  $isi['total_konsumen'] = $this->m_dashboard->total_konsumen();
  $isi['transaksi_baru'] = $this->m_dashboard->transaksi_baru();
  $isi['transaksi_baru_satuan'] = $this->m_dashboard->transaksi_baru_satuan();
  $isi['transaksi_proses'] = $this->m_dashboard->transaksi_proses();
  $isi['transaksi_proses_satuan'] = $this->m_dashboard->transaksi_proses_satuan();
  $isi['transaksi_siap_diambil'] = $this->m_dashboard->transaksi_siap_diambil();
  $isi['transaksi_siap_diambil_satuan'] = $this->m_dashboard->transaksi_siap_diambil_satuan();
  $isi['transaksi_selesai'] = $this->m_dashboard->transaksi_selesai();
  $isi['transaksi_selesai_satuan'] = $this->m_dashboard->transaksi_selesai_satuan();
  $isi['total_transaksi'] = $this->m_dashboard->total_transaksi();
  $isi['total_transaksi_satuan'] = $this->m_dashboard->total_transaksi_satuan();
  $isi['data_paket'] = $this->m_dashboard->data_paket();
  $isi['data_jenis_barang'] = $this->m_dashboard->data_jenis_barang();
  $this->load->view('backend/dashboard', $isi);	
}
}