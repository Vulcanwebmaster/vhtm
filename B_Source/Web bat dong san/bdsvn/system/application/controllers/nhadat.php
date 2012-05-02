<?php
  class nhadat extends Controller{
      protected $_templates;
      
      function __construct()
      {
      	 session_start();          
      	  parent::Controller();
          $this->load->model('nhadat_model','nhadat');
          $this->load->library('pagination_library');
      }
      
      function nhadat(){
          parent::Controller();
          $this->load->model('nhadat_model','nhadat');
          $this->load->library('pagination_library');
      }
      function index(){
			$data['title'] = 'THUÊ NHÀ XƯỞNG';
			//Lay du lieu "rao vat" xap xep theo tin vip.
			$config['base_url'] = base_url().'/'."nhadat/index";
			$config['total_rows']   =  $this->nhadat->getNumNhaXuong();
			$config['per_page']= '8';
			$config['uri_segment'] = 3;
			$this->pagination->initialize($config);
			$data['nhadat'] = $this->nhadat->getAllNhaXuong($config['per_page'],$this->uri->segment('3'));
			$data['pagination']    = $this->pagination->create_links();
			
			$data['chungcu'] = $this->nhadat->getchungcuvip();
			$data['muaban'] = $this->nhadat->getmuaban();
			$data['chothue'] = $this->nhadat->getchothue();
          
          
			$this->_templates['page'] = 'site/nhadat/index';
			$this->site_library->load($this->_templates['page'],$data);
          
      }
/**
* Tìm kiem
*/
      function timkiem(){
			$data['title'] = "THUÊ NHÀ XƯỞNG - TÌM KIẾM";      		
			$data['sectionid'] = (int)$this->input->post('sectionid');
			$data['nhucau'] = (int)$this->input->post('nhucau');
			$data['giatu'] = (int)$this->input->post('giatu');
			$data['giaden'] = (int)$this->input->post('giaden');
			$data['id_thanhpho'] = (int)$this->input->post('id_thanhpho');
			$data['idhuong'] = (int)$this->input->post('idhuong');
			
			$config['base_url'] = base_url().'/'."nhadat/timkiem";
			$config['total_rows']   =  $this->nhadat->getNumTimkiem();
			$config['per_page']= '10';
			$config['uri_segment'] = 3;
			$this->pagination->initialize($config); 
			$data['list'] =   $this->nhadat->getTimkiem($config['per_page'],$this->uri->segment('3'));
			$data['pagination']    = $this->pagination->create_links();                 
			$this->load->view('site/nhadat/timkiem',$data);
     }
/**
* Đăng tin      
*/
     function dangtin(){
        $this->load->library('editor_library');
 
        $buoc = $this->uri->segment('2'); 
        $data['title'] = 'THUÊ NHÀ XƯỞNG - ĐĂNG TIN';
        $data['thanhpho'] = $this->nhadat->getDangtinThanhpho();
        $data['danhmuc'] = $this->nhadat->getDangtinDanhmuc();
        $data['huong'] = $this->nhadat->getDangtinHuong();        
        $data['vitri'] = $this->nhadat->getDangtinVitri(); 
        
          if((int)$this->uri->segment('3')!=0){
              
              if(!$this->nhadat->getbuoc1()){
                  $this->session->set_flashdata('error','Xin lỗi. Quá trình đăng tin của bạn đã gây lỗi cho hệ thống. Xin vui lòng thử lại'); 
                 redirect(); 
              }else{
                  $data['buoc1'] = $this->nhadat->getbuoc1(); 
              }
          }        
          if($buoc==1){
                  $this->form_validation->set_rules('nhucau','Nhu cầu','required');
                  $this->form_validation->set_rules('sectionid','Danh mục','required');
                  $this->form_validation->set_rules('parentid','Loai hinh','');
                  $this->form_validation->set_rules('id_thanhpho','Thành phố','required');  
                  $this->form_validation->set_rules('id_quan','Quận huyện','');        
                  $this->form_validation->set_rules('idvitri','Vị trí','');          
                  $this->form_validation->set_rules('idhuong','Vị trí','');          

                  if($this->form_validation->run()){
                  
                   
                      if($buoc1 = $this->nhadat->savebuoc1()){
                            
                            $this->session->set_flashdata('message','Lưu bước 1 thành công');
                           // redirect('nhatoi/'.$this->session->userdata('username').'/raovat');
                           redirect('dangtin/2/'.$buoc1->idtin);                  
                      }else{
                          $this->session->set_flashdata('error','Lỗi gì rồi kiểm tra lại đi');
                      }

                  }
                         
        }
        if($buoc==2){
        
              $this->form_validation->set_rules('submit','Thành phố','');          

              if($this->form_validation->run()){
              
               
                  if($this->nhadat->savebuoc2()){
                        
                        $this->session->set_flashdata('message','Lưu bước 2 thành công');
                       // redirect('nhatoi/'.$this->session->userdata('username').'/raovat');
                       redirect('dangtin/3/'.$data['buoc1']->idtin);                  
                  }else{
                        $this->session->set_flashdata('error','Lưu bước 2 không thành công'); 
                  }

                         
              }          
          
        }
        if($buoc==3){
              
              $this->form_validation->set_rules('tieude','Tiêu đề','required');
              $this->form_validation->set_rules('diachilienhe','Địa chỉ','required'); 
              $this->form_validation->set_rules('gia','Giá','required');
              $this->form_validation->set_rules('dai','Chiều dai','');
              $this->form_validation->set_rules('rong','Chiều rộng','');
              
              $this->form_validation->set_rules('hoten','Họ tên','required');
              $this->form_validation->set_rules('diachi','Địa chỉ','required');
              $this->form_validation->set_rules('dienthoailienhe','Điện thoại','required');
              if($this->form_validation->run()){
                  if($this->nhadat->savebuoc3()){ 
                    $this->session->set_flashdata('message','Lưu bước 3 thành công.');
                    redirect('dangtin/4/'.$data['buoc1']->idtin); 
                                        
                  }else{
                      $this->session->set_flashdata('error','Đăng tin không thành công. Xin vui lòng thử lại');
                  }
              }
          }
          if($buoc==4){
              $data['list'] = $this->nhadat->getAllImgTin($data['buoc1']->idtin);
              $this->form_validation->set_rules('submit','Submit','');
              if($this->form_validation->run()){
                  $data = array(
                     'batdau' => mdate('%Y-%m-%d %H:%i:%s',time()), 
                     'dang'=>1
                  );
                  $this->db->where('idtin',$this->uri->segment(3));
                  $this->db->update('nhadat',$data);
                  $this->session->set_flashdata('message','Tin của bạn đã đăng thành công. Sẽ được chúng tôi kiểm duyệt');
                 redirect(); 
              }
          }         
                       
        $this->_templates['page'] = 'site/nhadat/dangtin';
        $this->site_library->load($this->_templates['page'],$data,'dangtin');   
     }
     
       function uploadfile(){
          $this->load->library('uploadthumb_library');
          $id = $this->uri->segment('3');
          $this->nhadat->uploadfile($id);
          $content ='';
          $list = $this->nhadat->getAllImgTin($id);
          $content .='
                     <div id="uploads">
                        <ul>';
                        foreach($list as $rs1):
                        $content .='<li style="margin-top: 20px;">
                            <img src="'.base_url().$rs1->big.'" alt="">
                            <div align="center"><a href="">Xóa</a></div>
                        </li>';
                     endforeach;
                $content .='</ul>
                     </div>
         ';
          echo $content;
      }  
      function xoaanh(){
          $id = $this->uri->segment(3);
          $this->db->where('id',$id);
          $this->db->delete('nhadat_img');
          echo 'ok';
      }
        
      function loadloaithanh(){
         $id = $this->input->post('sectionid');
         $this->db->Where('parentid',$id);
         $query = $this->db->get('nhadat_dm');
         $sub = $query->result();
         $data ='<select name="parentid" id="parentid" style="width:200px !important; border:1px solid #CCCCCC;" >';
         foreach($sub as $sub):
            $data .='<option value="'.$sub->iddm.'">'.$sub->danhmuc.'</option>';
         endforeach;
         $data .='</select>';
         echo $data;          
      }
      
      function loadquan(){
         $id = $this->input->post('id_thanhpho');
         $this->db->Where('idquan',$id);
         $query = $this->db->get('thanhpho');
         $sub = $query->result();
         $data ='<select name="id_quan" id="id_quan" style="width:200px !important; border:1px solid #CCCCCC;" >';
         foreach($sub as $sub):
            $data .='<option value="'.$sub->idthanhpho.'">'.$sub->ten.'</option>';
         endforeach;
         $data .='</select>';
         echo $data;          
      }
      
      function loaihinh(){
          
          $idnhucau = (int)$this->uri->segment(2);
          $idsub = (int)$this->uri->segment(3);
          $check = (string)$this->uri->segment(4);
          if($check!=''){
            $item = $this->nhadat->getItem();
			$data['title'] = 'THUÊ NHÀ XƯỞNG  -> Loại hình:'.$item->danhmuc;
		  }else{
		    $data['title'] = 'THUÊ NHÀ XƯỞNG  -> Nhu cau: Can ban - Can mua - Can thue - Cho Thue';
          }			
		  
          $config['total_rows']   =  $this->nhadat->getNumLoaihinh();
          $config['per_page']  =   '20'; 
            
          
          if($idsub==0){
            $data['parent_name'] = '';      
            $config['base_url'] = base_url().'loaihinh/'.(int)$this->uri->segment(2).'/'.$this->uri->segment(3);
            $config['uri_segment'] = 4; 
$this->pagination->initialize($config); 
            $data['list'] =   $this->nhadat->getAllLoaihinh($config['per_page'],$this->uri->segment(4)); 

          }else if($idsub!=0){
            $data['parent_name'] = ' » '.$this->nhadat->getItemLoaiHinh($idsub)->danhmuc;
            $config['base_url'] = base_url().'loaihinh/'.(int)$this->uri->segment(2).'/'.(int)$this->uri->segment(3).'/'.$this->uri->segment(4);   
            $config['uri_segment'] = 5; 
$this->pagination->initialize($config); 
            $data['list'] =   $this->nhadat->getAllLoaihinh($config['per_page'],$this->uri->segment(5)); 
          }          
           
          $data['pagination']    = $this->pagination->create_links();                  
         
          $this->_templates['page'] = 'site/nhadat/loaihinh';
          $this->site_library->load($this->_templates['page'],$data);
      } 
      
      function bds(){
          $item = $this->nhadat->getnamesection();
          $data['title'] = 'THUÊ NHÀ XƯỞNG  -> '.$item->danhmuc;
          $data['item'] = $item;
          $config['base_url'] = base_url().'bds/'.(int)$this->uri->segment(2).'/'.$this->uri->segment(3);  
          $config['total_rows']   =  $this->nhadat->getNumBds();
          $config['per_page']  =   '20';
          $config['uri_segment'] = 4;   
          $this->pagination->initialize($config);   
          $data['list'] =   $this->nhadat->getAllBds($config['per_page'],$this->uri->segment('4'));
          $data['pagination']    = $this->pagination->create_links();                  
         
          $this->_templates['page'] = 'site/nhadat/bds';
          $this->site_library->load($this->_templates['page'],$data);          
      } 
      
      function chitiet(){
          $rs = $this->nhadat->getChitiet();
          $data['title'] = 'THUÊ NHÀ XƯỞNG  -> '.$rs->tieude;
          $data['rs'] = $rs;
          $data['list'] = $this->nhadat->getlistimg();
          $this->_templates['page'] = 'site/nhadat/chitiet';
          $this->site_library->load($this->_templates['page'],$data);
      }
      
      function change(){
          $tiente = $this->input->post('tiente');
          $gia = $this->input->post('giatri');
          if($tiente=='vnd'){
              echo number_format($gia, 0, ',',',').' VNĐ'; 
          }
          if($tiente == 'sjc'){
              $gia = (int)$gia/$this->setting_library->setting['sjc'];
              echo  number_format($gia, 0, ',',',').' Lượng'; 
          }
          if($tiente == 'usd'){
              $gia = (int)$gia/$this->setting_library->setting['usd'];
              echo  number_format($gia, 0, ',',',').' USD'; ;
          }          
      }
      
      function khuvuc(){
          $data['title'] = 'THUÊ NHÀ XƯỞNG  -> Khu vực:';
          $data['link'] = $this->nhadat->getItemKhuvuc();
          $config['base_url'] = base_url().'khuvuc/'.(int)$this->uri->segment(2);  
          $config['total_rows']   =  $this->nhadat->getNumKhuvuc();
          $config['per_page']  =   '20';
          $config['uri_segment'] = 3;   
          $this->pagination->initialize($config);   
          $data['list'] =   $this->nhadat->getAllKhuvuc($config['per_page'],$this->uri->segment('3'));
          $data['pagination']    = $this->pagination->create_links();           
          $this->_templates['page'] = 'site/nhadat/khuvuc';
          $this->site_library->load($this->_templates['page'],$data);
      }
      function hoidap(){
			$data['title'] = 'THUÊ NHÀ XƯỞNG - HỎI ĐÁP';
			$this->_templates['page'] = 'site/nhadat/hoidap';
			$this->site_library->load($this->_templates['page'],$data,'hoidap');
      }
      function danhgiaweb(){
			$data['title'] = 'THUÊ NHÀ XƯỞNG - HỎI ĐÁP';
			$this->_templates['page'] = 'site/nhadat/danhgiaweb';
			$this->site_library->load($this->_templates['page'],$data,'danhgiaweb');
      }
      
  }
?>
