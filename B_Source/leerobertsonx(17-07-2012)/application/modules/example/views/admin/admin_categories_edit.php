<article class="module width_full">
			<header><h3>Edit Why Us</h3></header>
				<div class="module_content">
				<?php foreach ($list as $row):?>
				<form action="<?php echo base_url()?>example/admin/editWhyUs/<?php echo $row->id;?>" method="post">
						<fieldset>
							<label>Title</label>
							<input type="text" name="title" value="<?php echo $row->title?>" >
						</fieldset>
						
						<fieldset>
							<label>Content</label>
							<textarea rows="10" cols="100" name="content"><?php echo $row->detail?></textarea>
						</fieldset>															
						<div class="clear"></div>
						<?php endforeach;?>
				</div>
			<footer>
				<div class="submit_link">
					
					<input type="submit" value="Update" class="alt_btn">
					
				</div>
		</footer>
		</form>
	
		</article><!-- end of post new article -->
	
