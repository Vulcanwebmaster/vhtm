<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
		<title>Minh Chau Shop</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/minhchau2/css/style.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/minhchau2/css/nivo-slider.css"  media="screen">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/minhchau2/themes/default/default.css" media="screen">
		
		<script type="text/javascript" src="<?php echo base_url();?>assets/minhchau2/js/jquery-1.7.1.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>assets/minhchau2/js/jquery.nivo.slider.js"></script>
		
    	<script type="text/javascript">
		    $(window).load(function() {
		        $('#slider').nivoSlider();
		    });
			$(document).ready(function(){
				$('.main-item').hide();
				$('.sub-item').click(function(){
					$(this).children('.main-item').slideDown();
					
					});
				$('.sub-item').mouseleave(function(){
					$(this).children('.main-item').slideUp();
					});
				});
		</script>
	</head>
	
	<body>
		<?php $this->load->view('front/header');?>
		<div id="wrapper">																																																																											
			<div id="content_inside">
				<?php $this->load->view('front/content');?>
			</div>
		</div>
		<?php $this->load->view('front/footer');?>
	</body>
</html>