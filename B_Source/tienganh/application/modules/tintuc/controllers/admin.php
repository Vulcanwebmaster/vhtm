<?php
	class Admin extends Admin_Controller
	{
		private $module;
		function __construct()
		{
			parent::__construct();
			$this->module=strtolower(get_class());
			$this->load->library('pagination');
			$this->load->model('Mtintuc');
			$this->load->library('form_validation');
			$this->load->library('session');
			
			//=============================================
			$this->load->library('Ckeditor',array('instanceName' => 'CKEDITOR1','basePath' => base_url()."assets/trungtam-tienganh/ckeditor/", 'outPut' => true));                             
			//=============================================
		}
		
		function index()
		{
			$this->page();
		}
		
		function page($index=0)
		{
			$config['base_url']=base_url().'tintuc/admin/page/';
			$config['per_page']=4;
			$config['total_rows']=count($this->Mtintuc->getListFull('ta_news'));
			$config['uri_segment']=4;
			$this->pagination->initialize($config);
			
			$data['title']='Thông tin tin tức';
			$data['bcCurrent']='tin tức';
			$data['list']=$this->Mtintuc->getListOffset('ta_news',4,$index);
			$data['module']=$this->module;
			$data['page']='admin_vlist';
			$this->load->view('admin/container',$data);
		}
		
		function _input()
		{
			$input=array(
						'news_title'=>$this->input->post('news_title'),
						'news_category'=>$this->input->post('news_category'),
						'news_content'=>$this->input->post('news_content'),
						'news_post_date'=>$this->input->post('news_post_date'),
						'news_author'=>$this->input->post('news_author'),
						'news_image'=>$this->input->post('news_image'));
			return $input;
		}
		
		function delete($id=0)
		{
			if ($this->Mtintuc->deleteRowByColumn('ta_news','news_id',$id))
			{
				$this->session->set_userdata('result','Xóa thành công');
			}
			else $this->session->set_userdata('result','Xóa không thành công');		
			$this->index();
		}
	}
?>