<?php
class m_transaksi extends CI_Model
{
	public function getHargaPaket($kode_paket)
	{
		$this->db->where('kode_paket', $kode_paket);
		return $this->db->get('paket')->row_array();
	}

	public function getHargaJenis($kode_jenis)
	{
		$this->db->where('kode_jenis', $kode_jenis);
		return $this->db->get('jenis')->row_array();
	}

	/*--------------------------------------------------------- Kiloan -----------------------------------------------------*/
	public function generateKode()
	{
		$this->db->select('RIGHT(transaksi.kode_transaksi,3) as kode', false);
		$this->db->order_by('kode_transaksi', 'desc');
		$this->db->limit(1);
		$query = $this->db->get('transaksi');
		if ($query->num_rows() > 0) {
			$data = $query->row();
			$kode = intval($data->kode) + 1;
		} else {
			$kode = 1;
		}
		$kodemax = str_pad($kode, 3, "0", STR_PAD_LEFT);
		$kodejadi = "" . $kodemax;
		return $kodejadi;
	}

	public function getAllRiwayat()
	{
		$this->db->select('*');
		$this->db->from('transaksi');
		$this->db->join('konsumen', 'transaksi.kode_konsumen = konsumen.kode_konsumen', 'left');
		$this->db->join('paket', 'transaksi.kode_paket = paket.kode_paket', 'left');

		return $this->db->get()->result();
	}

	public function edit_transaksi($kode_transaksi)
	{
		$this->db->select('*');
		$this->db->from('transaksi');
		$this->db->join('konsumen', 'transaksi.kode_konsumen = konsumen.kode_konsumen', 'left');
		$this->db->join('paket', 'transaksi.kode_paket = paket.kode_paket', 'left');
		$this->db->where('kode_transaksi', $kode_transaksi);
		return $this->db->get()->row_array();
	}

	public function update($kode_transaksi, $data)
	{
		$this->db->where('kode_transaksi', $kode_transaksi);
		$this->db->update('transaksi', $data);
	}

	public function update_status($kode_transaksi, $status)
	{
		$this->db->set('status', $status);
		$this->db->where('kode_transaksi', $kode_transaksi);
		$this->db->update('transaksi');
	}

	public function update_status1($kode_transaksi, $status, $tgl_ambil, $status_bayar)
	{
		$this->db->set('status', $status);
		$this->db->set('tgl_ambil', $tgl_ambil);
		$this->db->set('bayar', $status_bayar);
		$this->db->where('kode_transaksi', $kode_transaksi);
		$this->db->update('transaksi');
	}

	public function detail($kode_transaksi)
	{
		$this->db->select('*');
		$this->db->from('transaksi');
		$this->db->join('konsumen', 'transaksi.kode_konsumen = konsumen.kode_konsumen', 'left');
		$this->db->join('paket', 'transaksi.kode_paket = paket.kode_paket', 'left');
		$this->db->where('kode_transaksi', $kode_transaksi);
		return $this->db->get()->row_array();
	}

	public function delete($kode_transaksi)
	{
		$this->db->where('kode_transaksi', $kode_transaksi);
		$this->db->delete('transaksi');
	}
	/*------------------------------------------------------- Kiloan End ---------------------------------------------------*/


	/*--------------------------------------------------------- Satuan -----------------------------------------------------*/
	public function generateKodesatuan()
	{
		$this->db->select('RIGHT(satuan.kode_transaksi,3) as kode', false);
		$this->db->order_by('kode_transaksi', 'desc');
		$this->db->limit(1);
		$query = $this->db->get('satuan');
		if ($query->num_rows() > 0) {
			$data = $query->row();
			$kode = intval($data->kode) + 1;
		} else {
			$kode = 1;
		}
		$kodemax = str_pad($kode, 3, "0", STR_PAD_LEFT);
		$kodejadi = "" . $kodemax;
		return $kodejadi;
	}

	public function getAllRiwayatsatuan()
	{
		$this->db->select('*');
		$this->db->from('satuan');
		$this->db->join('konsumen', 'satuan.kode_konsumen = konsumen.kode_konsumen', 'left');
		$this->db->join('paket', 'satuan.kode_paket = paket.kode_paket', 'left');
		$this->db->join('jenis', 'satuan.kode_jenis = jenis.kode_jenis', 'left');

		return $this->db->get()->result();
	}

	public function edit_transaksi_satuan($kode_transaksi)
	{
		$this->db->select('*');
		$this->db->from('satuan');
		$this->db->join('konsumen', 'satuan.kode_konsumen = konsumen.kode_konsumen', 'left');
		$this->db->join('paket', 'satuan.kode_paket = paket.kode_paket', 'left');
		$this->db->join('jenis', 'satuan.kode_jenis = jenis.kode_jenis', 'left');
		$this->db->where('kode_transaksi', $kode_transaksi);
		return $this->db->get()->row_array();
	}

	public function updatesatuan($kode_transaksi, $data)
	{
		$this->db->where('kode_transaksi', $kode_transaksi);
		$this->db->update('satuan', $data);
	}

	public function update_statuss($kode_transaksi, $status)
	{
		$this->db->set('status', $status);
		$this->db->where('kode_transaksi', $kode_transaksi);
		$this->db->update('satuan');
	}

	public function update_statuss1($kode_transaksi, $status, $tgl_ambil, $status_bayar)
	{
		$this->db->set('status', $status);
		$this->db->set('tgl_ambil', $tgl_ambil);
		$this->db->set('bayar', $status_bayar);
		$this->db->where('kode_transaksi', $kode_transaksi);
		$this->db->update('satuan');
	}

	public function detailsatuan($kode_transaksi)
	{
		$this->db->select('*');
		$this->db->from('satuan');
		$this->db->join('konsumen', 'satuan.kode_konsumen = konsumen.kode_konsumen', 'left');
		$this->db->join('paket', 'satuan.kode_paket = paket.kode_paket', 'left');
		$this->db->join('jenis', 'satuan.kode_jenis = jenis.kode_jenis', 'left');
		$this->db->where('kode_transaksi', $kode_transaksi);
		return $this->db->get()->row_array();
	}

	public function deletesatuan($kode_transaksi)
	{
		$this->db->where('kode_transaksi', $kode_transaksi);
		$this->db->delete('satuan');
	}
	/*------------------------------------------------------- Satuan End ---------------------------------------------------*/
}


