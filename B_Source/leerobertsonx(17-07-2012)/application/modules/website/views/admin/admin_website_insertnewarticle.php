<article class="module width_full">
<?php echo form_open("website/admin/addArticle/".$this->uri->segment(4))?>
	<header><h3>Post New Article</h3></header>
		<div class="module_content">
			<fieldset style="width:100%">
				<label>Article Title</label>
				<input style="width:50%;" type="text" name="title" id="title">
			</fieldset>
			<fieldset style="width:100%"> <!-- to make two field float next to one another, adjust values accordingly -->
			
				<label>Category</label>
					<select style="width:51.5%;" name="category" id="category">
				<?php foreach ($categories as $ctg):?>
				<?php 
					if(isset($id_category))
					{
						if ($ctg->id == $id_category)
						{
							echo "<option selected=\"selected\" value=\"".$ctg->id."\">".$ctg->name."</option>";
						}
						else
							echo "<option value=\"".$ctg->id."\">".$ctg->name."</option>";
					}
					else 
						echo "<option>".$ctg->name."</option>";
				?>
						
				<?php endforeach;?>
					</select>
			
			</fieldset>
			<fieldset>
				<label>Content</label>
				<?php echo $this->editor_library->editor('content','','')?>
			</fieldset>
		</div>
	<footer>
		<div class="submit_link">
		<input type="submit" value="Publish" class="alt_btn">
		</div>
	</footer>
<?php echo form_close();?>
</article><!-- end of post new article -->