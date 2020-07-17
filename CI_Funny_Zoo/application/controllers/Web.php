<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->model('m_web');
		$data['tk']=$this->m_web->tentang_kami();
		$data['agenda']=$this->m_web->agenda();
		$data['berita']=$this->m_web->berita();
		$data['pengumuman']=$this->m_web->pengumuman();
		$data['prestasi']=$this->m_web->prestasi();
		$data['kguru']=$this->m_web->kguru();
		$data['ksiswa']=$this->m_web->ksiswa();
		$this->load->view('frontend',$data);
	}

	public function tk()
	{
		$this->load->model('m_web');
		$data['tk']=$this->m_web->tentang_kami();
		$data['agenda']=$this->m_web->agenda();
		$data['berita']=$this->m_web->berita();
		$data['pengumuman']=$this->m_web->pengumuman();
		$data['prestasi']=$this->m_web->prestasi();
		$data['kguru']=$this->m_web->kguru();
		$data['ksiswa']=$this->m_web->ksiswa();
		$data['tkfilter']=$this->m_web->tentang_kami_filter();
		$data['link']="tk";
		$this->load->view('frontend',$data);	
	}
}
