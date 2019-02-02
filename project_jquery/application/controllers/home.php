<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Home extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('messagemodel');
	}
	
	function index(){
		$this->load->view('homeview');	
	}
	
	function do_message(){
		
		$name = $this->input->post('name');	
		$email = $this->input->post('email');
		$phone = $this->input->post('phone');	
		$message = $this->input->post('message');	
		$this->messagemodel->message($name,$email,$phone,$message);
		redirect('home');
	}
}?>
