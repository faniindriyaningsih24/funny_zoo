<?php 

/**
* scream model
*/
class funny_model extends CI_Model
{
	public function get_sejarah()
	{
		$this->db->where('kd_status', 1);
		$query = $this->db->get('tbl_tk');
		if ( ! empty($query->row()) ) {
			return $query->row();
		}
		return false;
	}
	public function get_kontak()
	{
		$this->db->where(['kd_status' => 1, 'kd_tk' => 3]);
		$query = $this->db->get('tbl_tk');
		if ( ! empty($query->row()) ) {
			return $query->row();
		}
		return false;
	}
	public function get_jadwal()
	{
		$this->db->where(['kd_status' => 1, 'kd_ip' => 5]);
		$query = $this->db->get('tbl_ip');
		if ( ! empty($query->row()) ) {
			return $query->row();
		}
		return false;
	}
	public function get_pemesanan()
	{
		$this->db->where(['kd_status' => 1, 'kd_ip' => 4]);
		$query = $this->db->get('tbl_ip');
		if ( ! empty($query->row()) ) {
			return $query->row();
		}
		return false;
	}
	public function get_pemandu()
	{
		$this->db->where(['kd_status' => 1, 'kd_ip' => 3]);
		$query = $this->db->get('tbl_ip');
		if ( ! empty($query->row()) ) {
			return $query->row();
		}
		return false;
	}
	public function get_tiket()
	{
		$this->db->where(['kd_status' => 1, 'kd_ip' => 6]);
		$query = $this->db->get('tbl_ip');
		if ( ! empty($query->row()) ) {
			return $query->row();
		}
		return false;
	}
	public function get_peta()
	{
		$this->db->where(['kd_status' => 1, 'kd_ip' => 1]);
		$query = $this->db->get('tbl_ip');
		if ( ! empty($query->row()) ) {
			return $query->row();
		}
		return false;
	}
	public function get_flora()
	{
		$this->db->where(['kd_status' => 1]);
		$query = $this->db->get('tbl_flora');
		if ( ! empty($query->result()) ) {
			return $query->result();
		}
		return false;
	}
	public function get_fauna()
	{
		$this->db->where(['kd_status' => 1]);
		$query = $this->db->get('tbl_fauna');
		if ( ! empty($query->result()) ) {
			return $query->result();
		}
		return false;
	}
	public function get_sarana()
	{
		$this->db->where(['kd_status' => 1]);
		$query = $this->db->get('tbl_sarana');
		if ( ! empty($query->result()) ) {
			return $query->result();
		}
		return false;
	}
	public function get_resto()
	{
		$this->db->where(['kd_status' => 1, 'kd_fasilitas' => 1]);
		$query = $this->db->get('tbl_fasilitas');
		if ( ! empty($query->row()) ) {
			return $query->row();
		}
		return false;
	}
	public function get_berita()
	{
		$this->db->where(['kd_status' => 1]);
		$query = $this->db->get('tbl_berita');
		if ( ! empty($query->result()) ) {
			return $query->result();
		}
		return false;
	}
	public function get_promo()
	{
		$this->db->where(['kd_status' => 1]);
		$query = $this->db->get('tbl_promo');
		if ( ! empty($query->result()) ) {
			return $query->result();
		}
		return false;
	}
}