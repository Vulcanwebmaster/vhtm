	
		<?php 
			echo validation_errors('<div class="error">','</div>');
		?>	
<form method="post" action="<?php echo base_url();?>danhmuc/admin/edit/<?php echo $info->id;?>">	
	<article class="module width_3_quarter" style="width:95%;">
		<header><h3 class="tabs_involved"><?php echo $title;?></h3>
		</header>
		<div class="tab_container">
			<div id="tab1" class="tab_content">
				<fieldset>
					<label>Tên danh mục (Việt)</label>
					<input type="text" name="namev" style="width:92%" value="<?php echo $info->namev;?>"/>
				</fieldset>
				<fieldset>
					<label>Tên danh mục (Anh)</label>
					<input type="text" name="namee" style="width:92%" value="<?php echo $info->namee;?>"/>
				</fieldset>
				<fieldset>
					<label>Danh mục cha</label>
					<select name="parent_id">
						<option></option>
						<?php foreach ($list as $item)
						{
							if ($item->id==$info->parent_id)
							{?>
								<option value="<?php echo $item->id?>" selected="selected"><?php echo $item->namev;?></option>
							<?php }
							else {?>
								<option value="<?php echo $item->id?>"><?php echo $item->namev;?></option>
						<?php }}?>
					</select>
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
		