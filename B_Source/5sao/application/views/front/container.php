<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<title><?php if (isset($title)) echo $title; else '5saoviet';?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/5sao/css/style.css" />
	<link type="text/css" rel="stylesheet" href="<?php echo base_url();?>assets/5sao/css/nivo-slider.css">
	<link type="text/css" rel="stylesheet" href="<?php echo base_url();?>assets/5sao/css/default.css">
	<script type="text/javascript" src="<?php echo base_url();?>assets/5sao/js/jquery-1.7.2.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/5sao/js/jquery.nivo.slider.js"></script>
	 <script type="text/javascript">

	 $(document).ready(function(){
		  $('.slidemove').hide();
				$('.slidecontrol').click(function(){
					$(this).children('.slidemove').slideDown();
					});
				$('.slidecontrol').mouseleave(function(){
					$(this).children('.slidemove').slideUp();
					});
		});
			$(window).load(function() {
				$('#slider').nivoSlider();
				//$('.nivo-control').hide();		
				
			});
			
			
	</script>
</head>
<body>
	<div id="content">
		<?php $this->load->view('front/header');?>
		<div id="wrapper">
			<div id="background">
				<?php $this->load->view('front/left');?>
				<?php $this->load->view('front/content');?>
				<?php $this->load->view('front/right');?>
			</div>
		</div>
	</div>
	<?php $this->load->view('front/footer');?>
</body>