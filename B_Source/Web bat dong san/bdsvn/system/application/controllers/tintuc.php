<?php
  class tintuc extends Controller{
      protected $_templates;
      function tintuc(){
          parent::Controller();
          $this->load->model('tintuc_model','tintuc');
          $this->load->library('app_library');
      }
      function index(){
          $data['title'] = 'Tin tức nhà đất';
          $data['tinanh'] = $this->tintuc->getLastTinanh();
          $data['chuyenmuc'] = $this->tintuc->getAllChuyenmuc();
          $data['tieudiem'] = $this->tintuc->getTieudiem();
          $this->_templates['page'] = 'site/tintuc/index';
      	  $temp = $this->session->userdata("ngonngu");
			if ($temp==2)
			{
					$this->lang->load('eng','english');
					$this->session->set_userdata("ngonngu",2);				
			}
			else if ($temp==1)
			{
					$this->lang->load('vn', 'vn');
					$this->session->set_userdata("ngonngu",1);
			}
			else 
			{
				$this->lang->load('vn', 'vn');
			}
          $this->site_library->load($this->_templates['page'],$data,'tintuc');
      }
      
      function chuyenmuc(){
          $check = $this->tintuc->getItemChuyenmuc();
          $data['title'] = $check->ten.' - '.$check->alias;
           
          if($check){
              $config['base_url'] = base_url().'tintuc/chuyen-muc/'.$this->uri->segment('3');  
              $config['total_rows']   =  $this->tintuc->getNumTinChuyenmuc();
              $config['per_page']  =   '15';
              $config['uri_segment'] = 4;   
              $this->pagination->initialize($config);   
              $data['list'] =   $this->tintuc->getTinchuyenmuc($config['per_page'],$this->uri->segment('4'));
              $data['pagination']    = $this->pagination->create_links();         
              $this->_templates['page'] = 'site/tintuc/chuyenmuc';
              $data['top']  = $this->tintuc->getTopTinChuyenmuc();
              $data['link'] = $check;
              $data['tinanh'] = $this->tintuc->getTopTinAnhChuyenMuc();
              if($data['tinanh']){
              $data['listinanh'] = $this->tintuc->getTopListTinanh();
              $data['tieudiem'] = $this->tintuc->getTieudiemDanhmuc();
              
              }else{
                  $data['tieudiem'] = array();
              }

              $data['docnhieu'] = $this->tintuc->getTindocnhieuChuyenmuc();
              
          }else{
              $this->_templates['page'] = 'error/loi';
          }
          $this->site_library->load($this->_templates['page'],$data,'tintuc');
      }
      
      function chitiet(){
          $rs = $this->tintuc->getChitiet();
          if($rs){
          $data['title'] = $rs->tieude.' - '.$rs->alias;
              $data['tinanh'] = $this->tintuc->getTopTinAnhChuyenMuc();
              if($data['tinanh']){
              $data['listinanh'] = $this->tintuc->getTopListTinanh();
              $data['tieudiem'] = $this->tintuc->getTieudiemDanhmuc();
              
              }else{
                  $data['tieudiem'] = array();
              }
              $data['rs'] = $rs;
              $data['docnhieu'] = $this->tintuc->getTindocnhieuChuyenmuc();
              $data['moidang'] = $this->tintuc->getTinmoidang();
              $data['cuhon'] = $this->tintuc->getTincuhon();
              $data['link'] = $this->tintuc->getItemChuyenmuc();
          $this->_templates['page'] = 'site/tintuc/chitiet';
          }else{
              $data['title'] = 'Không tim thấy trang yêu cầu';
              $this->_templates['page'] = 'error/loi';
          }
          $this->site_library->load($this->_templates['page'],$data,'tintuc');
      }
  }
?>
