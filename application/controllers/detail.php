<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Detail extends MY_Controller
{
    public function index()
    {
		$id = @$_GET['id'];
		$this->load->model("objek");
		$data['objek'] = $this->objek->getById($id);
		$this->load($data);
    }
	private function load($data){
		$this->render('common/header');
		if(!$data['objek']){
			$this->render('detailnotfound',array('dataLayout'=>$data));
		}
		else
			$this->render('detail',array('dataLayout'=>$data));
			
        $this->render('common/footer');
	}
}