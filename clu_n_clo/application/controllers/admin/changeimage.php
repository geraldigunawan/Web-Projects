<?php
class Changeimage extends CI_controller{
	
	function __construct(){
	
		parent::__construct();
			if($this->session->userdata('admin_logged_in') == FALSE){
			redirect ('admin/login');
		}
		$this->load->model('adminimagemodel');
	}
	
	function index(){
		$this->data['image_list'] = $this->adminimagemodel->showimage();	
		$this->data['page'] = 'admin/imageview';
		$this->load->view('common/admin/body', $this->data);
	}
	
	function add(){
	$this->data['page'] = 'admin/addimage';
	$this->load->view('common/admin/body', $this->data);
	}
	
	function do_add(){
		$name = $this->input->post('name');
		$picture='';	
		$config['upload_path'] = 'userdata/';
		$config['allowed_types'] = 'jpg|png|jpeg|gif';
		$config['encrypt_name'] = TRUE;		
		$this->load->library('upload', $config);
		if($this->upload->do_upload('imageadd')){				
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
		$this->adminimagemodel->add($name,$description,$picture);
		redirect('admin/changeimage');
	}
	
		function edit($id){
		$this->data['page'] = 'admin/editimage';
		$this->data['editlist'] = $this->adminimagemodel->showimagedetail($id);
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
		if($this->upload->do_upload('editimage')){				
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
		$this->adminimagemodel->do_edit($id,$name,$picture,$description);
		redirect('admin/changeimage');
	}
	
	function delete($id){
		$this->adminimagemodel->deleteimage($id);
		redirect ($_SERVER['HTTP_REFERER']);	
	}
}
?>