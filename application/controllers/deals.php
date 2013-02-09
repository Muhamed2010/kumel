<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Deals extends MY_Controller
{

    public function index()
    {
           	$this->render('common/header');
        $this->render('layout/deals');
        $this->render('common/footer');
    }

}