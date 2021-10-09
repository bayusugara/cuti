<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai extends CI_Controller {

	public function __construct()
	{
		parent:: __construct();
		if ($this->session->userdata('level') !== '4') {
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

		$hteruskan = $this->m_cuti->hitungteruskan()->result();

		$data = array('nama' => $userData['nama'],'level' => $userData['level'],'pegawai' => $pegawai,'hteruskan'=>$hteruskan,'jabatan' => $tampiljabatan,'scripts' =>array());
		$this->template->load('kabapas/static','kabapas/pegawai', $data);
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
		redirect('kabapas/pegawai');
	}

	public function hapus($nik)
	{
		$where = array('nik' => $nik);
		$this->m_pegawai->hapus($where,'pegawai');
		redirect('kabapas/pegawai');
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
		redirect('kabapas/pegawai');
	}

	public function detailpegawai($nik)
	{
		$where = $nik;
		$pegawai = $this->m_pegawai->detailpegawai($where)->result();

		$hteruskan = $this->m_cuti->hitungteruskan()->result();

		$data['nama'] = $this->session->userdata('nama');
		$data['level'] = $this->session->userdata('level');
		$data['pegawai'] = $pegawai;
		$data['hteruskan'] = $hteruskan;
		$data['scripts'] = array();
		$this->template->load('kabapas/static','kabapas/detailpegawai',$data);
	}
}