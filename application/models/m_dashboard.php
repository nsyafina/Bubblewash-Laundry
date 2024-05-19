<?php
defined('BASEPATH') OR exit('No derict script access allowed');

class m_dashboard extends CI_Model
{
	public function total_konsumen()
	{
	  return $this->db->get('konsumen')->num_rows();
	}

	public function data_paket()
	{
	  return $this->db->get('paket')->num_rows();
	}

	public function data_jenis_barang()
	{
	  return $this->db->get('jenis')->num_rows();
	}

	public function transaksi_baru()
	{
	  $this->db->where('status', 'Baru');
	  return $this->db->get('transaksi')->num_rows();
	}

	public function transaksi_baru_satuan()
	{
	  $this->db->where('status', 'Baru');
	  return $this->db->get('satuan')->num_rows();
	}

	public function transaksi_proses()
	{
	  $this->db->where('status', 'Proses');
	  return $this->db->get('transaksi')->num_rows();
	}

	public function transaksi_proses_satuan()
	{
	  $this->db->where('status', 'Proses');
	  return $this->db->get('satuan')->num_rows();
	}

	public function transaksi_siap_diambil()
	{
	  $this->db->where('status', 'Ready');
	  return $this->db->get('transaksi')->num_rows();
	}

	public function transaksi_siap_diambil_satuan()
	{
	  $this->db->where('status', 'Ready');
	  return $this->db->get('satuan')->num_rows();
	}

	public function transaksi_selesai()
	{
	  $this->db->where('status', 'Selesai');
	  return $this->db->get('transaksi')->num_rows();
	}

	public function transaksi_selesai_satuan()
	{
	  $this->db->where('status', 'Selesai');
	  return $this->db->get('satuan')->num_rows();
	}

	public function total_transaksi()
	{
	  return $this->db->get('transaksi')->num_rows();
	}

	public function total_transaksi_satuan()
	{
	  return $this->db->get('satuan')->num_rows();
	}

	public function ambil_data($id_user)
	{
	  $this->db->where('username', $id_user);
	  return $this->db->get('user')->row();
	}
}