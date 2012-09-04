<h2><?php echo $title;?></h2>
<style type="text/css">
	.table1
	{
		text-align:center;
	}
</style>
<div style="padding:20px">
	<?php echo form_open_multipart('lichhoc/admin/upload');?>
	
	<input type="file" name="userfile" size="20" />
	<input type="submit" value="upload" />
</div>

<?php if(isset($query)){?>
<table border="1" id="tablesorter" class="tablesorter" width="100%">
	<tr>
		<th class='table1'>Khóa</th>
		<th class='table1'>Thời gian</th>
		<th class='table1'>Địa điểm</th>
		<th class='table1'>Giảng viên</th>
	</tr>
	<?php
		foreach ($query as $row){ ?>
				<tr>
					<td class='table1'><?php echo $row->khoa; ?></td>
					<td class='table1'><?php echo $row->thoigian; ?></td>
					<td class='table1'><?php echo $row->diadiem; ?></td>
					<td class='table1'><?php echo $row->giangvien; ?></td>
				</tr>
			<?php
			}
		}
			?>
</table>
