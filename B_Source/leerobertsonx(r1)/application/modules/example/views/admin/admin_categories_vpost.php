<article class="module width_full">
			<header><h3>Post Why Us</h3></header>
				<div class="module_content">
				
				<form action="<?php echo base_url()?>example/admin/postWhyUs" method="post">
						<fieldset>
							<label>Title</label>
							<input type="text" name="title" value="" >
						</fieldset>
						
						<fieldset>
							<label>Content</label>
							<?php echo $this->editor_library->editor('content','','')?>
						</fieldset>															
						<div class="clear"></div>
						
				</div>
			<footer>
				<div class="submit_link">
					
					<input type="submit" value="Post" class="alt_btn">
					
				</div>
		</footer>
		</form>
	
		</article><!-- end of post new article -->
	
