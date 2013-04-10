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
	    <!-- Giao dien moi -->
	<!---------- Bắt lỗi bằng js ------------>
	<script type="text/javascript" src="<?php echo base_url();?>assets/niwcom/js/jquery-1.7.1.min.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/niwcom/css/validationEngine.jquery.css" />
	<script type="text/javascript" src="<?php echo base_url();?>assets/niwcom/js/jquery.validationEngine-vi.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/niwcom/js/jquery.validationEngine.js"></script>
	<!--------------End Bắt lỗi bằng js ------------>	
	    <link href="<?php echo base_url();?>assets/niwcom/css/black-style.css" type="text/css" rel="StyleSheet">
<!-- 	    <link href="<?php echo base_url();?>assets/niwcom/css/style.css" type="text/css" rel="StyleSheet"> -->
	   <link href="<?php echo base_url();?>assets/niwcom/css/ModuleStyleSheets.css" type="text/css" rel="StyleSheet">
		<script src="<?php echo base_url();?>assets/niwcom/js/ga.js" async="" type="text/javascript"></script><script type="text/javascript">var jslang='EN';</script>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/niwcom/css/default.css">
<!-- 		<script type="text/javascript" src="<?php echo base_url();?>assets/niwcom/js/jquery-1.4.4.min.js"></script> -->
<!-- 		<script type="text/javascript" src="<?php echo base_url();?>assets/niwcom/js/jquery-1.js"></script> -->
		<script type="text/javascript" src="<?php echo base_url();?>assets/niwcom/js/jquery.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>assets/niwcom/js/jquery_002.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>assets/niwcom/js/swfobject.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>assets/niwcom/js/main.js"></script><style media="screen" type="text/css">#mainLgFlshLogo {visibility:hidden}</style>
		<script type="text/javascript" src="<?php echo base_url();?>assets/niwcom/js/jquery_004.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>assets/niwcom/js/jquery_003.js"></script>
<!-- 		<script type="text/javascript" src="<?php echo base_url();?>assets/niwcom/js/cufon.js"></script><style type="text/css">cufon{text-indent:0!important;}@media screen,projection{cufon{display:inline!important;display:inline-block!important;position:relative!important;vertical-align:middle!important;font-size:1px!important;line-height:1px!important;}cufon cufontext{display:-moz-inline-box!important;display:inline-block!important;width:0!important;height:0!important;overflow:hidden!important;text-indent:-10000in!important;}cufon canvas{position:relative!important;}}@media print{cufon{padding:0!important;}cufon canvas{display:none!important;}}</style> -->
<!-- 		<script type="text/javascript" src="<?php echo base_url();?>assets/niwcom/js/gtmBook_400.js"></script> -->
<!-- 		<script type="text/javascript" src="<?php echo base_url();?>assets/niwcom/js/gtmMd_400.js"></script> -->
<!-- 		<script type="text/javascript" src="<?php echo base_url();?>assets/niwcom/js/cufon_handler.js"></script> -->
		<script>
		$(document).ready(function(){
		    $("#mainSlide #sl1").css({"background":"url(<?php preg_match('~<img.*?src=[\'"]*(?P<src>[^\s\'"]*)~i', $list_slide->anh1, $matches); echo $matches['src']; ?>) no-repeat center top"});
		    $("#mainSlide #sl2").css({"background":"url(<?php preg_match('~<img.*?src=[\'"]*(?P<src>[^\s\'"]*)~i', $list_slide->anh2, $matches); echo $matches['src']; ?>) no-repeat center top"});
		    $("#mainSlide #sl3").css({"background":"url(<?php preg_match('~<img.*?src=[\'"]*(?P<src>[^\s\'"]*)~i', $list_slide->anh3, $matches); echo $matches['src']; ?>) no-repeat center top"});
		    $("#mainSlide #sl4").css({"background":"url(<?php preg_match('~<img.*?src=[\'"]*(?P<src>[^\s\'"]*)~i', $list_slide->anh4, $matches); echo $matches['src']; ?>) no-repeat center top"});
		});
		</script>
		
	    <!--End Giao dien moi -->
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