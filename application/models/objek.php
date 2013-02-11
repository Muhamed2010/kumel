<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Objek extends CI_Model{
	public function search($city='',$act=''){
		if($city!=''){
			$this->db->where("id_location",$city);
		}
		if($act!=''){
			$this->db->where("FIND_IN_SET('$act',terms_id) != ",0);
		}
		$query  = $this->db->get("tripify_posts");
		return $query->result();
	}
}