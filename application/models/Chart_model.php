<?php
class Chart_model extends CI_Model{
	
public function GetPie(){
$query=$this->db->query("select * from penjualan;");
return $query;
}
}
?>