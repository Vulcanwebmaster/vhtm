
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
			<tr>
				<td class="label">Tên gian hàng:</td>
				<td>
					<p class="input-text-1" id="name_input"><span><input type="text" name="village_name" value="" /></span></p>
					<p class="error-message"><s id="name_error" style="display: none;"></s></p>
				</td>
			</tr>
			<tr><td class="spacer-1" colspan="2"></td></tr>
			<tr>
				<td class="label">Nội dung:</td>
				<td>
					<div class="text-area-1">
						<div class="top">
							<textarea name="village_description" id="message_input"> </textarea>
							<p class="error-message"><s id="message_error" style="display: none;"></s></p>
						</div>
						<div class="bottom"></div>
					</div>
				</td>
			</tr>
			<fieldset>
							<label>Mô tả</label>
							<?php echo $this->ckeditor->editor('village_description','',$config);?>
			</fieldset>
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