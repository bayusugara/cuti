<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_laporan extends CI_Model {

	public function semuapegawai()
	{
		$data = $this->db->query("SELECT * FROM pegawai ORDER BY nama ASC");
		return $data;
	}

	public function tampilpegawai($status)
	{
		$data = $this->db->query("SELECT * FROM pegawai WHERE pendidikan='$status' ORDER BY nama ASC");
		return $data;
	}

	public function tampilcuti($awal,$akhir)
	{
		$data = $this->db->query("SELECT *,(cuti.status) as sttus FROM cuti left join(pegawai)on cuti.nik=pegawai.nik WHERE cuti.status='1' AND tanggal between '$awal' AND '$akhir' ORDER BY nama ASC");
		return $data;
	}
}