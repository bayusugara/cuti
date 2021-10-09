<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cuti extends CI_Controller {

	public function __construct()
	{
		parent:: __construct();
		if ($this->session->userdata('level') !== '1') {
			redirect('login');
		}
		$this->load->model('m_cuti');
	}

	public function cetakcuti()
	{
		$userData = $this->session->userdata();
		$approved = $this->m_cuti->tampilapproved()->result();
		$happroved = $this->m_cuti->hitungapproved()->result();
			$data = array('nama' => $userData['nama'],'level' => $userData['level'],'approved' => $approved,'happroved' => $happroved,'scripts' =>array());
		$this->template->load('tatausaha/static','tatausaha/cetakcuti', $data);
	}

	public function preview($idcuti)
	{
		$userData = $this->session->userdata();
		$tampil = $this->m_cuti->ambildatacetak($idcuti)->result();
		$hpending = $this->m_cuti->hitungpending()->result();
		$happroved = $this->m_cuti->hitungapproved()->result();

		$data = array('nama' => $userData['nama'],'level' => $userData['level'],'tampil' => $tampil,'hpending'=>$hpending,'happroved'=>$happroved,'scripts' =>array());
		
		$this->template->load('tatausaha/static','tatausaha/lihatcuti', $data);
	}

	public function pdf($idcuti)
	{
		ob_start();
		$tampil = $this->m_cuti->ambildatacetak($idcuti)->result();
		$data = array('tampil'=>$tampil);
		$this->load->view('tatausaha/pdfcuti', $data);
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