<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cuti extends CI_Controller {

	public function __construct()
	{
		parent:: __construct();
		if ($this->session->userdata('level') !== '4') {
			redirect('login');
		}
		$this->load->model('m_cuti');
	}

	public function pending()
	{
		$userData = $this->session->userdata();
		$teruskan = $this->m_cuti->tampilteruskan()->result();
		$hteruskan = $this->m_cuti->hitungteruskan()->result();
			$data = array('nama' => $userData['nama'],'level' => $userData['level'],'teruskan' => $teruskan,'hteruskan' => $hteruskan,'scripts' =>array());
		$this->template->load('kabapas/static','kabapas/cuti', $data);
	}

	public function updatepending()
	{
		$idcuti = $this->input->post('idcuti');
		$status = $this->input->post('status');

		$data = array ('status'=>$status);
		$where = array ('idcuti'=>$idcuti);
		$this->m_cuti->update($where,$data,'cuti');
		redirect('kabapas/cuti/pending');
	}

	public function updateapproved()
	{
		$idcuti = $this->input->post('idcuti');
		$status = $this->input->post('status');

		$data = array ('status'=>$status);
		$where = array ('idcuti'=>$idcuti);
		$this->m_cuti->update($where,$data,'cuti');
		redirect('kabapas/cuti/approved');
	}

	public function preview($idcuti)
	{
		$userData = $this->session->userdata();
		$tampil = $this->m_cuti->ambildatacetak($idcuti)->result();
		$hpending = $this->m_cuti->hitungpending()->result();
		$happroved = $this->m_cuti->hitungapproved()->result();

		$data = array('nama' => $userData['nama'],'level' => $userData['level'],'tampil' => $tampil,'hpending'=>$hpending,'happroved'=>$happroved,'scripts' =>array());
		
		$this->template->load('kabapas/static','kabapas/lihatcuti', $data);
	}

	public function pdf($idcuti)
	{
		ob_start();
		$tampil = $this->m_cuti->ambildatacetak($idcuti)->result();
		$data = array('tampil'=>$tampil);
		$this->load->view('kabapas/pdfcuti', $data);
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