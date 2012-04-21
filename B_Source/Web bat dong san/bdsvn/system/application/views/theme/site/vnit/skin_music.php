<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">   
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="description" content="<?=$this->setting_library->setting['site_description']?>">
<meta name="keywords" content="<?=$this->setting_library->setting['site_keywords']?>">
<title><?=$title?> - Nghe nhạc hay - Tải nhạc hot - Tìm nhạc vui - Nhạc Den Dom Dom nhạc số 1 Việt Nam</title>
<link rel="shortcut icon" href="<?=base_url()?>skins/favicon.ico" type="image/x-icon" />  
<link rel="stylesheet" type="text/css" href="<?=base_url()?>system/application/views/theme/site/<?=$this->site_library->get_default_template()?>/css/nhac.css">
<link rel="stylesheet" type="text/css" href="<?=base_url()?>system/application/views/theme/site/<?=$this->site_library->get_default_template()?>/css/system.css">
<link rel="stylesheet" type="text/css" href="<?=base_url()?>system/application/views/theme/system/css/system.css">
<script type="text/javascript" src="<?=base_url()?>system/application/views/theme/system/js/jquery-core.js"></script>
<script type="text/javascript" src="<?=base_url()?>system/application/views/theme/site/<?=$this->site_library->get_default_template()?>/js/swfobject.js"></script>  
</head>
<body>
<div id="wrapper_top">
    <div id="wrapper">
        <div id="header">
            <div style="height: 114px;">
                <div style="float: left;width: 250px;">
                    <img src="<?=base_url()?>skins/nhac.png" alt="">  
                </div>
                <div style="width: 750px;float: right;">
                    <div>
                        <?=$this->load->view('modules/tnd_app/index')?>                     
                    </div>
                    <div style="width: 450px;float: left;">
                       <?=$this->load->view('modules/tnd_timkiemnhac/index')?> 
                    </div>
                    <div style="width: 300px;float: right;">
                        
                    </div>               
                </div>
            </div>
            <div style="width: 100%;">
                    <?=$this->load->view('modules/tnd_menunhac/index')?>
            </div>
        </div>
    </div>
</div>
<div id="wrapper">
   <div id="body_mid">
    <div class="mid_content">
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
   <div id="body_bot"></div>
</div>
<?=$this->load->view('theme/site/vnit/html/ga')?>    
</body>
</html>
