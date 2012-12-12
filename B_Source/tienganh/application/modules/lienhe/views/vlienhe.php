
	<?php if (validation_errors())
	{
		echo '<div class="error-panel">';
		//echo validation_errors('<p style="color:#f83d43">','</p>');
		echo '</div>';
	}?>

<form style="background-color: white" method="post" class="contact-form" id="contact-form" name="lienhe-form" action="<?php echo base_url();?>lienhe/send" method="post">
	<input type="hidden"  name="addnew" value="yes" />
	<h3>Xin hãy điền đầy đủ các thông tin dưới đây: </h3>
	<?php 
		echo '<p style="color:#f83d43; margin:10px;  font-size: 13px; font-weight: bold ">'.$this->session->userdata('lienhe_result').'</p>';
		$this->session->unset_userdata('lienhe_result');
	?>
		<table style="float: left;">	
			<fieldset>
					<label>BẠN QUAN TÂM ĐẾN</label>
					<select name="lecturers_category">
						<?php  foreach ($list as $item)
					 	{      ?>
						<option value="<?php echo $item->lecturers_category;?>"><?php echo $item->lecturers_category;?></option>
						
						<?php } ?>
					</select>
				</fieldset>
			<tr>
				<td class="label">TÊN :</td>
				<td>
					<p class="input-text-1" id="name_input"><span><input type="text" name="contact_name" value="" /></span></p>
					<p class="error-message"><s id="name_error" style="display: none;"></s></p>
				</td>
			</tr>
			<tr><td class="spacer-1" colspan="2"></td></tr>
			<tr>
				<td class="label">ĐỊA CHỈ MAIL:</td>
				<td>
					<p class="input-text-1" id="mail_input"><span><input type="text" name="contact_email" value="" /></span></p>
					<p class="error-message"><s id="mail_error" style="display: none;"></s></p>
				</td>
			</tr>
			<tr><td class="spacer-1" colspan="2"></td></tr>
			<tr>
				<td class="label">SỐ MOBILE:</td>
				<td>
					<p class="input-text-1"><span><input type="text" name="contact_phone" value="" /></span></p>
				</td>
			</tr>
			<tr><td class="spacer-1" colspan="2"></td></tr>
			<tr>
				<td class="label">TIÊU ĐỀ:</td>
				<td>
					<p class="input-text-1"><span><input type="text" name="contact_title" value="" /></span></p>
				</td>
			</tr>
			<tr><td class="spacer-1" colspan="2"></td></tr>
			<tr>
				<td class="label">NỘI DUNG THÔNG ĐIỆP:</td>
				<td>
					<div class="text-area-1">
						<div class="top">
							<textarea name="contact_content" id="message_input"> </textarea>
							<p class="error-message"><s id="message_error" style="display: none;"></s></p>
						</div>
						<div class="bottom"></div>
					</div>
				</td>
			</tr>
			<tr><td class="spacer-2" colspan="2"></td></tr>
			<tr>
				<td></td>
				<td> 
					<center>
						<input name="submit" type="submit" value="Gửi đi" style="height:25px; width:70px; margin:auto ;text-align: center"/>
					</center>
				</td>
			</tr>
		</table>
		<?php echo validation_errors('<p style="color:#f83d43">','</p>'); ?>
		<br clear="both" />
</form>