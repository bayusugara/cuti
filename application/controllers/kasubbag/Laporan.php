<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {

	public function __construct()
	{
		parent:: __construct();
		if ($this->session->userdata('level') !== '3') {
			redirect('login');
		}
		$this->load->model('m_laporan');
		$this->load->model('m_cuti');
	}

	public function pegawai()
	{
	  	$userData = $this->session->userdata();

	  	$hpending = $this->m_cuti->hitungpending()->result();
		$happroved = $this->m_cuti->hitungapproved()->result();

		$data = array ('nama' => $userData['nama'],'level' => $userData['level'],'hpending'=>$hpending,'happroved'=>$happroved,'scripts' =>array());
		$this->template->load('kasubbag/static','kasubbag/laporanpegawai',$data);
	}

	public function cuti()
	{
	  	$userData = $this->session->userdata();

	  	$hpending = $this->m_cuti->hitungpending()->result();
		$happroved = $this->m_cuti->hitungapproved()->result();

		$data = array ('nama' => $userData['nama'],'level' => $userData['level'],'hpending'=>$hpending,'happroved'=>$happroved,'scripts' =>array());
		$this->template->load('kasubbag/static','kasubbag/laporancuti',$data);
	}

	public function mutasi()
	{
	  	$userData = $this->session->userdata();

	  	$hpending = $this->m_cuti->hitungpending()->result();
		$happroved = $this->m_cuti->hitungapproved()->result();

		$data = array ('nama' => $userData['nama'],'level' => $userData['level'],'hpending'=>$hpending,'happroved'=>$happroved,'scripts' =>array());
		$this->template->load('kasubbag/static','kasubbag/laporanmutasi',$data);
	}

	/*public function laporansemuapegawai()
	{
	  	$nama = $this->session->userdata('nama');
		$level = $this->session->userdata('level');

		$hpending = $this->m_cuti->hitungpending()->result();
		$happroved = $this->m_cuti->hitungapproved()->result();
		$hhpending = $this->m_mutasi->hitungpending()->result();
		$hhapproved = $this->m_mutasi->hitungapproved()->result();
		
		//$tampiltanggal = $this->m_laporantransaksi->get(array("tipe "=>1))->result();
		$tampil = $this->m_laporan->semuapegawai()->result();

		$data = array('nama' => $nama,'level' => $level,'semuapegawai' => $tampil,'hpending'=>$hpending,'happroved'=>$happroved,'hhpending' => $hhpending,'hhapproved' => $hhapproved,'scripts' => array('js/provider/general.js','plugin/form-validation/jquery.validate.min.js','plugin/form-validation/extjquery.validate.min.js','plugin/bootbox/bootbox.js','plugin/datatables-plugins/dataTables.buttons.min.js','plugin/datatables-plugins/buttons.flash.min.js','plugin/datatables-plugins/jszip.min.js','plugin/datatables-plugins/pdfmake.min.js','plugin/datatables-plugins/vfs_fonts.js','js/bootstrap-datepicker.min.js','plugin/datatables-plugins/buttons.html5.min.js','plugin/datatables-plugins/buttons.colVis.min.js','plugin/bootbox/bootbox.js','plugin/datatables-plugins/buttons.print.min.js'));
		$this->template->load('admin/static','admin/previewsemuapegawai',$data);
	}*/

	public function laporanpegawai()
	{
	  	$status = $this->input->post('status');

	  	$nama = $this->session->userdata('nama');
		$level = $this->session->userdata('level');

		$hpending = $this->m_cuti->hitungpending()->result();
		$happroved = $this->m_cuti->hitungapproved()->result();
		
		//$tampiltanggal = $this->m_laporantransaksi->get(array("tipe "=>1))->result();
		$tampil = $this->m_laporan->tampilpegawai($status)->result();

		$data = array('nama' => $nama,'level' => $level,'tampilpegawai' => $tampil,'hpending'=>$hpending,'happroved'=>$happroved,'scripts' => array('js/provider/general.js','plugin/form-validation/jquery.validate.min.js','plugin/form-validation/extjquery.validate.min.js','plugin/bootbox/bootbox.js','plugin/datatables-plugins/dataTables.buttons.min.js','plugin/datatables-plugins/buttons.flash.min.js','plugin/datatables-plugins/jszip.min.js','plugin/datatables-plugins/pdfmake.min.js','plugin/datatables-plugins/vfs_fonts.js','js/bootstrap-datepicker.min.js','plugin/datatables-plugins/buttons.html5.min.js','plugin/datatables-plugins/buttons.colVis.min.js','plugin/bootbox/bootbox.js','plugin/datatables-plugins/buttons.print.min.js'));
		$this->template->load('kasubbag/static','kasubbag/previewpegawai',$data);
	}

	public function laporancuti()
	{
		$awal = $this->input->post('tglawal');
	  	$akhir = $this->input->post('tglakhir');

	  	$nama = $this->session->userdata('nama');
		$level = $this->session->userdata('level');

		$hpending = $this->m_cuti->hitungpending()->result();
		$happroved = $this->m_cuti->hitungapproved()->result();
		
		//$tampiltanggal = $this->m_laporantransaksi->get(array("tipe "=>1))->result();
		$tampil = $this->m_laporan->tampilcuti($awal,$akhir)->result();

		$data = array('nama' => $nama,'level' => $level,'tampil' => $tampil,'hpending'=>$hpending,'happroved'=>$happroved,'scripts' => array('js/provider/general.js','plugin/form-validation/jquery.validate.min.js','plugin/form-validation/extjquery.validate.min.js','plugin/bootbox/bootbox.js','plugin/datatables-plugins/dataTables.buttons.min.js','plugin/datatables-plugins/buttons.flash.min.js','plugin/datatables-plugins/jszip.min.js','plugin/datatables-plugins/pdfmake.min.js','plugin/datatables-plugins/vfs_fonts.js','js/bootstrap-datepicker.min.js','plugin/datatables-plugins/buttons.html5.min.js','plugin/datatables-plugins/buttons.colVis.min.js','plugin/bootbox/bootbox.js','plugin/datatables-plugins/buttons.print.min.js'));
		$this->template->load('kasubbag/static','kasubbag/previewcuti',$data);
	}

	public function laporanmutasi()
	{
	  	$awal = $this->input->post('tglawal');
	  	$akhir = $this->input->post('tglakhir');

	  	$nama = $this->session->userdata('nama');
		$level = $this->session->userdata('level');

		$hpending = $this->m_cuti->hitungpending()->result();
		$happroved = $this->m_cuti->hitungapproved()->result();
		
		//$tampiltanggal = $this->m_laporantransaksi->get(array("tipe "=>1))->result();
		$tampil = $this->m_laporan->tampilmutasi($awal,$akhir)->result();

		$data = array('nama' => $nama,'level' => $level,'tampil' => $tampil,'hpending'=>$hpending,'happroved'=>$happroved,'scripts' => array('js/provider/general.js','plugin/form-validation/jquery.validate.min.js','plugin/form-validation/extjquery.validate.min.js','plugin/bootbox/bootbox.js','plugin/datatables-plugins/dataTables.buttons.min.js','plugin/datatables-plugins/buttons.flash.min.js','plugin/datatables-plugins/jszip.min.js','plugin/datatables-plugins/pdfmake.min.js','plugin/datatables-plugins/vfs_fonts.js','js/bootstrap-datepicker.min.js','plugin/datatables-plugins/buttons.html5.min.js','plugin/datatables-plugins/buttons.colVis.min.js','plugin/bootbox/bootbox.js','plugin/datatables-plugins/buttons.print.min.js'));
		$this->template->load('kasubbag/static','kasubbag/previewmutasi',$data);
	}
}
