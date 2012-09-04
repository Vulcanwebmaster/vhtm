<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Admin extends Shop_Admin_Controller 
	{
	
	    private $module;
	
	    function __construct()
	    {
	        parent::__construct();       
	        $this->load->model('Mlichtest');
	        $this->module=basename(dirname(dirname(__FILE__)));      
	        $this->bep_site->set_crumb($this->lang->line('backendpro_ql_lichtest'),$this->module.'/admin');
	        $this->load->library('form_validation');
			$this->load->library('Spreadsheet_Excel_Reader');
	    }
		
	    function index()
	    {
	    	$data['module'] = $this->module;
	        $data['title'] = "Quản lý lịch kiểm tra đầu vào";
	        $data['header'] = $this->lang->line('backendpro_access_control');
	        $data['page'] = $this->config->item('backendpro_template_admin') . "admin_lichtest_home";
			$data['query']=$this->Mlichtest->get_lichtest();
			flashMsg('success','Tải thông tin lịch kiểm tra đầu vào thành công');
	        $this->load->view($this->_container,$data);
			
	    }
		
		function upload()
		{
			$config['upload_path'] ='./assets/upload/';
			$config['allowed_types'] = 'xls|xlsx';
			$config['max_size']	= '0';
			$config['max_width']  = '0';
			$config['max_height']  = '0';
			
			$this->load->library('upload', $config);
			if ( ! $this->upload->do_upload())
			{
				$data['module'] = $this->module;
				$error = array('error' => $this->upload->display_errors());
				$data['title']="Cập nhật lịch kiểm tra đầu vào";
				$data['header'] = $this->lang->line('backendpro_access_control');
				$data['page'] = $this->config->item('backendpro_template_admin') . "admin_lichtest_home";
				$data['query']=$this->Mlichtest->get_lichtest();
				flashMsg('error','Bạn chưa chọn file upload hoặc định dạng file không phù hợp');
				$this->load->view($this->_container,$data);
			}
			else
			{
				$upload=$this->upload->data();
				
				if($this->Mlichtest->delete_lichtest()==true)
				{
					$pathToFile = 'assets/upload/'.$upload['file_name'];

					$dulieu = new Spreadsheet_Excel_Reader($pathToFile);
					for ($i = 2; $i <= $dulieu->sheets[0]['numRows']; $i++) 
						    {
						    	$ten=$dulieu->sheets[0]['cells'][$i][1];
								$thoigian=$dulieu->sheets[0]['cells'][$i][2];
								$diadiem=$dulieu->sheets[0]['cells'][$i][3];
								$donvitochuc=$dulieu->sheets[0]['cells'][$i][4];
								$max=$dulieu->sheets[0]['cells'][$i][5];
								if($max!=null)
						      		$this->Mlichtest->insert_lichtest($ten,$thoigian,$diadiem,$donvitochuc,$max,0);
								else $this->Mlichtest->insert_lichtest($ten,$thoigian,$diadiem,$donvitochuc,0,0);
						    }
					if(file_exists($pathToFile))
						unlink($pathToFile);
					
					redirect(base_url().'index.php/lichtest/admin','refresh');
				}			
			}


		}


	}
?>