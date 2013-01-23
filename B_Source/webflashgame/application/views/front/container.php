<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html slick-uniqueid="1" xmlns:msxsl="urn:schemas-microsoft-com:xslt">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">	
	<meta http-equiv="X-UA-Compatible" content="requiresActiveX=true, chrome=1">	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/flash_game/css/css.css"><style type="text/css"></style>
	<script type="text/javascript" src="<?php echo base_url();?>assets/flash_game/js/mootools-core-1.js"></script>
	
	<script type="text/javascript" src="<?php echo base_url();?>assets/flash_game/js/mootools-more-1.js"></script>
	<!--<script type="text/javascript" src="js/jsErrorLogger.js"></script>-->
	<style media="screen" type="text/css">#presentationSWF {visibility:hidden}</style>
	<!---------------------slider------------>
	<!--<link rel="stylesheet" type="text/css" href="css/demo.css" />-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/flash_game/css/style.css" />
	
	<script type="text/javascript" src="<?php echo base_url();?>assets/flash_game/js/modernizr.custom.53451.js"></script>
<!-------------- Bắt lỗi bằng js ------------>	
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
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
<body class="games  uc  noLeaderBoard root firefox">
	
	<div id="wrapper">
		<?php $this->load->view('front/header')?>
		<style type="text/css">
			#main {
				background-image: url(images/backContentTopTwister.jpg);
					}
		</style>

		<?php $this->load->view('front/content')?>
			
		<?php $this->load->view('front/footer')?>
		<?php $this->load->view('front/status-head')?>
	</div>
	<?php $this->load->view('front/feetback')?>
</body>
</html>