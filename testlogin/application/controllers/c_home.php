<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class C_home extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model('m_login');
    }
 
    function index() {
        if($this->session->userdata('logged_in')==true)
        {
           $this->data['username']= $this->session->userdata('username');
            $this->load->view('v_home',$this->data);
        } else {
        //If no session, redirect to login page
            redirect('c_login');
        }
    }
 
    function logout() {
         //remove all session data
         $this->session->unset_userdata('logged_in');
         $this->session->sess_destroy();
         redirect('c_login');
     }
 
}