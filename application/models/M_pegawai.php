<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pegawai extends CI_Model {

	public function tampil() {
		$data = $this->db->query("SELECT * FROM pegawai order by nama ASC");
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

	public function detailpegawai($where){		
		$data =  $this->db->query("SELECT * FROM pegawai where nik='$where'");
		return $data;
	}

	public function tampiljabatan(){		
		$data =  $this->db->query("SELECT * FROM jabatan order by jabatan");
		return $data;
	}
}