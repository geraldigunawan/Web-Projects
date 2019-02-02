<?php
class Cluclo_admin extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		if($this->session->userdata('admin_logged_in') == FALSE){
			redirect ('admin/login');
		}
		$this->load->model('adminhomemodel');
	}
	function index(){
		$this->data['message'] = $this->adminhomemodel->showcontent();
		$this->data['page'] = 'admin/homeadminview';
		$this->load->view('common/admin/body', $this->data);
	}
	
	function delete($id){
		$this->adminhomemodel->deletemessage($id);
		redirect ($_SERVER['HTTP_REFERER']);			
	}
	

}
?>