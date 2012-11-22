<script type="text/javascript">
	$(document).ready(function(){
		
		var email = new LiveValidation( "logonId", { validMessage: "Địa chỉ hợp lệ", wait: 500 } );//, { validMessage: "Địa chỉ hợp lệ!", wait: 500 } );
		email.add( Validate.Email, 
	              { failureMessage: "Địa chỉ không hợp lệ"});
	});
</script>

<style type="text/css">
	#background-image{display:none}
	.sbox-content{padding:0 50px}
	.infoLogin{width:auto}
</style>
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
		<?php if (isset($_SESSION['error'])) 
		{
			echo '<p style="color:red">'.$_SESSION['error'].'</p>';
			unset($_SESSION['error']);
		}?>
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
											<input class="text logon  msgPos:'msgPosUL1'" style="width: 200px;" type="text" id="logonId" name="logonId" maxlength="60" value=""/>
										</li>
										<li class="formControl">
											<span class="labelLeft">Mật khẩu <em class="required"></em></span>
											<br/>
											<input class="text  msgPos:'msgPosUL2'" style="width: 200px;" type="password" id="logonPassword" name="logonPassword" maxlength="35"/>
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
									
									<form id="userRegister" action="" method="post">
										<button id="registerBt" style="text-align:left;" type="submit" value="Create account" class="button2">
											<span>Đăng ký</span>
										</button>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
