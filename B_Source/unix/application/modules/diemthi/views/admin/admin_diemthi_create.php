<h2><?php echo $title;?></h2>
<style type="text/css">
	.table1
	{
		text-align:center;
	}
</style>
<div class="buttons">
	<a href="<?php print  site_url('diemthi/admin')?>">
    <?php print $this->bep_assets->icon('add');?>
    <?php print "Xem điểm thi"; ?>
    </a>
</div>
<div class="clearboth">&nbsp;</div>


<div style="padding:20px">
	<?php echo form_open_multipart('diemthi/admin/upload');?>
	<div style="float:left">(*) Nhập đợt thi : &nbsp; <input type="text" style="width:200px;padding-left:10px" name="dot"/></div>
	<input type="file" name="userfile" size="20" />
	<input type="submit" value="upload" />
</div>

<?php if(isset($diemthi))
{
	?>
<table border="1" id="tablesorter" class="tablesorter" width="100%">
	<tr>
		<th class='table1'>Học sinh</th>
		<th class='table1'>Phụ huynh</th>
		<th class='table1'>Lớp Unix</th>
		<th class='table1'>Điểm thi</th>
	</tr>
	<?php
		foreach ($diemthi as $diem){ ?>
				<tr>
					<td class='table1'><?php echo $diem->hocsinh; ?></td>
					<td class='table1'><?php echo $diem->phuhuynh; ?></td>
					<td class='table1'><?php echo $diem->lop; ?></td>
					<td class='table1'><?php echo $diem->diemthi; ?></td>
				</tr>
			<?php
			}
		}
			?>

</table>