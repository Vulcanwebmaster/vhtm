<style type="text/css">
	td{padding:5px}
</style>
<h2 style="margin-top:30px"><?php if($title) echo $title;?></h2>

<table style="width:60%; margin-left:20px; margin-top:20px">
	<tr>
		<td>ID</td>
		<td><?php if (isset($detail->dangky_id)) echo $detail->dangky_id;?></td>
	</tr>
	<tr>
		<td>Họ tên</td>
		<td><?php if (isset($detail->hoten)) echo $detail->hoten;?></td>
	</tr>
	<tr>
		<td>Tên cửa hàng</td>
		<td><?php if (isset($detail->tencuahang)) echo $detail->tencuahang;?></td>
	</tr>
	<tr>
		<td>Mã lĩnh vực</td>
		<td><?php if (isset($detail->id_linhvuc)) echo $detail->id_linhvuc;?></td>
	</tr>
	<tr>
		<td>Email</td>
		<td><?php if (isset($detail->email)) echo $detail->email;?></td>
	</tr>
	<tr>
		<td>Mật khẩu</td>
		<td><?php if (isset($detail->matkhau)) echo $detail->matkhau;?></td>
	</tr>
	<tr>
		<td>Điện thoại</td>
		<td><?php if (isset($detail->dienthoai)) echo $detail->dienthoai;?></td>
	</tr>
	<tr>
		<td>Địa chỉ</td>
		<td><?php if (isset($detail->diachi)) echo $detail->diachi;?></td>
	</tr>
	<tr>
		<td>Website</td>
		<td><?php if (isset($detail->website)) echo $detail->website;?></td>
	</tr>
</table>
<a style="margin-left:20px" href="<?php echo base_url();?>index.php/dangky/admin">Xem danh sách đăng ký</a>