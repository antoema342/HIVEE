<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Datakandidat_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}
	public function kandidataktif(){
			$this->db->select('*');
			$this->db->from('kandidat');
			$this->db->where('status','Aktif');
			$query = $this->db->get();

			return $query->result();
	}
	public function kandidatnonaktif(){
			$this->db->select('*');
			$this->db->from('kandidat');
			$this->db->where('status','NonAktif');
			$query = $this->db->get();

			return $query->result();
	}
}