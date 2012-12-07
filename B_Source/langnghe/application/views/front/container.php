<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!-- saved from url=(0046)http://www.templatemonster.com/demo/41126.html -->
<html xmlns="http://www.w3.org/1999/xhtml" class="webkit safari  win">
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">    
		<!-- ACDN-TCSS -->
		<link type="text/css" href="<?php echo base_url();?>assets/langnghe/css/livedemo.css" rel="stylesheet">
		<link type="text/css" href="<?php echo base_url();?>assets/langnghe/css/virtuemart.css" rel="stylesheet">
		<link type="text/css" href="<?php echo base_url();?>assets/langnghe/css/personal.css" rel="stylesheet">
		<link type="text/css" href="<?php echo base_url();?>assets/langnghe/css/camera.css" rel="stylesheet">
		<link type="text/css" href="<?php echo base_url();?>assets/langnghe/css/custom.css" rel="stylesheet">
		<link type="text/css" href="<?php echo base_url();?>assets/langnghe/css/facebox.css" rel="stylesheet">
		<link type="text/css" href="<?php echo base_url();?>assets/langnghe/css/layout.css" rel="stylesheet">
		<link type="text/css" href="<?php echo base_url();?>assets/langnghe/css/position.css" rel="stylesheet">
		<!--<link type="text/css" href="css/print.css" rel="stylesheet">-->
		<link type="text/css" href="<?php echo base_url();?>assets/langnghe/css/products.css" rel="stylesheet">
		<link type="text/css" href="<?php echo base_url();?>assets/langnghe/css/style.css" rel="stylesheet">
		<link type="text/css" href="<?php echo base_url();?>assets/langnghe/css/stylesheet.css" rel="stylesheet">
		
		<link type="text/css" href="css/vmsite-ltr.css" rel="stylesheet">
		<!------------------js,css slider------------->
		 <link rel="stylesheet" href="<?php echo base_url();?>assets/langnghe/themes/default/default.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="<?php echo base_url();?>assets/langnghe/themes/light/light.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="<?php echo base_url();?>assets/langnghe/themes/dark/dark.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="<?php echo base_url();?>assets/langnghe/themes/bar/bar.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="<?php echo base_url();?>assets/langnghe/css/nivo-slider.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="<?php echo base_url();?>assets/langnghe/css/style2.css" type="text/css" media="screen" />
		
</head>

<body class="first ">
	<div class="body-top">
		<div class="main">
			<?php $this->load->view('front/header');?>
			<div id="content">
				<div class="wrapper2">
					<?php $this->load->view('front/left');?>
				
				<div class="container">
					<?php $this->load->view('front/slide');?>
					
					
				</div>
				<div class="clear"></div>
				</div>
			<?php $this->load->view('front/footer');?>
		</div>
	</div>	
</body>
</html>