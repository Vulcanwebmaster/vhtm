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
          $this->_templates['page'] = 'site/nhadat/hoidap';
			$this->site_library->load($this->_templates['page'],$data,'hoidap');

      }

      
}
?>