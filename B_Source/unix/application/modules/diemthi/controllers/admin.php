<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Admin extends Shop_Admin_Controller 
	{
	
	    private $module;
	
	    function __construct()
	    {
	        parent::__construct();       
	        $this->load->model('Mdiemthi');
	        $this->module=basename(dirname(dirname(__FILE__)));      
	        $this->bep_site->set_crumb($this->lang->line('backendpro_ql_diemthi'),$this->module.'/admin');
	        $this->load->library('form_validation');
			$this->load->helper('url');
			$this->load->library('session');
			$this->load->library('Spreadsheet_Excel_Reader');
	    }
		
	    function index()
	    {
	    	$this->session->unset_userdata('bangdiem');
	    	if($this->input->post('submit'))
			{
				$dot=$this->input->post('dot');
				//echo $dot;die();
				$data['module'] = $this->module;
		        $data['title'] = "Quản lý điểm thi";
		        
				$data['dotthi']=$this->Mdiemthi->getDotThi();
				$data['diemthi']=$this->Mdiemthi->get_diemthi($dot);
				
				$data['tendot']='Bảng '.$this->Mdiemthi->getTenDot($dot);
				$this->session->set_userdata('bangdiem','Bảng '.$dot);
				$data['header'] = $this->lang->line('backendpro_access_control');
		        $data['page'] = $this->config->item('backendpro_template_admin') . "admin_diemthi_home";
				$this->bep_site->set_crumb($this->lang->line('kago_view_diemthi'));
				flashMsg('success','Tải thông tin điểm thi thành công');
		        $this->load->view($this->_container,$data);
			}
			else if($this->input->post('button'))
			{
				$dot=$this->uri->segments(4);
				$this->Mdiemthi->deleteDiemThi($dot);
				$this->Mdiemthi->deleteDotThi($dot);
				$data['dotthi']=$this->Mdiemthi->getDotThi();
				$data['header'] = $this->lang->line('backendpro_access_control');
		        $data['page'] = $this->config->item('backendpro_template_admin') . "admin_diemthi_home";
				$this->bep_site->set_crumb($this->lang->line('kago_view_diemthi'));
				flashMsg('success','Xóa '.$dot.' thành công');
		        $this->load->view($this->_container,$data);
			}
			else
			{
		    	$data['module'] = $this->module;
		        $data['title'] = "Quản lý điểm thi";
		        $data['header'] = $this->lang->line('backendpro_access_control');
				$data['dotthi']=$this->Mdiemthi->getDotThi();
		        $data['page'] = $this->config->item('backendpro_template_admin') . "admin_diemthi_home";
				$this->bep_site->set_crumb($this->lang->line('kago_view_diemthi'));
				flashMsg('success','Tải thông tin điểm thi thành công');
		        $this->load->view($this->_container,$data);
		    }
	    }

		function create()
		{		
				$data['module'] = $this->module;
		        $data['title'] = "Nhập điểm thi";
		        $data['header'] = $this->lang->line('backendpro_access_control');
		        $data['page'] = $this->config->item('backendpro_template_admin') . "admin_diemthi_create";
				$this->bep_site->set_crumb($this->lang->line('kago_create_diemthi'));
				flashMsg('success','Mời bạn nhập thông tin điểm thi');
		        $this->load->view($this->_container,$data);
		}

		//upload
		function upload()
		{
			$this->form_validation->set_rules('dot','"Đợt thi"','required');
			
			$config['upload_path'] = './assets/upload/';
			$config['allowed_types'] = 'xls';
			$config['max_size']	= '100000';

			$this->load->library('upload', $config);
			$data['module'] = $this->module;
			$data['header'] = $this->lang->line('backendpro_access_control');
			
			if($this->form_validation->run())
			{
				$dot=$this->input->post('dot');
				if($this->Mdiemthi->countDotThi($dot)>0)
				{	
					$data['title']="Quản lý điểm thi";
					$data['page'] = $this->config->item('backendpro_template_admin') . "admin_diemthi_create";
					$this->bep_site->set_crumb($this->lang->line('kago_create_diemthi'));
					flashMsg('error','Đợt thi đã tồn tại');
					$this->load->view($this->_container,$data);	
				}	
				else if( ! $this->upload->do_upload())
				{
					$data['title']="Quản lý điểm thi";
					$data['page'] = $this->config->item('backendpro_template_admin') . "admin_diemthi_create";
					$this->bep_site->set_crumb($this->lang->line('kago_create_diemthi'));
					flashMsg('error','Bạn chưa chọn file upload hoặc định dạng file không phù hợp');
					$this->load->view($this->_container,$data);
				}
				else
				{
						$this->Mdiemthi->insert_dotthi($dot);
						$dotthi=$this->Mdiemthi->getIdDot($dot);
						$upload=$this->upload->data();
						
						$pathToFile = 'assets/upload/'.$upload['file_name'];
		
						$dulieu = new Spreadsheet_Excel_Reader($pathToFile,false,'UTF-8');
						//echo $dulieu->sheets[0]['numRows'];die();	
						for ($i = 1; $i <= $dulieu->sheets[0]['numRows']; $i++) 
								    {
								    	$hs=$dulieu->sheets[0]['cells'][$i][2];
										$ph=$dulieu->sheets[0]['cells'][$i][3];
										$lop=$dulieu->sheets[0]['cells'][$i][4];
										if($dulieu->sheets[0]['cells'][$i][5]=='')
											$diem='Chưa test';
										else $diem=$dulieu->sheets[0]['cells'][$i][5];
										$stt=$dulieu->sheets[0]['cells'][$i][1];
										/*echo $hs.'<br>';
										echo $ph.'<br>';
										echo $lop.'<br>';
										echo $diem.'<br>';
										echo $dot.'<br>';
										die();*/
								        $this->Mdiemthi->insert_diemthi($hs,$ph,$lop,$diem,$dotthi,$stt);
								    }
						
							if(file_exists($pathToFile))
								unlink($pathToFile);
							
							$data['title'] = "Nhập điểm thi";
							$data['page'] = $this->config->item('backendpro_template_admin') . "admin_diemthi_create";
							$data['diemthi']=$this->Mdiemthi->get_diemthi($dotthi);
							flashMsg('success','Nhập điểm '.$dot.' thành công');
							$this->load->view($this->_container,$data);
				} 
			}
			else
			{
				$data['title']="Quản lý điểm thi";
				$data['page'] = $this->config->item('backendpro_template_admin') . "admin_diemthi_create";
				$this->bep_site->set_crumb($this->lang->line('kago_create_diemthi'));
				flashMsg('error','Vui lòng nhập đợt thi');
				$this->load->view($this->_container,$data);	
			}
		}
		//end upload
		
		function del()
		{
			if($this->input->post('submit'))
			{
				$dotthi = $this->input->post('dot');
				$this->Mdiemthi->deleteDotThi($dotthi);
				$this->Mdiemthi->deleteDiemThi($dotthi);
				$data['module'] = $this->module;
			    $data['title'] = "Quản lý điểm thi";
			    $data['header'] = $this->lang->line('backendpro_access_control');
				$data['dotthi']=$this->Mdiemthi->getDotThi();
			    $data['page'] = $this->config->item('backendpro_template_admin') . "admin_diemthi_home";
				$this->bep_site->set_crumb($this->lang->line('kago_view_diemthi'));
				flashMsg('success','Xóa '.$dotthi.' thành công');
			    $this->load->view($this->_container,$data);
				
			}
			else 
			{
				$data['module'] = $this->module;
		        $data['title'] = "Quản lý điểm thi";
		        $data['header'] = $this->lang->line('backendpro_access_control');
				$data['dotthi']=$this->Mdiemthi->getDotThi();
		        $data['page'] = $this->config->item('backendpro_template_admin') . "admin_diemthi_xoadotthi";
				$this->bep_site->set_crumb($this->lang->line('kago_del_dotthi'));
				flashMsg('success','Chọn đợt thi để xóa');
		        $this->load->view($this->_container,$data);
			}
		}
		
	}
?>