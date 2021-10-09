<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai extends CI_Controller {

	public function __construct()
	{
		parent:: __construct();
		if ($this->session->userdata('level') !== '2') {
			redirect('login');
		}

		$this->load->model('m_pegawai');
	}

	public function index()
	{
		$userData = $this->session->userdata();
		$pegawai = $this->m_pegawai->tampil()->result();

		$data = array('nama' => $userData['nama'],'level' => $userData['level'],'pegawai' => $pegawai,'scripts' =>array());
		$this->template->load('pegawai/static','pegawai/pegawai', $data);
	}

	
	public function detailpegawai($nik)
	{
		$where = $nik;
		$pegawai = $this->m_pegawai->detailpegawai($where)->result();

		$data['nama'] = $this->session->userdata('nama');
		$data['level'] = $this->session->userdata('level');
		$data['pegawai'] = $pegawai;
		$data['scripts'] = array();
		$this->template->load('pegawai/static','pegawai/detailpegawai',$data);
	}
}