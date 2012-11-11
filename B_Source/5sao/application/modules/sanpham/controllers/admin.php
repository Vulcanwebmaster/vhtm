<?php
	class Admin extends Admin_Controller
	{
		private $module;
		function __construct()
		{
			parent::__construct();
			$this->module=strtolower(get_class());
			
			$this->load->model('Msanpham');
			$this->load->library('form_validation');
			$this->load->library('session');
			
			//=============================================
			$this->load->library('Ckeditor',array('instanceName' => 'CKEDITOR1','basePath' => base_url()."assets/5sao/ckeditor/", 'outPut' => true));                             
			//=============================================
		}
		
		function index()
		{
			$this->page();
		}
		
		function page($index=0)
		{
			$config['base_url']=base_url().'sanpham/admin/page/';
			$config['per_page']=12;
			$config['total_rows']=count($this->Msanpham->getListFull('sanpham'));
			$config['uri_segment']=4;
			$this->pagination->initialize($config);
			
			$data['title']='Sản phẩm';
			$data['bcCurrent']='Sản phẩm';
			$data['list']=$this->Msanpham->getListOffset('sanpham',12,$index);
			$listCategories=array();
			foreach ($data['list'] as $item)
			{
				$listCategories[]=$this->Msanpham->getRowByColumn('danhmuc','id',$item->danhmuc_id);
			}
			$data['listCategories']=$listCategories;
			$data['module']=$this->module;
			$data['page']='admin_vlist';
			$this->load->view('admin/container',$data);
		}
		
		function _input()
		{
			$input=array('ten_v'=>$this->input->post('ten_v'),
						'ten_e'=>$this->input->post('ten_e'),
						'mota_v'=>$this->input->post('mota_v'),
						'mota_e'=>$this->input->post('mota_e'),
						'chitiet_v'=>$this->input->post('chitiet_v'),
						'chitiet_e'=>$this->input->post('chitiet_e'),
						'hinhanh'=>$this->input->post('hinhanh'),
						'danhmuc_id'=>$this->input->post('danhmuc_id'),
						'moi'=>$this->input->post('moi'),
						'banchay'=>$this->input->post('banchay'),
						'model'=>$this->input->post('model'),
						'hangsx'=>$this->input->post('hangsx'),
						'baohanh'=>$this->input->post('baohanh'),
						'khohang'=>$this->input->post('khohang'),
						'giaban'=>$this->input->post('giaban'),
						'modele'=>$this->input->post('modele'),
						'hangsxe'=>$this->input->post('hangsxe'),
						'baohanhe'=>$this->input->post('baohanhe'),
						'khohange'=>$this->input->post('khohange'),
						'giabane'=>$this->input->post('giabane'),
						'alias'=>$this->getAliasByName($this->input->post('ten_v')));
			return $input;
		}
		
		function insert()
		{
			if (!$this->input->post('ten_v'))
			{
				$listFullCt=$this->Msanpham->getListFull('danhmuc');
				$data['listCategories']=array();
				foreach ($listFullCt as $ct)
				{
					if (count($this->Msanpham->getListByColumn('danhmuc','parent_id',$ct->id))==0)
					{
						$data['listCategories'][]=$ct;
					}
				}
				
				$data['config'] = $this->setupCKEditor('97%','200px');
				$data['title']='Thêm sản phẩm';
				$data['bcCurrent']='sản phẩm';
				$data['module']=$this->module;
				$data['page']='admin_vinsert';
				$this->load->view('admin/container',$data);
			}
			else 
			{
				$this->form_validation->set_rules('ten_v','Tên (Việt)','required|trim');
				
				$this->form_validation->set_message('required','Mục %s không được bỏ trống');
				
				if ($this->form_validation->run())
				{
					$ten_v=$this->input->post('ten_v');
					if ($this->Msanpham->getRowByColumn('sanpham','ten_v',$ten_v))
					{
						echo '<meta charset="UTF-8"/>';
						echo '<script language=javascript>
							alert("Đã có sản phẩm tồn tại với tên: '.$ten_v.'");
						</script>';
						redirect(base_url().'sanpham/admin/insert','refresh');
					}
					else 
					{
						$input=$this->_input();
						if ($this->Msanpham->insertNewRow('sanpham',$input))
						{
							$this->session->set_userdata('result','Thêm mới thành công');
						}
						else $this->session->set_userdata('result','Thêm mới không thành công');
						$this->index();
					}
				}
				else 
				{
					$data['config'] = $this->setupCKEditor('97%','200px');
					$data['title']='Thêm sản phẩm';
					$data['bcCurrent']='Sản phẩm';
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
			if (!$this->input->post('ten_v'))
			{
				$listFullCt=$this->Msanpham->getListFull('danhmuc');
				$data['listCategories']=array();
				foreach ($listFullCt as $ct)
				{
					if (count($this->Msanpham->getListByColumn('danhmuc','parent_id',$ct->id))==0)
					{
						$data['listCategories'][]=$ct;
					}
				}
				$data['info']=$this->Msanpham->getRowByColumn('sanpham','id',$id);
				$data['title']='Sửa sản phẩm';
				$data['bcCurrent']='sản phẩm';
				$data['module']=$this->module;
				$data['page']='admin_vedit';
				$this->load->view('admin/container',$data);
			}
			else 
			{
				$this->form_validation->set_rules('ten_v','Tên (Việt)','required|trim');
				
				$this->form_validation->set_message('required','Mục %s không được bỏ trống');
				
				if ($this->form_validation->run())
				{
					$current_name=$this->Msanpham->getRowByColumn('sanpham','id',$id)->ten_v;
					$ten_v=$this->input->post('ten_v');
					if ($this->Msanpham->getRowByColumn('sanpham','ten_v',$ten_v) && $ten_v!=$current_name)
					{
						echo '<meta charset="UTF-8"/>';
						echo '<script language=javascript>
							alert("Đã có sản phẩm tồn tại với tên: '.$ten_v.'");
						</script>';
						redirect(base_url().'sanpham/admin/edit/'.$id,'refresh');
					}
					else {
						$input=$this->_input();
						if ($this->Msanpham->updateRowByColumn('sanpham','id',$id,$input))
						{
							$this->session->set_userdata('result','Cập nhật thành công');
						}
						else $this->session->set_userdata('result','Cập nhật không thành công');
						$this->index();
					}
				}
				else 
				{
					$data['listCategories']=$this->Msanpham->getListFull('danhmuc');
					$data['info']=$this->Msanpham->getRowByColumn('sanpham','id',$id);
					$data['title']='Sửa sản phẩm';
					$data['bcCurrent']='sản phẩm';
					$data['module']=$this->module;
					$data['page']='admin_vedit';
					$this->load->view('admin/container',$data);
				}
			}
		}
		
		function delete($id=0)
		{
			if ($this->Msanpham->deleteRowByColumn('sanpham','id',$id))
			{
				$this->session->set_userdata('result','Xóa thành công');
			}
			else $this->session->set_userdata('result','Xóa không thành công');		
			$this->index();
		}
	}
?>