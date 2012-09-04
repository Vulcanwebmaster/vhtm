<h2><?php echo $title;?></h2>
<link type="text/css" href="<?php echo base_url();?>assets/css/ui-lightness/jquery-ui-1.8.20.custom.css" rel="stylesheet" />
<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-ui-1.8.20.custom.min.js"></script>
<div class="buttons">
	<a href="http://localhost/unix/index.php/danhmuc/admin/create">
    <img src="http://localhost/unix/assets/icons/add.png" alt="add">    Tạo danh mục mới    </a>
</div>
<form action="<?php echo base_url()?>index.php/danhmuc/admin/update" method="post">
<table id="preference_form">
<?php
	foreach($danhmuc as $dm)
	{
		?>
		<tr>
			<td class="label"><label>(*) Danh mục <?php echo $dm->id; ?> : </label></td>
			<td><input type="text" name="danhmuc_<?php echo $dm->id; ?>" class="text" value="<?php echo $dm->ten; ?>"/></td>
		</tr>
		<?php
	}
?>

</table>

<input name = "mota_backup" id = "mota_backup" type = "hidden"/>
<div class="buttons">
	<button type="submit" class="positive" name="submit" value="submit">
    <?php print $this->bep_assets->icon('disk');?>
    <?php print $this->lang->line('general_save');?>
	</button>
	
    <a href="<?php echo base_url()?>index.php/admin" class="negative">
    <?php print $this->bep_assets->icon('cross');?>
    <?php print $this->lang->line('general_cancel');?>
    </a>
</div>
</form>