<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns:wairole="http://www.w3.org/2005/01/wai-rdf/GUIRoleTaxonomy#" xmlns:waistate="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		<title><?php if(isset($title)) echo $title; ?></title>
		<link rel="apple-touch-icon" href="<?php echo base_url()?>assets/tuongnhatp2/images/apple-touch-icon.png"/>
		<link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url()?>assets/tuongnhatp2/css/standard.css"/>
		<link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url()?>assets/tuongnhatp2/css/SqueezeBox.css"/>
		<link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url()?>assets/tuongnhatp2/css/mystyle.css"/>
		<link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url()?>assets/tuongnhatp2/css/cloud-zoom.css" />
		
		<link media="screen" href="<?php echo base_url()?>assets/tuongnhatp2/css/calendar-eightysix-v1.1-default.css" type="text/css" rel="stylesheet"/>
		<link media="screen" href="<?php echo base_url()?>assets/tuongnhatp2/css/calendar-eightysix-v1.1-vista.css" type="text/css" rel="stylesheet"/>
		<link media="screen" href="<?php echo base_url()?>assets/tuongnhatp2/css/calendar-eightysix-v1.1-osx-dashboard.css" type="text/css" rel="stylesheet"/>
	    <link href="<?php echo base_url()?>assets/tuongnhatp2/css/SubLevelhero.css" type="text/css"/>
	    <link href="<?php echo base_url()?>assets/tuongnhatp2/css/spot_home_us_i_2012.css" media="all" type="text/css" rel="stylesheet"/>
	    
	    <script src="<?php echo base_url()?>assets/tuongnhatp2/js/jquery-1.8.2.js" type="text/javascript" language="javascript"></script>
	    <script src="<?php echo base_url()?>assets/tuongnhatp2/js/collection.js"   type="text/javascript" language="javascript"></script>
	    <script src="<?php echo base_url()?>assets/tuongnhatp2/js/jquery.min.js"   type="text/javascript"></script>
	    <script src="<?php echo base_url()?>assets/tuongnhatp2/js/cloud-zoom.1.0.2.js" type="text/javascript"></script>
	    <script src="<?php echo base_url()?>assets/tuongnhatp2/js/jquery-1.7.2.min.js" type="text/javascript" language="javascript"></script>  
	    <script src="<?php echo base_url()?>assets/tuongnhatp2/js/jsadd.js" type="text/javascript" language="javascript"></script>  
	    <script src="<?php echo base_url()?>assets/tuongnhatp2/js/jquery-1.7.2.min.js" type="text/javascript" language="javascript"></script>
	    <script src="<?php echo base_url()?>assets/tuongnhatp2/js/myjs.js" type="text/javascript" language="javascript"></script>
	    <link type="text/css" rel="stylesheet" href="<?php echo base_url()?>assets/tuongnhatp2/css/consolidated_common.css"/>
		<script type="text/javascript" src="<?php echo base_url();?>assets/tuongnhatp2/js/livevalidation_standalone.js"></script>
		<script type="text/javascript">
			$(document).ready(function(){
				var email2 = new LiveValidation( "email", { validMessage: "Địa chỉ hợp lệ", wait: 500 } );//, { validMessage: "Địa chỉ hợp lệ!", wait: 500 } );
				email2.add( Validate.Email, 
			              { failureMessage: "Địa chỉ không hợp lệ"});
			});
		</script>
		
		<!-- -------- Load date picker resource ---------- -->
		<link rel="stylesheet" href="<?php echo base_url();?>assets/tuongnhatp2/datepicker/themes/base/jquery.ui.all.css"/>
		<script src="<?php echo base_url();?>assets/tuongnhatp2/datepicker/jquery-1.8.0.js"></script>
		<script src="<?php echo base_url();?>assets/tuongnhatp2/datepicker/ui/jquery.ui.core.js"></script>
		<script src="<?php echo base_url();?>assets/tuongnhatp2/datepicker/ui/jquery.ui.widget.js"></script>
		<script src="<?php echo base_url();?>assets/tuongnhatp2/datepicker/ui/jquery.ui.datepicker.js"></script>
		<link rel="stylesheet" href="<?php echo base_url();?>assets/tuongnhatp2/datepicker/themes/base/demos.css"/>
	</head>
	
	<body>
		<?php $this->load->view('front/header')?>
		<div id="homeBackground" class="fullScreen mktSpotCont" style="height: 667px;">
		
	    <div class="fullScreen" id="background-image" style="height: 667px; ">
	        <img src="<?php echo base_url()?>assets/tuongnhatp2/images/usa1_home_a_16-9.jpg" alt="" class="fullImage" id="16-9" style="display: block; height: 771px; width: 1366px; left: 0px; top: -52px; "/>
		</div>	
		</div> 
		<div class="fullScreen mktSpotCont" id="homePromos" style="height:667px;"></div>
		<!--page-->
			
		<?php $this->load->view('front/left');?>
		<!----------------bein login------------->
		<div id="pupPanellogin" class="modal sbox-window" style="visibility: visible; zoom: 1; opacity: 1; top: 128px; z-index: 1000; left: 298px; display: none; ">
			<div class="sbox-bg-wrap">
				<div class="sbox-bg sbox-bg-n"></div>
				<div class="sbox-bg sbox-bg-ne"></div>
				<div class="sbox-bg sbox-bg-e"></div>
				<div class="sbox-bg sbox-bg-se"></div>
				<div class="sbox-bg sbox-bg-s"></div>
				<div class="sbox-bg sbox-bg-sw"></div>
				<div class="sbox-bg sbox-bg-w"></div>
				<div class="sbox-bg sbox-bg-nw"></div>
			</div>
			<div class="modalClose sbox-btn-close"><a href="#" title="Cerrar ventana">Cerrar</a></div>
			<div class=" modalContent sbox-content">
				<div class="modalTitle">&nbsp;</div>
				<div class="modalInfo">
					<div id="page" style="padding: 0;">
						<div class="line">
				    		<div class="unit size1of1">
				      			<div class="breadcrumb">
				       				<ul class="listH">
				         				<li>Đăng nhập / Đăng ký</li>
				        			</ul>
				      			</div>
			    			</div>
				  		</div>  
			  			<div class="bkg_degradado">
							<div id="logonPanel" class="infoLogin logonPanel" style="height: 241px; ">
								<div class="unit size1of2">
									<div class="rPadded login_message">
										<div class="title">Bạn đã có tài khoản <strong style="text-transform:uppercase">Tường Nhật </strong></div>
										<p>Nhập <strong>email</strong> và <strong>mật khẩu </strong>để đăng nhập:</p>
										<form name="login-form" id="login-form" method="post" action="<?php echo base_url()?>dangnhap/checkAccount">
											<ul>
												<li class="formControl">
													<span class="labelLeft">E-mail<em class="required"></em></span>
													<br/>
													<input class="text logon  msgPos:'msgPosUL1'" style="width: 200px;" type="text" id="email" name="logonId" maxlength="60" value=""/>
												</li>
												<li class="formControl">
													<span class="labelLeft">Mật khẩu <em class="required"></em></span>
													<br/>
													<input class="text  msgPos:'msgPosUL2'" style="width: 200px;" type="password" id="password" name="logonPassword" maxlength="35"/>
												</li>
												<li class="formControl" id="check_acept_priv_login" style="position:static; display:none; ">
													<input type="checkbox" name="privacyPolicy" id="privacyLogin"/>
													<span id="privatePolicyError" class="hidden"> Bạn phải chấp nhận quy định của <strong>zarahome.com</strong>. </span> <span>I accept the&nbsp;</span> 
													<a href="#S" class="showLinkInPopUpWindow linkLabel">Quy định</a>
													<br/>
												</li>
												<li class="formControl">
													
													<div class="lnk_forgot_pw">
													<a id="forgetPasswordLink" class="lnk_forgot_pw gaPage" data-ga-page-event="click" data-ga-page-logic="/Identificate/Contrasena_Olvidada/Formulario" style="" href="#">
														Bạn quên mật khẩu
													</a>
													</div>
												</li>				
											</ul>
									
											<div class="actions sc_checkout" style="text-align:left;">
												<input style="font-size:14px; font-weight:bold; text-transform:uppercase; padding:5px 10px; color:white; background:black" type="submit" name="submit" value="Đồng ý"/>
											</div>
										</form>
									</div>
								</div>
								<div class="unit size1of2 lastUnit">
									<div class="rPadded login_message">
										<div class="title">Tạo tài khoản <strong style="text-transform: uppercase">Tường Nhật</strong></div>
										<p>
											Nếu bạn chưa có tài khoản <strong>Tường Nhật</strong>, hãy sử dụng tùy chọn này để đăng ký. 
										</p>
										<p>
											Yêu cầu bạn nhập thông tin để thuận lợi cho quá trình mua hàng
										</p>
										<div class="actions sc_checkout" style="text-align:left;">
											<a class="regist-button" href="<?php echo base_url()?>dangnhap/registAccount">Đăng ký</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<br style="clear:both"/>
	</body>
</html>