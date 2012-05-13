<?php
	class Ao extends Shop_Controller
	{
		private $module;
		function __construct()
		{
			parent::__construct();
			$this->module=strtolower(get_class());
			$this->load->model('Get_data');
			$this->load->library('pagination');
			
			
            
		}
		
		function index()
		{
			redirect(base_url().'index.php/ao/get_list/ao/0');           			
		}
		
		function get_list($type,$index=0)
		{	
			$config['base_url']=base_url().'index.php/ao/get_list/'.$type;
            
            $config['per_page']=10;
			$config['total_rows']=$this->Get_data->count($type);
			$count=$this->Get_data->count($type);
			
			$this->pagination->initialize($config);
			if ($type=='ao')
				$data['type']='Áo';
			elseif ($type=='quan')
				$data['type']='Quần';
			elseif ($type=='phukien')
				$data['type']='Phụ kiện';
			$data['title']='Danh mục sản phẩm';
			$data['count']=$this->Get_data->count($type);
			$data['list'] = $this->Get_data->get_list($type,$index);
			$data['page']=$this->config->item('backendpro_template_shop').'dsao';
			$data['module']=$this->module;
			$this->load->view($this->_container,$data);
		}
		
		function hangmoi($index=0)
		{
			$config['base_url']=base_url().'index.php/ao/hangmoi';
            
            $config['per_page']=10;
			$config['total_rows']=$this->Get_data->count_hang_moi();			
			
			$data['title']='Hàng mới về';
			$data['count']=$this->Get_data->count_hang_moi();
			$data['type']="Hàng mới";
			$data['list']=$this->Get_data->hang_moi_ve($index);
			$data['page']=$this->config->item('backendpro_template_shop').'dsao';
			$data['module']=$this->module;
			$this->load->view($this->_container,$data);
		}
	}
?>