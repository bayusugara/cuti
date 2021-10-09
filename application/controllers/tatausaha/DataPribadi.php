<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DataPribadi extends CI_Controller {

	public function __construct()
	{
		parent:: __construct();
		if ($this->session->userdata('level') !== '1') {
			redirect('login');
		}
		$this->load->model('m_datapribadi');
		$this->load->model('m_cuti');
	}

	public function profile()
	{
		$nik = $this->session->userdata('nik');
		$nama = $this->session->userdata('nama');
		$level = $this->session->userdata('level');

		$hpending = $this->m_cuti->hitungpending()->result();
		$happroved = $this->m_cuti->hitungapproved()->result();

		$tampil = $this->m_datapribadi->tampil($nik)->result();
		$data = array('nama' => $nama, 'level' => $level, 'tampil' => $tampil,'hpending' => $hpending,'happroved' => $happroved, 'scripts' =>array());
		$this->template->load('tatausaha/static','tatausaha/datapribadi',$data);
	}

	public function updatedatapribadi()
	{
		$nik = $this->input->post('nik');
		$nama = $this->input->post('nama');
		$jabatan = $this->input->post('jabatan');
		$jk = $this->input->post('jk');
		$pendidikan = $this->input->post('pendidikan');
		$tanggallahir = $this->input->post('tanggallahir');
		$status = $this->input->post('status');
		$nohp = $this->input->post('nohp');
		$agama = $this->input->post('agama');

		$data = array (
			'nama' => $nama,
			'jeniskelamin' => $jk,
			'jabatan' => $jabatan,
			'tanggallahir' => $tanggallahir,
			'pendidikan' => $pendidikan,
			'agama' => $agama,
			'status' => $status,
			'nohp' => $nohp
			);
		$where = array ('nik'=>$nik);
		$this->m_datapribadi->updatedatapribadi($where,$data,'pegawai');
		redirect('tatausaha/datapribadi/profile');
	}

	public function updatepassword()
	{
		$idauth = $this->input->post('idauth');
		$password = md5($this->input->post('password'));

		$data = array ('password'=>$password);
		$where = array ('idauth'=>$idauth);
		$this->m_datapribadi->updatepassword($where,$data,'auth');
		redirect('tatausaha/datapribadi/profile');
	}

}