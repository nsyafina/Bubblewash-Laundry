<?php
class laporan extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('m_laporan');
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

  public function cetak_laporan()
  {
    $this->m_squrity->getSecurity();
    $this->load->library('pdf');
    $tgl_mulai = $this->input->post('tgl_mulai');
    $tgl_akhir = $this->input->post('tgl_akhir');
    $data['laporan'] = $this->m_laporan->filter_laporan($tgl_mulai, $tgl_akhir);
    $this->session->set_userdata('tgl_mulai', $tgl_mulai);
    $this->session->set_userdata('tgl_akhir', $tgl_akhir);
    $this->load->view('backend/laporan/cetak_laporan', $data);

    $paper_size = 'A4';
    $orientation = 'landscape';
    $html = $this->output->get_output();
    $this->pdf->set_paper($paper_size, $orientation);
    $this->pdf->load_html($html);
    $this->pdf->render();
    $this->pdf->stream("Laporan Transaksi Kiloan", array('Attachment' => 0));
  }
}
