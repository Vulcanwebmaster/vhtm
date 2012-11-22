<section id="main" class="column" style="width:100%;">
<form action="<? echo base_url()?>taikhoan/admin/insert" method="post">
	<article class="module width_full" style="width:95%;">
		<header><h3>Nhập thông tin danh mục</h3></header>
			<div class="module_content" style="height:400px;overflow: auto">
				<fieldset>
					<label>Tên đăng nhập</label>
					<input type="text" name="account_username" value="<?php echo $this->session->userdata('account_username'); ?>">
					<span class="validate">
						<?php 
							if($this->session->userdata('existed'))
							{
								echo '<span>'.$this->session->userdata('existed').'</span>'; 
								$this->session->unset_userdata('existed');
							}
							echo form_error('account_username');
						?>
					</span>
				</fieldset>
				<fieldset>
					<label>Mật khẩu</label>
					<input type="password" name="account_password" value="<?php echo $this->session->userdata('account_password'); ?>">
					<span class="validate"><?php echo form_error('account_password');?></span>
				</fieldset>
				<fieldset>
					<label>Họ và tên</label>
					<input type="text" name="account_fullname" value="<?php echo $this->session->userdata('account_fullname'); ?>">
					<span class="validate"><?php echo form_error('account_fullname');?></span>
				</fieldset>
				<fieldset>
					<label>Địa chỉ</label>
					<input type="text" name="account_address" value="<?php echo $this->session->userdata('account_address'); ?>">
					<span class="validate"><?php echo form_error('account_address');?></span>
				</fieldset>
				<fieldset>
					<label>Số điện thoại</label>
					<input type="text" name="account_phonenumber" value="<?php echo $this->session->userdata('account_phonenumber'); ?>">
					<span class="validate"><?php echo form_error('account_phonenumber');?></span>
				</fieldset>
				<fieldset>
					<label>Địa chỉ email</label>
					<input type="text" name="account_email" value="<?php echo $this->session->userdata('account_email'); ?>">
					<span class="validate"><?php echo form_error('account_email');?></span>
				</fieldset>
				
			</div>
				<footer>
					<div class="submit_link">
						<input type="submit" name="submit" value="Thêm mới" class="alt_btn">
					</div>
				</footer>

		</article><!-- end of post new article -->
</form>	
<!-- End Contact Info -->

		<div class="clear"></div>

</section>

</body>