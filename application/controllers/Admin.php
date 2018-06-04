<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if (!$this->session->has_userdata('status')) {
			redirect('login');
		}else if($this->session->userdata('role') =='perusahaan'){
			redirect('perusahaan');
		}
		else if($this->session->userdata('role') =='kandidat'){
			redirect('kandidat');
		}
	}
	public function index(){
		$data['kandidat'] = $this->Daftaruser_model->JumlahKandidat();
		$data['perusahaan'] = $this->Daftaruser_model->JumlahPerusahaan();
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/dashboard',$data);
		$this->load->view('admin/footer');
	}
	public function kandidataktif(){
		$this->load->view('admin/header');
		$data['active'] = $this->Datakandidat_model->kandidataktif();
		$this->load->view('admin/sidebar');
		$this->load->view('admin/kandidataktif',$data);
		$this->load->view('admin/footer');
	}
	public function kandidatnonaktif(){
		$this->load->view('admin/header');
		$data['nonactive'] = $this->Datakandidat_model->kandidatnonaktif();
		$this->load->view('admin/sidebar');
		$this->load->view('admin/kandidatnonaktif',$data);
		$this->load->view('admin/footer');
	}
	public function perusahaanaktif(){
		$this->load->view('admin/header');
		$data['active'] = $this->Dataperusahaan_model->perusahaanaktif();
		$this->load->view('admin/sidebar');
		$this->load->view('admin/perusahaanaktif',$data);
		$this->load->view('admin/footer');
	}
	public function perusahaannonaktif(){
		$this->load->view('admin/header');
		$data['nonactive'] = $this->Dataperusahaan_model->perusahaannonaktif();
		$this->load->view('admin/sidebar');
		$this->load->view('admin/perusahaannonaktif',$data);
		$this->load->view('admin/footer');
	}
	public function lowonganaktif(){
		$this->load->view('admin/header');
		$data['active'] = $this->Datalowongan_model->lowonganaktif();
		$this->load->view('admin/sidebar');
		$this->load->view('admin/lowonganaktif',$data);
		$this->load->view('admin/footer');
	}
	public function lowongannonaktif(){
		$this->load->view('admin/header');
		$data['nonactive'] = $this->Datalowongan_model->lowongannonaktif();
		$this->load->view('admin/sidebar');
		$this->load->view('admin/lowongannonaktif',$data);
		$this->load->view('admin/footer');
	}
	public function aktifkankandidat($id_kandidat){
			$hidupkakandidat	= $this->Datakandidat_model->aktifkankandidat($id_kandidat);

			$this->session->set_flashdata('info','true');
			redirect('admin/kandidatnonaktif');	
	}
	public function nonaktifkankandidat($id_kandidat){
			$matikankandidat	= $this->Datakandidat_model->nonaktifkankandidat($id_kandidat);

			$this->session->set_flashdata('info','true');
			redirect('admin/kandidataktif');	
	}
	public function aktifkanlowongan($id_lowongan){
			$hidupkanlowongan	= $this->Datalowongan_model->aktifkanlowongan($id_lowongan);

			$this->session->set_flashdata('info','true');
			redirect('admin/lowongannonaktif');	
	}
	public function nonaktifkanlowongan($id_lowongan){
			$matikanlowongan	= $this->Datalowongan_model->nonaktifkanlowongan($id_lowongan);

			$this->session->set_flashdata('info','true');
			redirect('admin/lowonganaktif');	
	}
	public function aktifkanperusahaan($id_perusahaan){
			$hidupkanperusahaan	= $this->Dataperusahaan_model->aktifkanperusahaan($id_perusahaan);

			$this->session->set_flashdata('info','true');
			redirect('admin/perusahaannonaktif');	
	}
	public function nonaktifkanperusahaan($id_perusahaan){
			$matikanperusahaan	= $this->Dataperusahaan_model->nonaktifkanperusahaan($id_perusahaan);

			$this->session->set_flashdata('info','true');
			redirect('admin/perusahaanaktif');	
	}
}