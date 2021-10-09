<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent:: __construct();
		if ($this->session->userdata('level') !== '2') {
			redirect('login');
		}
		$this->load->model('m_home');
		$this->load->model('m_pegawai');
	}

	public function index()
	{
		$userData = $this->session->userdata();
		$hitungpegawai = $this->m_home->hitungpegawai()->result();
		$hitungmenikah = $this->m_home->hitungmenikah()->result();
		$hitunglajang = $this->m_home->hitunglajang()->result();
		$hitungjanda = $this->m_home->hitungjanda()->result();
		$hitungduda = $this->m_home->hitungduda()->result();

			$data = array('nama' => $userData['nama'],'level' => $userData['level'],'menikah' => $hitungmenikah,'lajang' => $hitunglajang,'janda' => $hitungjanda,'duda' => $hitungduda,'pegawai' => $hitungpegawai,'scripts' =>array());
		$this->template->load('pegawai/static','pegawai/home',$data);
	}

	public function menikah()
	{
		$userData = $this->session->userdata();
		$menikah = $this->m_pegawai->menikah()->result();

			$data = array('nama' => $userData['nama'],'level' => $userData['level'],'menikah' => $menikah,'scripts' =>array());
		$this->template->load('pegawai/static','pegawai/menikah', $data);
	}

	public function lajang()
	{
		$userData = $this->session->userdata();
		$lajang = $this->m_pegawai->lajang()->result();

			$data = array('nama' => $userData['nama'],'level' => $userData['level'],'lajang' => $lajang,'scripts' =>array());
		$this->template->load('pegawai/static','pegawai/lajang', $data);
	}

	public function janda()
	{
		$userData = $this->session->userdata();
		$janda = $this->m_pegawai->janda()->result();

			$data = array('nama' => $userData['nama'],'level' => $userData['level'],'janda' => $janda,'scripts' =>array());
		$this->template->load('pegawai/static','pegawai/janda', $data);
	}

	public function duda()
	{
		$userData = $this->session->userdata();
		$duda = $this->m_pegawai->duda()->result();
		
			$data = array('nama' => $userData['nama'],'level' => $userData['level'],'duda' => $duda,'scripts' =>array());
		$this->template->load('pegawai/static','pegawai/duda', $data);
	}

}