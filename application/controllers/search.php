<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Search extends MY_Controller
{
    public function index()
    {
		$city = @$_GET['city'];
		$act = @$_GET['act'];
		$this->load->model("objek");
		$this->load->model("hits");
		$this->hits->add($city);
		$data = array();
		$data['objeks'] = $this->objek->search($city,$act);
		$this->load($data);
    }
	private function load($data){
		$this->render('common/header');
		if(count($data['objeks'])==0){
			$this->render('searchnol',array('dataLayout'=>$data));
		}
		else
			$this->render('search',array('dataLayout'=>$data));
			
        $this->render('common/footer');
	}
}