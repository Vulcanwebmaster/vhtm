<div id="left">
							<div class="wrapper2">
								<div class="extra-indent">
									<div class="module_search">
										<div class="boxIndent">
											<div class="wrapper">
							<!--BEGIN Search Box -->
												
												<form action="<?php echo base_url();?>timkiem/doSearch" method="post">
													<div class="search_search">
													<input name="search-text" id="mod_virtuemart_search" maxlength="80" class="inputbox" type="text" size="80" value="Tìm kiếm..." onblur="if(this.value=='') this.value='Tìm kiếm...';" onfocus="if(this.value=='Tìm kiếm...') this.value='';"><input type="submit" value="Tìm kiếm" class="button" onclick="this.form.keyword.focus();"></div>
													<input type="hidden" name="limitstart" value="0">
													<input type="hidden" name="option" value="com_virtuemart">
													<input type="hidden" name="view" value="category">
												</form>

<!-- End Search Box -->						</div>
										</div>
									</div>
									<div class="module_login">
										 <div class="boxIndent">
											<h3 style="text-align:center"><span><span>Đăng nhập</span></span></h3>
											<div class="wrapper">
												<form action="<?php echo base_url()?>dangnhap/checkAccount" method="post">
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
														<a href="<?php echo base_url() ?>dangnhap/registAccount/">Tạo tài khoản mới</a>
														</div>
													<input type="hidden" name="4f54e07b149526d7638e5e126d6c03e7" value="1">	<ul>
													<li>
														<a href="<?php echo base_url() ?>lienhe/send/">
														Quên mật khẩu ?</a>
													</li>
													
												</ul>	
											</div>												
										</form>
									</div>
								</div>
							</div>
							<div class="module-category">
								<div class="boxIndent">
									<h3 style="text-align:center"><span><span>Sản phẩm làng nghề</span></span></h3>
									<div class="wrapper">
										<?php foreach($product as $item)
										{?>
											<ul id="dropdown" class="list">
												<li class="level0"><a class="screenshot" href="<?php echo base_url();?>sanpham/detail/<?php echo $item->product_id;?>"><?php echo $item->product_name;?></a>
												</li>
											</ul>
										<?php } ?>

								</div>
							</div>
						</div>
						<div class="module_banners1">
						 <div class="boxIndent">
				 			<div class="wrapper">
								<div class="bannergroup_banners1">
									<div class="banneritem">
									<a href="<?php echo base_url();?>">		<a href="<?php echo base_url();?>assets/langnghe/virtuemart_41126/index.php/component/banners/click/2" target="_blank" title="Shop 1">
										<img src="<?php echo base_url();?>assets/langnghe/images/banner1.png" alt="Shop 1" width="230" height="257">
									</a>
									<div class="clr"></div>
								</div>
							</div>
						</div>
					</div>
				</div>				
			</div>
		</div>
	</div>