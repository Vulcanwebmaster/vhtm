	
		<?php 
			echo validation_errors('<div class="error">','</div>');
		?>	
<form method="post" action="<?php echo base_url();?>games/admin/edit/<?php echo $info->id;?>">	
	<article class="module width_3_quarter" style="width:95%;">
		<header><h3 class="tabs_involved"><?php echo $title;?></h3>
		
		</header>
		<div class="tab_container">
			
			<div id="tab1" class="tab_content">
				<fieldset>
					<label>Tên games</label>
					<input type="text" name="name1" style="width:95%" value="<?php echo $info->name;?>"/>
				</fieldset>
				<fieldset>
					<label>Danh mục games</label>
					<select name="category_id">
						<option></option>
						<?php foreach ($list as $item)
						{
							if ($item->id==$info->category_id)
							{?>
								<option value="<?php echo $item->id?>" selected="selected"><?php echo $item->category_name;?></option>
							<?php }
							else {?>
								<option value="<?php echo $item->id?>"><?php echo $item->category_name;?></option>
						<?php }}?>
					</select>
				</fieldset>
				<fieldset>
					<label>Image </label>
					<?php echo $this->ckeditor->editor('image',$info->image,$config);?>
				</fieldset>
				<fieldset>
					<label>Rules </label>
					<?php echo $this->ckeditor->editor('rules',$info->rules,$config);?>
				</fieldset>
				
				<fieldset>
					<label>Overview </label>
					<?php echo $this->ckeditor->editor('overview',$info->overview,$config);?>
				</fieldset>
				
			</div>
			
			<footer style="float:left">
					<div class="submit_link">
						<input type="submit" name="submit" value="Cập nhật" class="alt_btn">
					</div>
			</footer>
		</div><!-- end of .tab_container -->
				</article><!-- end of content manager article -->	
</form>
		