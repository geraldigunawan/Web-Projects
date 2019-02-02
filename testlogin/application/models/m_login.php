<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
 
class M_login extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    function login($username, $password) {
        //create query to connect user login database
		$q = "select * from member where username='$username' AND password='$password'";
		$query = $this -> db->query($q);
		return $query->row_array();
    }
}