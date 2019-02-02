<?php 
class Home extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('messagemodel');
		$this->load->model('adminhomemodel');
		$this->load->model('adminimagemodel');
		$this->load->model('admincovermodel');
	}
	
	function index(){
		$this->data['click'] = $this->adminhomemodel->showfacebookcount();
		$this->data['appetizer'] = $this->adminhomemodel->showappetizerdisplay();
		$this->data['salad'] = $this->adminhomemodel->showsaladdisplay();
		$this->data['maincourse'] = $this->adminhomemodel->showmaincoursedisplay();	
		$this->data['dessert'] = $this->adminhomemodel->showdessertdisplay();	
		$this->data['image_list'] = $this->adminimagemodel->showimage();
		$this->data['cover'] = $this->admincovermodel->showcover();	
		$this->load->view('homeview', $this->data);	
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
