	<?php $lang=$this->session->userdata('lang');?>
	<h1 style="text-transform:capitalize"><?php if ($lang=='vn') echo $info->tieude;
		else echo $info->tieudee;
	?></h1>
	
	<?php echo $info->noidung;
	?>
	
	<fieldset>
		<legend>Trả lời</legend>
		<?php echo $info->traloi;
		?>
	</fieldset>	
