	
		<?php 
			echo validation_errors('<div class="error">','</div>');
		?>	
		
<link rel="stylesheet" href="<?php echo base_url();?>assets/flash_game/datepicker/themes/base/jquery.ui.all.css">
<script src="<?php echo base_url();?>assets/flash_game/datepicker/jquery-1.8.0.js"></script>
<script src="<?php echo base_url();?>assets/flash_game/datepicker/ui/jquery.ui.core.js"></script>
<script src="<?php echo base_url();?>assets/flash_game/datepicker/ui/jquery.ui.widget.js"></script>
<script src="<?php echo base_url();?>assets/flash_game/datepicker/ui/jquery.ui.datepicker.js"></script>
<link rel="stylesheet" href="<?php echo base_url();?>assets/flash_game/datepicker/themes/base/demos.css">
<script type="text/javascript">
	$(function() {
		$( "#ngaythang" ).datepicker();
	});
</script>
		
<form method="post" action="<?php echo base_url();?>news/admin/edit/<?php echo $info->id;?>">	
	<article class="module width_3_quarter" style="width:95%;">
		<header><h3 class="tabs_involved"><?php echo $title;?></h3>
		
		</header>
		<div class="tab_container">
			
			<div id="tab1" class="tab_content">

				<fieldset>
					<label>Nom (Fr)</label>
					<input type="text" name="name" style="width:92%" value="<?php echo $info->name;?>"/>
				</fieldset>
				<fieldset>
					<label>Nom (En)</label>
					<input type="text" name="namee" style="width:92%" value="<?php echo $info->namee;?>"/>
				</fieldset>
				<fieldset>
					<label>Teneur (Fr)</label>
					<?php echo $this->ckeditor->editor('content',$info->content,$config);?>
				</fieldset>
				<fieldset>
					<label>Teneur (En)</label>
					<?php echo $this->ckeditor->editor('contente',$info->contente,$config);?>
				</fieldset>
			<!-- 	<fieldset>
					<label>Balise</label>
					<select name="courses_category">
						<option></option>
						<?php foreach ($list as $item)
						{
							if ($item->id==$info->courses_category)
							{?>
								<option value="<?php echo $item->id?>" selected="selected"><?php echo $item->cate_name;?></option>
							<?php }
							else {?>
								<option value="<?php echo $item->id?>"><?php echo $item->cate_name;?></option>
						<?php }}?>
					</select>
				</fieldset> -->
				<fieldset>
					<label>Images</label>
					<?php echo $this->ckeditor->editor('image',$info->image,$config);?>
				</fieldset>
				<fieldset>
					<label>date</label>
					<input type="text" name="create_date" id="ngaythang" value="<?php echo $info->create_date;?>"/>
				</fieldset>
				<fieldset>
					<label>auteur</label>
					<input type="text" name="author" value="<?php echo $info->author;?>"/>
				</fieldset>
			</div>
			
			<footer style="float:left">
					<div class="submit_link">
						<input type="submit" name="submit" value="mettre à jour" class="alt_btn">
					</div>
			</footer>
		</div><!-- end of .tab_container -->
				</article><!-- end of content manager article -->	
</form>
		