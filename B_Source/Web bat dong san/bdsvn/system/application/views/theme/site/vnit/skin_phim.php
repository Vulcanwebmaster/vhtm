<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">   
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="description" content="<?=$this->setting_library->setting['site_description']?>">
<meta name="keywords" content="<?=$this->setting_library->setting['site_keywords']?>">
<title><?=$title?></title>
<link rel="stylesheet" type="text/css" href="<?=base_url()?>system/application/views/theme/site/<?=$this->site_library->get_default_template()?>/css/phim.css">
<link rel="stylesheet" type="text/css" href="<?=base_url()?>system/application/views/theme/site/<?=$this->site_library->get_default_template()?>/css/skin.css">
<link rel="stylesheet" type="text/css" href="<?=base_url()?>system/application/views/theme/system/css/system.css">
<script type="text/javascript" src="<?=base_url()?>system/application/views/theme/system/js/jquery-core.js"></script>
<script type="text/javascript" src="<?=base_url()?>system/application/views/theme/site/<?=$this->site_library->get_default_template()?>/js/swfobject.js"></script>
</head>
<body>
<div class="wrapper_full">
<div class="wrap"> 
    <div class="header clearfix">
        <div class="headtop">
             <div class="logo">
                <img src="<?=base_url()?>system/application/views/theme/site/vnit/images/logo.png" alt="">
             </div>
             <div class="adv">
                   <?=$this->load->view('modules/tnd_quangcao/phim_banner')?>
             </div>
        </div>

        <div class="menu ">
              <?=$this->load->view('modules/tnd_menuphim/index')?>
        </div>       
    </div> 
    <div class="wrapper clearfix">
    <div class="wrapper_inc">
        <div class="content">

           <div>
                <div id="colleft">
                <?$check = $this->uri->segment('2');
                if($check!='xem-phim'){
                ?>
                    <div id="content_left">
                        <?=$this->load->view('modules/tnd_leftphim/index')?>          
                    </div>
                <?}?>
                    <div id="content_right" <?if($check=='xem-phim'){ echo 'style="width:685px"';}?>>
                    <?php $this->load->view( $page); ?> 
                    </div>
                </div>
                <div id="colright">
                    <?=$this->load->view('modules/tnd_rightphim/index')?>
                </div>           
           </div> 


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
