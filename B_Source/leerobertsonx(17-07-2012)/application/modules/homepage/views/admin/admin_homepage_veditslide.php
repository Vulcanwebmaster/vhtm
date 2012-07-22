<?php foreach ($list as $row):?>
<form action="<?php echo base_url()?>homepage/admin/editSlide/<?php echo $row->id?>" method="post">
		<article class="module width_full">
			<header><h3>Add Slide</h3></header>
				<div class="module_content">
				
						<fieldset>
							<label>Title</label>
							<input type="text" name="title" value="<?php echo $row->title?>">
							
						</fieldset>
						<fieldset>
							<label>Description</label>
							<textarea name="description" rows="5" cols="100"><?php echo $row->descriptiontitle?></textarea>
							
						</fieldset>
						<fieldset>
							<label>Order</label>
							<input type="text" name="order" value="<?php echo $row->order?>">
						</fieldset>
						<fieldset>
							<label>Detail Tittle</label>
							<textarea rows="5" cols="100" name="detailtitle"><?php echo $row->detailtitle?></textarea>
						</fieldset>
						<fieldset>
							<label>Content</label>
							<textarea rows="5" cols="100" name="detaildescription"><?php echo $row->detaildescription?></textarea>
							
						</fieldset>
						
						<fieldset>
							<label>Image Slide</label>
							<?php echo $this->editor_library->filemanager('imageslide',$row->linkimage,'')?>
						</fieldset>
						<fieldset>
							<label>Link</label>
							<input type="text" name="link" value="<?php echo $row->link?>">
							
						</fieldset>
						<?php endforeach;?>
				<div class="clear"></div>
				</div>
			<footer>
				<div class="submit_link">
					
					<input type="submit" value="Update" class="alt_btn">
					
				</div>
			</footer>
		</article><!-- end of post new article -->
		</form>
		
	
				<div class="spacer"></div>

