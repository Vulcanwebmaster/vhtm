<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd"> 
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title><?=$title?></title>
<link rel="stylesheet" type="text/css" href="<?=base_url()?>system/application/views/theme/admin/vnit/css/menu.css">
<link rel="stylesheet" type="text/css" href="<?=base_url()?>system/application/views/theme/admin/vnit/css/style.css">
<link rel="stylesheet" type="text/css" href="<?=base_url()?>system/application/views/theme/admin/vnit/css/icon.css">
<link rel="stylesheet" type="text/css" href="<?=base_url()?>system/application/views/theme/system/css/system.css">
<script type="text/javascript" src="<?=base_url()?>system/application/views/theme/system/js/jquery-core.js"></script>
<script type="text/javascript" src="<?=base_url()?>system/application/views/theme/system/js/popup.js"></script> 
</head>
<body>
<?if($this->session->userdata('id_group')<=18){
    redirect('admin');
}?>
<div class="body_content">
    <div class="header">
          <div class="header-left">
          <img src="<?php echo base_url();?>images/admin/header-left.png" width="80px" height="41px"/>
          </div>
          <div class="header-mid">
          <div class="site_header">
            <span class="welcome">Xin chào: <?=$this->session->userdata('username')?></span> 
            <span class="homepage">
                <a target="_blank" href="<?=base_url()?>">Trang chủ</a>
            </span>
            <span class="homepage">
                <a target="_blank" href="<?=base_url()?>admin/logout" onclick="logout()">Thoát</a>
            </span>            
          </div>
          </div>
          <div class="header-right"></div>
    </div>
    <div class="head_box">
    <?=$this->load->view('theme/admin/vnit/html/menu')?>
    </div>
    <div class="content_box">
<?if($this->session->flashdata('message')){
    echo '<div class="message">'.$this->session->flashdata('message').'</div>';
}if($this->session->flashdata('error')){
    echo '<div class="error">'.$this->session->flashdata('error').'</div>';
}if($this->session->flashdata('notes')){
    echo '<div class="notes">'.$this->session->flashdata('notes').'</div>';
}

?>     
    <?php $this->load->view( $page); ?> 
    </div>
    <div class="bottom_box">
        <div>
            <div></div>
        </div>
    </div> 
</div>
</body>
</html>
