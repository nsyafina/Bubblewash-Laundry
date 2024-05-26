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

	
	/*--------------------------------------------------------- Kiloan -----------------------------------------------------*/
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

	public function riwayat()
	{
		$this->m_squrity->getSecurity();
		$isi['user'] = $this->m_dashboard->ambil_data($this->session->userdata('username'));
		$isi['content'] = 'backend/transaksi/riwayat_transaksi';
		$isi['judul'] = '<i class="fas fa-fw fa-history"></i> Riwayat Transaksi Kiloan';
		$isi['data'] = $this->m_transaksi->getAllRiwayat();
		$this->load->view('backend/dashboard', $isi);
	}

	public function update_status()
	{
		date_default_timezone_set('Asia/Jakarta');

		$kode_transaksi = $this->input->post('kt');
		$status = $this->input->post('stt');
		$tgl_ambil = date('Y-m-d h:i:s');
		$status_bayar = 'Lunas';

		if ($status == "Baru" || $status == "Proses" || $status == "Ready") {
			$this->m_transaksi->update_status($kode_transaksi, $status);
		} else {
			$this->m_transaksi->update_status1(
				$kode_transaksi,
				$status,
				$tgl_ambil,
				$status_bayar
			);
		}
	}

	public function edit_transaksi($kode_transaksi)
	{
		$this->m_squrity->getSecurity();
		$isi['user'] = $this->m_dashboard->ambil_data($this->session->userdata('username'));
		$isi['content'] = 'backend/transaksi/edit_transaksi';
		$isi['judul'] = '<i class="fa fa-edit"></i> Form Edit Transaksi Kiloan';
		$isi['transaksi'] = $this->m_transaksi->edit_transaksi($kode_transaksi);
		$isi['konsumen'] = $this->db->get('konsumen')->result();
		$isi['paket'] = $this->db->get('paket')->result();
		$this->load->view('backend/dashboard', $isi);
	}

	public function update()
	{
		$kode_transaksi = $this->input->post('kode_transaksi');
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
		$query = $this->m_transaksi->update($kode_transaksi, $data);
		if ($query = true) {
			$this->session->set_flashdata('info', 'Data Transaksi Berhasil di Update!');
			redirect('transaksi/riwayat');
		}
	}

	public function detail($kode_transaksi)
	{
		$this->m_squrity->getSecurity();
		$this->load->library('pdf');
		$data['transaksi'] = $this->m_transaksi->detail($kode_transaksi);
		// var_dump($data['transaksi']);
		$this->load->view('backend/transaksi/detail', $data);

		$paper_size = 'A5';
		$orientation = 'landscape';
		$html = $this->output->get_output();
		$this->pdf->set_paper($paper_size, $orientation);
		$this->pdf->load_html($html);
		$this->pdf->render();
		$this->pdf->stream("Detail Transaksi Kiloan", array('Attachment' => 0));
	}

	public function delete($kode_transaksi)
	{
		$query = $this->m_transaksi->delete($kode_transaksi);
		if ($query = true) {
			$this->session->set_flashdata('info', 'Data transaksi Berhasil di Batalkan!');
			redirect('transaksi/riwayat');
		}
	}
	/*------------------------------------------------------- Kiloan End ---------------------------------------------------*/


	/*--------------------------------------------------------- Satuan -----------------------------------------------------*/
	public function satuan()
	{
		$this->m_squrity->getSecurity();
		$isi['user'] = $this->m_dashboard->ambil_data($this->session->userdata('username'));
		$isi['content'] = 'backend/transaksi/t_satuan';
		$isi['judul'] = '<i class="fas fa-plus"></i>  Form Tambah Transaksi Satuan';
		$isi['konsumen'] = $this->db->get('konsumen')->result();
		$isi['paket'] = $this->db->get('paket')->result();
		$isi['jenis'] = $this->db->get('jenis')->result();
		$isi['kode_transaksi'] = $this->m_transaksi->generateKodesatuan();
		$this->load->view('backend/dashboard', $isi);
	}

	public function simpansatuan()
	{
		$data = array(
			'kode_transaksi' => $this->input->post('kode_transaksi'),
			'kode_konsumen' => $this->input->post('kode_konsumen'),
			'kode_paket' => $this->input->post('kode_paket'),
			'kode_jenis' => $this->input->post('kode_jenis'),
			'tgl_masuk' => $this->input->post('tgl_masuk'),
			'tgl_ambil' => '',
			'qty' => $this->input->post('qty'),
			'grand_total' => $this->input->post('grand_total'),
			'bayar' => $this->input->post('bayar'),
			'status' => $this->input->post('status')
		);
		$query = $this->db->insert('satuan', $data);
		if ($query = true) {
			$this->session->set_flashdata('info', 'Data Transaksi Berhasil di Simpan!');
			redirect('transaksi/satuan', 'refresh');
		}
	}

	public function riwayatsatuan()
	{
		$this->m_squrity->getSecurity();
		$isi['user'] = $this->m_dashboard->ambil_data($this->session->userdata('username'));
		$isi['content'] = 'backend/transaksi/riwayat_transaksi_satuan';
		$isi['judul'] = '<i class="fas fa-fw fa-history"></i> Riwayat Transaksi Satuan';
		$isi['data'] = $this->m_transaksi->getAllRiwayatsatuan();
		$this->load->view('backend/dashboard', $isi);
	}

	public function update_statuss()
	{
		date_default_timezone_set('Asia/Jakarta');

		$kode_transaksi = $this->input->post('kt');
		$status = $this->input->post('stt');
		$tgl_ambil = date('Y-m-d h:i:s');
		$status_bayar = 'Lunas';

		if ($status == "Baru" || $status == "Proses" || $status == "Ready") {
			$this->m_transaksi->update_statuss($kode_transaksi, $status);
		} else {
			$this->m_transaksi->update_statuss1(
				$kode_transaksi,
				$status,
				$tgl_ambil,
				$status_bayar
			);
		}
	}

	public function edit_transaksi_satuan($kode_transaksi)
	{
		$this->m_squrity->getSecurity();
		$isi['user'] = $this->m_dashboard->ambil_data($this->session->userdata('username'));
		$isi['content'] = 'backend/transaksi/edit_transaksi_satuan';
		$isi['judul'] = '<i class="fa fa-edit"></i> Form Edit Transaksi Satuan';
		$isi['transaksi'] = $this->m_transaksi->edit_transaksi_satuan($kode_transaksi);
		$isi['konsumen'] = $this->db->get('konsumen')->result();
		$isi['paket'] = $this->db->get('paket')->result();
		$isi['jenis'] = $this->db->get('jenis')->result();
		$this->load->view('backend/dashboard', $isi);
	}

	public function updatesatuan()
	{
		$kode_transaksi = $this->input->post('kode_transaksi');
		$data = array(
			'kode_transaksi' => $this->input->post('kode_transaksi'),
			'kode_konsumen' => $this->input->post('kode_konsumen'),
			'kode_paket' => $this->input->post('kode_paket'),
			'kode_jenis' => $this->input->post('kode_jenis'),
			'tgl_masuk' => $this->input->post('tgl_masuk'),
			'tgl_ambil' => '',
			'qty' => $this->input->post('qty'),
			'grand_total' => $this->input->post('grand_total'),
			'bayar' => $this->input->post('bayar'),
			'status' => $this->input->post('status')
		);

		$query = $this->m_transaksi->updatesatuan($kode_transaksi, $data);
		if ($query = true) {
			$this->session->set_flashdata('info', 'Data Transaksi Berhasil di Update!');
			redirect('transaksi/riwayatsatuan');
		}
	}

	public function detailsatuan($kode_transaksi)
	{
		$this->m_squrity->getSecurity();
		$this->load->library('pdf');
		$data['satuan'] = $this->m_transaksi->detailsatuan($kode_transaksi);
		// var_dump($data['satuan']);
		$this->load->view('backend/transaksi/detailsatuan', $data);

		$paper_size = 'A5';
		$orientation = 'landscape';
		$html = $this->output->get_output();
		$this->pdf->set_paper($paper_size, $orientation);
		$this->pdf->load_html($html);
		$this->pdf->render();
		$this->pdf->stream("Detail Transaksi Satuan", array('Attachment' => 0));
	}

	public function deletesatuan($kode_transaksi)
	{
		$query = $this->m_transaksi->deletesatuan($kode_transaksi);
		if ($query = true) {
			$this->session->set_flashdata('info', 'Data transaksi Berhasil di Batalkan!');
			redirect('transaksi/riwayatsatuan');
		}
	}
	/*------------------------------------------------------- Satuan End ---------------------------------------------------*/
}




