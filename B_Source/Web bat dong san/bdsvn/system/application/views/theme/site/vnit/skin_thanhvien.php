<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">   
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="description" content="<?=$this->setting_library->setting['site_description']?>">
<meta name="keywords" content="<?=$this->setting_library->setting['site_keywords']?>">
<title><?=$title?> - Thành viên - <?=$this->setting_library->setting['site_name']?></title>  
<link rel="shortcut icon" href="<?=base_url()?>skins/favicon.ico" type="image/x-icon" />
<link rel="stylesheet" type="text/css" href="<?=base_url()?>system/application/views/theme/site/<?=$this->site_library->get_default_template()?>/css/thanhvien.css">
<link rel="stylesheet" type="text/css" href="<?=base_url()?>system/application/views/theme/system/css/system.css">
<script type="text/javascript" src="<?=base_url()?>system/application/views/theme/system/js/jquery-core.js"></script>
<link rel="stylesheet" type="text/css" href="<?=base_url()?>system/application/views/theme/site/vnit/css/menunhac.css">  
</head>
<body>
<div id="wrapper">
<div id="wrap_header">
    <div class="headforum">
        <div class="logo">
            <img src="<?=base_url()?>skins/member.png" alt="">
        </div>
        <div class="quangcao">
              <?=$this->load->view('modules/tnd_app/index')?> 
        </div>
    </div>
    <div>
        <div id="colortab" style="float: left;width: 800px;padding-left: 20px;" class="ddcolortabs clearfix">
            <ul>
            <?if($this->session->userdata('iduser')){?>
                <li><a href="<?=base_url()?>thoat.html"><span>Thoát</span></a></li> 
            <?}else{?>
                <li><a href="<?=base_url()?>thanhvien/dangnhap"><span>Đăng nhập</span></a></li>
                <li><a href="<?=base_url()?>thanhvien/dangky"><span>Đăng ký</span></a></li>
            <?}?>
            </ul>
        </div>
   
    </div>
</div>
<div id="wrap_contenttop"></div>
<div id="wrap_contentmid">
    <div id="bodycontent">
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
</div> 
<div id="wrap_contentbot"></div>     
</div>
<div id="wrapper">
    <div style="padding-left: 20px;">
                    <p>
                        <b>Copyright &copy; 2010 - Cổng thông tin học tập & giải trí Việt v2.0</b><br>  
                        Support: ĐT: 0989284278 - Email: tranngocduoc@gmail.com<br>
                        Ghi rõ nguồn "DENDOMDOM" khi phát hành lại thông tin từ website này
                         <br>
                      </p> 
                      <p>
                      <?=$this->load->view('modules/tnd_online/index')?>
                      </p>
    </div>                
</div>
<?=$this->load->view('theme/site/vnit/html/ga')?>   
</body>
</html>