<?php if(!defined("BASEPATH")) exit("Hack Attempt");
class Login extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->sentry->admin_is_logged_in() == TRUE) redirect('admin/cluclo_admin');
		$this->data['loginPage'] = '1';
		$this->load->model('adminmodel');
		
	}
	
	function index(){
		$user_status = $this->session->userdata('user_profile');
		$this->data['user_status'] = $user_status;
		
		$this->data['page'] = 'admin/login';
		$this->load->view('common/admin/body', $this->data);
	}
	function do_login(){
		$username = $this->input->post('username');
		$password = md5($this->input->post('password'));
		
		
		if(!$username || !$password){
			$this->data['error'] = 'Invalid username or password';
			$this->data['page'] = 'admin/login';
			$this->load->view('common/admin/body',$this->data);
		}
		else{
			$login = $this->adminmodel->login($username, $password);
			if ($login != NULL) {
				$sess_admin = array (
									   'admin_logged_in' => true,
									   'admin_id' => $login['id'],
									   'admin_username' => $login['username'],
									 
									);
				$this->session->set_userdata($sess_admin);
				
				redirect ('admin/changecovermenu');
			}
			else {
				$this->data['page'] = 'admin/login';
				$this->data['error'] = 'Invalid username or password';
				$this->load->view('common/admin/body', $this->data);
			}
			
		}
	}
	
}?>