<?php
	class Admin extends Admin_Controller
	{
		private $module;
		function __construct()
		{
			parent::__construct();
			$this->module=strtolower(get_class());
			
			$this->load->model('Mnews');
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
			$config['base_url']=base_url().'news/admin/page/';
			$config['per_page']=15;
			$config['total_rows']=count($this->Mnews->getListFull('fg_news'));
			$config['uri_segment']=4;
			$this->pagination->initialize($config);
			
			$data['title']='Nouvelles';
			$data['bcCurrent']='Nouvelles';
			$data['list']=$this->Mnews->getListOffset('fg_news',15,$index);
			$data['module']=$this->module;
			$data['page']='admin_vlist';
			$this->load->view('admin/container',$data);
		}
		
		function _input()
		{
			
			$input=array(
						'name'=>$this->input->post('name'),
						'namee'=>$this->input->post('namee'),
						'content'=>$this->input->post('content'),
						'contente'=>$this->input->post('contente'),
						'create_date'=>$this->input->post('create_date'),
						'image'=>$this->input->post('image'),
						'author'=>$this->input->post('author'),
						'alias'=>$this->getAliasByName($this->input->post('name')),
						);
			return $input;
		}
		
		function insert()
		{
			if (!$this->input->post('name'))
			{
				$data['tag_name']=$this->Mnews->getListFull('fg_tag');
				$data['config'] = $this->setupCKEditor('97%','200px');
				$data['title']='Ajouter NOUVELLES';
				$data['bcCurrent']='NOUVELLES';
				$data['module']=$this->module;
				$data['page']='admin_vinsert';
				$this->load->view('admin/container',$data);
			}
			else 
			{
				$this->form_validation->set_rules('name','Nom','required|trim');
				
				$this->form_validation->set_message('required','catégorie %s  qui n est pas vide');
				
				if ($this->form_validation->run())
				{
					$input=$this->_input();
					if ($this->Mnews->insertNewRow('fg_news',$input))
					{
						if($this->input->post('tags')!=NULL){
						 foreach($this->input->post('tags') as $value){
							 $this->Mnews->insertNewRow('fg_news_tag',array('id_tagv'=>$value,'id_news'=>$inserId = $this->db->insert_id()));
						 }}
						$this->session->set_userdata('result','ajouter réussie nouveau');
					}
					else $this->session->set_userdata('result','ajouter fausses nouvelles');
					$this->index();
				}
				else 
				{
					$data['tag_name']=$this->Mnews->getListFull('fg_tag');
					$data['config'] = $this->setupCKEditor('97%','200px');
					$data['title']='Ajouter NOUVELLES';
					$data['bcCurrent']='NOUVELLES';
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
			if (!$this->input->post('name'))
			{
				$data['tag_name']=$this->Mnews->getListFull('fg_tag');
				$data['info']=$this->Mnews->getRowByColumn('fg_news','id',$id);
				$data['title']='Modifier NOUVELLES';
				$data['bcCurrent']='NOUVELLES';
				$data['module']=$this->module;
				$data['page']='admin_vedit';
				$this->load->view('admin/container',$data);
			}
			else 
			{
				$this->form_validation->set_rules('name','Nom','required|trim');
				
				$this->form_validation->set_message('required','catégorie %s  qui n est pas vide');
				
				if ($this->form_validation->run())
				{
					$input=$this->_input();
					
					if ($this->Mnews->updateRowByColumn('fg_news','id',$id,$input))
					{
						$this->Mnews->deleteRowByColumn('fg_news_tag','id_news',$id);
						if($this->input->post('tags')!=NULL){
						foreach($this->input->post('tags') as $value){
							$this->Mnews->insertNewRow('fg_news_tag',array('id_tagv'=>$value,'id_news'=>$id));
						}
						}
						$this->session->set_userdata('result','mise à jour réussie');
					}
					else $this->session->set_userdata('result','mettre à jour les faux');
					$this->index();
				}
				else 
				{
					$data['tag_name']=$this->Mnews->getListFull('fg_tag');
					$data['info']=$this->Mnews->getRowByColumn('fg_news','id',$id);
					$data['title']='Modifier NOUVELLES';
					$data['bcCurrent']='NOUVELLES';
					$data['module']=$this->module;
					$data['page']='admin_vedit';
					$this->load->view('admin/container',$data);
				}
			}
		}
		
		function delete($id=0)
		{
			if ($this->Mnews->deleteRowByColumn('fg_news','id',$id))
			{
				$this->session->set_userdata('result','Delete successfull');
			}
			else $this->session->set_userdata('result','Delete false');		
			$this->index();
		}
	}
?>