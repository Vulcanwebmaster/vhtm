<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html  xmlns="http://www.w3.org/1999/xhtml" class="webkit safari  win">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">    
		<link type="text/css" href="<?php echo base_url();?>assets/trungtam-tienganh/css/style.css" media="screen" rel="stylesheet" />
		<script src="js/jquery-1.7.2.min.js" type="text/javascript"></script>
		<link rel="stylesheet" href="<?php echo base_url();?>assets/trungtam-tienganh/themes/default/default.css" type="text/css" media="screen" />
	    <link rel="stylesheet" href="<?php echo base_url();?>assets/trungtam-tienganh/themes/light/light.css" type="text/css" media="screen" />
	    <link rel="stylesheet" href="<?php echo base_url();?>assets/trungtam-tienganh/themes/dark/dark.css" type="text/css" media="screen" />
	    <link rel="stylesheet" href="<?php echo base_url();?>assets/trungtam-tienganh/themes/bar/bar.css" type="text/css" media="screen" />
	    <link rel="stylesheet" href="<?php echo base_url();?>assets/trungtam-tienganh/css/nivo-slider.css" type="text/css" media="screen" />
	  	 <script type="text/javascript" src="<?php echo base_url();?>assets/trungtam-tienganh/js/jquery-1.7.1.min.js"></script>
	    <script type="text/javascript" src="<?php echo base_url();?>assets/trungtam-tienganh/js/jquery.nivo.slider.js"></script>
	    <script type="text/javascript">
	    $(window).load(function() {
	        $('#slider').nivoSlider();
	    });
    </script>
     <style>
     #slider img{ width:960px; height:400px !important;}
    </style>
		<script type="text/javascript">
			$(document).ready(function(){
				$('.submenu').hide();
				$('.menu_move').mouseenter(function(){
					$('.submenu').show();
					$('.menu_move').addClass('bgli');
				});
				$('.menu_move').mouseleave(function(){
					$('.submenu').hide();
					$('.menu_move').removeClass('bgli');
				});
			});
		</script>
	</head>
	<body>
		<div id="wapper">
			<!--------------begin header---------------->
			<?php $this->load->view('front/header');?>
			<!--------------end header---------------->
			
			<!--------------begin content---------------->
			<?php $this->load->view('front/content')?>
			<!--------------end content---------------->
			<?php $this->load->view('front/footer');?>
		</div>
	</body>
</html>
