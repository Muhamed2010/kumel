<?php
class Home extends CI_Controller {
 
    function __construct()
    {
        parent::__construct();
 
        $this->load->model('Facebook_model');
    }
 
    function index()
    {
        $fb_config = array(
            'appId'  => '418136031602190',
            'secret' => 'b55234dd35b2a9c5fe0f13c3674c087d'
        );

        $this->load->library('facebook', $fb_config);

        $user = $this->facebook->getUser();

        if ($user) {
            try {
                $data['user_profile'] = $this->facebook->api('/me');
            } catch (FacebookApiException $e) {
                $user = null;
            }
        }

        if ($user) {
            $data['logout_url'] = $this->facebook->getLogoutUrl();
        } else {
            $data['login_url'] = $this->facebook->getLoginUrl();
        }

        $this->load->view('home',$data);
    }
}