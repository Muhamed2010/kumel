<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Kota extends CI_Model{
	public function getKota($q=''){
		$q=$this->db->query("SELECT l.name as a, s.name as b, c.name as c
			FROM locations l
			LEFT JOIN states s ON s.id = l.state_id
			INNER JOIN countries c ON c.id = l.country_id
			WHERE (l.name = 'indonesia'
			OR c.name = 'indonesia'
			OR s.name = 'indonesia')
			AND CONCAT(l.name ,c.name ) LIKE '%$q%'
			LIMIT 10");
		$ret = array();
		foreach($q->result() as $row){
			$label=$this->setLabel($row);
			$ret[] = array(
				'id'=>$label,
				'label'=>$label
			);
		}
		return $ret;
	}
	public function setLabel($row){
		$label = '';
		if($row->a!=''){
			$label .= $row->a;
		}
	/*	if($row->b!=''){	
			if($label!='')
				$label .= ' , ';
			$label .= $row->b;
		}*/
		if($row->c!=''){
			if($label!='')
				$label .= ' , ';
			$label .= $row->c;
		}
		return $label;
	}
}