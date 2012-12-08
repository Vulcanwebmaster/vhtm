<!--<html>
	<body>
		<h2>Login</h2>
		
		<table>
			<form action="<?php echo base_url() ?>login/dangnhap" method="post">
				<h5>Username</h5>
				<input type="text" name="username" value="" size="50" />
				
				<h5>Password</h5>
				<input type="text" name="password" value="" size="50" />
				
				<div><input type="submit" name="submit" value="Submit" /></div>
				
			</form>
		</table>
	</body>
</html>-->

								<form action="<?php echo base_url() ?>login/dangnhap" method="post">
													<p id="form-login-username">
														<label for="modlgn-username">Tài khoản</label>
														<input id="modlgn-username" type="text" name="username" class="inputbox" size="18" value="" onblur="" onfocus="">
													</p>
													<p id="form-login-password">
														<label for="modlgn-passwd">Mật khẩu</label>
														<input id="modlgn-passwd" type="password" name="password" class="inputbox" size="18" value="" onblur="" onfocus="">
													</p>
													<div class="wrapper">
														<p id="form-login-remember">
															<input id="modlgn-remember" type="checkbox" name="remember" class="inputbox" value="yes">
															<label for="modlgn-remember">Ghi nhớ đăng nhập</label>
														</p>
														<input type="submit" name="submit" class="button" value="Log in">
														<input type="hidden" name="option" value="com_users">
														<input type="hidden" name="task" value="user.login">
														<input type="hidden" name="return" value="aW5kZXgucGhwP0l0ZW1pZD00MzU=">
														<div class="create">
														<a href="#">Tạo tài khoản mới</a>
													</div>
													<input type="hidden" name="4f54e07b149526d7638e5e126d6c03e7" value="1">	<ul>
													<li>
														<a href="#">
														Quên mật khẩu ?</a>
													</li>
													
												</ul>	
											</div>												
										</form>
