<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html slick-uniqueid="1" xmlns:msxsl="urn:schemas-microsoft-com:xslt">
<head>
	<title>Carresdas.fr</title>
	<meta name="description" content="<?php if(isset($meta_tag)){echo $meta_tag;} ?>">
	<meta name="Keywords" content="<?php if(isset($meta_tag)){echo $meta_tag;} ?>">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">	
	<meta http-equiv="X-UA-Compatible" content="requiresActiveX=true, chrome=1">	
	<script type="text/javascript" src="<?php echo base_url();?>assets/flash_game/js/jquery-1.7.1.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/flash_game/js/jquery.nivo.slider.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/flash_game/css/css.css">
	<script type="text/javascript" src="<?php echo base_url();?>assets/flash_game/js/jquery-ui-timepicker-addon.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/flash_game/js/mootools-core-1.js"></script>
	<link rel="stylesheet" href="<?php echo base_url();?>assets/flash_game/css/nivo-slider.css" type="text/css" media="screen" />
	
	<script type="text/javascript" src="<?php echo base_url();?>assets/flash_game/js/mootools-more-1.js"></script>
	<!--<script type="text/javascript" src="js/jsErrorLogger.js"></script>-->
	<style media="screen" type="text/css">#presentationSWF {visibility:hidden}</style>
	<!---------------------slider------------>
	<!--<link rel="stylesheet" type="text/css" href="css/demo.css" />-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/flash_game/css/style.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/flash_game/css/themes/default/default.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/flash_game/css/themes/light/light.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/flash_game/css/themes/dark/dark.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/flash_game/css/themes/bar/bar.css" />
	
	<script type="text/javascript" src="<?php echo base_url();?>assets/flash_game/js/modernizr.custom.53451.js"></script>
	
	<!----<script type="text/javascript" src="<?php echo base_url();?>assets/flash_game/js/jquery.min.js"></script>
---------- Bắt lỗi bằng js ------------>	
	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/flash_game/css/validationEngine.jquery.css" />
	<script type="text/javascript" src="<?php echo base_url();?>assets/flash_game/js/jquery.validationEngine-en.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/flash_game/js/jquery.validationEngine.js"></script>
<!--------------End Bắt lỗi bằng js ------------>	
		<script type="text/javascript" src="<?php echo base_url();?>assets/flash_game/js/jquery.gallery.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>assets/flash_game/js/jquery.countdown.js"></script>
		<!--<script type="text/javascript">
			$(function() {
				$('#dg-container').gallery({
					autoplay	:	true
				});
			});
		</script/>
	<!-----------endslide---------->
</head>
<!--<body class="games  uc  noLeaderBoard root firefox">-->
<body>
	
	<div id="wrapper" style="width:100%; text-align: left">
		<?php $this->load->view('front/header')?>

		<?php $this->load->view('front/content')?>
			
		<?php $this->load->view('front/footer')?>
		<?php $this->load->view('front/status-head')?>
	</div>
	<!-- <?php $this->load->view('front/feetback')?> -->
</body>
</html>