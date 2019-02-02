<?php
class Adminimagemodel extends CI_model{
	function __construct(){
		parent::__construct();
	}
	
	function showimage(){
		$sql = "select * from image";
		$query = $this->db->query($sql);
		return $query->result_array();	
	}
	
	function showimagedetail($id){
		$sql = "select * from image where id = '".esc($id)."'";
		$query = $this->db->query($sql);
		return $query->row_array();
	}
	
	function add($name,$description,$picture){
		$sql = "INSERT INTO image (name,description,picture)
				VALUES ('".esc($name)."',
						'".esc($description)."',
						'".esc($picture)."'
						)";
		$this->db->query($sql);
	}
	
		
	function do_edit($id,$name,$picture,$description){
	 	$q = "UPDATE image SET 					name='".esc($name)."',
												picture='".esc($picture)."',
												description='".esc($description)."'
												
												where id = '".esc($id)."'";
		$query = $this->db->query($q);
	}
	
	function deleteimage($id){
		$sql = "DELETE from image where id = '".esc($id)."'";
		$query = $this->db->query($sql);
	}
}
?>