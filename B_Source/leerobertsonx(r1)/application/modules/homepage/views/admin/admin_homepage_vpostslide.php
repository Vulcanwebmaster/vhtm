<form action="<?php echo base_url()?>homepage/admin/savePostSlide" method="post">
		<article class="module width_full">
			<header><h3>Add Slide</h3></header>
				<div class="module_content">
						<fieldset>
							<label>Title</label>
							<input type="text" name="title">
							
						</fieldset>
						<fieldset>
							<label>Description</label>
							<textarea name="description" rows="5" cols="100"></textarea>
							
						</fieldset>
						<fieldset>
							<label>Order</label>
							<input type="text" name="order">
						</fieldset>
						<fieldset>
							<label>Detail Tittle</label>
							<textarea rows="5" cols="100" name="detailtitle"></textarea>
						</fieldset>
						<fieldset>
							<label>Content</label>
							<textarea rows="5" cols="100" name="detaildescription"></textarea>
						</fieldset>
						
						<fieldset>
							<label>Image Slide</label>
							<?php echo $this->editor_library->filemanager('imageslide','','')?>
						</fieldset>
						
						<fieldset>
							<label>Link</label>
							<input type="text" name="link">
							
						</fieldset>
						
				<div class="clear"></div>
				</div>
			<footer>
				<div class="submit_link">
					
					<input type="submit" value="Post" class="alt_btn">
					
				</div>
			</footer>
		</article><!-- end of post new article -->
		</form>
		
	
				<div class="spacer"></div>
