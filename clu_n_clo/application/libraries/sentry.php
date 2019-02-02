<?php if (!defined('BASEPATH')) exit('Hack Attempt?');

class Sentry
{
	var $CI;

	function Sentry(){
		$this->CI =& get_instance();
	}

	function user_is_logged_in() {				
		if($this->CI->session)
		{
			if ($this->CI->session->userdata('user_logged_in')) return TRUE;
			else return FALSE;
		}
		else{
			return FALSE;
		}
	}
	
	function get_user_id() {
		if($this->user_is_logged_in()) {
			return $this->CI->session->userdata('user_id');
		}
		else {
			return 0;
		}
	}

	function get_user_email()
	{
		if($this->user_is_logged_in()) {
			return $this->CI->session->userdata('user_email');
		}
		else{
			return 0;
		}
	}
	
	function get_user_nickname()
	{
		if($this->user_is_logged_in()) {
			return $this->CI->session->userdata('user_nickname');
		}
		else{
			return '0';
		}
	}
	
	function get_user_password()
	{
		if($this->user_is_logged_in()) {
			return $this->CI->session->userdata('user_password');
		}
		else{
			return '0';
		}
	}
	
	function get_user_fullname()
	{
		if($this->user_is_logged_in()) {
			return $this->CI->session->userdata('user_fullname');
		}
		else{
			return '0';
		}
	}

	function get_user_gender()
	{
		if($this->user_is_logged_in()) {
			return $this->CI->session->userdata('user_sex');
		}
		else{
			return '0';
		}
	}
	
	function get_user_dob()
	{
		if($this->user_is_logged_in()) {
			return $this->CI->session->userdata('user_dob');
		}
		else{
			return '0';
		}
	}
	
	function get_user_location()
	{
		if($this->user_is_logged_in()) {
			return $this->CI->session->userdata('user_location');
		}
		else{
			return '0';
		}
	}
	
	function get_user_points()
	{
		if($this->user_is_logged_in()) {
			return $this->CI->session->userdata('user_points');
		}
		else{
			return '0';
		}
	}
	
	function get_user_avatar()
	{
		if($this->user_is_logged_in()) {
			return $this->CI->session->userdata('user_avatar');
		}
		else{
			return '0';
		}
	}
	
	function get_user_level_id()
	{
		if($this->user_is_logged_in()) {
			return $this->CI->session->userdata('user_level_id');
		}
		else{
			return '0';
		}
	}
	
	function get_user_account_created_date()
	{
		if($this->user_is_logged_in()) {
			return $this->CI->session->userdata('user_account_created_date');
		}
		else{
			return '0';
		}
	}
	
	function get_param()
	{
		return $this->CI->session->userdata('param');
	}
	
	/*====================================================================================================================*/
	
	function admin_is_logged_in() {				
		if($this->CI->session)
		{
			if ($this->CI->session->userdata('admin_logged_in')) return TRUE;
			else return FALSE;
		}
		else{
			return FALSE;
		}
	}
	
	function get_admin_id()
	{
		if($this->admin_is_logged_in()) {
			return $this->CI->session->userdata('admin_id');
		}
		else{
			return '0';
		}
	}
	
	function get_admin_email()
	{
		if($this->admin_is_logged_in()) {
			return $this->CI->session->userdata('admin_email');
		}
		else{
			return '0';
		}
	}
	
	function get_admin_fullname()
	{
		if($this->admin_is_logged_in()) {
			return $this->CI->session->userdata('admin_fullname');
		}
		else{
			return '0';
		}
	}
	
	function get_admin_level_id()
	{
		if($this->admin_is_logged_in()) {
			return $this->CI->session->userdata('admin_level_id');
		}
		else{
			return '0';
		}
	}
	
	function get_admin_account_created_date()
	{
		if($this->admin_is_logged_in()) {
			return $this->CI->session->userdata('admin_account_created_date');
		}
		else{
			return '0';
		}
	}
	
	function get_admin_level_name()
	{
		if($this->admin_is_logged_in()) {
			return $this->CI->session->userdata('admin_level_name');
		}
		else{
			return '0';
		}
	}
	
	function get_admin_duniababah_page_akses()
	{
		if($this->admin_is_logged_in()) {
			return $this->CI->session->userdata('admin_duniababah_page_akses');
		}
		else{
			return '0';
		}
	}
	
	function get_admin_humor_page_akses()
	{
		if($this->admin_is_logged_in()) {
			return $this->CI->session->userdata('admin_humor_page_akses');
		}
		else{
			return '0';
		}
	}
	
	function get_admin_gosip_page_akses()
	{
		if($this->admin_is_logged_in()) {
			return $this->CI->session->userdata('admin_gosip_page_akses');
		}
		else{
			return '0';
		}
	}
	
	function get_admin_zodiac_page_akses()
	{
		if($this->admin_is_logged_in()) {
			return $this->CI->session->userdata('admin_zodiac_page_akses');
		}
		else{
			return '0';
		}
	}
	
	function get_admin_cinta_page_akses()
	{
		if($this->admin_is_logged_in()) {
			return $this->CI->session->userdata('admin_cinta_page_akses');
		}
		else{
			return '0';
		}
	}
}
?>