<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent:: __construct();
		if ($this->session->userdata('level') !== '4') {
			redirect('login');
		}
		$this->load->model('m_home');
		$this->load->model('m_pegawai');
		$this->load->model('m_cuti');
	}

	public function index()
	{
		$userData = $this->session->userdata();
		$hitungpegawai = $this->m_home->hitungpegawai()->result();

		$hteruskan = $this->m_cuti->hitungteruskan()->result();

			$data = array('nama' => $userData['nama'],'level' => $userData['level'],'pegawai' => $hitungpegawai,'hteruskan' => $hteruskan,'scripts' =>array());
		$this->template->load('kabapas/static','kabapas/home',$data);
	}

	

}