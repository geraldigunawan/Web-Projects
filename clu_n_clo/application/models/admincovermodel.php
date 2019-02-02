<?php
class Admincovermodel extends CI_model{
	function __construct(){
		parent::__construct();
		
		
	}


	function showcover(){
		$q = "select * from cover";
		$query = $this->db->query($q);
		return $query->row_array();
	}
	function showcoverdetail($id){
		$sql = "select * from cover where id = '".esc($id)."'";
		$query = $this->db->query($sql);
		return $query->row_array();
	}
	
	function do_edit($id,$picture,$description){
	 	$q = "UPDATE cover SET 					picture='".esc($picture)."',										
												description='".esc($description)."'
												
												where id = '".esc($id)."'";
		$query = $this->db->query($q);
	}
}
?>