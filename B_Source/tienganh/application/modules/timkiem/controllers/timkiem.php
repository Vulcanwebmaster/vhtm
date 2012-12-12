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
		//lay ten cua input nhap vao
		if ($this->input->post('search-text'))
		{
			$value_search=$this->input->post('search-text');
			$type_search=$this->input->post('search-selector');
			$this->search_khoahoc($value_search);
		}
	}
	
	function search_khoahoc($value='',$index=0)
	{
		echo '<meta charset="UTF-8"/>';
		$config['base_url']=base_url().'giangvien/doSearch/';
		$config['per_page']=9;
		$config['total_rows']=count($this->Mtimkiem->getListByColumnLikeText('ta_lecturers','lecturers_category',$value));
		$config['uri_segment']=5;
		$this->pagination->initialize($config);
		
		$data['list']=$this->Mtimkiem->getListByColumnOffsetLikeText('ta_lecturers','lecturers_category',$value,$index,9);
		$data['module']=$this->module;
		$data['page']='vgiangvien';
		$this->load->view('front/container',$data);
	}
	
	//Tìm kiếm theo tin tức
	function search_tintuc($value='',$index=0)
	{
		echo '<meta charset="UTF-8"/>';
		$config['base_url']=base_url().'tintuc/search/'.$value;
		$config['per_page']=8;
		$config['total_rows']=count($this->Mtimkiem->getListByColumnLikeText('ta_news','news_title',$value));
		$config['uri_segment']=4;
		$this->pagination->initialize($config);
		$data['list_tintuc']=$this->Mtimkiem->getListByColumnOffsetLikeText('ta_news','news_title',$value,$index,8);
		$data['module']=$this->module;
		$data['page']='vtintuc';
		$this->load->view('front/container',$data);
	}
}