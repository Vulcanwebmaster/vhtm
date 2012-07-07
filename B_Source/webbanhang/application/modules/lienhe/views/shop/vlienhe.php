<script type="text/javascript">
	$(document).ready(function(){
		$('#lienhe').addClass('current');
	});
</script>

<div id="lienhe-panel">
	<div id="information">
		<h4 id="lienhe-title">Trung tâm dịch vụ khách hàng - Công ty TNHH Công nghệ phần mềm NIW</h4>
		<table>
			<tr>
				<td style="width:100px">Địa chỉ:</td>
				<td>Tầng 19 - Tòa nhà CT5B - Mễ Trì Thượng - Từ Liêm - Hà Nội.</td>
			</tr>
			<tr>
				<td>Điện thoại:</td>
				<td>01282119811</td>
			</tr>
			<tr>
				<td>Email:</td>
				<td>support@niw.com.vn</td>
			</tr>
			<tr>
				<td>Website:</td>
				<td>http://www.niw.com.vn</td>
			</tr>
		</table>
	</div>
	<hr/>
	<div id="send-email-panel">
		<?php echo $this->session->flashdata('message');?>
		<?php if (validation_errors())
				{?>
				<div id="error-panel">
					<?php 
					echo validation_errors('<div class="message_error">','</div>'); ?>
				</div>
		<?php }?>
		<form method="post" name="contact-form" action="<?php echo base_url();?>lienhe/sendMail">
			<table>
				<tr>
					<td style="width:150px">Tên người liên hệ (<span class="red">*</span>):</td>
					<td><input type="text" name="name"/></td>
				</tr>
				<tr><td style="height:10px"></td></tr>			
				<tr>
					<td>Điện thoại (<span class="red">*</span>):</td>
					<td><input type="text" name="phonenumber"/></td>
				</tr>
				<tr><td style="height:10px"></td></tr>	
				<tr>
					<td>Email (<span class="red">*</span>):</td>
					<td><input type="text" name="email"/></td>
				</tr>
				<tr><td style="height:10px"></td></tr>	
				<tr>
					<td>Lời nhắn (<span class="red">*</span>):</td>
					<td style="padding-top:5px">
						<textarea name="message"></textarea>
					</td>
				</tr>
				<tr><td style="height:10px"></td></tr>
				<tr>
					<td>
						Nhập mã số sau:
					</td>
					<td>
						<?php echo $captcha;?>
					</td>
				</tr>	
				<tr><td style="height:10px"></td></tr>
				<tr>
					<td colspan="2" align="center">
						<input type="submit" id="submit" name="submit" value="Gửi" class="button"/>
					</td>
				</tr>
			</table>
		</form>
	</div>
</div>