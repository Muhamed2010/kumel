<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Main extends MY_Controller
{
    public function index()
    {
        $this->render('test/layout');
    }
    public function layout()
    {
        $this->render('test/layout');
    }
}