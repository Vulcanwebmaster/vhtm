<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Admin extends Shop_Admin_Controller 
	{
	
	    private $module;
	
	    function __construct()
	    {
	        parent::__construct();       
	        $this->load->model('Mslide');
	        $this->module=basename(dirname(dirname(__FILE__)));      
	    }
	
	
	    function index()
	    {
	    	$this->bep_assets->load_asset_group('TINYMCE');
	        $data['title']='Cập nhật Slide';
	        $data['slide1']=$this->Mslide->getSlide(0);
			$data['slide2']=$this->Mslide->getSlide(1);
			$data['slide3']=$this->Mslide->getSlide(2);
			$data['slide4']=$this->Mslide->getSlide(3);
			
	        $data['page'] = $this->config->item('backendpro_template_admin') . "admin_slide_home";
	        $this->load->view($this->_container,$data);
	    }
		
		function update()
		{
			$this->bep_assets->load_asset_group('TINYMCE');
	        $data['hjx'] = $this->Mslide->getIDs();
	        $x = $data['hjx'];
	        foreach($x as $key => $list )
	        {
	         	$data = $this->_fields($list['id']);	
	        	$this->Mslide->updateSlide($data);		
	        }
			
	        $this->index();
	        flashMsg('success','Cập nhật thành công!!!');
		}
		
		function _fields($id)
	    {
	    	$noidung=$this->input->post('noidung_backup_'.$id);
			//echo $noidung;die();
			$noidung = str_replace("@$%#@",base_url(),$noidung);
			//echo $noidung;die();
	    	$data = array(
			            'id'      	=> $id,
			            'noidung'  	=> $noidung  
	        );
	        return $data;
	    }
	    
	}
?>