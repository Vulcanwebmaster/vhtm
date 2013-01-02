<form name="dangky-form" id="dangky-form" method="post" action="<?php echo base_url();?>dangky/creatDangKy">
	<div align="right">
		<p id="closemash" style="margin: -20px -10px 0 0">Close</p>
	</div>
	<table>
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
					<?php $fields=$this->MKaimonokago->getListFields();
					foreach ($fields as $item)
					{?>
						<option value="<?php echo $item->linhvuc_id;?>"><?php echo $item->tenlinhvuc;?></option>
					<?php }
					?>
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
</form>
