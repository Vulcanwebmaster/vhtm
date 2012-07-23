
<?php print form_open('auth/admin/members/form/'/*.$this->form_validation->id*/,array('class'=>'horizontal'))?>
<article class="module width_full">
	<header><h3>User</h3></header>
		<div class="module_content">
				<fieldset>
					<?php print form_label($this->lang->line('userlib_username'),'username')?>
					<?php print form_input('username',set_value('username',$this->form_validation->username),'id="username" class="text"')?>
				</fieldset>
				<fieldset>
					<?php print form_label($this->lang->line('userlib_email'),'email')?>
					<?php print form_input('email',set_value('email',$this->form_validation->email),'id="email" class="text"')?>
				</fieldset>
				<fieldset>
					<?php print form_label($this->lang->line('userlib_password'),'password')?>
					<div style="margin:0 10px">
					<?php print form_password('password','','id="password" class="text"')?>
					</div>
				</fieldset>
				<fieldset>
					<?php print form_label($this->lang->line('userlib_confirm_password'),'confirm_password')?>
					<div style="margin:0 10px">
					<?php print form_password('confirm_password','','id="confirm_password" class="text"')?>
					</div>
				</fieldset>
				<fieldset style="width:48%; float:left; margin-right: 3%;"> <!-- to make two field float next to one another, adjust values accordingly -->
					<?php print form_label($this->lang->line('userlib_group'),'group')?>
						<?php print form_dropdown('group',$groups,set_value('group',$this->form_validation->group),'id="group" size="10" style="height: 60px;width:20.3em;"')?>
				</fieldset>
				<fieldset style="width:48%; float:left"> <!-- to make two field float next to one another, adjust values accordingly -->
					<label><?php print form_label($this->lang->line('userlib_active'),'active')?></label>
					<div style="margin:0 10px">
						<?php print "YES"?> <?php print form_radio('active','1',set_radio('active','1',$selected = ($this->form_validation->active == 1) ? TRUE : FALSE),'id="active"')?>
                		<?php print "NO"?> <?php print form_radio('active','0',set_radio('active','0',$selected = ($this->form_validation->active == 1) ? FALSE : TRUE))?>
                	</div>
				</fieldset>
				</fieldset><div class="clear"></div>
		</div>
		<header><h3>User Profile</h3></header>
<?php
    if( ! $this->preference->item('allow_user_profiles')):
        print "<p>".$this->lang->line('userlib_profile_disabled')."</p>";
    else:
?>
		<div class="module_content">
				<fieldset>
					<?php print form_label('Company Name','company_name')?>
				<?php $value = (empty($profiles['company_name']))? '' : $profiles['company_name'];  ?>
                <?php print form_input('company_name',$value,'id="company_name" class="text"')?>
				</fieldset>
				<fieldset>
					<?php print form_label('Full Name','full_name')?>
				<?php $value = (empty($profiles['full_name']))? '' : $profiles['full_name'];  ?>
                <?php print form_input('full_name',$value,'id="full_name" class="text"')?>
				</fieldset>
				<fieldset>
					<?php print form_label('Web Address','web_address')?>
                 <?php $value = (empty($profiles['web_address']))? '' : $profiles['web_address'];  ?>
                <?php print form_input('web_address',$value,'id="web_address" class="text"')?>
				</fieldset>
				<fieldset>
					<?php print form_label('Phone Number','phone_number')?>
                 <?php $value = (empty($profiles['phone_number']))? '' : $profiles['phone_number'];  ?>
                <?php print form_input('phone_number',$value,'id="phone_number" class="text"')?>
				</fieldset>
				<fieldset>
					<?php print form_label('Address','address')?>
				<?php $value = (empty($profiles['address']))? '' : $profiles['address'];  ?>
                <?php print form_input('address',$value,'id="address" class="text"')?>
				</fieldset>
				<fieldset>
					<?php print form_label('City','city')?>
                 <?php $value = (empty($profiles['city']))? '' : $profiles['city'];  ?>
                <?php print form_input('city',$value,'id="city" class="text"')?>
				</fieldset>
				<fieldset>
					<?php print form_label('Post Code','post_code')?>
                 <?php $value = (empty($profiles['post_code']))? '' : $profiles['post_code'];  ?>
                <?php print form_input('post_code',$value,'id="post_code" class="text"')?>
				</fieldset>
				</fieldset><div class="clear"></div>
		</div>
<?php endif;?>
	<footer>
		<div class="submit_link">
			<input type="submit" name="submit" value="Submit" class="alt_btn">
			</div>
	</footer>
</article><!-- end of post new article -->
<?php print form_close()?>