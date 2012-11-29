<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Login</title>
<link rel="stylesheet" href="<?php echo base_url()?>assets/admin/css/screen.css" type="text/css" media="screen" title="default" />
<!--  jquery core -->
<script src="<?php echo base_url()?>assets/admin/js/jquery/jquery-1.4.1.min.js" type="text/javascript"></script>

<!-- Custom jquery scripts -->
<script src="<?php echo base_url()?>assets/admin/js/jquery/custom_jquery.js" type="text/javascript"></script>

<!-- MUST BE THE LAST SCRIPT IN <HEAD></HEAD></HEAD> png fix -->
<script src="<?php echo base_url()?>assets/admin/js/jquery/jquery.pngFix.pack.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function(){
$(document).pngFix( );
});
</script>
</head>
<body id="login-bg"> 
 
<!-- Start: login-holder -->
<div id="login-holder">

	<!-- start logo -->
	<div id="logo-login">
	</div>
	<!-- end logo -->
	
	<div class="clear"></div>
<?php print form_open('auth/login',array('class'=>'horizontal'))?>	
	<!--  start loginbox ................................................................................. -->
	<div id="loginbox">
	
	<!--  start login-inner -->
	<div id="login-inner">
		<table border="0" cellpadding="0" cellspacing="0">
		<tr>
			<th>Username</th>
			<td><input type="text" name="login_field" id="login_field" class="login-inp" value="<?php print set_value("login_field")?>"/></td>
		</tr>
		<tr>
			<th>Password</th>
			<td><input type="password" name="password" id="password" onfocus="this.value=''" class="login-inp" /></td>
		</tr>
		<tr>
			<th></th>
			<td valign="top"><?php print form_checkbox('remember','yes',$this->input->post('remember'))?><label for="login-check">Remember me</label></td>
		</tr>
		<tr>
			<th></th>
			<td><input type="submit" name="submit" class="submit-login"  /></td>
		</tr>
		</table>
	</div>
 	<!--  end login-inner -->
	<div class="clear"></div>
	<a href="<?php print site_url('auth/forgotten_password') ?>" class="forgot-pwd">Forgot Password?</a>
 </div>
 <!--  end loginbox -->
<?php print form_close()?>

</div>
<!-- End: login-holder -->
</body>
</html>