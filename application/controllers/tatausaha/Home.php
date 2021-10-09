<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent:: __construct();
		if ($this->session->userdata('level') !== '1') {
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

		$hpending = $this->m_cuti->hitungpending()->result();
		$happroved = $this->m_cuti->hitungapproved()->result();

			$data = array('nama' => $userData['nama'],'level' => $userData['level'],'pegawai' => $hitungpegawai,'hpending' => $hpending,'happroved' => $happroved,'scripts' =>array());
		$this->template->load('tatausaha/static','tatausaha/home',$data);
	}

	

}