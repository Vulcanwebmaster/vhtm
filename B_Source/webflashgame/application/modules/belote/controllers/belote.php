<?php
class Belote extends NIW_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->module=strtolower(get_class());
		$this->load->model('Mbelote');
		$this->loadLang();
		$this->load->library('pagination');
		$this->load->helper('text');
	}
	
	function index()
	{
		$this->page();
	}
	
	// function page($index=0)
	// {
		// $config['base_url']=base_url().'belote/page/';
		// $config['per_page']=8;
		// $config['total_rows']=count($this->Mbelote->getListFull('fg_belote'));
		// $config['uri_segment']=3;
		// $this->pagination->initialize($config);
		// $data['list_news']=$this->Mbelote->getListOffset('fg_belote',8,$index);
		// $data['module']=$this->module;
		// $data['page']='vnews';
		// $this->load->view('front/container',$data);
	// }
// 	
	function detail($id=0)
	{
		$data['topwin']  =  $this->Mbelote->Topwin(4);
		$data['topgiaidau']  =  $this->Mbelote->Topgiaidau(4);
		//$data['list_comment'] = $this->Mbelote->getListByColumn('st_comment','news_id',$id);
		$data['detail']=$this->Mbelote->getRowByColumn('fg_belote','id',$id);
		$data['module']=$this->module;
		$data['page']='vdetail';
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