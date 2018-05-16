<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');

	/**
	* 
	*/
	class  Home extends CI_Controller
	{
		public function index ()
		{
			$data['kandidat'] = $this->Daftaruser_model->JumlahKandidat();
			$data['perusahaan'] = $this->Daftaruser_model->JumlahPerusahaan();
			//$data['lowongan']  = $this->Daftaruser_model->JumlahLowongan();
			$this->load->view('home_pt/header');
			$this->load->view('home_pt/content_pt',$data);
			$this->load->view('home_pt/footer');
		}
		public function home_kandidat ()
		{
			
			$this->load->view('home_kandidat/header');
			$this->load->view('home_kandidat/content');
			$this->load->view('home_kandidat/footer');

		}
	}

?>