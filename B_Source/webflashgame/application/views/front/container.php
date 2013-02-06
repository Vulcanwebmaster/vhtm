<html><head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<link type="text/css" href="<?php echo base_url();?>assets/flash_game/css/style.css" rel="stylesheet">
		<script language="JavaScript" src="<?php echo base_url();?>assets/flash_game/js/jquery.min.js"></script>
		 <link rel="stylesheet" href="<?php echo base_url();?>assets/flash_game/css/themes/default/default.css" type="text/css" media="screen">
	    <link rel="stylesheet" href="<?php echo base_url();?>assets/flash_game/css/themes/light/light.css" type="text/css" media="screen">
	    <link rel="stylesheet" href="<?php echo base_url();?>assets/flash_game/css/themes/dark/dark.css" type="text/css" media="screen">
	    <link rel="stylesheet" href="<?php echo base_url();?>assets/flash_game/css/themes/bar/bar.css" type="text/css" media="screen">
	    <link rel="stylesheet" href="<?php echo base_url();?>assets/flash_game/css/nivo-slider.css" type="text/css" media="screen">
	    <script type="text/javascript" src="<?php echo base_url();?>assets/flash_game/js/jquery-1.7.1.min.js"></script>
		    <script type="text/javascript" src="<?php echo base_url();?>assets/flash_game/js/jquery.nivo.slider.js"></script>
		    <script type="text/javascript">
		    $(window).load(function() {
		        $('#slider').nivoSlider();
		    });
		    </script>
	</head>
	<body>
		<div id="wapper">
			<?php $this->load->view('front/header')?>
			<div id="body">
				<?php $this->load->view('front/slide')?>
				<?php $this->load->view('front/content')?>
				</div>
			</div>
			<?php $this->load->view('front/foodter')?>
		
</body></html>