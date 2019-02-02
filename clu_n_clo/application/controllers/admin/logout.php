<?php if(!defined("BASEPATH")) exit("Hack Attempt");
class Logout extends CI_Controller {
	function __construct(){
		parent::__construct();
		
		
	}
	function do_logout(){
		$sess_admin = array (
						   'admin_logged_in' => '',
						   'admin_id' => '',
						   'admin_fullname' => '',
						   'admin_username' => '',
						   'admin_last_login' => ''
						);
		$this->session->unset_userdata($sess_admin);
		redirect('admin/login'); 
	}
}?>