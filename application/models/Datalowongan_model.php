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
}