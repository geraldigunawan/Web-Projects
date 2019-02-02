<?php
class Changecovermenu extends CI_controller{
	
	
	function __construct(){
		parent::__construct();
		if($this->session->userdata('admin_logged_in') == FALSE){
			redirect ('admin/login');
		}
		$this->load->model('admincovermodel');
		$this->load->model('adminhomemodel');
	}
	
	function index(){
	$this->data['click'] = $this->adminhomemodel->showfacebookcount();
	$this->data['cover'] =$this->admincovermodel->showcover();
	$this->data['page'] = 'admin/coverview';
	$this->load->view('common/admin/body', $this->data);
	}
	
	function edit($id){
		$this->data['page'] = 'admin/editcovermenu';
		$this->data['editlist'] = $this->admincovermodel->showcoverdetail($id);
		$this->load->view('common/admin/body', $this->data);
	}
	
	function do_edit($id){
		$description = $this->input->post('description');
		
		
		$picture_old = $this->input->post('image_old');
		$config['upload_path'] = 'userdata/';
		$config['allowed_types'] = 'jpg|png|jpeg|gif';
		$config['encrypt_name'] = TRUE;		
		$this->load->library('upload', $config);
		$picture = '';
		if($this->upload->do_upload('editcovermenu')){				
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
		$this->admincovermodel->do_edit($id,$picture,$description);
		redirect('admin/changecovermenu');
	}
}
?>