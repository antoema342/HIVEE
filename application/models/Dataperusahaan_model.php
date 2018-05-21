<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dataperusahaan_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}
	public function perusahaanaktif(){
			$this->db->select('*');
			$this->db->from('perusahaan');
			$this->db->where('status','Aktif');
			$query = $this->db->get();

			return $query->result();
	}
	public function perusahaannonaktif(){
			$this->db->select('*');
			$this->db->from('perusahaan');
			$this->db->where('status','NonAktif');
			$query = $this->db->get();

			return $query->result();
	}
}