<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Funny_zoo extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('funny_model');
	}
	public function index()
	{
		$this->load->view('index');
	}
	public function sejarah()
	{
		$data['sejarah'] = $this->funny_model->get_sejarah();
		$this->load->view('tk_sejarah',$data);

	}
	public function kontak()
	{
		$data['kontak'] = $this->funny_model->get_kontak();
		$this->load->view('tk_kontak',$data);

	}
	public function jadwal()
	{
		$data['jadwal'] = $this->funny_model->get_jadwal();
		$this->load->view('ip_jadwal',$data);

	}
	public function pemesanan()
	{
		$data['pemesanan'] = $this->funny_model->get_pemesanan();
		$this->load->view('ip_pemesanan',$data);

	}
	public function pemandu()
	{
		$data['pemandu'] = $this->funny_model->get_pemandu();
		$this->load->view('ip_pemandu',$data);

	}
	public function tiket()
	{
		$data['tiket'] = $this->funny_model->get_tiket();
		$this->load->view('ip_tiket',$data);

	}
	public function peta()
	{
		$data['peta'] = $this->funny_model->get_peta();
		$this->load->view('ip_peta',$data);

	}
	public function flora()
	{
		$data['flora'] = $this->funny_model->get_flora();
		$this->load->view('ff_flora',$data);

	}
	public function fauna()
	{
		$data['fauna'] = $this->funny_model->get_fauna();
		$this->load->view('ff_fauna',$data);

	}
	public function sarana()
	{
		$data['sarana'] = $this->funny_model->get_sarana();
		$this->load->view('f_sarana',$data);

	}
	public function resto()
	{
		$data['resto'] = $this->funny_model->get_resto();
		$this->load->view('f_resto',$data);

	}
	public function berita()
	{
		$data['berita'] = $this->funny_model->get_berita();
		$this->load->view('berita',$data);

	}
	public function promo()
	{
		$data['promo'] = $this->funny_model->get_promo();
		$this->load->view('promo',$data);

	}

}

