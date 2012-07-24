
		<article class="module width_full">
			<header><h3>Edit Article</h3></header>
				<div class="module_content">
				<?php foreach ($list as $row):?>
<form action="<?php echo base_url()?>app/admin/editApp/<?php echo $row->id?>" method="post">
						<fieldset>
							<label>Title</label>
							<input type="text" name="title" value="<?php echo $row->title?>" >
						</fieldset>
						<fieldset>
							<label>Short Content</label>
							<textarea name="shortcontent" rows="5" cols="100"><?php echo $row->shortcontent?></textarea>
						</fieldset>
						<fieldset>
							<label>Content</label>
							
							
							<?php echo $this->editor_library->editor('content',"$row->content",'')?>
							
						</fieldset>
						
						
						<fieldset style="width:46%; float:left; "> <!-- to make two field float next to one another, adjust values accordingly -->
							<label>Order</label>
							<input type="text" name="order" style="width:92%;" value="<?php echo $row->order?>">
						</fieldset>
						
						</fieldset><div class="clear"></div>
						<?php endforeach;?>
				</div>
			<footer>
				<div class="submit_link">
					
					<input type="submit" value="Update" class="alt_btn">
					
				</div>
			</footer>
		</article><!-- end of post new article -->
		</form>
