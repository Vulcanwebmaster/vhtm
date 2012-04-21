 <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">   
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="description" content="<?=$this->setting_library->setting['site_description']?>">
<meta name="keywords" content="<?=$this->setting_library->setting['site_keywords']?>">
<title><?=$title?></title>
<link rel="shortcut icon" href="<?=base_url()?>skins/favicon.ico" type="image/x-icon" /> 
<style type="text/css">
#toptintuc .ui-tabs-hide{ 
    display:none; 
}
</style>

<link type="text/css" rel="stylesheet" href="<?=base_url()?>system/application/views/modules/tnd_tintucslide1/images/style.css" />
<script type="text/javascript" src="<?=base_url()?>system/application/views/theme/system/js/jquery-core.js"></script>
<script type="text/javascript" src="<?=base_url()?>system/application/views/modules/tnd_tintucslide1/images/ui.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $("#toptintuc > ul").tabs({fx:{opacity: "toggle"}}).tabs("rotate", 5000, true);
    });
</script>
<link rel="stylesheet" type="text/css" href="<?=base_url()?>system/application/views/theme/site/<?=$this->site_library->get_default_template()?>/css/tintuc.css">
<link rel="stylesheet" type="text/css" href="<?=base_url()?>system/application/views/theme/site/<?=$this->site_library->get_default_template()?>/css/skin.css">
<link rel="stylesheet" type="text/css" href="<?=base_url()?>system/application/views/theme/system/css/system.css">
<link rel="stylesheet" type="text/css" href="<?=base_url()?>system/application/views/theme/system/css/share.css">

</head>
<body>
<div class="wrapper_full">
<div class="wrap"> 
    <div class="header clearfix">
    <?=$this->load->view('theme/site/vnit/html/header')?>          
    </div>
    <div class="wrapper clearfix">
    <div class="wrapper_inc">
        <div class="content">
            <?if($this->session->flashdata('message')){
                echo '<div class="message">'.$this->session->flashdata('message').'</div>';
            }if($this->session->flashdata('error')){
                echo '<div class="error">'.$this->session->flashdata('error').'</div>';
            }if($this->session->flashdata('notes')){
                echo '<div class="notes">'.$this->session->flashdata('notes').'</div>';
            }

            ?>
           <div><?php $this->load->view( $page); ?></div> 


            <div style="height: 35px;width: 100%;float: left;"></div> 
            <div style="width: 100%;float: left;">
                <div class="content_text">
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
        </div>
    </div>
    </div>
</div>
</div>
<?=$this->load->view('theme/site/vnit/html/ga')?>    
</body>
</html>
