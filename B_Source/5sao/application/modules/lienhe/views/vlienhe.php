<script type="text/javascript">
	$('#menu-lienhe').parent().addClass('currentmenu');
</script>

<style>
	td{font-size:12px; padding:5px 3px}
	td input,td textarea{width:100%}
</style>

<div id="center">
	<?php if (validation_errors())
	{
		echo '<div class="error-panel">';
		echo validation_errors('<p style="color:#f83d43">','</p>');
		echo '</div>';
	}?>
	<?php echo '<p style="color:#5d5d5d; margin:10px">'.$this->session->userdata('lienhe_result').'</p>';
		$this->session->unset_userdata('lienhe_result');
	?>
	
	<p style="font-weight:bold; font-size:13px; margin-top:30px; margin-left:20px; margin-bottom:15px">Xin hãy điền đầy đủ các thông tin dưới đây:</p>
	<form name="lienhe-form" action="<?php echo base_url();?>lienhe/send" method="post">
		<table style="width:300px">
			<tr>
				<td style="width: 30%">Họ tên</td>
				<td style="width:70%"><input name="hoten" type="text"/></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input name="email" type="text"/></td>
			</tr>
			<tr>
				<td>Điện thoại</td>
				<td><input name="dienthoai" type="text"/></td>
			</tr>
			<tr>
				<td>Tiêu đề</td>
				<td><input name="tieude" type="text"/></td>
			</tr>
			<tr>
				<td style="vertical-align:top">Nội dung</td>
				<td><textarea name="noidung" style="height:100px"></textarea></td>
			</tr>
			<tr>
				<td colspan="2" align="center">
					<center>
						<input name="submit" type="submit" value="Gửi" style="height:25px; width:70px; margin:auto ;text-align: center"/>
					</center>
				</td>
			</tr>
		</table>
	</form>
</div>