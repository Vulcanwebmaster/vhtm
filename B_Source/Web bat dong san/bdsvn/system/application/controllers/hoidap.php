<?php
  class hoidap extends Controller{
      protected $_templates;
      function hoidap(){
          parent::Controller();
          $this->load->model('hoidap_model','hoidap');
      }

      function index(){
			$data['title'] = 'THUÊ NHÀ XƯỞNG - HỎI ĐÁP';
			$this->form_validation->set_rules('name','Tên','required');
			$this->form_validation->set_rules('email','Email','required');
			$this->form_validation->set_rules('commentDetail','Email','required');
			if($this->form_validation->run()){
              if($this->hoidap->luu()){
                  $this->session->set_flashdata('message','Câu hỏi bạn đăng thành công hay đợi chúng tôi trả lời');
                  redirect('hoidap');
              }else{
                  $this->session->set_flashdata('error','Không thành công. Xin vui lòng thử lại');
              }
          }
            	  $temp = $this->session->userdata('ngonngu');
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
          $this->_templates['page'] = 'site/nhadat/hoidap';
			$this->site_library->load($this->_templates['page'],$data,'hoidap');

      }

      
}
?>