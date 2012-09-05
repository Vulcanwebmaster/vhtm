<center>
	<div style="font-size:12px; padding:50px 0">
		<?php if (validation_errors())
		{	
			echo validation_errors('<p>','</p>');	
		}?>
			<p><?php if (isset($result)) echo $result;?></p>
			<p>Trở về <a href="<?php echo base_url();?>">trang chủ</a><p>
	</div>
</center>