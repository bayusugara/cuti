<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
	{
		parent:: __construct();
		if ($this->session->userdata('level') !== '4') {
			redirect('login');
		}

		$this->load->model('m_user');
		$this->load->model('m_pegawai');
		$this->load->model('m_cuti');
	}

	public function index()
	{
		$userData = $this->session->userdata();
		$pegawai = $this->m_pegawai->tampil()->result();
		$user = $this->m_user->tampil()->result();

		$hteruskan = $this->m_cuti->hitungteruskan()->result();

			$data = array('nama' => $userData['nama'],'level' => $userData['level'],'user' => $user,'pegawai' => $pegawai,'hteruskan'=>$hteruskan,'scripts' =>array());
		$this->template->load('kabapas/static','kabapas/user', $data);
	}

	public function tambah()
	{
		$nik = $this->input->post('nik');
		$password = md5($this->input->post('password'));
		$level = $this->input->post('level');
 
		$data = array(
			'nik' => $nik,
			'password' => $password,
			'level' => $level
			);
		$this->m_user->tambah($data,'auth');
		redirect('kabapas/user');
	}

	public function hapus($idauth)
	{
		$where = array('idauth' => $idauth);
		$this->m_user->hapus($where,'auth');
		redirect('kabapas/user');
	}

	public function update()
	{
		$idauth = $this->input->post('idauth');
		$password = md5($this->input->post('password'));
		$level = $this->input->post('level');

		$data = array ('password'=>$password,'level'=>$level);
		$where = array ('idauth'=>$idauth);
		$this->m_user->update($where,$data,'auth');
		redirect('kabapas/user');
	}
}