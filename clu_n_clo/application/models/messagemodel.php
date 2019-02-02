<?php
class Messagemodel extends CI_Model{
	function __construct(){
		parent::__construct();
	}
	
	function message($name,$email,$phone,$message){
		 $sql = "INSERT INTO messages (name, email,phone,message)
				VALUES ('".esc($name)."',
						'".esc($email)."',
						'".esc($phone)."',
						'".esc($message)."')";
		$this->db->query($sql);
	}
}?>