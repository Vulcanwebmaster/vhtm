
<?php echo $this->editor_library->init_editor()?>
<article class="module width_full">
<header><h3>Edit Portfolio</h3></header>
<?php foreach ($portfolio as $rw):?>
<?php echo form_open("portfolio/admin/updatePortFolio/".$rw->id)?>
		<div class="module_content">
			<fieldset style="width:100%">
				<label>Title</label>
				<input style="width:50%;" type="text" name="title" id="title" value="<?php echo $rw->title?>">
			</fieldset>
			<fieldset style="width:100%">
				<label>Name</label>
				<input style="width:50%;" type="text" name="name" id="name" value="<?php echo $rw->name?>">
			</fieldset>
			<fieldset style="width:100%"> <!-- to make two field float next to one another, adjust values accordingly -->
				<label>Category</label>
				<?php 
				foreach ($categories as $ctg){
				if (in_array($ctg->id,$ctg_portfolio)){?>
					<input style= "margin:0 10px" type="checkbox" name="category[]" id="category" checked="checked" value="<?php echo $ctg->id;?>"> <?php echo $ctg->name;?><br /> 
				<?php }else {?> 
					<input style= "margin:0 10px" type="checkbox" name="category[]" id="category" value="<?php echo $ctg->id;?>"> <?php echo $ctg->name;?><br />
				<?php }}?>
			
			</fieldset>
			<fieldset style="width:100%"> <!-- to make two field float next to one another, adjust values accordingly -->
				<label>Type</label>
					<select style="width:51.5%;" name="type" id="type">
					<?php 
					foreach ($types as $t):
							if ($t->id == $rw->type)
							{
								echo "<option selected=\"selected\" value=\"".$t->id."\">".$t->name."</option>";
							}
							else{
								echo "<option value=\"".$t->id."\">".$t->name."</option>";
							}
					endforeach;
					?>
					</select>
			
			</fieldset>
			<fieldset>
				<label>URL</label>
				<?php echo $this->editor_library->filemanager('url','','')?>
				<label style= "margin-top:20px">Current URL</label>
				<?php if ($rw->type == 1){?>
				<center><img style= "margin-top:20px" src="<?php echo base_url().$rw->url?>" height="auto" width="auto" /></center>
				<?php } else {?>
					<?php echo $rw->url;?> 
				<?php }?>
			</fieldset>
			<fieldset>
				<label>Image</label>
				<?php echo $this->editor_library->filemanager('image','','')?>
				<label style= "margin-top:20px">Current Image</label>
				<center><img style= "margin-top:20px" src="<?php echo base_url().$rw->image?>" height="auto" width="auto" /></center>				
			</fieldset>
			<div class="clear"></div>
		</div>
	<footer>
		<div class="submit_link">
		<input type="submit" value="Update" class="alt_btn">
		</div>
	</footer>
<?php endforeach;?>
<?php echo form_close();?>
</article><!-- end of post new article -->
