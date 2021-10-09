<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cuti extends CI_Controller {

	public function __construct()
	{
		parent:: __construct();
		if ($this->session->userdata('level') !== '2') {
			redirect('login');
		}
		$this->load->model('m_cuti');
	}

	public function index()
	{
		$userData = $this->session->userdata();
		$nama = $userData['nama'];
		$level = $userData['level'];
		$nik = $userData['nik'];

		$tampil = $this->m_cuti->tampilcutipribadi($nik)->result();
		$logika = $this->m_cuti->logikapengajuan($nik);
		$cutiterbaru = $this->m_cuti->cutiterbaru($nik);

			$data = array('nik'=>$nik,'cutiterbaru'=>$cutiterbaru,'logika'=>$logika,'nama' => $nama,'level' => $level,'tampil'=>$tampil,'scripts' =>array());
		$this->template->load('pegawai/static','pegawai/cuti', $data);
	}

	public function tambah()
	{
		$nik = $this->session->userdata('nik');
		$keterangan = $this->input->post('keterangan');
		$jenis = $this->input->post('jenis');
		$tanggal = date('Y-m-d');
		$mulaicuti = $this->input->post('mulaicuti');
		$akhircuti = $this->input->post('akhircuti');
 
		$data = array(
			'nik' => $nik,
			'keterangan' => $keterangan,
			'jeniscuti' => $jenis,
			'tanggal' => $tanggal,
			'mulaicuti' => $mulaicuti,
			'akhircuti' => $akhircuti
			);
		$this->m_cuti->tambah($data,'cuti');
		redirect('pegawai/cuti');
	}

	public function hapus($idcuti)
	{
		$where = array('idcuti' => $idcuti);
		$this->m_cuti->hapus($where,'cuti');
		redirect('pegawai/cuti');
	}

	public function preview($idcuti)
	{
		$userData = $this->session->userdata();
		$tampil = $this->m_cuti->ambildatacetak($idcuti)->result();

		$data = array('nama' => $userData['nama'],'level' => $userData['level'],'tampil' => $tampil,'scripts' =>array());
		
		$this->template->load('pegawai/static','pegawai/previewcuti', $data);
	}

	public function pdf($idcuti)
	{
		ob_start();
		$tampil = $this->m_cuti->ambildatacetak($idcuti)->result();
		$data = array('tampil'=>$tampil);
		$this->load->view('pegawai/pdfcuti', $data);
		$html = ob_get_contents();
		ob_end_clean();
		require_once('./assets/html2pdf/html2pdf.class.php');
		$pdf = new HTML2PDF('P','A4','en');
		$pdf->WriteHTML($html);
		foreach ($tampil as $a) {
			$pdf->Output('Cuti '.$a->nama.'.pdf', 'D');
		}
		  
	}

	public function riwayat()
	{
		$nama = $this->session->userdata('nama');
		$level = $this->session->userdata('level');
		$nik =$this->session->userdata('nik');

		$tampil = $this->m_cuti->riwayat($nik)->result();

			$data = array('nik'=>$nik,'nama' => $nama,'level' => $level,'tampil'=>$tampil,'scripts' =>array());
		$this->template->load('pegawai/static','pegawai/riwayatcuti', $data);
	}
}