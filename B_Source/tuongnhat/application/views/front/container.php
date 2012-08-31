<!DOCTYPE html>
<html lang="en">
	<head>
	    <title><?php if (isset($title))
	    			echo $title;
	    		else echo 'Tuong Nhat';?></title>
	    <meta charset="utf-8">

	    <link rel="stylesheet" type="text/css" media="screen" href="assets/tuongnhat/css/reset.css">
	    <link rel="stylesheet" type="text/css" media="screen" href="assets/tuongnhat/css/style.css">
	    <link rel="stylesheet" type="text/css" media="screen" href="assets/tuongnhat/css/slider.css">
	    <!--link href='http://fonts.googleapis.com/css?family=Muli:400,300,300italic,400italic' rel='stylesheet' type='text/css'>
	    <link href='http://fonts.googleapis.com/css?family=Passion+One:400,700' rel='stylesheet' type='text/css'-->
	    <script src="<?php echo base_url();?>assets/tuongnhat/js/jquery-1.7.min.js"></script>
	    <script src="<?php echo base_url();?>assets/tuongnhat/js/myjs.js"></script>
	    <script src="<?php echo base_url();?>assets/tuongnhat/js/jquery.easing.1.3.js"></script>
	    <script src="<?php echo base_url();?>assets/tuongnhat/js/tms-0.4.1.js"></script>
	    <script>
			$(document).ready(function(){				   	
				$('.slider')._TMS({
					show:0,
					pauseOnHover:true,
					prevBu:'.prev',
					nextBu:'.next',
					playBu:false,
					duration:800,
					preset:'fade',
					pagination:'.pags',
					pagNums:false,
					slideshow:7000,
					numStatus:false,
					banners:'fade',
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
		<div class="bg">
			<div class="bg-2">
			  	<!--==============================header=================================-->
				<?php $this->load->view('front/header.php');?>
				
				<!--==============================content================================-->
				<?php $this->load->view('front/content.php');?>
			</div>       
		</div> 
		<!--==============================aside=================================-->
		  <aside>
		  </aside>
		<?php $this->load->view('front/footer.php');?>
	</body>
</html>