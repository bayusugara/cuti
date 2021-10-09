<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model {

	public function validasi($nik, $password) {
			$query = $this->db->query("SELECT * from auth left join(pegawai)on auth.nik=pegawai.nik where pegawai.nik='$nik' AND auth.password='$password'");
			return $query;
		}

	}