<?php
defined('BASEPATH') OR exit('No derict script access allowed');

class konsumen extends CI_Controller
{
	public function __construct()
	{
	  parent::__construct();
	  $this->load->model('m_konsumen');
	  $this->load->model('m_dashboard');
 
	}

	public function index()
	{
		$this->m_squrity->getSecurity();
		$isi['user'] = $this->m_dashboard->ambil_data($this->session->userdata('username'));
		$isi['content'] = 'backend/konsumen/v_konsumen';
		$isi['judul'] = '<i class="fas fa-fw fa-users"></i> Data Konsumen';
		$isi['data'] = $this->m_konsumen->getAllDataKonsumen();
		$this->load->view('backend/dashboard', $isi);
	}

	public function tambah_konsumen()
 	{
 		$this->m_squrity->getSecurity();
	   	$isi['user'] = $this->m_dashboard->ambil_data($this->session->userdata('username'));
	   	$isi['content'] = 'backend/konsumen/t_konsumen';
	   	$isi['judul'] = '<i class="fas fa-fw fa-plus"></i> Form Tambah Konsumen';
	   	$isi['kode_konsumen']= $this->m_konsumen->generate_kode_konsumen();
	   	$this->load->view('backend/dashboard', $isi);
 	}

 	public function simpan()
	{
	  $data = array(
	    'kode_konsumen' => $this->input->post('kode_konsumen'),
	    'nama_konsumen' => $this->input->post('nama_konsumen'),
	    'alamat_konsumen' => $this->input->post('alamat_konsumen'),
	    'no_telp' => $this->input->post('no_telp')
	  );
	  $query = $this->db->insert('konsumen', $data);
	  if ($query = true) {
	    $this->session->set_flashdata('info', 'Data Konsumen Berhasil di Simpan!');
	      redirect('konsumen/index');
	  }
	}

	public function edit($id)
	{
	  $this->m_squrity->getSecurity();
	  $isi['user'] = $this->m_dashboard->ambil_data($this->session->userdata('username'));
	  $isi['content'] = 'backend/konsumen/e_konsumen';
	  $isi['judul'] = '<i class="fa fa-edit"></i> Form Edit Konsumen';
	  $isi['konsumen'] = $this->m_konsumen->edit($id);
	  $this->load->view('backend/dashboard', $isi);
	}

	public function update()
	{
	  $kode_konsumen =  $this->input->post('kode_konsumen');
	  $data = array(
	    'kode_konsumen' => $this->input->post('kode_konsumen'),
	    'nama_konsumen' => $this->input->post('nama_konsumen'),
	    'alamat_konsumen' => $this->input->post('alamat_konsumen'),
	    'no_telp' => $this->input->post('no_telp')
	  );
	  $query = $this->m_konsumen->update($kode_konsumen, $data);
	  if ($query = true) {
	    $this->session->set_flashdata('info', 'Data Konsumen Berhasil di Update!');
	    redirect('konsumen');
	  }
	}

	public function delete($id)
	{
	  $query = $this->m_konsumen->delete($id);
	  if ($query = true) {
	    $this->session->set_flashdata('info', 'Data Konsumen Berhasil di Delete!');
	    redirect('konsumen');
	  }
	}
}