<?php
class MY_Controller extends CI_Controller
{
	function __construct()
    {
        parent::__construct();
 
        $this->load->model('Facebook_model');
		
		$fb_config = array(
            'appId'  => '418136031602190',
            'secret' => 'b55234dd35b2a9c5fe0f13c3674c087d'
        );

        $this->load->library('facebook', $fb_config);

        $this->user = $this->facebook->getUser();
		
		$this->data_user = array(
			'user_profile'=>false,
			'logout_url' =>false,
			'login_url' =>false,
		); 

        if ($this->user) {
            try {
                $this->data_user['user_profile'] = $this->facebook->api('/me');
            } catch (FacebookApiException $e) {
                $user = null;
            }
        }

        if ($this->user) {
            $this->data_user['logout_url'] = $this->facebook->getLogoutUrl();
        } else {
            $this->data_user['login_url'] = $this->facebook->getLoginUrl();
        }
    }
	public $dataLayout = array(
		'title'=>'TITLE'
	);
	public function render($view,$data=array(),$layout="layout/main"){
		if(isset($data['dataLayout'])){
			$this->dataLayout = array_merge($this->dataLayout,$data['dataLayout']);
		}
		$this->dataLayout['_user'] = $this->user;
		$this->dataLayout['_data_user'] = $this->data_user;
		$this->dataLayout['content'] = $this->load->view($view,$this->dataLayout,true);
		
		$this->load->view($layout,$this->dataLayout);
	}
}