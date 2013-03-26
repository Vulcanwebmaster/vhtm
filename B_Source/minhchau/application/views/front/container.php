<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
		<title>Minh Chau Shop</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/minhchau/css/style.css" />
		<script type="text/javascript" src="<?php echo base_url();?>assets/minhchau/js/jquery-1.7.2.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>assets/minhchau/js/myjs.js"></script>
		<!---------- Bắt lỗi bằng js ------------>	
<!-- 		<script type="text/javascript" src="<?php echo base_url();?>assets/minhchau/js/jquery-1.7.1.min.js"></script> -->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/minhchau/css/validationEngine.jquery.css" />
		<script type="text/javascript" src="<?php echo base_url();?>assets/minhchau/js/jquery.validationEngine-en.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>assets/minhchau/js/jquery.validationEngine.js"></script>
		<!--------------End Bắt lỗi bằng js ------------>

		<!-- UNIFORM -->
		<script type="text/javascript" src="<?php echo base_url();?>assets/minhchau/js/jquery.uniform.js"></script>
		<link rel="stylesheet" href="<?php echo base_url();?>assets/minhchau/css/uniform.default.css" type="text/css" media="screen" charset="utf-8" />
		<script type="text/javascript">	
			$(function() {
				$("input, textarea").uniform();
			});
		</script>
		
		<!-----slide------------->
		 <link rel="stylesheet" href="<?php echo base_url();?>assets/minhchau/themes/default/default.css" type="text/css" media="screen" />
	    <link rel="stylesheet" href="<?php echo base_url();?>assets/minhchau/themes/light/light.css" type="text/css" media="screen" />
	    <link rel="stylesheet" href="<?php echo base_url();?>assets/minhchau/themes/dark/dark.css" type="text/css" media="screen" />
	    <link rel="stylesheet" href="<?php echo base_url();?>assets/minhchau/themes/bar/bar.css" type="text/css" media="screen" />
	    <link rel="stylesheet" href="<?php echo base_url();?>assets/minhchau/css/nivo-slider.css" type="text/css" media="screen" />
	    <link rel="stylesheet" href="<?php echo base_url();?>assets/minhchau/css/stylenivo.css" type="text/css" media="screen" />
	    <script type="text/javascript" src="<?php echo base_url();?>assets/minhchau/js/jquery.nivo.slider.js"></script>
	    <script type="text/javascript">
	    $(window).load(function() {
	        $('#slider').nivoSlider();
	    });
	    </script>
	</head>
	
	<body>
		<?php $this->load->view('front/header');?>
		<div id="wrapper">																																																																											
			<div id="content_inside">
				<?php $this->load->view('front/left');?>
				<?php $this->load->view('front/content');?>
			</div>
		</div>
		<?php $this->load->view('front/footer');?>
	</body>
</html>