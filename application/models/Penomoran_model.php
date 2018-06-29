<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penomoran_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}
	public function IDDaftar()
	{
		 $this->db->select("RIGHT(id_kandidat,4) AS kode ");
    	 $this->db->order_by('id_kandidat', 'DESC');
  		 $this->db->limit(1);
		 $query = $this->db->get('kandidat');
         if($query->num_rows()>0){
         $data = $query->row();
         $kode = intval($data->kode)+1;
 	}else{
	$kode = 1;
    }
    $kodemax = str_pad($kode,4,"0",STR_PAD_LEFT);
    $kodejadi  = "KN".$kodemax;
    return $kodejadi;
// $kodejadi="KN0001";
// 		return $kodejadi;
	}
	public function IDDaftarPerusahaan()
	{
		 $this->db->select("RIGHT(id_perusahaan,4) AS kode ");
    	 $this->db->order_by('id_perusahaan', 'DESC');
  		 $this->db->limit(1);
		 $query = $this->db->get('perusahaan');
         if($query->num_rows()>0){
         $data = $query->row();
         $kode = intval($data->kode)+1;
 	}else{
	$kode = 1;
    }
    $kodemax = str_pad($kode,4,"0",STR_PAD_LEFT);
    $kodejadi  = "PT".$kodemax;
    return $kodejadi;
// $kodejadi="KN0001";
// 		return $kodejadi;
	}
    public function IDLowongan()
    {
         $this->db->select("RIGHT(id_lowongan,4) AS kode ");
         $this->db->order_by('id_lowongan', 'DESC');
         $this->db->limit(1);
         $query = $this->db->get('lowongan');
         if($query->num_rows()>0){
         $data = $query->row();
         $kode = intval($data->kode)+1;
    }else{
    $kode = 1;
    }
    $kodemax = str_pad($kode,4,"0",STR_PAD_LEFT);
    $kodejadi  = "LW".$kodemax;
    return $kodejadi;
// $kodejadi="KN0001";
//      return $kodejadi;
    }
    public function IDPengalaman()
    {
         $this->db->select("RIGHT(id_pengalaman,4) AS kode ");
         $this->db->order_by('id_pengalaman', 'DESC');
         $this->db->limit(1);
         $query = $this->db->get('pengalaman');
         if($query->num_rows()>0){
         $data = $query->row();
         $kode = intval($data->kode)+1;
    }else{
    $kode = 1;
    }
    $kodemax = str_pad($kode,4,"0",STR_PAD_LEFT);
    $kodejadi  = "PN".$kodemax;
    return $kodejadi;
// $kodejadi="KN0001";
//      return $kodejadi;
    }
    public function IDlamaran()
    {
         $this->db->select("RIGHT(id_lamaran,4) AS kode ");
         $this->db->order_by('id_lamaran', 'DESC');
         $this->db->limit(1);
         $query = $this->db->get('lamaran');
         if($query->num_rows()>0){
         $data = $query->row();
         $kode = intval($data->kode)+1;
    }else{
    $kode = 1;
    }
    $kodemax = str_pad($kode,4,"0",STR_PAD_LEFT);
    $kodejadi  = "LM".$kodemax;
    return $kodejadi;
// $kodejadi="KN0001";
//      return $kodejadi;
    }
    
    
}
?>