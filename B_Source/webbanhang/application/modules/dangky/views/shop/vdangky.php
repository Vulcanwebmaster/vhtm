<script type="text/javascript">
	$(document).ready(function(){
		$('#slogan-panel').remove();
	});	
</script>

<div style="width:860px; margin:auto">
	<?php if (validation_errors())
	{?>
		<div style="background-color:#ffebe8; border:solid 1px #dd3c10; padding:10px; margin:15px">
			<?php echo validation_errors('<div class="error" style="font-size:12px; color:#333; margin:0">','</div>')?>
		</div>
	<?php }?>
	<?php
		if ($this->session->userdata('success'))
		{?>
			<div style="background-color:#bfeeff; border:solid 1px #169bcd; padding:10px; margin:15px; font-size:12px">
			<?php 
				echo $this->session->userdata('success');
				$this->session->unset_userdata('success');
			?>
			</div>
		<?php }
	?>
	<form style="margin-top:20px" name="dangky-form" id="dangky-form" method="post" action="<?php echo base_url();?>dangky/creatDangKy">
		<center>
			<table style="width:70%">
				<tr>
					<td>Họ tên</td>
					<td><input name="hoten" id="hoten" /></td>
				</tr>
				<tr>
					<td style="height: 10px"></td>
				</tr>
				<tr>
					<td>Tên cửa hàng</td>
					<td><input name="tencuahang" id="tencuahang" /></td>
				</tr>
				<tr>
					<td style="height: 10px"></td>
				</tr>
				<tr>
					<td>Lĩnh vực kinh doanh</td>
					<td>
						<select name="linhvuc" id="linhvuc">
							<option value="0">--- Chọn lĩnh vực ---</option>
							<?php foreach($fields as $item)
							{?>
								<option value="<?php echo $item->linhvuc_id;?>"><?php echo $item->tenlinhvuc;?></option>
							<?php }?>
						</select>
					</td>
				</tr>
				<tr>
					<td style="height: 10px"></td>
				</tr>
				<tr>
					<td>Email</td>
					<td><input name="email" id="email" /></td>
				</tr>
				<tr>
					<td style="height: 10px"></td>
				</tr>
				<tr>
					<td>Mật khẩu</td>
					<td><input type="password" name="matkhau" id="matkhau" /></td>
				</tr>
				<tr>
					<td style="height: 10px"></td>
				</tr>
				<tr>
					<td>Nhập lại mật khẩu</td>
					<td><input type="password" name="nhaplaimatkhau" id="nhaplaimatkhau" /></td>
				</tr>
				<tr>
					<td style="height: 10px"></td>
				</tr>
				<tr>
					<td>Số điện thoại</td>
					<td><input name="sodienthoai" id="sodienthoai" /></td>
				</tr>
				<tr>
					<td style="height: 10px"></td>
				</tr>
				<tr>
					<td>Địa chỉ</td>
					<td><input name="diachi" id="diachi" /></td>
				</tr>
				<tr>
					<td style="height: 10px"></td>
				</tr>
				<tr>
					<td>Địa chỉ website</td>
					<td><input name="website" id="website" />
						<p style="margin: 0; font-size: 11px">.niwshoppingcart.vn</p></td>
				</tr>
				<tr>
					<td style="height: 10px"></td>
				</tr>
				<tr>
					<td>Nhập mã số</td>
					<td><?php echo $captcha;?></td>
				</tr>
				<tr>
					<td style="height: 10px"></td>
				</tr>
				<tr>
					<td colspan="2" align="center"><input type="submit" name="submit" value="Đăng ký"  style="width: auto; padding:3px 10px"/></td>
				</tr>
			</table>
		</center>
	</form>
	
</div>