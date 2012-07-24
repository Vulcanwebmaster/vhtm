<!DOCTYPE html>

<!--[if IE 7]>                  <html class="ie7 no-js" lang="en">     <![endif]-->
<!--[if lte IE 8]>              <html class="ie8 no-js" lang="en">     <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html class="not-ie no-js" lang="en">  <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	
	<title><?php if (isset($title)) echo $title;?></title>
	
	<meta name="description" content="">
	<meta name="author" content="">
	
	<!--[if !lte IE 6]><!-->
		<link rel="stylesheet" href="<?php echo base_url();?>assets/leerobertsonx/css/style.css" media="screen" />

		<!-- link rel="stylesheet" href="<?php echo base_url();?>assets/leerobertsonx/css/fontsgoogleapiscom.css" / -->
		
		<link rel="stylesheet" href="<?php echo base_url();?>assets/leerobertsonx/css/fancybox.min.css" media="screen" />

		<link rel="stylesheet" href="<?php echo base_url();?>assets/leerobertsonx/css/mediaelementplayer.min.css" media="screen" />
	<!--<![endif]-->

	<!--[if lte IE 6]>
		<link rel="stylesheet" href="//universal-ie6-css.googlecode.com/files/ie6.1.1.css" media="screen, projection">
	<![endif]-->

	<!-- HTML5 Shiv + detect touch events -->
	<!-- script src="<?php echo base_url();?>assets/leerobertsonx/js/modernizr.custom.js"></script -->
	<script src="http://leerobertsonx.com/js/modernizr.custom.js"></script>
	<script src="<?php echo base_url();?>assets/leerobertsonx/js/jquery-1.7.1.min.js"></script>
	<script src="<?php echo base_url();?>assets/leerobertsonx/js/pages.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			//$('.clearfix').css('width','100%');

			//clients=============================
			$('#clients li').mouseover(function(){
				$(this).fadeTo(400,0.6);
				$(this).css('border','solid 1px #e4e4e4');
				$(this).css('border-radius','10px');
				
			});
			$('#clients li').mouseout(function(){
				$(this).fadeTo(400,1);
				$(this).css('border','none 1px #e4e4e4');
				$(this).css('border-radius','10px');
			});

			// website ===================
			$('.acc-container .content h3').css('font-weight','none');
		});
	</script>
</head>
<body>

	<?php $this->load->view('front/header');?>
	<?php $this->load->view('front/content')?>
	<?php $this->load->view('front/footer');?>
</body>