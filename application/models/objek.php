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
		$results = $query->result();
		foreach($results as $key=>$result){
			$results[$key]->kota = $this->getKota($result->id_location); 
		}
		return $results;
	}
	public function getById($id){
		$this->db->where("ID",$id);
		$query  = $this->db->get("tripify_posts");
		return $query->row();
	}
	
	
	public function getKota($id){
		$q=$this->db->query("SELECT l.id as id ,l.name as a, s.name as b, c.name as c
			FROM locations l
			LEFT JOIN states s ON s.id = l.state_id
			INNER JOIN countries c ON c.id = l.country_id
			WHERE l.id = '$id'
			LIMIT 10");
			
		$row = $q->row();
		$label=$this->setLabel($row);
		return $label;
	}
	public function setLabel($row){
		$label = '';
		if($row->a!=''){
			$label .= $row->a;
		}

		if($row->c!=''){
			if($label!='')
				$label .= ' , ';
			$label .= $row->c;
		}
		return $label;
	}
}