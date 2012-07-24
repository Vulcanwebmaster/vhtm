<article class="module width_full">
<header><h3>Edit Portfolio</h3></header>
<?php echo form_open("portfolio/admin/addPortFolio/")?>
		<div class="module_content">
			<fieldset style="width:100%">
				<label>Title</label>
				<input style="width:50%;" type="text" name="title" id="title" value="">
			</fieldset>
			<fieldset style="width:100%">
				<label>Name</label>
				<input style="width:50%;" type="text" name="name" id="name" value="">
			</fieldset>
			<fieldset style="width:100%"> <!-- to make two field float next to one another, adjust values accordingly -->
				<label>Category</label>
				<?php foreach ($categories as $ctg){?>
					<input style= "margin:0 10px" type="checkbox" name="category[]" id="category" value="<?php echo $ctg->id;?>"> <?php echo $ctg->name;?><br />
				<?php }?>
			
			</fieldset>
			<fieldset style="width:100%"> <!-- to make two field float next to one another, adjust values accordingly -->
				<label>Type</label>
					<select style="width:51.5%;" name="type" id="type">
					<?php 
					foreach ($types as $t):
						echo "<option value=\"".$t->id."\">".$t->name."</option>";
					endforeach;
					?>
					</select>
			
			</fieldset>
			<fieldset>
				<label>URL</label>
				<?php echo $this->editor_library->filemanager('url','','')?>
			</fieldset>
			<fieldset>
				<label>Image</label>
				<?php echo $this->editor_library->filemanager('image','','')?>
			</fieldset>
			<div class="clear"></div>
		</div>
	<footer>
		<div class="submit_link">
			<input type="submit" value="Insert" class="alt_btn">
		</div>
	</footer>
<?php echo form_close();?>
</article><!-- end of post new article -->
