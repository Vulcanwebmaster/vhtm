<article class="module width_full">

	<header><h3>Edit Article</h3></header>
<?php foreach ($article as $rw):?>
<?php echo form_open("website/admin/updateArticle/".$rw->id)?>
		<div class="module_content">
			<fieldset style="width:100%">
				<label>Article Title</label>
				<input style="width:50%;" type="text" name="title" id="title" value="<?php echo $rw->title?>">
			</fieldset>
			<fieldset style="width:100%"> <!-- to make two field float next to one another, adjust values accordingly -->
			
				<label>Category</label>
					<select style="width:51.5%;" name="category" id="category">
				<?php 
				foreach ($categories as $ctg):
						if ($ctg->id == $rw->category)
						{
							echo "<option selected=\"selected\" value=\"".$ctg->id."\">".$ctg->name."</option>";
						}
						else
							echo "<option value=\"".$ctg->id."\">".$ctg->name."</option>";
				endforeach;
				?>
					</select>
			
			</fieldset>
			<fieldset>
				<label>Content</label>
				<?php echo $this->editor_library->editor('content',$rw->content,'')?>
			</fieldset>
		</div>
	<footer>
		<div class="submit_link">
		<input type="submit" value="Update" class="alt_btn">
		</div>
	</footer>
<?php endforeach;?>
<?php echo form_close();?>
</article><!-- end of post new article -->