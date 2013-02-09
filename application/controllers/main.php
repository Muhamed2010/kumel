<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Main extends MY_Controller
{
    public function index()
    {
    	$this->render('common/header');
        $this->render('main');
        $this->render('common/footer');
    }
    public function kota(){
		header("Content-Type:application/json");
		$this->load->model('Kota','kota');
		echo json_encode($this->kota->getKota($this->input->get('q')));
	}
	public function act(){
		header("Content-Type:application/json");
		$this->load->model('Activiti','act');
		echo json_encode($this->act->getAct($this->input->get('q')));
	}
	public function search(){
		
	}
}