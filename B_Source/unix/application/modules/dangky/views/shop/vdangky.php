<div style="width:1000px; margin:auto; text-align:center; padding:15px 0">
	<?php 
	if (validation_errors())
	{
		echo '<div style="background-color:#ffebe8; border:solid 1px #dd3c10; padding:10px">';
		echo validation_errors('<p class="error" style="font-size:11px; color:#333; margin:0">', '</p>');
		echo '</div>';
	}
	if($this->session->userdata('success'))
	{
		?>
		<center>
		<div style="width:200px; border:solid 1px #dd3c10; padding:10px">
			<p class="error" style="font-size:11px; color:blue; margin:0"><?php echo $this->session->userdata('success');?></p>
		</div>
		</center>
		<?php
	}
	if($this->session->userdata('fail'))
	{
		?>
			<center style="background-color:#ffebe8; border:solid 1px #dd3c10; padding:10px">
				<p class="error" style="font-size:11px; color:#333; margin:0"><?php echo $this->session->userdata('fail');?></p>
			</center>
		<?php
	}
	?>
	<center>
	<h3 style="text-align:center">Đăng ký miễn phí lớp học</h3>
	<h2>BỨT PHÁ MÔN TOÁN TRƯỜNG HN AMS</h2>
	
		<form method="post" action="<?php echo base_url();?>index.php/dangky/dangkymoi">
			<table>
						<tr>
							<td style="width:150px">Họ tên</td>
							<td><input name="hoten" type="text"/></td>
						</tr>
						<tr><td style="height:10px"></td></tr>
						<tr>
							<td>Trường học</td>
							<td><input name="truonghoc" type="text"/></td>
						</tr>
						<tr><td style="height:10px"></td></tr>
						<tr>
							<td>Lớp</td>
							<td><input name="lop" type="text"/></td>
						</tr>
						<tr><td style="height:10px"></td></tr>
						<tr>
							<td>Phụ huynh</td>
							<td><input name="phuhuynh" type="text"/></td>
						</tr>
						<tr><td style="height:10px"></td></tr>
						<tr>
							<td>Điện thoại liên lạc</td>
							<td><input name="dienthoai" type="text"/></td>
						</tr>
						<tr><td style="height:10px"></td></tr>
						<tr>
							<td>Chọn lịch kiểm tra</td>
							<td>
							<select name="ten" style="width:152px">
								<?php 
									$lichtest=$this->MKaimonokago->get_lichtest();
									foreach($lichtest as $test)
									{
								?>
								<option value="<?php echo $test->ten;?>"><?php echo $test->ten; ?></option>
								<?php }?>
							</select>
							</td>
						</tr>
						<tr><td style="height:10px"></td></tr>
						<tr>
							<td colspan="2" style="text-align:center">
								<input type="submit" value="Đăng ký" name="submit"/>
							</td>
						</tr>
					</table>
		</form>
	</center>
</div>