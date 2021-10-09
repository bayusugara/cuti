<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_home extends CI_Model {

	public function hitungpegawai() {
		$jumlah = $this->db->query("SELECT Count(*) as jumlah From pegawai");
		return $jumlah;
	}

	public function hitungmenikah() {
		$jumlah = $this->db->query("SELECT status, COUNT(status) AS jumlah FROM pegawai WHERE status='Menikah' GROUP BY status ");
		return $jumlah;
	}

	public function hitunglajang() {
		$jumlah = $this->db->query("SELECT status, COUNT(status) AS jumlah FROM pegawai WHERE status='Lajang' GROUP BY status ");
		return $jumlah;
	}

	public function hitungjanda() {
		$jumlah = $this->db->query("SELECT status, COUNT(status) AS jumlah FROM pegawai WHERE status='Janda' GROUP BY status ");
		return $jumlah;
	}

	public function hitungduda() {
		$jumlah = $this->db->query("SELECT status, COUNT(status) AS jumlah FROM pegawai WHERE status='Duda' GROUP BY status ");
		return $jumlah;
	}
}