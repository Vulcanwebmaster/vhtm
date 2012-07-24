<?php
	$this->load->helper('date');
?>
<form action="<?php echo base_url()?>aboutus/admin/saveAbout" method="post">
		<article class="module width_full">
			<header><h3>Post About Us</h3></header>
				<div class="module_content">
				
						<fieldset>
							<label>Title</label>
							<input type="text" name="title" value="" >
						</fieldset>
						
						<fieldset>
							<label>Content</label>
							<?php echo $this->editor_library->editor('content','','')?>
							
						</fieldset>
						
						
						<fieldset style="width:46%; float:left; "> <!-- to make two field float next to one another, adjust values accordingly -->
							<label>Now Date</label>
							<input type="text" name="nowdate" style="width:92%;" value="<?php echo mdate('%Y-%m-%d %H:%i:%s',time())?>">
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

