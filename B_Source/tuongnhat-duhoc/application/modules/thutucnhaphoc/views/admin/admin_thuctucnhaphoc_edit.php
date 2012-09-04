<form method="post" action="<?php echo base_url();?>thutucnhaphoc/admin/edit/<?php echo $thutuc->id; ?>">
<article class="module width_full" style="width:95%;">
	<header>
		<h3 class="tabs_involved"><?php echo $bcCurrent; ?></h3>
	</header>
	<div class="module_content">
			<span style="font-weight: bold;font-size: 14px;color:red">
			</span>
			
			<fieldset style="width:48%;float:left">
				<label>Tiêu đề: </label>
				<input value="<?php echo $thutuc->tieude; ?>" type="text" name="tieude" style="width:92%;height:30px;font-weight: bold"/>
			</fieldset><div class="clear"></div>
			
			<fieldset>
				<label>Tiếng Việt : </label>
				<textarea name="vietnam" id="content_1"><?php echo $thutuc->vietnam;?></textarea>
					<?php echo display_ckeditor($ckeditor_1); ?>
			</fieldset><div class="clear"></div>
			
			<fieldset>
				<label>Tiếng Anh : </label>
				<textarea name="english" id="content_2"><?php echo $thutuc->english;?></textarea>
					<?php echo display_ckeditor($ckeditor_2); ?>
			</fieldset><div class="clear"></div>
			
	</div>
			<footer>	
					<div class="submit_link">
						<input type="submit" name="submit" value="Update" class="alt_btn">
					</div>
			</footer>
</article>
</form>