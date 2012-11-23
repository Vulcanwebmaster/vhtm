<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8"/>
	<title>Admin Page
	<?php 
	if(isset($title)){
		echo " - ".$title;
	}
	?>	
	</title>
	
	<link rel="stylesheet" href="<?php echo base_url()?>/assets/admin/css/layout.css" type="text/css" media="screen" />
	<!--[if lt IE 9]>
	<link rel="stylesheet" href="css/ie.css" type="text/css" media="screen" />
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<script src="<?php echo base_url()?>/assets/admin/js/jquery-1.7.2.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url()?>/assets/admin/js/hideshow.js" type="text/javascript"></script>
	<script src="<?php echo base_url()?>/assets/admin/js/jquery.tablesorter.min.js" type="text/javascript"></script>
	
	<script type="text/javascript" src="<?php echo base_url()?>/assets/admin/js/jquery.equalHeight.js"></script>
	<?php echo $this->editor_library->init_editor()?>
    <script type="text/javascript">
    $(function(){
        $('.column').equalHeight();
    });
    </script>
    <link type="text/css" rel="stylesheet" href="<?php echo base_url()?>assets/tuongnhatp2/css/consolidated_common.css"/>
    <script type="text/javascript" src="<?php echo base_url();?>assets/tuongnhatp2/js/livevalidation_standalone.js"></script>

</head>


<body>
	<style type="text/css">
		.LV_validation_message{position: relative !important}
	</style>
	<?php $this->load->view('admin/header');?>	
	<aside id="sidebar" class="column">
		<?php //$this->load->view('admin/searchbox')?>
		<hr/>
		<?php $this->load->view('admin/menu')?>
		<?php $this->load->view('admin/footer')?>
	</aside><!-- end of sidebar -->
	<?php $this->load->view('admin/content')?>
</body>

</html>