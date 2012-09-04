<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title><?php echo $tieude;?></title>
		
		<!-- ========SLIDE============= -->
	    <link rel="stylesheet" href="<?php echo base_url();?>assets/unix/css/style.css" type="text/css" media="screen" />
	    <link rel="stylesheet"  href="<?php echo base_url(); ?>assets/unix/css/table/table.css" type="text/css" media="screen"/>
	    <script type="text/javascript" src="<?php echo base_url();?>assets/unix/js/jquery-1.7.1.min.js"></script>
	    
	    <!-- =============UNIFORM============== -->
	    <link rel="stylesheet" href="<?php echo base_url();?>assets/unix/css/uniform.default.css" type="text/css"/>
	    <script type="text/javascript" src="<?php echo base_url();?>assets/unix/js/jquery.uniform.js"></script>
	    <script type="text/javascript" charset="utf-8">
	      $(function(){
	        $("#list-type, .input-lienhe, #submit").uniform();
	      });
	    </script>
	    <!-- ====================================== -->
	    <script type="text/javascript">
			$(document).ready(function(){
				$('#xyz').hide();
				$('#abc').mouseenter(function(){
					$('#xyz').slideDown();
					});
				$('#xyz').mouseleave(function(){
					$('#xyz').slideUp();
					});
				});
        </script>
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

				// nhac nen
				var flag=0;
				$('#sound-controller').click(function(){
					if (flag==0)
					{
						flag=1;
						$('#background-music').hide();
						$(this).attr('src','<?php echo base_url();?>assets/unix/images/speaker-off.png');
					}
					else
					{
						flag=0;
						$('#background-music').show();
						$(this).attr('src','<?php echo base_url();?>assets/unix/images/speaker-on.png');
					}
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
