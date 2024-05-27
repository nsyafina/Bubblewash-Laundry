<?php
defined('BASEPATH') or exit('No direct script access allowed');

class m_histori extends CI_Model
{

  public function cek_status($kode_transaksi)
{
    $this->db->select('transaksi.*, konsumen.nama_konsumen, paket.nama_paket');
    $this->db->from('transaksi');
    $this->db->join('konsumen', 'transaksi.kode_konsumen = konsumen.kode_konsumen');
    $this->db->join('paket', 'transaksi.kode_paket = paket.kode_paket');
    $this->db->where('transaksi.kode_transaksi', $kode_transaksi);
    $query1 = $this->db->get()->result();

    $this->db->select('satuan.*, konsumen.nama_konsumen, paket.nama_paket, jenis.jenis_barang');
    $this->db->from('satuan');
    $this->db->join('konsumen', 'satuan.kode_konsumen = konsumen.kode_konsumen');
    $this->db->join('paket', 'satuan.kode_paket = paket.kode_paket');
    $this->db->join('jenis', 'satuan.kode_jenis = jenis.kode_jenis', 'left');
    $this->db->where('satuan.kode_transaksi', $kode_transaksi);
    $query2 = $this->db->get()->result();

    return array_merge($query1, $query2);
}

}
