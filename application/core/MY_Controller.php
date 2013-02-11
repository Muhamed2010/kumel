<?php
class MY_Controller extends CI_Controller
{
	public $dataLayout = array(
		'title'=>'TITLE'
	);
	public function render($view,$data=array(),$layout="layout/main"){
		if(isset($data['dataLayout'])){
			$this->dataLayout = array_merge($this->dataLayout,$data['dataLayout']);
		}
		$this->dataLayout['content'] = $this->load->view($view,$this->dataLayout,true);
		
		$this->load->view($layout,$this->dataLayout);
	}
}