<?php
defined('BASEPATH') or exit('No direct script access allowed');

class paket extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_paket');
		$this->load->model('m_dashboard');
	}
	public function index()
	{
		$this->m_squrity->getSecurity();
		$isi['user'] = $this->m_dashboard->ambil_data($this->session->userdata('username'));
		$isi['content'] = 'backend/paket/v_paket';
		$isi['judul'] = '<i class="fas fa-fw fa-box-open"></i> Data Paket';
		$isi['data'] = $this->m_paket->getDataPaket();
		$this->load->view('backend/dashboard', $isi);
	}

	public function tambah_paket()
	{
		$this->m_squrity->getSecurity();
		$isi['user'] = $this->m_dashboard->ambil_data($this->session->userdata('username'));
		$isi['content'] = 'backend/paket/t_paket';
		$isi['judul'] = '<i class="fas fa-plus"></i> Form Tambah Paket';
		$isi['kode_paket'] = $this->m_paket->generate_kode_paket();
		$this->load->view('backend/dashboard', $isi);
	}

	public function simpan()
	{
		$config['upload_path'] = 'img/service/';
		$config['allowed_types'] = 'jpg|png|jpeg';
		$config['max_size'] = '2048';
		$this->load->library('upload', $config);
		$this->upload->do_upload('gambar');
		$file_name = $this->upload->data();

		$data = array(
			'kode_paket' => $this->input->post('kode_paket'),
			'nama_paket' => $this->input->post('nama_paket'),
			'harga_paket' => $this->input->post('harga_paket'),
			'gambar' => $file_name['file_name'],
		);

		$query = $this->db->insert('paket', $data);
		if ($query = true) {
			$this->session->set_flashdata('info', 'Data Paket Berhasil di Simpan!');
			redirect('paket');
		}
	}

	public function edit($kode_paket)
	{
		$this->m_squrity->getSecurity();
		$isi['user'] = $this->m_dashboard->ambil_data($this->session->userdata('username'));
		$isi['content'] = 'backend/paket/e_paket';
		$isi['judul'] = '<i class="fas fa-edit"></i> Form Edit Paket';
		$isi['data'] = $this->m_paket->edit($kode_paket);
		$this->load->view('backend/dashboard', $isi);
	}

	public function update()
	{
		$kode_paket =  $this->input->post('kode_paket');
		$config['upload_path'] = 'img/service/';
		$config['allowed_types'] = 'jpg|png|jpeg';
		$config['max_size'] = '2048';

		$this->load->library('upload', $config);
		if (!empty($_FILES['gambar']['name'])) {
			$this->upload->do_upload('gambar');
			$upload = $this->upload->data();
			$gambar = $upload['file_name'];
			$data = array(
				'gambar' => $gambar,
				'nama_paket' => $this->input->post('nama_paket'),
				'harga_paket' => $this->input->post('harga_paket')
			);
			$_kode = $this->db->get_where('paket', ['kode_paket' => $kode_paket])->row();

			$query = $this->m_paket->update($kode_paket, $data);
			if ($query = true) {
				$this->session->set_flashdata('info', 'Data Paket Berhasil di Update!');
				unlink('img/service/');
				redirect('paket');
			}
		} else {
			$data = array(
				'nama_paket' => $this->input->post('nama_paket'),
				'harga_paket' => $this->input->post('harga_paket')
			);
			$query = $this->m_paket->update($kode_paket, $data);
			if ($query = true) {
				$this->session->set_flashdata('info', 'Data Paket Berhasil di Update!');
				redirect('paket');
			}
		}
	}

	public function delete($kode_paket)
	{
		$query = $this->m_paket->delete($kode_paket);
		if ($query = true) {
			$this->session->set_flashdata('info', 'Data Paket Berhasil di Delete!');
			redirect('paket');
		}
	}
}