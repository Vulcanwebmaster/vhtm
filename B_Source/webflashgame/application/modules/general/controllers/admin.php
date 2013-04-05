<?php
/**
 * 
 * This class is controller of Thu vien in front. 
 * There are some functions to list images, videos and get detail of them...
 * @author Tuyetnt
 * @date 2012/12/15
 *
 */
	class Admin extends Admin_Controller
	{
		private $module;
		function __construct()
		{
			parent::__construct();
			$this->module=strtolower(get_class());
			
			$this->load->model('Mgeneral');
			$this->load->library('form_validation');
			$this->load->library('session');
			
			//=============================================
			$this->load->library('Ckeditor',array('instanceName' => 'CKEDITOR1','basePath' => base_url()."assets/flash_game/ckeditor/", 'outPut' => true));                             
			//=============================================
		}
		
		function index()
		{
			$this->page();
		}
		
		function page($index=0)
		{
			$config['base_url']=base_url().'general/admin/page/';
			$config['per_page']=10;
			$config['total_rows']=count($this->Mgeneral->getListFull('fg_general'));
			$config['uri_segment']=4;
			$this->pagination->initialize($config);
			
			$data['title']='Général';
			$data['bcCurrent']='Général';
			$data['list']=$this->Mgeneral->getListOffset('fg_general',10,$index);
			$data['module']=$this->module;
			$data['page']='admin_vlist';
			$this->load->view('admin/container',$data);
		}
		
		
		function _input()
		{
			$input=array(
						'title'=>$this->input->post('title'),
						'titlefr'=>$this->input->post('titlefr'),
						'content'=>$this->input->post('content'),
						'contentfr'=>$this->input->post('contentfr'),
						);
			return $input;
		}
		
		
		function insert()
		{
			if (!$this->input->post('title'))
			{
				$data['list']=$this->Mgeneral->getListFull('fg_general');
				$data['config'] = $this->setupCKEditor('97%','200px');
				$data['title']='Plus Général';
				$data['bcCurrent']='Général';
				$data['module']=$this->module;
				$data['page']='admin_vinsert';
				$this->load->view('admin/container',$data);
			}
			else 
			{
				$this->form_validation->set_rules('title','Title ','required|trim');
				$this->form_validation->set_message('required','Catégorie %s pas vide');
				
				if ($this->form_validation->run())
				{
					$input=$this->_input();
					if ($this->Mgeneral->insertNewRow('fg_general',$input))
					{
						$this->session->set_userdata('result','Plus succès');
					}
					else $this->session->set_userdata('result','Plus échec');
					$this->index();
				}
				else 
				{
					$data['list']=$this->Mgeneral->getListFull('fg_faqs');
					$data['config'] = $this->setupCKEditor('97%','200px');
					$data['title']='Plus Général';
					$data['bcCurrent']='Général';
					$data['module']=$this->module;
					$data['page']='admin_vinsert';
					$this->load->view('admin/container',$data);
				}
			}
		}
		

		function edit($id=0)
		{
			//=============================================
			$data['config'] = $this->setupCKEditor('97%','200px');
			//=============================================
			//echo $this->input->post('courses_name');die();
			if (!$this->input->post('title'))
			{
				$data['info']=$this->Mgeneral->getRowByColumn('fg_general','id',$id);
				$data['title']='Éditer Général';
				$data['bcCurrent']='Général';
				$data['module']=$this->module;
				$data['page']='admin_vedit';
				$this->load->view('admin/container',$data);
			}
			else 
			{
				$this->form_validation->set_rules('title','Title','required|trim');
				$this->form_validation->set_message('required','Catégorie %s pas vide');
				
				if ($this->form_validation->run())
				{
					$input=$this->_input();
					if ($this->Mgeneral->updateRowByColumn('fg_general','id',$id,$input))
					{
						$this->session->set_userdata('result','Éditer succès');
					}
					else $this->session->set_userdata('result','Éditer échec');
					$this->index();
				}
				else 
				{
					$data['info']=$this->Mgeneral->getRowByColumn('fg_general','id',$id);
					$data['title']='Éditer Général';
					$data['bcCurrent']='Général';
					$data['module']=$this->module;
					$data['page']='admin_vedit';
					$this->load->view('admin/container',$data);
				}
			}
		}
		
		
		function delete($id=0)
		{
			if ($this->Mgeneral->deleteRowByColumn('fg_general','id',$id))
			{
				$this->session->set_userdata('result','Effacer succès');
			}
			else $this->session->set_userdata('result','Effacer échec');		
			$this->index();
		}
	}
