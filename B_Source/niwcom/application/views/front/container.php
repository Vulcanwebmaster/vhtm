<!DOCTYPE html>
<!-- saved from url=(0018)http://niw.com.vn/ -->
<html class=" js_active ">
	<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<!-- basic meta tags -->
	    <meta name="robots" content="index, follow">
	    <meta name="description" content="<?php if(isset($meta_tag)){echo $meta_tag;} ?>">
		<meta name="Keywords" content="<?php if(isset($meta_tag)){echo $meta_tag;} ?>">
	    <!-- title -->
	    <title><?php if(isset($title)){ echo $title; }else{ echo "Niw - Design Web"; } ?></title>
	    <!-- feeds and pingback -->
	    <!-- stylesheets 
	    <link rel="stylesheet" href="<?php echo base_url();?>assets/niwcom/css/style.css" type="text/css" media="screen">
	   
	    <!-- Giao dien moi -->
	    <link rel="stylesheet" href="<?php echo base_url();?>assets/niwcom/css/nivo-slider.css" type="text/css" media="screen" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/niwcom/css/style.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/niwcom/css/backgrounds/abstract-1.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/niwcom/css/prettyPhoto.css" media="screen"/>
        <script type='text/javascript' src='<?php echo base_url();?>assets/niwcom/js/jquery-1.4.4.min.js'>
        </script>
        <script type='text/javascript' src='<?php echo base_url();?>assets/niwcom/js/jquery.easing.1.3.js'>
        </script>
        <script type='text/javascript' src='<?php echo base_url();?>assets/niwcom/js/jquery.cycle.all.min.js'>
        </script>
        <script type='text/javascript' src='<?php echo base_url();?>assets/niwcom/js/jquery.validate.js'>
        </script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/niwcom/js/jquery.form.js">
        </script>
        <script type='text/javascript' src='<?php echo base_url();?>assets/niwcom/js/jquery.prettyPhoto.js'>
        </script>
        <script type='text/javascript' src='<?php echo base_url();?>assets/niwcom/js/cufon.js'>
        </script>
        <script type='text/javascript' src='<?php echo base_url();?>assets/niwcom/js/jquery.tools.min.js'>
        </script>
       <!-- <script type='text/javascript' src='<?php echo base_url();?>assets/niwcom/js/aller.cufonfonts.js'>
       </script>-->
        <script type='text/javascript' src='<?php echo base_url();?>assets/niwcom/js/jflickrfeed.min.js'>
        </script>
        <script type='text/javascript' src='<?php echo base_url();?>assets/niwcom/js/jquery.tweet.js'>
        </script>
        <script type='text/javascript' src='<?php echo base_url();?>assets/niwcom/js/jquery.kwicks-1.5.1.pack.js'>
        </script>
        <script type='text/javascript' src='<?php echo base_url();?>assets/niwcom/js/script.js'>
        </script>
        <script type='text/javascript' src='<?php echo base_url();?>assets/niwcom/js/jquery.innerfade.js'>
        </script>
<!-- Slider	 -->
	<link rel="stylesheet" href="<?php echo base_url();?>assets/niwcom/themes/default/default.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/niwcom/themes/light/light.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/niwcom/themes/dark/dark.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/niwcom/themes/bar/bar.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/niwcom/css/nivo-slider.css" type="text/css" media="screen" />
    <script type="text/javascript" src="<?php echo base_url();?>assets/niwcom/js/jquery.nivo.slider.js"></script>
    <script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
    </script>
<!-- End Slider	 -->  
	    
	    <!-- Debugging help, do not remove -->
	    <meta name="Framework" content="Kpress">
	    <meta name="Theme Version" content="1.2">
	    <meta name="Framework Version" content="3.1">
	    <meta name="CMS Version" content="3.3.1">
	    
	    <!-- meta tags, needed for javascript -->
	    <meta name="NIW" content="NIW">
	    
	</head>
<body id="top" class="home blog" style="font-family: Verdana">
	<?php $this->load->view('front/header');?>
	<?php $this->load->view('front/content')?>
	<?php $this->load->view('front/footer');?>
</body>