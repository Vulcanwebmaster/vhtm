<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Admin extends Shop_Admin_Controller 
	{
	
	    private $module;
	
	    function __construct()
	    {
	        parent::__construct();       
	        $this->load->model('Mlichhoithao');
	        $this->module=basename(dirname(dirname(__FILE__)));      
	        $this->bep_site->set_crumb($this->lang->line('backendpro_ql_lichhoithao'),$this->module.'/admin');
	        $this->load->library('form_validation');
			$this->load->library('Spreadsheet_Excel_Reader');
	    }
		
	    function index()
	    {
	    	$data['module'] = $this->module;
	        $data['title'] = "Quản lý lịch hội thảo";
	        $data['header'] = $this->lang->line('backendpro_access_control');
	        $data['page'] = $this->config->item('backendpro_template_admin') . "admin_lichhoithao_home";
			$data['query']=$this->Mlichhoithao->get_lichhoithao();
			flashMsg('success','Tải thông tin hội thảo thành công');
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
				$data['title']="Cập nhật lịch hội thảo";
				$data['header'] = $this->lang->line('backendpro_access_control');
				$data['page'] = $this->config->item('backendpro_template_admin') . "admin_lichhoithao_home";
				$data['query']=$this->Mlichhoithao->get_lichhoithao();
				flashMsg('error',$error);
				$this->load->view($this->_container,$data);
			}
			else
			{
				$upload=$this->upload->data();
				
				if($this->Mlichhoithao->delete_lichhoithao()==true)
				{
					$pathToFile = 'assets/upload/'.$upload['file_name'];

					$dulieu = new Spreadsheet_Excel_Reader($pathToFile);
					for ($i = 2; $i <= $dulieu->sheets[0]['numRows']; $i++) 
						    {
						    	$sukien=$dulieu->sheets[0]['cells'][$i][1];
								$thoigian=$dulieu->sheets[0]['cells'][$i][2];
								$diadiem=$dulieu->sheets[0]['cells'][$i][3];
								$donvitochuc=$dulieu->sheets[0]['cells'][$i][4];
								$tinhtrang=$dulieu->sheets[0]['cells'][$i][5];
								
						        $this->Mlichhoithao->insert_lichhoithao($sukien,$thoigian,$diadiem,$donvitochuc,$tinhtrang);
						    }
					if(file_exists($pathToFile))
						unlink($pathToFile);
					
					redirect(base_url().'index.php/lichhoithao/admin','refresh');
				}			
			}


		}


	}
?>