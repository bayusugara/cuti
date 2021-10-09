<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {

	public function __construct()
	{
		parent:: __construct();
		if ($this->session->userdata('level') !== '4') {
			redirect('login');
		}
		$this->load->model('m_laporan');
		$this->load->model('m_cuti');
	}

	public function pegawai()
	{
	  	$userData = $this->session->userdata();

		$hteruskan = $this->m_cuti->hitungteruskan()->result();

		$data = array ('nama' => $userData['nama'],'level' => $userData['level'],'hteruskan'=>$hteruskan,'scripts' =>array());
		$this->template->load('kabapas/static','kabapas/laporanpegawai',$data);
	}

	public function cuti()
	{
	  	$userData = $this->session->userdata();

		$hteruskan = $this->m_cuti->hitungteruskan()->result();

		$data = array ('nama' => $userData['nama'],'level' => $userData['level'],'hteruskan'=>$hteruskan,'scripts' =>array());
		$this->template->load('kabapas/static','kabapas/laporancuti',$data);
	}

	public function laporanpegawai()
	{
	  	$status = $this->input->post('status');

	  	$nama = $this->session->userdata('nama');
		$level = $this->session->userdata('level');

		$hteruskan = $this->m_cuti->hitungteruskan()->result();
		
		//$tampiltanggal = $this->m_laporantransaksi->get(array("tipe "=>1))->result();
		$tampil = $this->m_laporan->tampilpegawai($status)->result();

		$data = array('nama' => $nama,'level' => $level,'tampilpegawai' => $tampil,'hteruskan'=>$hteruskan,'scripts' => array('js/provider/general.js','plugin/form-validation/jquery.validate.min.js','plugin/form-validation/extjquery.validate.min.js','plugin/bootbox/bootbox.js','plugin/datatables-plugins/dataTables.buttons.min.js','plugin/datatables-plugins/buttons.flash.min.js','plugin/datatables-plugins/jszip.min.js','plugin/datatables-plugins/pdfmake.min.js','plugin/datatables-plugins/vfs_fonts.js','js/bootstrap-datepicker.min.js','plugin/datatables-plugins/buttons.html5.min.js','plugin/datatables-plugins/buttons.colVis.min.js','plugin/bootbox/bootbox.js','plugin/datatables-plugins/buttons.print.min.js'));
		$this->template->load('kabapas/static','kabapas/previewpegawai',$data);
	}

	public function laporancuti()
	{
		$awal = $this->input->post('tglawal');
	  	$akhir = $this->input->post('tglakhir');

	  	$nama = $this->session->userdata('nama');
		$level = $this->session->userdata('level');

		$hteruskan = $this->m_cuti->hitungteruskan()->result();
		
		//$tampiltanggal = $this->m_laporantransaksi->get(array("tipe "=>1))->result();
		$tampil = $this->m_laporan->tampilcuti($awal,$akhir)->result();

		$data = array('nama' => $nama,'level' => $level,'tampil' => $tampil,'hteruskan'=>$hteruskan,'scripts' => array());
		$this->template->load('kabapas/static','kabapas/previewcuti',$data);
	}

	public function laporanmutasi()
	{
	  	$awal = $this->input->post('tglawal');
	  	$akhir = $this->input->post('tglakhir');

	  	$nama = $this->session->userdata('nama');
		$level = $this->session->userdata('level');

		$hteruskan = $this->m_cuti->hitungteruskan()->result();
		
		//$tampiltanggal = $this->m_laporantransaksi->get(array("tipe "=>1))->result();
		$tampil = $this->m_laporan->tampilmutasi($awal,$akhir)->result();

		$data = array('nama' => $nama,'level' => $level,'tampil' => $tampil,'hteruskan'=>$hteruskan,'scripts' => array('js/provider/general.js','plugin/form-validation/jquery.validate.min.js','plugin/form-validation/extjquery.validate.min.js','plugin/bootbox/bootbox.js','plugin/datatables-plugins/dataTables.buttons.min.js','plugin/datatables-plugins/buttons.flash.min.js','plugin/datatables-plugins/jszip.min.js','plugin/datatables-plugins/pdfmake.min.js','plugin/datatables-plugins/vfs_fonts.js','js/bootstrap-datepicker.min.js','plugin/datatables-plugins/buttons.html5.min.js','plugin/datatables-plugins/buttons.colVis.min.js','plugin/bootbox/bootbox.js','plugin/datatables-plugins/buttons.print.min.js'));
		$this->template->load('kabapas/static','kabapas/previewmutasi',$data);
	}
}
