<?php
defined('BASEPATH') or exit('No direct script access allowed');

class jenis extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_jenis');
		$this->load->model('m_dashboard');
	}
	public function index()
	{
		$this->m_squrity->getSecurity();
		$isi['user'] = $this->m_dashboard->ambil_data($this->session->userdata('username'));
		$isi['content'] = 'backend/jenis/v_jenis';
		$isi['judul'] = '<i class="fas fa-fw fa-box-open"></i> Data Jenis Barang';
		$isi['data'] = $this->m_jenis->getDataJenis();
		$this->load->view('backend/dashboard', $isi);
	}

	public function tambah_jenis()
	{
		$this->m_squrity->getSecurity();
		$isi['user'] = $this->m_dashboard->ambil_data($this->session->userdata('username'));
		$isi['content'] = 'backend/jenis/t_jenis';
		$isi['judul'] = '<i class="fas fa-plus"></i> Form Tambah Jenis Barang';
		$isi['kode_jenis'] = $this->m_jenis->generate_kode_jenis();
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
			'kode_jenis' => $this->input->post('kode_jenis'),
			'jenis_barang' => $this->input->post('jenis_barang'),
			'harga_jenis' => $this->input->post('harga_jenis'),
			'gambar' => $file_name['file_name'],
		);

		$query = $this->db->insert('jenis', $data);
		if ($query = true) {
			$this->session->set_flashdata('info', 'Data Jenis Barang berhasil disimpan');
			redirect('jenis', 'refresh');
		}
	}


	public function edit($kode_jenis)
	{
		$this->m_squrity->getSecurity();
		$isi['user'] = $this->m_dashboard->ambil_data($this->session->userdata('username'));
		$isi['content'] = 'backend/jenis/e_jenis';
		$isi['judul'] = '<i class="fas fa-edit"></i> Form Edit Jenis Barang';
		$isi['data'] = $this->m_jenis->edit($kode_jenis);
		$this->load->view('backend/dashboard', $isi);
	}

	public function update()
	{
		$kode_jenis =  $this->input->post('kode_jenis');
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
				'jenis_barang' => $this->input->post('jenis_barang'),
				'harga_jenis' => $this->input->post('harga_jenis')
			);
			$_kode = $this->db->get_where('jenis', ['kode_jenis' => $kode_jenis])->row();

			$query = $this->m_jenis->update($kode_jenis, $data);
			if ($query = true) {
				$this->session->set_flashdata('info', 'Data Jenis Berhasil di Update!');
				unlink('img/service/');
				redirect('jenis');
			}
		} else {
			$data = array(
				'jenis_barang' => $this->input->post('jenis_barang'),
				'harga_jenis' => $this->input->post('harga_jenis')
			);
			$query = $this->m_jenis->update($kode_jenis, $data);
			if ($query = true) {
				$this->session->set_flashdata('info', 'Data Jenis Barang Berhasil di Update!');
				redirect('jenis', 'refresh');
			}
		}
	}

	public function delete($kode_jenis)
	{
		$query = $this->m_jenis->delete($kode_jenis);
		if ($query = true) {
			$this->session->set_flashdata('info', 'Data Jenis Barang Berhasil di Delete!');
			redirect('jenis');
		}
	}
}