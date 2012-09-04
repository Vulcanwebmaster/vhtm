<?php if(isset($error)) echo $error;?>

<?php echo form_open_multipart('lichhoithao/upload');?>

<input type="file" name="userfile" size="20" />
<input type="submit" value="upload" />

<table border="1">
	<tr>
		<th>Sự kiện</th>
		<th>Thời gian</th>
		<th>Đại điểm</th>
		<th>Đơn vị tổ chức</th>
		<th>Tình trạng</th>
	</tr>
	<?php if(isset($query)){ 
				foreach ($query as $row){ ?>
				<tr>
					<td><?php  echo $row->sukien;?></td>
					<td><?php  echo $row->thoigian;?></td>
					<td><?php  echo $row->diadiem;?></td>
					<td><?php  echo $row->donvitochuc;?></td>
					<td><?php  echo $row->tinhtrang;?></td>
				</tr>
			<?php
			}
	}
			?>
	
	
</table>