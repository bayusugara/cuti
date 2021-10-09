<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
	{
		parent:: __construct();
		if ($this->session->userdata('level') !== '1') {
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

		$hpending = $this->m_cuti->hitungpending()->result();
		$happroved = $this->m_cuti->hitungapproved()->result();

			$data = array('nama' => $userData['nama'],'level' => $userData['level'],'user' => $user,'pegawai' => $pegawai,'hpending'=>$hpending,'happroved'=>$happroved,'scripts' =>array());
		$this->template->load('tatausaha/static','tatausaha/user', $data);
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
		redirect('tatausaha/user');
	}

	public function hapus($idauth)
	{
		$where = array('idauth' => $idauth);
		$this->m_user->hapus($where,'auth');
		redirect('tatausaha/user');
	}

	public function update()
	{
		$idauth = $this->input->post('idauth');
		$password = md5($this->input->post('password'));
		$level = $this->input->post('level');

		$data = array ('password'=>$password,'level'=>$level);
		$where = array ('idauth'=>$idauth);
		$this->m_user->update($where,$data,'auth');
		redirect('tatausaha/user');
	}
}