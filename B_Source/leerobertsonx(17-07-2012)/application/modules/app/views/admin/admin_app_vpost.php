<form action="admin/savePostApp" method="post">
		<article class="module width_full">
			<header><h3>Add New Article</h3></header>
				<div class="module_content">
						<fieldset>
							<label>Title</label>
							<input type="text" name="title">
							
						</fieldset>
						<fieldset>
							<label>Short Content</label>
							<textarea name="shortcontent" rows="5" cols="100"></textarea>
							
						</fieldset>
						<fieldset>
							<label>Content</label>
						
							<?php echo $this->editor_library->editor('content','','')?>
							
							
						</fieldset>
						
						<fieldset style="width:46%; float:left; "> <!-- to make two field float next to one another, adjust values accordingly -->
							<label>Order</label>
							<input type="text" name="order" style="width:92%;">
							
						</fieldset>
						
						</fieldset><div class="clear"></div>
				</div>
			<footer>
				<div class="submit_link">
					
					<input type="submit" value="Post" class="alt_btn">
					
				</div>
			</footer>
		</article><!-- end of post new article -->
		</form>
		
	
				<div class="spacer"></div>
