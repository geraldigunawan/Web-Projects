<?php
class Countfacebook extends CI_controller{
	
	function __construct(){
	 parent::__construct();
	 $this->load->model('adminhomemodel');
	 $this->load->model('admincovermodel');
	}
	
	function index(){
		$this->data['cover'] = $data2 = $this->admincovermodel->showcover();	
		$data = $this->adminhomemodel->showfacebookcount();
		$facebookcount = $data['noofclick']+1;
		$this->adminhomemodel->do_facebookcount($facebookcount);
		redirect('http://www.facebook.com/sharer/sharer.php?s=100&p[title]=CluClo&p[summary]='.$data2['description'].'&p[url]=http://www.clunclo.com');
	}
}
?>