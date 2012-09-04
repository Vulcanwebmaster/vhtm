<h2><?php echo $title;?></h2>
<style type="text/css">
	.table1
	{
		text-align:center;
	}
</style>
<div style="padding:20px">
	<?php echo form_open_multipart('lichhoithao/admin/upload');?>
	
	<input type="file" name="userfile" size="20" />
	<input type="submit" value="upload" />
</div>
<table border="1" id="tablesorter" class="tablesorter" width="100%">
	<tr>
		<th class='table1'>Sự kiện</th>
		<th class='table1'>Thời gian</th>
		<th class='table1'>Đại điểm</th>
		<th class='table1'>Đơn vị tổ chức</th>
		<th class='table1'>Tình trạng</th>
	</tr>
	<?php if(isset($query)){ 
				foreach ($query as $row){ ?>
				<tr>
					<td class='table1'><?php echo $row->sukien; ?></td>
					<td class='table1'><?php echo $row->thoigian; ?></td>
					<td class='table1'><?php echo $row->diadiem; ?></td>
					<td class='table1'><?php echo $row->donvitochuc; ?></td>
					<td class='table1'><?php echo $row->tinhtrang; ?></td>
				</tr>
			<?php
			}
	}
			?>
	
	
</table>