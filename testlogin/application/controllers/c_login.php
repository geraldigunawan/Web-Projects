<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class C_login extends CI_Controller {
    function index() {   
        $this->load->view('v_login'); //load view for login
    }
		
	 function __construct() {
        parent::__construct();
        //load session and connect to database        
    }

    function do_login() {
	 $this->load->model('m_login');
     $username = $this->input->post('username');
	 $password = md5($this->input->post('password'));
	 $data = $this->m_login->login($username,$password); 
	  	
	 if($data){
		 $saveadmin =  array('logged_in'=> true, 'username' => $data['username']);
		 $this-> session->set_userdata($saveadmin);
		 
		redirect('c_home'); 
	 }
	 else{
		redirect('c_login'); 
	 }
	}
}