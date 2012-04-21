<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd"> 
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="google-site-verification" content="0mef_3XMZ9fPQCVD22aC7EbLOD7HfcP7qkuxBh9NY4k" />
<title><?=$title?></title>
<meta name="description" content="<?=$this->setting_library->setting['site_description']?>">
<meta name="keywords" content="<?=$this->setting_library->setting['site_keywords']?>">
<meta name="generator" content="Phan Gia Huy Co., Ltd. - info@phangiahuy.com, www.phangiahuy.com, 0905211588" />

<link rel="stylesheet" type="text/css" href="<?=base_url()?>system/application/views/theme/site/<?=$this->site_library->get_default_template()?>/css/dinhviet.css">

<link rel="stylesheet" type="text/css" href="<?=base_url()?>system/application/views/theme/system/css/system.css">
<script type="text/javascript" src="<?=base_url()?>system/application/views/theme/system/js/jquery-core.js"></script>
<!-- CSS -->
    <link href="<?=base_url()?>style/style.css" rel="stylesheet" type="text/css" />
    <link href="<?=base_url()?>style/Jqueryslide.css" rel="Stylesheet" type="text/css" />
	<link href="<?=base_url()?>style/bdscomvn/jquery-ui-1.7.3.custom.css" rel="Stylesheet" type="text/css" />    
    <link href="<?=base_url()?>style/bdscomvn/BDS_Style_15.1.8.css" rel="Stylesheet" type="text/css" />    
<!-- CSS --> 
<!-- Javascript -->
	<script src="<?=base_url()?>Scripts/bdscomvn/bds_jquery_1.5.js" type='text/javascript'></script>
    <script src="<?=base_url()?>Scripts/bdscomvn/bds_javascript_2.4.3.js" type='text/javascript'></script>
    <script src="<?=base_url()?>Scripts/bdscomvn/Banner.Loader_3.0.js" type='text/javascript'></script>
    <script src="<?=base_url()?>Scripts/bdscomvn/avim_1.1.js" type='text/javascript'></script>
    <script src="<?=base_url()?>Scripts/bdscomvn/tiny_mce.js" type='text/javascript'></script>
    <script src="<?=base_url()?>Scripts/bdscomvn/jcarousellite_1.2.js" type='text/javascript'></script>
    <script src="<?=base_url()?>Scripts/bdscomvn/message_1.1.js" type='text/javascript'></script>
    
    <script src="<?=base_url()?>Scripts/jquery-1.4.1.min.js" type="text/javascript"></script>
    <script src="<?=base_url()?>Scripts/slide/JScriptslide1.js" type="text/javascript"></script>
    <script type="text/javascript">
        jQuery(document).ready(function ($) {
            $(".slider").slideshow({
                width: 757,
                height: 277,
                transition: 'square'
            });

        });
        $(document).ready(function () {
            window.setInterval(function () {
                $("#imglogo").fadeIn(1000).delay(4000).fadeOut(1000);
            });

        });

    </script>
<!-- Hết Javascript -->

</head>
<body>
	<?=$this->load->view('theme/site/nhadat/html/quangcao2ben')?>
	<div style="width:1000px; margin:auto">
		<?=$this->load->view('theme/site/nhadat/html/banner')?>
	
		<div class="nav-left">
        	<?=$this->load->view('theme/site/nhadat/html/menu_trai')?>
		</div>            
		<div id="duannoibat" style="border-bottom-style: inset; border-bottom-width: 1px; border-bottom-color: #EAFFFF">
				<?=$this->load->view($page)?>
		</div>
		
			
	</div>			
   
        <div class="bottomline">
        </div>
		<?=$this->load->view("theme/site/nhadat/html/footer")?>
       

</body>
</html>
        
