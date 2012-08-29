<form method="post" action="<?php echo base_url();?>gioithieu/admin/edit/<?php echo $gioithieu->id; ?>">	
	<article class="module width_3_quarter" style="width:95%;">
		<header><h3 class="tabs_involved">Sửa thông tin giới thiệu</h3>
		
		</header>
		<div class="module_content">
		
				<fieldset style="width:100%"> 
					<label>Nội dung : </label>
					<textarea name="noidung" id="content" ><?php echo $gioithieu->noidung?></textarea>
					<?php echo display_ckeditor($ckeditor); ?>
				</fieldset><div class="clear"></div>
							
		</div>
		
			
			<footer style="float:left">
					
					<div class="submit_link">
						<input type="submit" name="submit" value="Update" class="alt_btn">
					</div>
			</footer>

				</article><!-- end of content manager article -->	
</form>