<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">   
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="description" content="<?=$this->setting_library->setting['site_description']?>">
<meta name="keywords" content="<?=$this->setting_library->setting['site_keywords']?>">
<title><?=$title?></title>
<link rel="shortcut icon" href="<?=base_url()?>skins/favicon.ico" type="image/x-icon" />  
<style type="text/css">
.nav-links {
    position: absolute;
    top: 30px;
    left: 20px;
    width: 200px;
    list-style: none;
    margin: 0;
    padding: 0;
}
.nav-links li {
    line-height: 1.6em;    
    font-size: 1.2em;
}
#content {
    margin-left: 240px;
    margin-top: 30px;
    margin-right: 50px;
}
.twitthis {
    position: absolute;
    top: 250px;
    left: 20px;
}
pre {
    background: #e8e8e8;
    border-left: 10px solid #777;
    font-size: 0.85em;
    padding: 1em;
    color: black !important;
    overflow-x: auto;
}
.important {
    border: 1px solid #666;
    background: #ddd;
    padding: 0 1em;
    color: #C30;
}
h3 {
    font-size: 1.45em;
    line-height: 1.05em;
    border-bottom: 1px solid #333;
}
.galleryview {
    font-size: 12px;
    font-family: Arial, Helvetica, sans-serif;
}
dt {
    font-weight: bold;
}
dd {
    margin-bottom: 0.5em;
}
.code_wrapper {
    border: 1px solid #888;
    background: #f0f0f0;
    padding: 10px;
}
code, .code {

}
.options {
    border: 1px solid #777;
    border-right: none;
    font-size: 0.8em;
    font-family: Verdana, Geneva, sans-serif;
}
.options th {
    text-align: left;
    background: #777;
    color: white;
    font-weight: bold;
}
.options th, .options td {
    padding: 4px 10px;
}
.options td {
    border-right: 1px solid #777;
}
#parts-img {
    border: 1px solid black;
}
img.nav {
    border: 1px solid black;
    margin-bottom: 5px;
}

.panel-overlay h2,
.panel-overlay p{
    margin: .3em 0;
}
.panel-overlay p {
    line-height: 1.2em;
}

</style>


<link rel="stylesheet" type="text/css" href="<?=base_url()?>system/application/views/theme/site/<?=$this->site_library->get_default_template()?>/css/tintuc.css">
<link rel="stylesheet" type="text/css" href="<?=base_url()?>system/application/views/theme/site/<?=$this->site_library->get_default_template()?>/css/skin.css">
<link rel="stylesheet" type="text/css" href="<?=base_url()?>system/application/views/theme/site/<?=$this->site_library->get_default_template()?>/css/home.css">
<link rel="stylesheet" type="text/css" href="<?=base_url()?>system/application/views/theme/system/css/system.css">
<script type="text/javascript" src="<?=base_url()?>system/application/views/theme/system/js/jquery-core.js"></script>
</head>
<body>
<div class="wrapper_full">
<div class="wrap"> 
    <div class="header clearfix">
        <div class="headtop">
             <div class="logo">
                <img src="<?=base_url()?>skins/home.png" alt="">
             </div>
             <div class="adv">
                
                   <?=$this->load->view('modules/tnd_quangcao/home_banner')?>
             </div>
        </div>

        <div class="menu ">
              <?=$this->load->view('modules/tnd_menu_navhome/index')?>
        </div>          
    </div>
    <div class="wrapper clearfix">
    <div class="wrapper_inc">
        <div class="content">
           <div id="wrap_left" style="width: 230px;" class="fl"> 
                <?=$this->load->view('modules/home_left')?>
           </div>
           <div style="width: 760px;" class="fr">
                <div style="width: 490px;" class="fl">
                    <div><?php $this->load->view( $page); ?></div> 
                </div>
                <div style="width: 265px;" class="fr">
                 <?=$this->load->view('modules/home_right')?> 
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
