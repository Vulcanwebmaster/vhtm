<!DOCTYPE html>
<html>
<head>
	<title>Main</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url();?>assets/webbanhang/css/reset.css">
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url();?>assets/webbanhang/css/style.css">
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url();?>assets/webbanhang/css/grid_12.css">
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url();?>assets/webbanhang/css/slider.css">
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url();?>assets/webbanhang/css/jqtransform.css">
    <script src="<?php echo base_url();?>assets/webbanhang/js/jquery-1.7.min.js"></script>
    <script src="<?php echo base_url();?>assets/webbanhang/js/jquery.easing.1.3.js"></script>
    <script src="<?php echo base_url();?>assets/webbanhang/js/cufon-yui.js"></script>
    <script src="<?php echo base_url();?>assets/webbanhang/js/vegur_400.font.js"></script>
    <script src="<?php echo base_url();?>assets/webbanhang/js/Vegur_bold_700.font.js"></script>
    <script src="<?php echo base_url();?>assets/webbanhang/js/cufon-replace.js"></script>
    <script src="<?php echo base_url();?>assets/webbanhang/js/tms-0.4.x.js"></script>
    <script src="<?php echo base_url();?>assets/webbanhang/js/jquery.jqtransform.js"></script>
    <script src="<?php echo base_url();?>assets/webbanhang/js/FF-cash.js"></script>
    <script>
		$(document).ready(function(){
			$('.form-1').jqTransform();					   	
			$('.slider')._TMS({
				show:0,
				pauseOnHover:true,
				prevBu:'.prev',
				nextBu:'.next',
				playBu:false,
				duration:1000,
				preset:'fade',
				pagination:true,
				pagNums:false,
				slideshow:7000,
				numStatus:false,
				banners:false,
				waitBannerAnimation:false,
				progressBar:false
			})		
		});
	</script>
	<!--[if lt IE 8]>
       <div style=' clear: both; text-align:center; position: relative;'>
         <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
           <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
        </a>
      </div>
    <![endif]-->
    <!--[if lt IE 9]>
   		<script type="text/javascript" src="js/html5.js"></script>
    	<link rel="stylesheet" type="text/css" media="screen" href="css/ie.css">
	<![endif]-->
</head>
<body>
	<div class="main">
		<?php $this->load->view('shop/header');?>  
		<script type="text/javascript">
			$(document).ready(function(){
				//$('iframe').css('display','none');
				window.setInterval(function(){
					$('#demo-command').fadeIn(1000).fadeOut(1000);
				});
				
		
				//===== form dang ky ===============================
				$('#closemash').css('cursor','pointer');
				$('#mash').hide();
				$('#dungthu').click(function(){
					$('#mash').css('margin-top','-400px');
					$('#mash').slideDown(300);
					$left=($(window).width()-$('#mash').width())/2;
					$('#mash').css('margin-left',$left);
					
				});
		
				$(window).resize(function(){
					$left=($(window).width()-$('#mash').width())/2;
					$top=($(window).height()-$('#mash').height())/2;
					$('#mash').css('margin-left',$left);
					$('#mash').css('margin-top','-400px');
				});
		
				$('#closemash').click(function(){
					$('#mash').slideUp(300);
				});
			});
		</script>
		

<!-- =====================content============================ -->
	
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
	<br style="clear:both"/>
	</div>
	<?php $this->load->view('shop/footer.php')?>
	<script>
		Cufon.now();
	</script>
</body>
</html>
