<?php
	class M_web extends CI_Model 
	{
		function tentang_kami()
		{
			$this->db->select('*');
			$this->db->from('web_tk');
			$this->db->where('kd_status','1');
			$this->db->order_by('kd_tk','ASC');
			$query=$this->db->GET();
			return $query->result();
		}

		function agenda()
		{
			$this->db->select('*');
			$this->db->from('web_agenda');
			$this->db->where('kd_status','1');
			$this->db->order_by('kd_agenda','ASC');
			$query=$this->db->GET();
			return $query->result();
		}

		function berita()
		{
			$this->db->select('*');
			$this->db->from('web_berita');
			$this->db->where('kd_status','1');
			$this->db->order_by('kd_berita','ASC');
			$query=$this->db->GET();
			return $query->result();
		}

		function pengumuman()
		{
			$this->db->select('*');
			$this->db->from('web_pengumuman');
			$this->db->where('kd_status','1');
			$this->db->order_by('kd_pengumuman','ASC');
			$query=$this->db->GET();
			return $query->result();
		}

		function prestasi()
		{
			$this->db->select('*');
			$this->db->from('web_prestasi');
			$this->db->where('kd_status','1');
			$this->db->order_by('kd_prestasi','ASC');
			$query=$this->db->GET();
			return $query->result();
		}

		function kguru()
		{
			$this->db->select('*');
			$this->db->from('web_kguru');
			$this->db->where('kd_status','1');
			$this->db->order_by('kd_kguru','ASC');
			$query=$this->db->GET();
			return $query->result();
		}

		function ksiswa()
		{
			$this->db->select('*');
			$this->db->from('web_ksiswa');
			$this->db->where('kd_status','1');
			$this->db->order_by('kd_ksiswa','ASC');
			$query=$this->db->GET();
			return $query->result();
		}

		function tentang_kami_filter()
		{
			$tk=$this->uri->segment(3);

			$this->db->select('*');
			$this->db->from('web_tk');
			$this->db->where('kd_tk',$tk);
			$query=$this->db->get();
			return $query->result();
		}
	}

?>
