<form action="<?php echo base_url()?>lastestproject/admin/savePostLogo" method="post">
		<article class="module width_full">
			<header><h3>Add Logo</h3></header>
				<div class="module_content">
						<fieldset>
							<label>Title</label>
							<input type="text" name="title">
							
						</fieldset>
						
						<fieldset>
							<label>Image Logo</label>
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

