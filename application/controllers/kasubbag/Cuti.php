<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cuti extends CI_Controller {

	public function __construct()
	{
		parent:: __construct();
		if ($this->session->userdata('level') !== '3') {
			redirect('login');
		}
		$this->load->model('m_cuti');
	}

	public function pending()
	{
		$userData = $this->session->userdata();
		$pending = $this->m_cuti->tampilpending()->result();
		$hpending = $this->m_cuti->hitungpending()->result();
			$data = array('nama' => $userData['nama'],'level' => $userData['level'],'pending' => $pending,'hpending' => $hpending,'scripts' =>array());
		$this->template->load('kasubbag/static','kasubbag/cuti', $data);
	}

	public function lihatcuti($idcuti)
	{
		$idcuti = $this->input->post('idcuti');
		$status = $this->input->post('status');

		$data = array ('status'=>$status);
		$where = array ('idcuti'=>$idcuti);
		$this->m_cuti->update($where,$data,'cuti');
		redirect('kasubbag/cuti/pending');
	}

	public function updatepending()
	{
		$idcuti = $this->input->post('idcuti');
		$status = $this->input->post('status');

		$data = array ('status'=>$status);
		$where = array ('idcuti'=>$idcuti);
		$this->m_cuti->update($where,$data,'cuti');
		redirect('kasubbag/cuti/pending');
	}

	public function preview($idcuti)
	{
		$userData = $this->session->userdata();
		$tampil = $this->m_cuti->ambildatacetak($idcuti)->result();
		$hpending = $this->m_cuti->hitungpending()->result();

		$data = array('nama' => $userData['nama'],'level' => $userData['level'],'tampil' => $tampil,'hpending'=>$hpending,'scripts' =>array());
		
		$this->template->load('kasubbag/static','kasubbag/lihatcuti', $data);
	}

	public function pdf($idcuti)
	{
		ob_start();
		$tampil = $this->m_cuti->ambildatacetak($idcuti)->result();
		$data = array('tampil'=>$tampil);
		$this->load->view('kasubbag/pdfcuti', $data);
		$html = ob_get_contents();
		ob_end_clean();
		require_once('./assets/html2pdf/html2pdf.class.php');
		$pdf = new HTML2PDF('P','A4','en');
		$pdf->WriteHTML($html);
		foreach ($tampil as $a) {
			$pdf->Output('Cuti '.$a->nama.'.pdf', 'D');
		}
		  
	}
}