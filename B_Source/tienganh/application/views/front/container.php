<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html  xmlns="http://www.w3.org/1999/xhtml" class="webkit safari  win">
	<head>
		<!-- Title -->
		<title>Trung tâm tiếng anh JENNY</title>

		<!-- Meta Tags -->
		
		<!-- Favicon -->
		<link rel="shortcut icon" href="<?php echo base_url()?>assets/trungtam-tienganh/images/favicon.ico" type="image/x-icon" />
		
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> 
		<script type="text/javascript" src="http://api.go.vn/social-plugins/gconnect/all.min.js?v=123456789"></script>
		<script type="text/javascript">var switchTo5x=true;</script>
		<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
		<script type="text/javascript" src="http://s.sharethis.com/loader.js"></script>
		<script language="javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
		<script language="javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.23/jquery-ui.min.js"></script>
		<link type="text/css" href="<?php echo base_url();?>assets/trungtam-tienganh/css/style.css" media="screen" rel="stylesheet" />
		<link rel="stylesheet" href="<?php echo base_url();?>assets/trungtam-tienganh/themes/default/default.css" type="text/css" media="screen" />
	    <link rel="stylesheet" href="<?php echo base_url();?>assets/trungtam-tienganh/themes/light/light.css" type="text/css" media="screen" />
	    <link rel="stylesheet" href="<?php echo base_url();?>assets/trungtam-tienganh/themes/dark/dark.css" type="text/css" media="screen" />
	    <link rel="stylesheet" href="<?php echo base_url();?>assets/trungtam-tienganh/themes/bar/bar.css" type="text/css" media="screen" />
	    <link rel="stylesheet" href="<?php echo base_url();?>assets/trungtam-tienganh/css/nivo-slider.css" type="text/css" media="screen" />
	    <script type="text/javascript" src="<?php echo base_url();?>assets/trungtam-tienganh/js/jquery-1.7.2.min.js"></script>
	    <script type="text/javascript" src="<?php echo base_url();?>assets/trungtam-tienganh/js/jquery.nivo.slider.js"></script>
	    <script type="text/javascript" src="<?php echo base_url();?>assets/trungtam-tienganh/js/jsadd.js"></script>
	    <!--<link rel="stylesheet" href="<?php echo base_url();?>assets/trungtam-tienganh/css/anythingslider.css">-->
	    <link rel="stylesheet" href="<?php echo base_url();?>assets/trungtam-tienganh/css/galleria.classic.css">
	   <!-- <script src="<?php echo base_url();?>assets/trungtam-tienganh/js/jquery.anythingslider.js"></script>
	    <script src="<?php echo base_url();?>assets/trungtam-tienganh/js/jquery.anythingslider.video.js"></script>
	       <!-- load jQuery 
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>
        <!-- load Galleria -->
        <script src="<?php echo base_url();?>assets/trungtam-tienganh/js/galleria-1.2.8.min.js"></script>
        
	   
		<script type="text/javascript">
			$(document).ready(function(){
				$('.submenu').hide();
				$('.menu_move').mouseenter(function(){
					$(this).children('.submenu').show();
					$(this).addClass('bgli2');
				});
				$('.menu_move').mouseleave(function(){
					$(this).children('.submenu').hide();
					$(this).removeClass('bgli2');
				});
			});
		</script>
	</head>
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
		 <script type="text/javascript">
	    $(window).load(function() {
	        $('#slider').nivoSlider();
	    });
    </script>
	</body>
	<script type="text/javascript">
		
	$(document).ready(function(){	
		var next=0;
				var prev=0;
		window.setInterval(function(){ 
			next=0; prev=0;
			var left=$('.slideimage').css("left");	        			
			var right=$('.slideimage').css("right");			
				
				
				 $(".prev12").click(function(){
				 	left=$('.slideimage').css("left");	        			
					right=$('.slideimage').css("right");
					//alert(parseInt(left) >=parseInt('0'));
					if (next==0)
					 	if(parseInt(left) < parseInt('0px'))
						{	
				 	 		//$(".slideimage").animate({"left": "=0"}, "slow");
				 	 		 $(".slideimage").animate({"left": "+=311px"}, "slow");
				 	 		 next=1;
				 	 	}
				});		
				$(".next12").click(function(){
					left=$('.slideimage').css("left");	        			
					right=$('.slideimage').css("right");
					//alert(parseInt(left) + " " + parseInt('1500px'));
					
					if (prev==0)
					if(parseInt(left) <= parseInt('-933px'))
					{	
			 	 		 //$(".slideimage").animate({"left": "-=1500px"}, "slow");
			 	 	}
					else{										
						 	 $(".slideimage").animate({"left": "-=311px"}, "slow");
						 	 prev=1;
						
						}
					
				});	
				
			}, 1000);
		});
	</script>
</html>
