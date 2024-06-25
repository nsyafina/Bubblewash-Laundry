<?php
defined('BASEPATH') or exit('No direct script access allowed');

class m_laporan_satuan extends CI_Model
{

  public function filter_laporan_satuan($tgl_mulai, $tgl_akhir)
  {
    $this->db->select('*');
    $this->db->from('satuan');
    $this->db->join('konsumen', 'satuan.kode_konsumen = konsumen.kode_konsumen', 'left');
    $this->db->join('paket', 'satuan.kode_paket = paket.kode_paket', 'left');
    $this->db->join('jenis', 'satuan.kode_jenis = jenis.kode_jenis', 'left');
    $this->db->where('satuan.tgl_masuk >=', $tgl_mulai);
    $this->db->where('satuan.tgl_masuk <=', $tgl_akhir);
    return $this->db->get()->result();
    
  }
}
