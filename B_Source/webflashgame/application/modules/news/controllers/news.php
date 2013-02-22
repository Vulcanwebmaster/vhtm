<?php
class News extends NIW_Controller
{
	function __construct()
	{
		@session_start();
		parent::__construct();
		$this->module=strtolower(get_class());
		$this->load->model('Mnews');
		$this->loadLang();
		$this->load->library('session');
		$this->load->library('pagination');
		$this->load->helper('text');
	}
	function index()
	{
		$this->page();
	}
	
	function page($index=0)
	{
		$news = $this->Mnews->getRowByColumn('st_metatag','id',1);
		$data['meta_tag'] = $news->meta_news;
		$data['step']  =  $this->Mnews->getListFull('fg_step');
		$data['photo'] = $this->Mnews->getListFull('fg_banner');
		$data['link_fanpage'] = $this->Mnews->getRowByColumn('fg_setting','id',1);
		$data['list_belote'] = $this->Mnews->getListFull('fg_belote');
		$data['topwin']  =  $this->Mnews->Topwin(4);
		$data['topgiaidau']  =  $this->Mnews->Topgiaidau(4);
		$config['base_url']=base_url().'news/page/';
		$config['per_page']=8;
		$config['total_rows']=count($this->Mnews->getListFull('fg_news'));
		$config['uri_segment']=3;
		$this->pagination->initialize($config);
		$data['list_news']=$this->Mnews->getListOffset('fg_news',8,$index);
		$data['module']=$this->module;
		$data['page']='vnews';
		$this->load->view('front/container',$data);
	}
	
	function detail($id=0)
	{
		$news = $this->Mnews->getRowByColumn('st_metatag','id',1);
		$data['meta_tag'] = $news->meta_news;
		$data['step']  =  $this->Mnews->getListFull('fg_step');
		$data['photo'] = $this->Mnews->getListFull('fg_banner');
		$data['link_fanpage'] = $this->Mnews->getRowByColumn('fg_setting','id',1);
		$data['list_belote'] = $this->Mnews->getListFull('fg_belote');
		$data['topwin']  =  $this->Mnews->Topwin(4);
		$data['topgiaidau']  =  $this->Mnews->Topgiaidau(4);
		$data['list_comment'] = $this->Mnews->getListByColumn('st_comment','news_id',$id);
		$data['list_news'] = $this->Mnews->getListByColumn('fg_news','id',$id);
		//var_dump($data['list_news']); die();
		$data['detail']=$this->Mnews->getRowByColumn('fg_news','id',$id);
		$data['module']=$this->module;
		$data['page']='vdetail';
		$this->load->view('front/container',$data);		
	}
	
	function category($id)
	{
		// Sử dụng hàm explode để tách chuỗi. dựa vào kí tự "-"
			$temp = explode("-", $id);
			if (isset($temp)){
				$id = $temp[0];
			}
			$data['category']  =  $this->Mnews->getListCategory('fg_news_tag');
			//var_dump($data['category']); die();
			$data['breadcrum1']  =  $this->Mnews->getRowByColumn('fg_tag','id',$id);
			$data['items']=$this->Mnews->getListByColumn('fg_news','id',$id);
			
			$data['list_tagv'] = $this->Mnews->getListFull('fg_tag');
			//var_dump($data['items']); die();
			$news = $this->Mnews->getRowByColumn('st_metatag','id',1);
			$data['meta_tag'] = $news->meta_news;
			$data['step']  =  $this->Mnews->getListFull('fg_step');
			$data['photo'] = $this->Mnews->getListFull('fg_banner');
			$data['link_fanpage'] = $this->Mnews->getRowByColumn('fg_setting','id',1);
			$data['list_belote'] = $this->Mnews->getListFull('fg_belote');
			$data['topwin']  =  $this->Mnews->Topwin(4);
			$data['topgiaidau']  =  $this->Mnews->Topgiaidau(4);
			$data['list_comment'] = $this->Mnews->getListByColumn('st_comment','news_id',$id);
			$data['list_news'] = $this->Mnews->getListByColumn('fg_news','id',$id);
			$data['module']  =  $this->module;
			$data['page']  =  'vnews';
			$this->load->view('front/container',$data);
	}
	function _input()
	{
		$input=array(
					'comment_name'=>$this->input->post('comment_name'),
					'comment_content'=>$this->input->post('comment_content'),
					'news_id'=>$this->input->post('news_id'),
					);
		return $input;
	}
	
	function comment()
	{
		$this->form_validation->set_rules('comment_name','Name','required|trim');
		$this->form_validation->set_rules('comment_content','Content','required|trim');
		if ($this->form_validation->run())
		{
			$input=$this->_input();
			if ($this->Mnews->insertNewRow('st_comment',$input))
			{
				$this->session->set_userdata('result','Post is successfull !');
			}
			else $this->session->set_userdata('result','False !');
		}
		 redirect(base_url().'news/page','refresh');
	}
}