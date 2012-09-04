<form method="post" action="<?php echo base_url();?>coso/admin/edit/<?php echo $coso->id; ?>">
<article class="module width_full" style="width:95%;">
	<header>
		<h3 class="tabs_involved"><?php echo $bcCurrent; ?></h3>
	</header>
	<div class="module_content">
			<span style="font-weight: bold;font-size: 14px;color:red">
			</span>
			<fieldset style="width:48%;">
				<label>Tên : </label>
				<input value="<?php echo $coso->ten; ?>" type="text" name="ten" style="width:92%;height:30px;font-weight: bold"/>
			</fieldset><div class="clear"></div>
			
		
			
			<fieldset style="width:48%;float:right;margin-top:-88px">
				<label>Tiêu đề: </label>
				<input value="<?php echo $coso->tieude; ?>" type="text" name="tieude" style="width:92%;height:30px;font-weight: bold"/>
			</fieldset><div class="clear"></div>
			
			<fieldset>
				<label>Nội dung : </label>
				<textarea name="noidung" id="content"><?php echo $coso->noidung;?></textarea>
					<?php echo display_ckeditor($ckeditor); ?>
			</fieldset><div class="clear"></div>
			
	</div>
			<footer>	
					<div class="submit_link">
						<input type="submit" name="submit" value="Update" class="alt_btn">
					</div>
			</footer>
</article>
</form>