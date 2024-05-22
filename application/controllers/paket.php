<?php
defined('BASEPATH') OR exit('No direct script access allowed');

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
	    $isi['judul'] = '<i class="fas fa-fw fa-box-open"></i> Daftar Data Paket';
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
	  $data = array(
	    'kode_paket' => $this->input->post('kode_paket'),
	    'nama_paket' => $this->input->post('nama_paket'),
	    'harga_paket' => $this->input->post('harga_paket')
	  );
	  $query = $this->db->insert('paket', $data);
	  if ($query = true) {
	    $this->session->set_flashdata('info', 'Data Paket Berhasil di Simpan!');
	    redirect('paket/index');
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
	  $data = array(
	    'kode_paket' => $this->input->post('kode_paket'),
	    'nama_paket' => $this->input->post('nama_paket'),
	    'harga_paket' => $this->input->post('harga_paket')
	  );
	  $query = $this->m_paket->update($kode_paket, $data);
	  if ($query = true) {
	    $this->session->set_flashdata('info', 'Data Paket Berhasil di Update!');
	    redirect('paket');
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