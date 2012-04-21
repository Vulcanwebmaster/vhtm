<?php
  class anh extends Controller{
      protected $_templates;
      function anh(){
          parent::Controller();
          $this->load->model('anh_model','anh');
      }
      function index(){
          $data['title'] = 'Ảnh đẹp';
          $data['anhmoi'] = $this->anh->getAnhMoinhat();  
          $data['noibat'] = $this->anh->getAlbumNoibat();   
          $data['xemnhieu'] = $this->anh->getxemtrongngay(); 
          $data['cat'] = $this->anh->getCatHome();  
          $this->_templates['page'] = 'site/anh/index';
          $this->site_library->load($this->_templates['page'],$data,'anh');
      }
      
      /// Tags Anh
      function tags(){
          $item = $this->anh->getItemtags();
          $data['title'] = 'Thẻ: '.$item->name;
          $data['item'] = $item;
          $config['base_url'] = base_url().'anhdep/tags/'.$this->uri->segment('3').'/'.$this->uri->segment('4');  
          $config['total_rows']   =  $this->anh->getNumTags();
          $config['per_page']  =   '50';
          $config['uri_segment'] = 5;   
          $this->pagination->initialize($config);   
          $data['list'] =   $this->anh->getAllTags($config['per_page'],$this->uri->segment('5'));
          $data['pagination']    = $this->pagination->create_links();           
          $this->_templates['page'] = 'site/anh/tags';
          $this->site_library->load($this->_templates['page'],$data,'anh');
      }
      
      function silde(){
          $list = $this->anh->getAnhSilide();
          //header("content-type:text/xml;charset=utf-8"); 
          $xml ='<?xml version="1.0" encoding="utf-8"?>
                <playlist version="1" xmlns="http://xspf.org/ns/0/">
                    <trackList>';
          foreach($list as $val):
          $rs= $this->anh->getAnhDaiDien($val->id);
                $xml .='<track>
                            <title>Chứng nhận của Intel</title>
                            <creator>Jeroen Wijering</creator>
                            <location>'.$rs->url.'</location>
                            <info>http://www.jeroenwijering.com</info>
                        </track>';          
          endforeach;          
          $xml .=' </trackList>
                </playlist>';   
                echo $xml;                 
      }
      
      function chitiet(){
          $data['title'] = 'Chi tiết ảnh';
          $data['rs'] = $this->anh->getChitiet();
          $data['list'] = $this->anh->getAllTheloaiMenu();
          $data['danhmuc'] = $this->anh->getDChuyenmuc();
          $this->_templates['page'] ='site/anh/chitiet';
          $this->site_library->load($this->_templates['page'],$data,'anh');
      }
      
      function theloai(){
          $data['title'] = 'The loai';
          $config['base_url'] = base_url().'anhdep/the-loai/'.$this->uri->segment('3').'/'.$this->uri->segment('4');  
          $config['total_rows']   =  $this->anh->getNumTheloai();
          $config['per_page']  =   '50';
          $config['uri_segment'] = 5;   
          $this->pagination->initialize($config);   
          $data['list'] =   $this->anh->getAllTheloai($config['per_page'],$this->uri->segment('5'));
          $data['pagination']    = $this->pagination->create_links();           
          $this->_templates['page'] = 'site/anh/theloai';
          $this->site_library->load($this->_templates['page'],$data,'anh');
      }
  }
?>
