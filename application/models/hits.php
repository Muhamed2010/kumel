<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Hits extends CI_Model{
	public function add($city){
		if($this->getKota($city)){
			$this->db->query("insert into tripify_popular values(null,?,now())",array($city));
		}
	}	
	public function getKota($id){
		$q=$this->db->query("SELECT *
			FROM locations where id=?",array($id));
		return $q->row();
	}
}