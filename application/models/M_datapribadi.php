<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_datapribadi extends CI_Model {

	public function tampil($nik) {
		$query = $this->db->query("SELECT * from pegawai where nik='$nik'");
		return $query;
	}

	public function updatedatapribadi($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	public function updatepassword($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

}