<?php
class histori extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_histori');
    }

    public function index()
    {
        $kode_transaksi = $this->input->post('kode_transaksi');
        $kode_transaksi = $this->input->post('kode_transaksi'); // Ambil kode satuan dari input
        $isi['data'] = $this->m_histori->cek_status($kode_transaksi);
        $this->load->view('frontend/header', $isi);
        $this->load->view('frontend/histori', $isi);
        $this->load->view('frontend/footer');
    }
}
