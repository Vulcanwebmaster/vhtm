
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
			
			$this->load->model('MFaqs');
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
			$config['base_url']=base_url().'faqs/admin/page/';
			$config['per_page']=10;
			$config['total_rows']=count($this->MFaqs->getListFull('fg_category'));
			$config['uri_segment']=4;
			$this->pagination->initialize($config);
			
			$data['title']='Faqs';
			$data['bcCurrent']='faqs';
			$data['list']=$this->MFaqs->getListOffset('fg_faqs',10,$index);
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
				$data['list']=$this->MFaqs->getListFull('fg_faqs');
				$data['config'] = $this->setupCKEditor('97%','200px');
				$data['title']='Add faqs';
				$data['bcCurrent']='Faqs';
				$data['module']=$this->module;
				$data['page']='admin_vinsert';
				$this->load->view('admin/container',$data);
			}
			else 
			{
				$this->form_validation->set_rules('title','Title ','required|trim');
				$this->form_validation->set_message('required','Category %s not empty');
				
				if ($this->form_validation->run())
				{
					$input=$this->_input();
					if ($this->MFaqs->insertNewRow('fg_faqs',$input))
					{
						$this->session->set_userdata('result','Add new success');
					}
					else $this->session->set_userdata('result','Add new failure');
					$this->index();
				}
				else 
				{
					$data['list']=$this->MFaqs->getListFull('fg_faqs');
					$data['config'] = $this->setupCKEditor('97%','200px');
					$data['title']='Add faqs';
					$data['bcCurrent']='faqs';
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
				$data['info']=$this->MFaqs->getRowByColumn('fg_faqs','id',$id);
				$data['title']='Edit faqs';
				$data['bcCurrent']='faqs';
				$data['module']=$this->module;
				$data['page']='admin_vedit';
				$this->load->view('admin/container',$data);
			}
			else 
			{
				$this->form_validation->set_rules('title','Title','required|trim');
				$this->form_validation->set_message('required','Category %s not empty');
				
				if ($this->form_validation->run())
				{
					$input=$this->_input();
					if ($this->MFaqs->updateRowByColumn('fg_faqs','id',$id,$input))
					{
						$this->session->set_userdata('result','update success');
					}
					else $this->session->set_userdata('result','update failute');
					$this->index();
				}
				else 
				{
					$data['info']=$this->MFaqs->getRowByColumn('fg_faqs','id',$id);
					$data['title']='Edit faqs';
					$data['bcCurrent']='faqs';
					$data['module']=$this->module;
					$data['page']='admin_vedit';
					$this->load->view('admin/container',$data);
				}
			}
		}
		
		
		function delete($id=0)
		{
			if ($this->MFaqs->deleteRowByColumn('fg_faqs','id',$id))
			{
				$this->session->set_userdata('result','Delete success');
			}
			else $this->session->set_userdata('result','delete success');		
			$this->index();
		}
	}
