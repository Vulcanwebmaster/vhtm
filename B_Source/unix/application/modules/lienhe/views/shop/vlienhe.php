<div id="title-panel">
	<div id="title">
		<div id="title-left"></div>
		<div id="title-center">
			<h1>Liên hệ</h1>
		</div>
		<div id="title-right"></div>
	</div>
</div>
<div id="content-panel">
	<div id="current-map">
		<a href="<?php echo base_url();?>">Trang chủ</a>
		<a>:</a>
		<a>Liên hệ</a>
	</div>
	<hr/>
	<div id="thuvien-content">
		<div id="col_left">
			<?php $this->load->view('shop/left');?>
		</div>
		<div id="col_right" style=" background:url('<?php echo base_url();?>assets/unix/images/gioithieu-bg.png') no-repeat; min-height:500px">
			<style type="text/css">
				span{color:red}
				td{padding:5px 10px}
				.input-lienhe{width:300px}
			</style>
			<div style="width:750px;">
				<center style="margin-top:50px">
					<table style="font-size:12px" border-shading="30px">
						<tr>
							<td><span>*</span>Họ tên</td>
							<td><input class="input-lienhe" type="text"/></td>
						</tr>
						<tr>
							<td><span>*</span>Email</td>
							<td><input class="input-lienhe" type="text"/></td>
						</tr>
						<tr>
							<td><span>*</span>Tiêu đề</td>
							<td><input class="input-lienhe" type="text"/></td>
						</tr>
						<tr>
							<td><span>*</span>Nội dung</td>
							<td><input class="input-lienhe" type="text"/></td>
						</tr>
						<tr>
							<td colspan="2" align="center">
								<center><input id="submit" type="submit" value="Gửi" style="width:100px"/></center></td>
						</tr>
					</table>
				</center>
				<hr/>
				<div style="margin-left:185px">
					<h3 style="text-transform:uppercase">Liên hệ tại Hà Nội:</h3>
					<h4>Công ty cổ phần Unix</h4>
					<p>Địa chỉ:  Phòng 703A (Tháp A), Hà Thành Plaza 102 Thái Thịnh, Đống Đa, Hà Nội.</p>
					<p>Điện thoại: (04)-6276 4637.  Hotline:  0983 768 342</p>
					<p>Email:         <a style="color:#018bc5; text-decoration:none">unix.group.vn@gmail.com</a></p>
					<p>Website:    <a style="color:#018bc5; text-decoration:none">www.unix.vn</a></p>
				</div>
			</div>
		</div>
	</div>
</div>