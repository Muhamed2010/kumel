<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Main extends MY_Controller
{
    public function index()
    {
        $this->render('main');
    }
    public function kota(){
		header("Content-Type:application/json");
		$this->load->model('Kota','kota');
		echo json_encode($this->kota->getKota($this->input->get('q')));
	}
	public function search(){
		
	}
}