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
}