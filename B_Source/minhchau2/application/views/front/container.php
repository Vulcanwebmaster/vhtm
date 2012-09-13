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
		<style type="text/css">
			.icon{ background:url(<?php echo base_url()?>assets/minhchau2/images/tamgiac1.png)}
    	</style>
    	<script type="text/javascript">
		    $(window).load(function() {
		        $('#slider').nivoSlider();
		    });
			$(document).ready(function(){
				$('.item').hide();
				$('.sub-item').click(function(){
					$(this).children('.item').slideDown();
					$(this).children('')
					});
				$('.sub-item').mouseenter(function(){
					$(this).children('.item').slideUp();
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