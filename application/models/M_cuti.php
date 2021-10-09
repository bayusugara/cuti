<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_cuti extends CI_Model {

	public function tampilcutipribadi($nik){
		$data = $this->db->query("SELECT *,(cuti.status) as sttus FROM cuti left join(pegawai)on cuti.nik=pegawai.nik where cuti.nik='$nik' and cuti.status='0' order by idcuti DESC");
		return $data;
	}

	public function riwayat($nik){
		$data = $this->db->query("SELECT *,(cuti.status) as sttus FROM cuti left join(pegawai)on cuti.nik=pegawai.nik where cuti.nik='$nik' and cuti.status='1' order by idcuti DESC");
		return $data;
	}

	public function ambildatacetak($idcuti){
		$data = $this->db->query("SELECT * FROM cuti left join(pegawai)on cuti.nik=pegawai.nik where cuti.idcuti='$idcuti' order by idcuti DESC");
		return $data;
	}

	public function tampilpending() {
		$data = $this->db->query("SELECT * from cuti left join(pegawai)on cuti.nik=pegawai.nik where cuti.status='0' order by idcuti DESC");
		return $data;
	}

	public function tampilapproved() {
		$data = $this->db->query("SELECT * from cuti left join(pegawai)on cuti.nik=pegawai.nik where cuti.status='1' order by idcuti DESC");
		return $data;
	}

	public function tampilteruskan() {
		$data = $this->db->query("SELECT * from cuti left join(pegawai)on cuti.nik=pegawai.nik where cuti.status='3' order by idcuti DESC");
		return $data;
	}

	public function cutiterbaru($nik){
		$data = $this->db->query("SELECT * FROM cuti where nik='$nik' AND status = '1' order by idcuti DESC LIMIT 1");
		return $data;
	}

	public function update($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	public function hapus($where,$table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}

	public function tambah($data,$table)
	{
		$this->db->insert($table, $data);
	}

	public function hitungpending() {
		$jumlah = $this->db->query("SELECT status, COUNT(status) AS jumlah FROM cuti  WHERE status='0' GROUP BY status ");
		return $jumlah;
	}

	public function hitungapproved() {
		$jumlah = $this->db->query("SELECT status, COUNT(status) AS jumlah FROM cuti  WHERE status='1' GROUP BY status ");
		return $jumlah;
	}

	public function hitungteruskan() {
		$jumlah = $this->db->query("SELECT status, COUNT(status) AS jumlah FROM cuti  WHERE status='3' GROUP BY status ");
		return $jumlah;
	}

	public function hitungtolak() {
		$jumlah = $this->db->query("SELECT status, COUNT(status) AS jumlah FROM cuti  WHERE status='2' GROUP BY status ");
		return $jumlah;
	}

	public function logikapengajuan($nik) {
		$data = $this->db->query("SELECT * FROM cuti left join pegawai on cuti.nik=pegawai.nik where cuti.nik='$nik' AND cuti.status ='0'");
		return $data;	
	}
}