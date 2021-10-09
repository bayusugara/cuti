<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai extends CI_Controller {

	public function __construct()
	{
		parent:: __construct();
		if ($this->session->userdata('level') !== '3') {
			redirect('login');
		}

		$this->load->model('m_pegawai');
		$this->load->model('m_cuti');
	}

	public function index()
	{
		$userData = $this->session->userdata();
		$pegawai = $this->m_pegawai->tampil()->result();
		$tampiljabatan = $this->m_pegawai->tampiljabatan()->result();

		$hpending = $this->m_cuti->hitungpending()->result();
		$happroved = $this->m_cuti->hitungapproved()->result();

		$data = array('nama' => $userData['nama'],'level' => $userData['level'],'pegawai' => $pegawai,'hpending'=>$hpending,'happroved'=>$happroved,'jabatan' => $tampiljabatan,'scripts' =>array());
		$this->template->load('kasubbag/static','kasubbag/pegawai', $data);
	}

	public function tambah()
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
 
		$data = array(
			'nik' => $nik,
			'nama' => $nama,
			'jeniskelamin' => $jk,
			'jabatan' => $jabatan,
			'tanggallahir' => $tanggallahir,
			'pendidikan' => $pendidikan,
			'agama' => $agama,
			'status' => $status,
			'nohp' => $nohp
			);
		$this->m_pegawai->tambah($data,'pegawai');
		redirect('kasubbag/pegawai');
	}

	public function hapus($nik)
	{
		$where = array('nik' => $nik);
		$this->m_pegawai->hapus($where,'pegawai');
		redirect('kasubbag/pegawai');
	}

	public function update()
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
		$this->m_pegawai->update($where,$data,'pegawai');
		redirect('kasubbag/pegawai');
	}

	public function detailpegawai($nik)
	{
		$where = $nik;
		$pegawai = $this->m_pegawai->detailpegawai($where)->result();

		$hpending = $this->m_cuti->hitungpending()->result();
		$happroved = $this->m_cuti->hitungapproved()->result();

		$data['nama'] = $this->session->userdata('nama');
		$data['level'] = $this->session->userdata('level');
		$data['pegawai'] = $pegawai;
		$data['hpending'] = $hpending;
		$data['happroved'] = $happroved;
		$data['scripts'] = array();
		$this->template->load('kasubbag/static','kasubbag/detailpegawai',$data);
	}
}