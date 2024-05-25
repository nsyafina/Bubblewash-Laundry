<?php
defined('BASEPATH') or exit('No derict script access allowed');

class transaksi extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_transaksi');
		$this->load->model('m_dashboard');
	}

	public function tambah()
	{
		$this->m_squrity->getSecurity();
		$isi['user'] = $this->m_dashboard->ambil_data($this->session->userdata('username'));
		$isi['content'] = 'backend/transaksi/t_transaksi';
		$isi['judul'] = '<i class="fas fa-plus"></i>  Form Tambah Transaksi Kiloan';
		$isi['konsumen'] = $this->db->get('konsumen')->result();
		$isi['paket'] = $this->db->get('paket')->result();
		$isi['kode_transaksi'] = $this->m_transaksi->generateKode();
		$this->load->view('backend/dashboard', $isi);
	}



	public function getHargaPaket()
	{
		$kode_paket = $this->input->post('kode_paket');
		$data = $this->m_transaksi->getHargaPaket($kode_paket);
		echo json_encode($data);
	}

	public function getHargaJenis()
	{
		$kode_jenis = $this->input->post('kode_jenis');
		$data = $this->m_transaksi->getHargaJenis($kode_jenis);
		echo json_encode($data);
	}

	public function simpan()
	{
		$data = array(
			'kode_transaksi' => $this->input->post('kode_transaksi'),
			'kode_konsumen' => $this->input->post('kode_konsumen'),
			'kode_paket' => $this->input->post('kode_paket'),
			'tgl_masuk' => $this->input->post('tgl_masuk'),
			'tgl_ambil' => '',
			'berat' => $this->input->post('berat'),
			'grand_total' => $this->input->post('grand_total'),
			'bayar' => $this->input->post('bayar'),
			'status' => $this->input->post('status')
		);
		$query = $this->db->insert('transaksi', $data);
		if ($query = true) {
			$this->session->set_flashdata('info', 'Data Transaksi Berhasil di Simpan!');
			redirect('transaksi/tambah', 'refresh');
		}
	}
}
