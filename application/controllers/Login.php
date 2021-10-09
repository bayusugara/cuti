<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent:: __construct();
		$this->load->model('m_login');
	}

	public function index()
	{
		$level = $this->session->userdata('level');
		$isLogin = $this->session->userdata('isLogin');

		if ($isLogin == TRUE) 
		{
			if ($level == '1') {
				redirect('tatausaha/home');
			}elseif ($level == '2') {
				redirect('pegawai/home');
			}elseif ($level == '3'){
				redirect('kasubbag/home');
			}else{
				redirect('kabapas/home');
			}
		}else{
			$this->load->view('login');
		}
	}
	public function do_login()
	{
		$nik = $this->input->post('nik', TRUE);
		$password = md5($this->input->post('password', TRUE));

		/*$data = array('nik' => $nik,
						'password' => $password);*/
		$hasil = $this->m_login->validasi($nik,$password);
		if ($hasil->num_rows() == 1) {
			foreach ($hasil->result() as $sess) {
				$sess_data['isLogin'] = TRUE;
				$sess_data['nik'] = $sess->nik;
				$sess_data['nama'] = $sess->nama;
				$sess_data['level'] = $sess->level;
				$this->session->set_userdata($sess_data);

				$level = $this->session->userdata('level');
			}
			if ($level == '1') {
				redirect('tatausaha/home');
			}elseif ($level == '2') {
				redirect('pegawai/home');
			}elseif ($level == '3'){
				redirect('kasubbag/home');
			}else{
				redirect('kabapas/home');
			}
		}else{
			echo "<script>alert('Gagal login: Cek NIK, password!');history.go(-1);</script>";
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('login','refresh');
	}
}
