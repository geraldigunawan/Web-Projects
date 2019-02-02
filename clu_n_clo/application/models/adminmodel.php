<?php if(!defined("BASEPATH")) exit("Hack Attempt");
class Adminmodel extends CI_Model{
	function __construct(){
		parent::__construct();
	}	
	
	function login($username,$password){
		$q="select * from admin_tb where `username`='".esc($username)."' and `password`='".esc($password)."'";
		$query = $this->db->query($q);
		return $query->row_array();
	}
	
	
	function update_admin_login_time($id){
		$date=date("Y-m-d H:i:s");
		$q="update admin_tb set `last_login_date`='".esc($date)."' where id='".esc($id)."'";
		$this->db->query($q);	
	}
}