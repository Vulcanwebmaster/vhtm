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
        $("#list-book").uniform();
      });
    </script>
    <!-- ====================================== -->
    
    <link rel="Stylesheet" type="text/css" href="<?php echo base_url();?>/assets/unix/css/style1.css"/>
</head>
<body>
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
