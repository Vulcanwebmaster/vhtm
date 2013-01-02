<script type="text/javascript">
	$(document).ready(function() {
		//current menu item
		$('#banggia').addClass('current');
	});
</script>

<div id="mash">
	<?php $this->load->view('shop/dangky');?>
</div>
<div id="slogan-panel">
	<div id="slogan-left">
		<p style="margin:10px">Với NIW Shopping Cart, bán hàng online trở nên dễ dàng hơn bao giờ hết.<span id="demo-command" style="color:#3c3c3c; padding-left:80px;">Hãy dùng thử ngay và cảm nhận <span>&#8594</span></span></p>
	</div>
	<div id="slogan-right" style="float:right">
		<fieldset style="padding:10px;width:100px;text-align:center; background:url('<?php echo base_url();?>assets/webbanhang/images/demo-bg.png') no-repeat">
			<h4><a id="dungthu" style="color:white">Dùng thử</a></h4>
		</fieldset>
	</div>
</div>
<hr id="line1"/>
<div id="main-fream">
<div id="banggia-right" style="margin-top:20px">
	<table>
		<tr>
			<th class="table-head">Gói chuyên nghiệp</th>
			<th class="table-head">Gói cơ bản</th>
		</tr>
		<tr>
			<td><strong>Giá:</strong> 5.000.000 trọn gói</td>
			<td><strong>Giá:</strong> 3.000.000 trọn gói</td>
		</tr>
	 	<tr>
	 		<td><strong>Số sản phẩm trong gian hàng:</strong> Không giới hạn</td>
	 		<td><strong>Số sản phẩm trong gian hàng:</strong> Không giới hạn</td>
	 	</tr>
	 	<tr>
	 		<td>Miễn phí đăng ký tên miền.</td>
	 		<td>Miễn phí đăng ký tên miền</td>
	 	</tr>
		<tr>
			<td>Miễn phí một năm duy trì tên miền</td>
			<td>Miễn phí một năm duy trì tên miền</td>	
		</tr>
		<tr>
			<td>Miễn phí hosting một năm</td>
			<td>Miễn phí hosting một năm</td>	
		</tr>
		<tr>
			<td><strong>Dung lượng:</strong> 10GB</td>
			<td><strong>Dung lượng:</strong> 500MB</td>	
		</tr>
		<tr>
			<td><strong>Băng thông:</strong> không giới hạn</td>
			<td><strong>Băng thông:</strong> 1GB</td>	
		</tr>
		<tr>
			<td>10 email@tenmien</td>
			<td>10 email@tenmien</td>	
		</tr>
		<tr>
			<td><strong>Email markerting:</strong> không giới hạn</td>
			<td><strong>Email markerting:</strong> 1000 email/ một tháng</td>	
		</tr>
	</table>
</div>
<?php $this->load->view('shop/right');?>
</div>