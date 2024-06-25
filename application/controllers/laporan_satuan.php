<?php
class laporan_satuan extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('m_laporan_satuan');
    $this->load->model('m_dashboard');
    $this->load->helper('tgl_indo_helper');
  }

  public function index()
  {
    $this->m_squrity->getSecurity();
    $isi['user'] = $this->m_dashboard->ambil_data($this->session->userdata('username'));
    $isi['content'] = 'backend/laporan_satuan/f_laporan_satuan';
    $isi['judul'] = '<i class="fas fa-fw fa-file-alt"></i> Laporan Transaksi Satuan';
    $this->load->view('backend/dashboard', $isi);
  }

  public function cetak_laporan_satuan()
  {
    $this->m_squrity->getSecurity();
    $this->load->library('pdf');
    $tgl_mulai = $this->input->post('tgl_mulai');
    $tgl_akhir = $this->input->post('tgl_akhir');
    $data['laporan'] = $this->m_laporan_satuan->filter_laporan_satuan($tgl_mulai, $tgl_akhir);
    $this->session->set_userdata('tgl_mulai', $tgl_mulai);
    $this->session->set_userdata('tgl_akhir', $tgl_akhir);
    $this->load->view('backend/laporan_satuan/cetak_laporan_satuan', $data);

    $paper_size = 'A4';
    $orientation = 'landscape';
    $html = $this->output->get_output();
    $this->pdf->set_paper($paper_size, $orientation);
    $this->pdf->load_html($html);
    $this->pdf->render();
    $this->pdf->stream("Laporan Transaksi Satuan", array('Attachment' => 0));
  }
}