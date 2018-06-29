<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');

	/**
	* 
	*/
	class  Home extends CI_Controller
	{
		public function index ()
		{
			$id_perusahaan=$this->session->userdata('id_perusahaan');
		$data['perusahaan']=$this->Dataperusahaan_model->profilperusahaan($id_perusahaan);
		$data['jmlkandidat']=$this->Datakandidat_model->Jumlahkandidat();
		$data['jmlperusahaan']=$this->Dataperusahaan_model->Jumlahperusahaan();
		$data['jmllowongan']=$this->Datalowongan_model->Jumlahlowongan();
		$this->load->view('home/header');
		$this->load->view('home/home_pt/content_pt',$data);
			$this->load->view('home/footer');
		}

		public function home_kandidat ()
		{
			$this->load->view('home/home_kandidat/header');
			$this->load->view('home/home_kandidat/content');
			$this->load->view('home/footer');

		}
	}

?>