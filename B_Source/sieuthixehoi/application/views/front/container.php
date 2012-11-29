<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="vi-vn" lang="vi-vn">
	
	<head>

		<!-- Title -->
		<title>Radial - Premium Automotive WordPress Theme</title>

		<!-- Meta Tags -->
		

		<!-- Favicon -->
		<link rel="shortcut icon" href="<?php echo base_url()?>assets/sieuthixehoi/images/favicon.ico" type="image/x-icon" />

		<!-- Stylesheets -->
		<link rel="stylesheet" href="<?php echo base_url()?>assets/sieuthixehoi/css/main-stylesheet.css" type="text/css" />
		<link rel="stylesheet" href="<?php echo base_url()?>assets/sieuthixehoi/css/sexy-slider.css" type="text/css" />
		<link rel="stylesheet" href="<?php echo base_url()?>assets/sieuthixehoi/css/shortcodes.css" type="text/css" />
		<!--[if IE 7]>
			<link rel="stylesheet" href="css/ie7-main-stylesheet.css" type="text/css">
			<link rel="stylesheet" href="css/ie7-sexy-slider.css" type="text/css">
		<![endif]-->
		<link rel="stylesheet" href="<?php echo base_url()?>assets/sieuthixehoi/css/color.css" type="text/css" />

		<!-- JavaScripts -->
		<script src="<?php echo base_url()?>assets/sieuthixehoi/js/jquery.min.js" type="text/javascript" language="javascript"></script>
		<script src="<?php echo base_url()?>assets/sieuthixehoi/js/jquery.sexyslider.js" type="text/javascript" language="javascript"></script>
		<script src="<?php echo base_url()?>assets/sieuthixehoi/js/titillium.font.js" type="text/javascript" language="javascript"></script>
		<script src="<?php echo base_url()?>assets/sieuthixehoi/js/jquery.innerfade.js" type="text/javascript" language="javascript"></script>

		<script type="text/javascript">
			$(document).ready(function() {
				$("#homepage-slider").SexySlider({
					width      : 950,
					height     : 350,
					delay      : 3000,
					strips     : 3,
					autopause  : true,
					navigation : '#navigation',
					control    : '#control',
					effect     : 'fade',
					titleStyle : 'false'
				});
			});
		</script>

		<script type="text/javascript">
			$(document).ready(function(){
				// hide #back-top first
				// $("#back-top").hide();
				// fade in #back-top
				$(function () {
					$(window).scroll(function () { });
					// scroll body to 0px on click
					$('.back-to-top a').click(function () {
						$('body,html').animate({
							scrollTop: 0
						}, 800);
						return false;
					});
				});
			});
		</script>

		<script type="text/javascript">
			$(document).ready(
				function(){
					$('.feedback-wrapper').innerfade({
						speed: 700,
						timeout: 5000,
						type: 'random_start',
						containerheight: '155px'
					});
			});
		</script>

	<!-- END head -->
	<meta charset="UTF-8"></head>

	
<body>
	<?php $this->load->view('front/header');?>
	<?php $this->load->view('front/menu');?>
	<?php $this->load->view('front/slide');?>
	<?php $this->load->view('front/content')?>
	<?php $this->load->view('front/footer');?>
</body>