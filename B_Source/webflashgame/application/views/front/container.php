<html><head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<link type="text/css" href="<?php echo base_url();?>assets/flash_game/css/style1.css" rel="stylesheet">
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
		    
		    
		    <!-- old-->
		    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/flash_game/css2/css.css"><style type="text/css"></style>
		<script type="text/javascript" src="<?php echo base_url();?>assets/flash_game/js/mootools-core-1.js"></script>
	
		<script type="text/javascript" src="<?php echo base_url();?>assets/flash_game/js/mootools-more-1.js"></script>
	<!--<script type="text/javascript" src="js/jsErrorLogger.js"></script>-->
		<style media="screen" type="text/css">#presentationSWF {visibility:hidden}</style>
	<!---------------------slider------------>
	<!--<link rel="stylesheet" type="text/css" href="css/demo.css" />-->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/flash_game/css2/style.css" />
	
		<script type="text/javascript" src="<?php echo base_url();?>assets/flash_game/js/modernizr.custom.53451.js"></script>
<!-------------- Bắt lỗi bằng js ------------>	
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/flash_game/css2/validationEngine.jquery.css" />
		<script type="text/javascript" src="<?php echo base_url();?>assets/flash_game/js/jquery.validationEngine-en.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>assets/flash_game/js/jquery.validationEngine.js"></script>
<!--------------End Bắt lỗi bằng js ------------>	
		<script type="text/javascript" src="<?php echo base_url();?>assets/flash_game/js/jquery.gallery.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>assets/flash_game/js/jquery.countdown.js"></script> 
		<!--end-->
	</head>
	<body>
		<div id="wapper">
			<?php $this->load->view('front/header')?>
			<div id="body">
				<?php $this->load->view('front/content')?>
				</div>
			</div>
			<?php $this->load->view('front/foodter')?>
		
</body></html>