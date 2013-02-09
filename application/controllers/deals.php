<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Deals extends MY_Controller
{

    public function index()
    {
    	error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
        $this->render('common/header');
        $this->render('layout/deals');
        $this->render('common/footer');

    }

}