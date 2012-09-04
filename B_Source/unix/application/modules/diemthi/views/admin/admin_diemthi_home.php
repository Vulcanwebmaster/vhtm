<h2><?php echo $title;?></h2>
<style type="text/css">
	.table1
	{
		text-align:center;
	}
</style>
<div class="buttons">
	<a href="<?php print site_url('diemthi/admin/create')?>">
    <?php print $this->bep_assets->icon('add');?>
    <?php print "Nhập điểm thi"; ?>
    </a>
</div>
<div class="clearboth">&nbsp;</div>

<form method="post" action="<?php echo base_url()?>index.php/diemthi/admin/index">
<div style="padding:20px">
	<span>(*) Chọn đợt thi : </span>
	<select name="dot" >
		<?php foreach($dotthi as $dot):?>
			<option value="<?php echo $dot->dotthi;?>"><?php echo $dot->dotthi;?></option>
			<?php endforeach?>
	</select>
	<input type="submit" name="submit" value="Hiển thị"/>
</form>
</div>



<?php if(isset($diemthi))
{
	?>
<table border="1" id="tablesorter" class="tablesorter" width="100%">
	<caption class="table1 cap"><h2><?php echo $this->session->userdata('bangdiem');?></h2></caption>
	<tr>
		<th class='table1'>STT</th>
		<th class='table1'>Học sinh</th>
		<th class='table1'>Phụ huynh</th>
		<th class='table1'>Lớp Unix</th>
		<th class='table1'>Điểm thi</th>
	</tr>
	<?php
		foreach ($diemthi as $diem){ ?>
				<tr>
					<td class='table1'><?php echo $diem->stt; ?></td>
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
