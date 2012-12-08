<?php
class Timkiem extends NIW_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->module=strtolower(get_class());
		$this->load->model('Mtimkiem');
		$this->load->library('pagination');
		$this->load->library('session');
	}
	
	function index()
	{
		redirect(base_url(),'refresh');
	}
	
	function doSearch()
	{
		echo '<meta charset="UTF-8"/>';
		if ($this->input->post('search-text'))
		{
			$value_search=$this->input->post('search-text');
			$type_search=$this->input->post('search-selector');
			{
				$this->search_sanpham($value_search);
			}
		}
	}
	
	function search_sanpham($value='',$index=0)
	{
		echo '<meta charset="UTF-8"/>';
		
		$config['base_url']=base_url().'sanpham/doSearch/';
		$config['per_page']=9;
		$config['total_rows']=count($this->Mtimkiem->getListByColumnLikeText('ln_product','product_name',$value));
		$config['uri_segment']=5;
		$this->pagination->initialize($config);
		$data['list']=$this->Mtimkiem->getListByColumnOffsetLikeText('ln_product','product_name',$value,$index,9);
		$data['module']=$this->module;
		$data['page']='vsanpham';
		$this->load->view('front/container',$data);
	}

	function search_tintuc($value='',$index=0)
	{
		echo '<meta charset="UTF-8"/>';
		$data['counting']=$this->getCounting();
		
		$config['base_url']=base_url().'tintuc/search/'.$value;
		$config['per_page']=8;
		$config['total_rows']=count($this->Mtimkiem->getListByColumnLikeText('ln_news','news_title',$value));
		$config['uri_segment']=4;
		$this->pagination->initialize($config);
		
		$data['list_tintuc']=$this->Mtimkiem->getListByColumnOffsetLikeText('ln_news','news_title',$value,$index,8);
		$data['module']=$this->module;
		$data['page']='vtintuc';
		$this->load->view('front/container',$data);
	}
}