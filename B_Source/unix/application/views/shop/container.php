<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		
		
		<!-- ========SLIDE============= -->
		<link rel="stylesheet" href="<?php echo base_url();?>assets/unix/css/default/default.css" type="text/css" media="screen" />
	    <link rel="stylesheet" href="<?php echo base_url();?>assets/unix/css/pascal/pascal.css" type="text/css" media="screen" />
	    <link rel="stylesheet" href="<?php echo base_url();?>assets/unix/css/orman/orman.css" type="text/css" media="screen" />
	    <link rel="stylesheet" href="<?php echo base_url();?>assets/unix/css/nivo-slider.css" type="text/css" media="screen" />
	    <link rel="stylesheet" href="<?php echo base_url();?>assets/unix/css/style.css" type="text/css" media="screen" />
	    
	    <script type="text/javascript" src="<?php echo base_url();?>assets/unix/js/jquery-1.7.1.min.js"></script>
	    <script type="text/javascript" src="<?php echo base_url();?>assets/unix/js/jquery.nivo.slider.pack.js"></script>
	    <script type="text/javascript">
	    $(window).load(function() {
	        $('#slider').nivoSlider();
	    });
	    </script>
	    
	    <!-- =============UNIFORM============== -->
	    <link rel="stylesheet" href="<?php echo base_url();?>assets/unix/css/uniform.default.css" type="text/css"/>
	    <script type="text/javascript" src="<?php echo base_url();?>assets/unix/js/jquery.uniform.js"></script>
	    <script type="text/javascript" charset="utf-8">
	      $(function(){
	        $("#list-type, .input-lienhe, #submit").uniform();
	      });
	    </script>
	    <!-- ====================================== -->
	    
	    <link rel="Stylesheet" type="text/css" href="<?php echo base_url();?>/assets/unix/css/style1.css"/>
	    
	    <!-- ==================================MENU============================= -->
	   
		<script type="text/javascript">
			$(document).ready(function(){
				var top = $("#nav > li").position().top + $("#nav > li").height();
				$('.menuitem ul').css('display','block');
				$('.menuitem ul').slideUp(1000);
				$('.menuitem').mouseenter(function(){
					var left = $(this).position().left; //get the postion of the main link relative to the <body>
					var offset = $(this).offset().left; //get the position of the main link relative to the document
					var width = $(this).children("ul").width(); //get the width of the dropdown
					var over = (left + width) - 940;
					
					$(this).children('ul').slideDown(1000);
					//$(this).children('ul').css({left:left-over, top:top});
				});
				$('.menuitem').mouseleave(function(){
					$(this).children('ul').slideUp(1000);
					//$(this).children('ul').css({left:left-over, top:top});
				});

				$left=$(window).width()-300;
				$('#background-music').css('left',$left);
				$(window).resize(function(){
					$left=$(window).width()-300;
					$('#background-music').css('left',$left);
				});
			});
		</script>
	    <!-- =================================================================== -->
	</head>
	<body>
		<!-- object id="background-music" width="1" height="1"><param name="movie" value="http://static.mp3.zing.vn/skins/mp3_main/flash/player/mp3Player_skin1.swf?xmlurl=http://mp3.zing.vn/blog?MjAxMC8xMS8wNi82LzQvInagaMENjRhNzM4MDhlNDgyMDMxN2QxMDNhZmU5NWRjMTYyMWEdUngWeBXAzfFNhWeBnRvInagaMEmUsICmldUngaXxZYW5dUngaXwxfDI" /><param name="quality" value="high" /><param name="wmode" value="transparent" /><embed width="1" height="1" src="http://static.mp3.zing.vn/skins/mp3_main/flash/player/mp3Player_skin1.swf?xmlurl=http://mp3.zing.vn/blog?MjAxMC8xMS8wNi82LzQvInagaMENjRhNzM4MDhlNDgyMDMxN2QxMDNhZmU5NWRjMTYyMWEdUngWeBXAzfFNhWeBnRvInagaMEmUsICmldUngaXxZYW5dUngaXwxfDI" quality="high" wmode="transparent" type="application/x-shockwave-flash"></embed></object -->
		<object id="background-music" style="position:fixed; z-index:999" width="300" height="50"><param name="movie" value="http://static.mp3.zing.vn/skins/mp3_main/flash/player/mp3Player_skin1.swf?xmlurl=http://mp3.zing.vn/blog?MjAxMC8xMS8wNi82LzQvInagaMENjRhNzM4MDhlNDgyMDMxN2QxMDNhZmU5NWRjMTYyMWEdUngWeBXAzfFNhWeBnRvInagaMEmUsICmldUngaXxZYW5dUngaXwxfDI" /><param name="quality" value="high" /><param name="wmode" value="transparent" /><embed width="300" height="61" src="http://static.mp3.zing.vn/skins/mp3_main/flash/player/mp3Player_skin1.swf?xmlurl=http://mp3.zing.vn/blog?MjAxMC8xMS8wNi82LzQvInagaMENjRhNzM4MDhlNDgyMDMxN2QxMDNhZmU5NWRjMTYyMWEdUngWeBXAzfFNhWeBnRvInagaMEmUsICmldUngaXxZYW5dUngaXwxfDI" quality="high" wmode="transparent" type="application/x-shockwave-flash"></embed></object>
	    
	    <script type="text/javascript">
			$(document).ready(function(){
				
				$('#mask').hide();
				$('#register').click(function(){
					$('#mask').slideDown(1000);
				});
				$('#maskClose').click(function(){
					$('#mask').slideUp(1000);
				});

				$left=$(window).width()-175;
				$('#banner-right').css('left',$left);
				
				$(window).resize(function(){
					$left=$(window).width()-175;
					$('#banner-right').css('left',$left);
				});
			});
		</script>
	    
		
		
		<?php $this->load->view('shop/header.php')?>

	    <?php 
		 //   print displayStatus();
			print (isset($content)) ? $content : NULL; 
			if( isset($page))
			{
				if( isset($module))
				{
					$this->load->view($module.'/'.$page);
				} 
				else 
				{
					$this->load->view($page);
				}
			}
		?>
		
	    
	    
		<?php $this->load->view('shop/footer.php')?>											
	</body>
</html>
