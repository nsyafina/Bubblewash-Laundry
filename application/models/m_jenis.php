<?php
class m_jenis extends CI_Model {

	public function generate_kode_jenis()
	{
		$this->db->select('RIGHT(jenis.kode_jenis,3) as kode', false);
		$this->db->order_by('kode_jenis', 'desc');
		$this->db->limit(1);
		$query = $this->db->get('jenis');
		if ($query->num_rows() > 0) {
			$data = $query->row();
			$kode = intval($data->kode) + 1;
		} else {
			$kode = 1;
		}
		$kodemax = str_pad($kode, 3, "0", STR_PAD_LEFT);
		$kodejadi = "JN" . $kodemax;
		return $kodejadi;
	}

	public function getDataJenis()
	{
		return $this->db->get('jenis')->result();
	}

	public function edit($kode_jenis)
	{
		$this->db->where('kode_jenis', $kode_jenis);
		return $this->db->get('jenis')->row_array();
	}

	public function update($kode_jenis, $data)
	{
		$this->db->where('kode_jenis', $kode_jenis);
		$this->db->update('jenis', $data);
	}

	public function delete($kode_jenis)
	{
		$this->db->where('kode_jenis', $kode_jenis);
		$this->db->delete('jenis');
	}
}