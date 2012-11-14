<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="vi-vn" lang="vi-vn">
	<head>
		<title>Minh Chau Shop</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		
<!--------CSS Trung---------->
 	<link rel="stylesheet" href="<?php echo base_url();?>assets/minhchau2/css/ja.news.css" type="text/css">
 	<link rel="stylesheet" href="<?php echo base_url();?>assets/minhchau2/css/ja.slideshow.css" type="text/css"> 
	<link rel="stylesheet" href="<?php echo base_url();?>assets/minhchau2/css/system.css" type="text/css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/minhchau2/css/tabs.css" type="text/css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/minhchau2/css/highslide-styles.css" type="text/css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/minhchau2/themes/default/default.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/minhchau2/themes/light/light.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/minhchau2/themes/dark/dark.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/minhchau2/themes/bar/bar.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/minhchau2/css/nivo-slider.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/minhchau2/css/style_nivo.css" type="text/css" media="screen" />

	<link rel="stylesheet" href="<?php echo base_url();?>assets/minhchau2/css/general.css" type="text/css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/minhchau2/css/style.css" type="text/css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/minhchau2/css/template.css" type="text/css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/minhchau2/css/typo.css" type="text/css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/minhchau2/css/ja.vm.css" type="text/css">
	<link href="<?php echo base_url();?>assets/minhchau2/css/ja.cssmenu.css" rel="stylesheet" type="text/css">			
	<link href="<?php echo base_url();?>assets/minhchau2/css/default.css" rel="stylesheet" type="text/css">
		<script type="text/javascript" src="<?php echo base_url();?>assets/minhchau2/js/jquery.nivo.slider.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>assets/minhchau2/js/jquery-1.7.2.min.js"></script>
	<script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
    </script>
<!-----End CSS Trung---------->
		
<!-----    	<script type="text/javascript">
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
---------->
	</head>
	
	<body id="bd" class="wide fs2">
			<a name="Top" id="Top"></a>
			<ul class="accessibility">
				<li><a href="#" title="Skip to content">Skip to content</a></li>
				<li><a href="#" title="Skip to main navigation">Skip to main navigation</a></li>
				<li><a href="#" title="Skip to 1st column">Skip to 1st column</a></li>
				<li><a href="#" title="Skip to 2nd column">Skip to 2nd column</a></li>
			</ul>
		<div id="ja-wrapper">
			<div id="ja-wrapper-inner" class="clearfix">
						<?php $this->load->view('front/header');?>
				<div id="ja-containerwrap">		
					<div id="ja-container" class="clearfix">	
																																																																														
						<?php $this->load->view('front/content');?>
					</div>
				</div>
			</div>
			<div id="ja-footerwrap">
						<?php $this->load->view('front/footer');?>
			</div>	
		</div>
	</body>
</html>