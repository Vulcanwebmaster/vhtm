<section id="main" class="column" style="width:100%;">
<form action="<? echo base_url()?>taikhoan/admin/edit/<?php echo $query->id ?>" method="post">
	<article class="module width_full" style="width:95%;">
		<header><h3>Thông tin tài khoản</h3></header>
			<div class="module_content">
				<fieldset>
					<label>Email</label>
					<input type="text" name="email" value="<?php echo $query->email ?>">
					<span class="validate">
						<?php 
							echo '<span>'.$this->session->userdata('existed').'</span>'; 
							$this->session->unset_userdata('existed'); 
							echo form_error('username');
						?>
					</span>
				</fieldset>
				<fieldset>
					<label>Mật khẩu</label>
					<input type="password" name="password" value="<?php echo $query->password ?>">
					<span class="validate"><?php echo form_error('password');?></span>
				</fieldset>
				<fieldset>
					<label>Họ và tên</label>
					<input type="text" name="fullname" value="<?php echo $query->fullname ?>">
					<span class="validate"><?php echo form_error('fullname');?></span>
				</fieldset>
				<fieldset>
					<label>Địa chỉ</label>
					<input type="text" name="birthday" value="<?php echo $query->birthday ?>">
					<span class="validate"><?php echo form_error('"birthday"');?></span>
				</fieldset>
				<fieldset>
					<label>Giới tính</label>
					<select name="gender" id="gender">
						<?php if ($query->gender == '0')
						{?>
							<option value="0" selected="selected">Nam</option>
							<option value="1">Nữ</option>
						<?php }
						else {?>
							<option value="0">Nam</option>
							<option value="1" selected="selected">Nữ</option>
						<?php }?>
					</select>
				</fieldset>
				<fieldset>
					<label>Địa chỉ</label>
					<input type="text" name="address" value="<?php echo $query->address ?>">
				</fieldset>
				<fieldset>
					<label>Điện thoại</label>
					<input type="text" name="address" value="<?php echo $query->phone ?>">
				</fieldset>
				
			</div>
				<footer>
					<div class="submit_link">
						<input type="submit" name="submit" value="Cập nhật" class="alt_btn">
					</div>
				</footer>

		</article><!-- end of post new article -->
</form>	
<!-- End Contact Info -->

		<div class="clear"></div>

</section>

</body>