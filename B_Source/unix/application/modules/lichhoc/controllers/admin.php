<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Admin extends Shop_Admin_Controller 
	{
	
	    private $module;
	
	    function __construct()
	    {
	        parent::__construct();       
	        $this->load->model('Mlichhoc');
	        $this->module=basename(dirname(dirname(__FILE__)));      
	        $this->bep_site->set_crumb($this->lang->line('backendpro_ql_lichhoc'),$this->module.'/admin');
	        $this->load->library('form_validation');
			$this->load->library('Spreadsheet_Excel_Reader');
	    }
		
	    function index()
	    {
	    	$data['module'] = $this->module;
	        $data['title'] = "Quản lý lịch học";
	        $data['header'] = $this->lang->line('backendpro_access_control');
	        $data['page'] = $this->config->item('backendpro_template_admin') . "admin_lichhoc_home";
			$data['query']=$this->Mlichhoc->get_lichhoc();
			flashMsg('success','Tải thông tin lịch học thành công');
	        $this->load->view($this->_container,$data);
			
	    }
		
		function upload()
		{
			$config['upload_path'] = './assets/upload/';
			$config['allowed_types'] = 'xls|xlsx';
			$config['max_size']	= '0';
			$config['max_width']  = '0';
			$config['max_height']  = '0';
			
			$this->load->library('upload', $config);
			if ( ! $this->upload->do_upload())
			{
				$data['module'] = $this->module;
				$error = array('error' => $this->upload->display_errors());
				$data['title']="Cập nhật lịch học";
				$data['header'] = $this->lang->line('backendpro_access_control');
				$data['page'] = $this->config->item('backendpro_template_admin') . "admin_lichhoc_home";
				$data['query']=$this->Mlichhoc->get_lichhoc();
				flashMsg('error','Bạn chưa chọn file upload hoặc định dạng file không phù hợp');
				$this->load->view($this->_container,$data);
			}
			else
			{
				$upload=$this->upload->data();
				
				if($this->Mlichhoc->delete_lichhoc()==true)
				{
					$pathToFile = 'assets/upload/'.$upload['file_name'];
					$dulieu = new Spreadsheet_Excel_Reader($pathToFile,true,"UTF-8");
					for ($i = 2; $i <= $dulieu->sheets[0]['numRows']; $i++) 
						    {
						    	$khoa=$dulieu->sheets[0]['cells'][$i][1];
								echo $khoa;die();
								$thoigian=$dulieu->sheets[0]['cells'][$i][2];
								$diadiem=$dulieu->sheets[0]['cells'][$i][3];
								$giangvien=$dulieu->sheets[0]['cells'][$i][4];
								
						      	$this->Mlichhoc->insert_lichhoc($khoa,$thoigian,$diadiem,$giangvien);
						    }
					if(file_exists($pathToFile))
						unlink($pathToFile);
					
					redirect(base_url().'index.php/lichhoc/admin','refresh');
				}			
			}


		}


	}
?>