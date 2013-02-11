<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Activiti extends CI_Model{
	public function getAct($q=''){
		$q=$this->db->query("SELECT * FROM tripify_terms WHERE name LIKE '%$q%' LIMIT 10");
		$ret = array();
		foreach($q->result() as $row){
			$ret[] = array(
				'id'=>$row->term_id,
				'label'=>$row->name
			);
		}
		return $ret;
	}
}