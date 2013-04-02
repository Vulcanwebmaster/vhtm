
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
			
			$this->load->model('Muser_gold');
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
			$config['base_url']=base_url().'user_gold/admin/page/';
			$config['per_page']=10;
			$config['total_rows']=count($this->Muser_gold->getListFull('fg_account'));
			$config['uri_segment']=4;
			$this->pagination->initialize($config);
			
			$data['title']='User gold';
			$data['bcCurrent']='user gold';
			$data['list']=$this->Muser_gold->getListOffset('fg_account',10,$index);
			$data['module']=$this->module;
			$data['page']='admin_vlist';
			$this->load->view('admin/container',$data);
		}
		
		
		function _input()
		{
			$input=array(
						'username'=>$this->input->post('username'),
						'money'=>$this->input->post('money'),
						);
			return $input;
		}
		
		
		// function insert()
		// {
			// if (!$this->input->post('username'))
			// {
				// $data['list']=$this->Muser_gold->getListFull('fg_account');
				// $data['config'] = $this->setupCKEditor('97%','200px');
				// $data['title']='Add account';
				// $data['bcCurrent']='Category';
				// $data['module']=$this->module;
				// $data['page']='admin_vinsert';
				// $this->load->view('admin/container',$data);
			// }
			// else 
			// {
				// $this->form_validation->set_rules('category_name','Name ','required|trim');
				// $this->form_validation->set_message('required','Category %s not empty');
// 				
				// if ($this->form_validation->run())
				// {
					// $input=$this->_input();
					// if ($this->Muser_gold->insertNewRow('fg_category',$input))
					// {
						// $this->session->set_userdata('result','Add new success');
					// }
					// else $this->session->set_userdata('result','Add new failure');
					// $this->index();
				// }
				// else 
				// {
					// $data['list']=$this->Muser_gold->getListFull('fg_category');
					// $data['config'] = $this->setupCKEditor('97%','200px');
					// $data['title']='Add category';
					// $data['bcCurrent']='category';
					// $data['module']=$this->module;
					// $data['page']='admin_vinsert';
					// $this->load->view('admin/container',$data);
				// }
			// }
		// }
		

		function edit($id=0)
		{
			//=============================================
			$data['config'] = $this->setupCKEditor('97%','200px');
			//=============================================
			//echo $this->input->post('courses_name');die();
			if (!$this->input->post('username'))
			{
				$data['info']=$this->Muser_gold->getRowByColumn('fg_account','id',$id);
				$data['title']='Edit category';
				$data['bcCurrent']='category';
				$data['module']=$this->module;
				$data['page']='admin_vedit';
				$this->load->view('admin/container',$data);
			}
			else 
			{
				$this->form_validation->set_rules('username','Name','required|trim');
				$this->form_validation->set_message('required','Category %s not empty');
				
				if ($this->form_validation->run())
				{
					$input=$this->_input();
					if ($this->Muser_gold->updateRowByColumn('fg_account','id',$id,$input))
					{
						$this->session->set_userdata('result','update success');
					}
					else $this->session->set_userdata('result','update failute');
					$this->index();
				}
				else 
				{
					$data['info']=$this->Muser_gold->getRowByColumn('fg_account','id',$id);
					$data['title']='Edit user gold';
					$data['bcCurrent']='gold';
					$data['module']=$this->module;
					$data['page']='admin_vedit';
					$this->load->view('admin/container',$data);
				}
			}
		}
		
		
		function delete($id=0)
		{
			if ($this->Muser_gold->deleteRowByColumn('fg_account','id',$id))
			{
				$this->session->set_userdata('result','Delete success');
			}
			else $this->session->set_userdata('result','delete success');		
			$this->index();
		}
	}
