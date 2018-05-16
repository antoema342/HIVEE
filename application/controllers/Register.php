<?php 	
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class Register extends CI_Controller
 {
 	public function register_perusahaan()
		{
			$this->load->view('home/header1');
			$this->load->view('home/home_pt/register');
			$this->load->view('home/footer');
		}
	public function register_kandidat()
		{
			$this->load->view('home/header1');
			$this->load->view('home/home_kandidat/register');
			$this->load->view('home/footer');
		}
 }

?>