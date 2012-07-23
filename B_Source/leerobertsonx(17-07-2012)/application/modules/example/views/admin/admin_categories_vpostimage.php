<article class="module width_full">
			<header><h3>Select Image Slide</h3></header>
				<div class="module_content">
				<form action="<?php echo base_url()?>example/admin/postImage" method="post">
						<fieldset>
							<label>Select Image</label>
							<?php echo $this->editor_library->filemanager('content','','')?>					
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
