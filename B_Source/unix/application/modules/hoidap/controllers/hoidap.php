<?php
	class Hoidap extends Shop_Controller
	{
		private $module;
		function __construct()
		{
			parent::__construct();
			$this->module=strtolower(get_class());
			$this->load->model('Mhoidap');
			$this->load->library('session');
			$this->load->library('pagination');
			$this->load->library('email');
			$this->load->library('parser');
			
		}
		
		
	function index()
		{
			//$data['list']=$this->Mhoidap->getListHoiDap();
			//$data['page']=$this->config->item('backendpro_template_shop').'vhoidap';
			//$data['module']=$this->module;
			//$this->load->view($this->_container,$data);
			$this->page();
		}
		
		function page()
		{
			$config['base_url']=base_url().'/index.php/hoidap/page';
			$config['total_rows']=$this->Mhoidap->count();
			$config['per_page']=4;
			$this->pagination->initialize($config);
			
			$data['tieude']='HỎI ĐÁP';
			$data['list']=$this->Mhoidap->ListQuestion($config['per_page'],$this->uri->segment(3));
			$data['page']=$this->config->item('backendpro_template_shop').'vhoidap';
			$data['module']=$this->module;
			$this->load->view($this->_container,$data);
		}
		
		function submit()
		{
			if ($this->input->post('submit'))
			{
				$this->form_validation->set_rules('hoten','"Họ tên"','required');				
				$this->form_validation->set_rules('noidung','"Nội dung"','required');
				$this->form_validation->set_rules('dienthoai','"Điện thoại"','required|numeric');				
				$this->form_validation->set_message('required','%s không được để trống');
				$this->form_validation->set_message('numeric','%s chỉ được nhập số');

				if ($this->form_validation->run())
				{
					$this->Mhoidap->insert();

						$this->email->from('tiennd@niw.com.vn',$this->input->post('hoten') );
						$this->email->to('unix.group.vn@gmail.com'); 
					
						$this->email->subject('[Hỏi đáp] V/v có câu hỏi cần giải đáp');
						$this->email->message($this->input->post('noidung'));	
						$this->email->send();					
					
						$this->index();
				}
				else  
				{
					$data['list']=$this->Mhoidap->getListHoiDap();
					$data['page']=$this->config->item('backendpro_template_shop').'vhoidap';
					$data['module']=$this->module;
					$this->load->view($this->_container,$data); 
				}
			  	
			}
		}
		
		function detail($id)
		{
			$luot=$this->Mhoidap->getLuot($id);
			$l=$luot->luotxem;
			$l+=1;
			$this->Mhoidap->updateLuotXem($id,$l);
			$data['tieude']='Chi tiết câu hỏi';
			$data['newest']=$this->Mhoidap->getNew($id);
			$data['info']=$this->Mhoidap->getDetail($id);
			$data['page']=$this->config->item('backendpro_template_shop').'vdetails';
			$data['module']=$this->module;
			$this->load->view($this->_container,$data);
		}
		

	}
?>