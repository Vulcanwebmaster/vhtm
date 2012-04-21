<?php
  class thanhvien extends Controller{
      protected $_templates;
      function thanhvien(){
          parent::Controller();
          $this->load->model('thanhvien_model','thanhvien');
      }
      function dangnhap(){
          $data['title'] = 'Đăng nhập';
          $this->form_validation->set_rules('tendangnhap','Tên đăng nhập','required');
          $this->form_validation->set_rules('matkhau','Mật khẩu','required');
          if($this->form_validation->run()){
              if($this->thanhvien->dangnhap()){
                  $this->session->set_flashdata('message','Đăng nhập thành công');
                  if($this->uri->segment(3)!=''){
                      redirect(base64_decode($this->uri->segment(3)));
                  }else{
                      redirect(base_url());
                  }
              }else{
                  $this->session->set_flashdata('error','Đăng nhập không thành công. Vui lòng kiểm tra lại thông tin');
                  redirect('thanhvien/dangnhap/'.$this->uri->segment(3));
              }
              
          }
          $this->_templates['page'] = 'site/thanhvien/dangnhap';
          $this->site_library->load($this->_templates['page'],$data,'thanhvien');
      }
      function dangky(){
          $data['title'] = 'Đăng ký';
          $this->_templates['page'] = 'site/thanhvien/dangky';
          $this->form_validation->set_rules('fullname','Họ tên','required');
          $this->form_validation->set_rules('email','Email','trim|required|valid_email|max_length[100]|callback__check_email');
          $this->form_validation->set_rules('username','Tên đăng nhập','trim|required|min_length[4]|max_length[20]|callback__check_username');
          $this->form_validation->set_rules('password','Mật khẩu','trim|required|min_length[4]|max_length[20]');
          $this->form_validation->set_rules('re_password','Mật khẩu nhắc lại','trim|matches[password]');
          if($this->form_validation->run()){
              if($this->thanhvien->savedangky()){
                  $this->session->set_flashdata('message','Đăng ký thành viên thành công');
                  if($this->uri->segment(3)!=''){
                      redirect(base64_decode($this->uri->segment(3)));
                  }else{
                      redirect(base_url());
                  }
              }else{
                  $this->form_validation->flashdata('error','Đăng ký không thành công. Vui lòng kiểm tra lại thông tin và đăng ký lại');
              }
              
          }
          $this->site_library->load($this->_templates['page'],$data,'thanhvien');
      }
      
      function trangcanhan(){
          $data['title'] = 'Thông tin cá nhân';
          $data['rs'] = $this->thanhvien->getCapnhat();
          $this->form_validation->set_rules('fullname','Họ tên','required');
          $this->form_validation->set_rules('email','Email','trim|required|valid_email|max_length[100]|callback__check_email_capnhat');
          $this->form_validation->set_rules('phone','Điện thoại');
          $this->form_validation->set_rules('address','Địa chỉ');
          $this->form_validation->set_rules('yahoo','yahoo');
          if($this->input->post('password')){
          $this->form_validation->set_rules('password','Mật khẩu','trim|required|min_length[4]|max_length[20]');
          $this->form_validation->set_rules('re_password','Mật khẩu nhắc lại','trim|matches[password]');  
          }  
          if($this->form_validation->run()){
              if($this->thanhvien->savecapnhat()){
                  $this->session->set_flashdata('message','Bạn vừa thay đổi thông tin thành công');
                  redirect('trangcanhan.html');
              }else{
                  $this->form_validation->flashdata('error','Không thành công. Vui lòng kiểm tra lại thông tin và đăng ký lại');
              }
              
          }                
          $this->_templates['page'] = 'site/thanhvien/trangcanhan';
          $this->site_library->load($this->_templates['page'],$data,'thanhvien');
      }
     function logout() {
        $url = $this->uri->segment(3);
        if($url){
            $url = base64_decode($url);
        }else{
            $url = base_url();
        }
        //Destroy session
        $this->session->sess_destroy();
        redirect($url);
     }      
      function quenmatkhau(){
          $data['title'] = 'Lấy lại mật khẩu';
          $this->form_validation->set_rules('email','Email','trim|required|valid_email|callback__quenmatkhau_email');
          if($this->form_validation->run()){
              $this->thanhvien->guimatkhau();
              $this->session->set_flashdata('message','Mật khẩu mới vừa được gửi vào địa chỉ email của bạn. Vui lòng kiểm tra email');
              redirect('quenmatkhau.html');
          }
          $this->_templates['page'] = 'site/thanhvien/quenmatkhau';
          $this->site_library->load($this->_templates['page'],$data,'thanhvien');
      } 
      
      function quentendangnhap(){
          $data['title'] = 'Lấy lại tên đăng nhập';
          $this->form_validation->set_rules('email','Email','trim|required|valid_email|callback__quenmatkhau_email');
          if($this->form_validation->run()){
              $this->thanhvien->guitendangnhap();
              $this->session->set_flashdata('message','Tên đang nhập vừa được gửi vào địa chỉ email của bạn. Vui lòng kiểm tra email');
              redirect('quentendangnhap.html');
          }
          $this->_templates['page'] = 'site/thanhvien/quentendangnhap';
          $this->site_library->load($this->_templates['page'],$data,'thanhvien');
      }      
      function _quenmatkhau_email($email){
          $this->db->where('email',$email);
          $check    =   $this->db->get('thanhvien');
          
          if($check->num_rows() == 0){
           $this->form_validation->set_message('_quenmatkhau_email', 'Email này không tồn tại trên hệ thống');
            return FALSE;
          }else{
              return true;
          }
      }       
      function _check_username($username){
          $this->db->where('username',$username);
          $check    =   $this->db->get('thanhvien');
          
          if($check->num_rows() != 0){
           $this->form_validation->set_message('_check_username', 'Tên đăng nhập đã có người sử dụng');
            return FALSE;
          }else{
              return true;
          }
      }
      
      function check_login_user($login_user){
          $this->db->where('username',$login_user);
          $check    =   $this->db->get('thanhvien');
          if($check->num_rows() == 0){
           $this->form_validation->set_message('check_login_user', 'Tên đăng nhập không tồn tại');
            return FALSE;
          }else{
              return true;
          }          
      }      
      
      function _check_email($email){
          $this->db->where('email',$email);
          $check    =   $this->db->get('thanhvien');
          
          if($check->num_rows() != 0){
           $this->form_validation->set_message('_check_email', 'Email đã có người sử dụng');
            return FALSE;
          }else{
              return true;
          }
      } 
      
      function _check_email_capnhat($email){
          $this->db->where('email',$email);
          $this->db->where('iduser <>',$this->session->userdata('iduser'));
          $check    =   $this->db->get('thanhvien');
          
          if($check->num_rows() != 0){
           $this->form_validation->set_message('_check_email_capnhat', 'Email đã có người sử dụng');
            return FALSE;
          }else{
              return true;
          }          
      }     
       //TAO ANH CAPTCHA             
       function _make_captcha()
          {
            $this -> load -> plugin( 'captcha' );
            $vals = array(
              'img_path' => './captcha/', // PATH for captcha ( *Must mkdir (htdocs)/captcha )
              'img_url' => base_url().'captcha/', // URL for captcha img
              'img_width' => 120, // width
              'img_height' => 30, // height
              'font_path'     => './system/fonts/chaudoc.ttf',
              'expiration' => 600 , 
              ); 
            // Create captcha
            $cap = create_captcha( $vals ); 
            // Write to DB
            if ( $cap ) {
              $data = array(
                'captcha_id' => '',
                'captcha_time' => $cap['time'],
                'ip_address' => $this -> input -> ip_address(),
                'word' => $cap['word'] , 
                );
              $query = $this -> db -> insert_string( 'captcha', $data );
              $this -> db -> query( $query );
            }else {
              return "Mã an toàn không hoạt động" ;
            }
            return $cap['image'] ;
          }
          // CHECK CAPTCHA
          function _check_capthca($code)
          { 
            // Delete old data ( 2hours)
            $expiration = time()-600 ;
            $sql = " DELETE FROM tnd_captcha WHERE captcha_time < ? ";
            $binds = array($expiration);
            $query = $this->db->query($sql, $binds);
            
            //checking input
            $sql = "SELECT COUNT(*) AS count FROM tnd_captcha WHERE word = ? AND ip_address = ? AND captcha_time > ?";
            $binds = array($code, $this->input->ip_address(), $expiration);
            $query = $this->db->query($sql, $binds);
            $row = $query->row();

            if ( $row -> count > 0 ){
              return true;
            }else{
                $this->form_validation->set_message('_check_capthca', 'Nhập mã an toàn không dúng');
                return false;
            }
          }             
  }
?>
