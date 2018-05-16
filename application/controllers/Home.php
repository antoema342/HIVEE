<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');

	/**
	* 
	*/
	class  Home extends CI_Controller
	{
		public function index ()
		{
			$this->load->view('home/header');
			$this->load->view('home/home_pt/content_pt');
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