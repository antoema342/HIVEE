<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Datalowongan_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}
	public function lowonganaktif(){
			$this->db->select('*');
			$this->db->from('lowongan');
			$this->db->join('perusahaan','perusahaan.id_perusahaan=lowongan.id_perusahaan');
			$this->db->where('status_low','Aktif');
			$query = $this->db->get();

			return $query->result();
	}
	public function lowonganwhere($id_lowongan){
			$this->db->select('*');
			$this->db->from('lowongan');
			$this->db->join('perusahaan','perusahaan.id_perusahaan=lowongan.id_perusahaan');
			$this->db->where('id_lowongan',$id_lowongan);
			$query = $this->db->get();

			return $query->result();
	}
	public function lowonganaktifwhere($id_perusahaan){
			$this->db->select('*');
			$this->db->from('lowongan');
			$this->db->join('perusahaan','perusahaan.id_perusahaan=lowongan.id_perusahaan');
			$this->db->where('lowongan.id_perusahaan',$id_perusahaan);
			$this->db->where('status_low','Aktif');
			$query = $this->db->get();

			return $query->result();
	}
	public function lowongannonaktifwhere($id_perusahaan){
			$this->db->select('*');
			$this->db->from('lowongan');
			$this->db->join('perusahaan','perusahaan.id_perusahaan=lowongan.id_perusahaan');
			$this->db->where('lowongan.id_perusahaan',$id_perusahaan);
			$this->db->where('status_low','NonAktif');
			$query = $this->db->get();

			return $query->result();
	}
	public function lowongannonaktif(){
			$this->db->select('*');
			$this->db->from('lowongan');
			$this->db->join('perusahaan','perusahaan.id_perusahaan=lowongan.id_perusahaan');
			$this->db->where('status_low','NonAktif');
			$query = $this->db->get();

			return $query->result();
	}
	public function aktifkanlowongan($id_lowongan){
	$data = array (
			'status_low'   => 'Aktif',
		);

		$this->db->where('id_lowongan',$id_lowongan);
		$this->db->limit(1);
		return $this->db->update('lowongan',$data);
	}
	public function nonaktifkanlowongan($id_lowongan){
	$data = array (
			'status_low'   => 'NonAktif',
		);

		$this->db->where('id_lowongan',$id_lowongan);
		$this->db->limit(1);
		return $this->db->update('lowongan',$data);
	}
	public function TambahLowongan($table,$data)
	{
		return $this->db->insert($table,$data);
	}
	public function datalowongan($id_lowongan)
	{
		$this->db->select('*');
		$this->db->from('lamaran');
		//$this->db->join('perusahaan','perusahaan.id_perusahaan=lamaran.id_perusahaan');
		$this->db->join('lowongan','lowongan.id_lowongan=lamaran.id_lowongan');
		$this->db->join('kandidat','kandidat.id_kandidat=lamaran.id_kandidat');
		$this->db->where('lowongan.id_lowongan',$id_lowongan);
		$query = $this->db->get();
		return $query->result();
	}
	public function daftarperusahaan($id_lowongan)
	{
		$this->db->select('*');
		$this->db->from('perusahaan');
		$this->db->join('lowongan','lowongan.id_perusahaan=perusahaan.id_perusahaan');
		$this->db->where('lowongan.id_lowongan',$id_lowongan);
		$query = $this->db->get();
		return $query->result();
	}
	public function Jumlahlowongan()
		{

			$this->db->select('*');
			$this->db->from('lowongan');
			$this->db->where('status_low','Aktif');
			$query = $this->db->get();
			return $query->num_rows();
		}
		public function aktifwhere($id_perusahaan)
		{

			$this->db->select('*');
			$this->db->from('lowongan');
			$this->db->where('status_low','Aktif');
			$this->db->where('id_perusahaan',$id_perusahaan);
			$query = $this->db->get();
			return $query->num_rows();
		}
		public function nonaktifwhere($id_perusahaan)
		{

			$this->db->select('*');
			$this->db->from('lowongan');
			$this->db->where('status_low','NonAktif');
			$this->db->where('id_perusahaan',$id_perusahaan);
			$query = $this->db->get();
			return $query->num_rows();
		}
		public function lowonganarray($id_lowongan){
			$this->db->select('*');
			$this->db->from('lowongan');
			$this->db->where('id_lowongan',$id_lowongan);
			$query = $this->db->get();

			return $query->result_array();
	}
}