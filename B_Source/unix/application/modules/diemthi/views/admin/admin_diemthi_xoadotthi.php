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
<div class="buttons">
	<a href="<?php print  site_url('diemthi/admin')?>">
    <?php print $this->bep_assets->icon('add');?>
    <?php print "Xem điểm thi"; ?>
    </a>
</div>

<div class="clearboth">&nbsp;</div>

<form method="post" action="<?php echo base_url()?>index.php/diemthi/admin/del">
	<div style="padding:20px">
		<span>(*) Chọn đợt thi : </span>
		<select name="dot" >
			<?php foreach($dotthi as $dot):?>
				<option value="<?php echo $dot->id;?>"><?php echo $dot->dotthi;?></option>
				<?php endforeach?>
		</select>
		&nbsp;&nbsp;&nbsp;
		<input type="submit" name="submit" value="Xóa"/>
	</div>
</form>