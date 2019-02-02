<?php
class Changemenu extends CI_controller{
	
	function __construct(){
		
		parent::__construct();
		if($this->session->userdata('admin_logged_in') == FALSE){
			redirect ('admin/login');
		}
		$this->load->model('adminhomemodel');
	}
	
	function index(){
	$this->data['menu_list'] = $this->adminhomemodel->showmenuadmin();
	$this->data['menu_category'] = $this->adminhomemodel->showcategory();
	$this->data['page'] = 'admin/menuview';
	$this->load->view('common/admin/body', $this->data);
	}
	
	function selectcategory($id){
	$this->data['menu_list'] = $this->adminhomemodel->showmenubycategory($id);	
	$this->data['menu_category'] = $this->adminhomemodel->showcategory();
	$this->data['page'] = 'admin/menuview';
	$this->load->view('common/admin/body', $this->data);
	}
	
	function add(){
	$this->data['menu_category'] = $this->adminhomemodel->showcategory();
	$this->data['page'] = 'admin/addmenu';
	$this->load->view('common/admin/body', $this->data);
	}
	
	function do_add(){
	$name = $this->input->post('name');
	$picture='';	
		$config['upload_path'] = 'userdata/';
		$config['allowed_types'] = 'jpg|png|jpeg|gif';
		$config['encrypt_name'] = TRUE;		
		$this->load->library('upload', $config);
		if($this->upload->do_upload('menuadd')){				
			$data = $this->upload->data(); 	
			//print_r($data);		
			$source             = "userdata/".$data['file_name'] ;
			$destination		= "userdata/appetizer/";
			chmod($source, 0777) ;
			$this->load->library('image_lib') ;
			//$sourceSize = getSizeImage($source);
			//$source_ratio = $sourceSize['height']/$sourceSize['width'];
			$img['image_library'] = 'GD2';
			//$img['maintain_ratio']= true;
				
			//// Making THUMBNAIL ///////
				
			$img['width']   = 250;//$sourceSize['width'] ;
			$img['height'] = 200;//$sourceSize['height'];
			$img['quality']      = '100%';
			$img['source_image'] = $source ;
			$img['new_image']    = $destination;
			$this->image_lib->initialize($img);
			$this->image_lib->resize();
			$this->image_lib->clear();	
			
			unlink($source);
			$picture=$data['file_name'];
		
		}		
		$description = $this->input->post('description');
		$category = $this->input->post('category');
		$this->adminhomemodel->add($name,$picture,$description,$category);
		redirect('admin/changemenu');
	}
	
	function edit($id){
		$this->data['page'] = 'admin/editmenu';
		$this->data['editlist'] = $this->adminhomemodel->showmenudetail($id);
		$this->load->view('common/admin/body', $this->data);
	}
	
	function do_edit($id){
		$name = $this->input->post('name');
		$description = $this->input->post('description');
		
		
		$picture_old = $this->input->post('image_old');
		$config['upload_path'] = 'userdata/';
		$config['allowed_types'] = 'jpg|png|jpeg|gif';
		$config['encrypt_name'] = TRUE;		
		$this->load->library('upload', $config);
		$picture = '';
		if($this->upload->do_upload('editmenu')){				
			$data = $this->upload->data(); 
			
			//print_r($data);		
			$source             = "userdata/".$data['file_name'] ;
			$destination		= "userdata/appetizer/";
			chmod($source, 0777) ;
			$this->load->library('image_lib') ;
			$sourceSize = getSizeImage($source);
			$source_ratio = $sourceSize['height']/$sourceSize['width'];
			$img['image_library'] = 'GD2';
			//$img['maintain_ratio']= true;
				
			//// Making THUMBNAIL ///////
				
			$img['width']   = 320;//$sourceSize['width'] ;
			$img['height'] = 320 * $source_ratio;//$sourceSize['height'];
			$img['quality']      = '100%';
			$img['source_image'] = $source ;
			$img['new_image']    = $destination;
			$this->image_lib->initialize($img);
			$this->image_lib->resize();
			$this->image_lib->clear();	
			
			
			if($picture_old){
				$unlink = "userdata/appetizer/".$picture_old;
				if(file_exists($unlink)){			
					unlink($unlink);
				}
			}
			
			unlink($source);
			$picture=$data['file_name'];
			}
		$this->adminhomemodel->do_edit($id,$name,$picture,$description);
		redirect('admin/changemenu');
	}
	
	function delete($id){
		$this->adminhomemodel->deletemenu($id);
		redirect ($_SERVER['HTTP_REFERER']);	
	}
}
?>