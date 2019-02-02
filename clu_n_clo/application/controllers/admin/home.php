<?php if(!defined("BASEPATH")) exit("Hack Attempt");
class Home extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->sentry->admin_is_logged_in() == TRUE) redirect('admin/cluclo_admin');
		$this->data['loginPage'] = '1';
		$this->load->model('adminmodel');
		
	}
	
	function index(){
		
	}
}?>