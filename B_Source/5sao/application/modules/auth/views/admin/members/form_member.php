
<?php print form_open('auth/admin/members/form/'.$this->form_validation->id,array('class'=>'horizontal'))?>
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
				<?php print form_hidden('id',set_value('id',$this->form_validation->id))?>
				<div class="clear"></div>
		</div>
	<footer>
		<div class="submit_link">
			<input type="submit" name="submit" value="Submit" class="alt_btn">
			</div>
	</footer>
</article><!-- end of post new article -->
<?php print form_close()?>