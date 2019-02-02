<?php
class Adminhomemodel extends CI_model{
	function __construct(){
		parent::__construct();
	}
	
	function showcontent(){
		$q = "select * from messages";
		$query = $this->db->query($q);
		return $query->result_array();
	}
	
	function showmenudetail($id){
		$sql = "select * from menu where id = '".esc($id)."'";
		$query = $this->db->query($sql);
		return $query->row_array();
	}
	
	function add($name,$picture,$description,$category_id){
		$sql = "INSERT INTO menu (name, picture,description,category_id)
				VALUES ('".esc($name)."',
						'".esc($picture)."',
						'".esc($description)."',
						'".esc($category_id)."'
						)";
		$this->db->query($sql);
	}
	
	function do_edit($id,$name,$picture,$description){
	 	$q = "UPDATE menu SET 					name='".esc($name)."',
												picture='".esc($picture)."',
												description='".esc($description)."'
												
												where id = '".esc($id)."'";
		$query = $this->db->query($q);
	}
	
	function showcategory(){
		$q = "SELECT * FROM category";
		$query = $this->db->query($q);
		return $query->result_array();
	}
	function showmenuadmin(){
		$q = "SELECT a.id,a.name,a.picture,a.description,b.name as category_name 
					FROM menu a INNER JOIN category b ON a.category_id = b.id";
		$query = $this->db->query($q);
		return $query->result_array();
	}
	
	function showappetizerdisplay(){
		$sql = "SELECT a.id,a.name,a.picture,a.description,b.name as category_name 
					FROM menu a INNER JOIN category b ON a.category_id = b.id WHERE a.category_id=1";
		$query = $this->db->query($sql);
		return $query->result_array();				
	}
	
	function showsaladdisplay(){
		$sql = "SELECT a.id,a.name,a.picture,a.description,b.name as category_name 
					FROM menu a INNER JOIN category b ON a.category_id = b.id WHERE a.category_id=2";
		$query = $this->db->query($sql);
		return $query->result_array();				
	}
	
	function showmaincoursedisplay(){
		$sql = "SELECT a.id,a.name,a.picture,a.description,b.name as category_name 
					FROM menu a INNER JOIN category b ON a.category_id = b.id WHERE a.category_id=3";
		$query = $this->db->query($sql);
		return $query->result_array();				
	}
	
	function showdessertdisplay(){
		$sql = "SELECT a.id,a.name,a.picture,a.description,b.name as category_name 
					FROM menu a INNER JOIN category b ON a.category_id = b.id WHERE a.category_id=4";
		$query = $this->db->query($sql);
		return $query->result_array();				
	}
	
	function showmenubycategory($id){
		$q = "SELECT a.id,a.name,a.picture,a.description,b.name as category_name 
					FROM menu a INNER JOIN category b ON a.category_id = b.id WHERE a.category_id = '".esc($id)."'";
		$query = $this->db->query($q);
		return $query->result_array();
	}
	function deletemessage($id){
		$q = "DELETE FROM messages WHERE id=('$id')";
		$query = $this->db->query($q);
	}
	
	function deletemenu($id){
		$q = "DELETE FROM menu WHERE id=('$id')";
		$query = $this->db->query($q);
	}
	
	function showfacebookcount(){
		$q ="select * from facebookcount";
		$query = $this->db->query($q);
		return $query->row_array();
	}

	function do_facebookcount($facebookcount){
	 	$q = "UPDATE facebookcount SET noofclick='".esc($facebookcount)."'";
		$query = $this->db->query($q);
	}
}
?>