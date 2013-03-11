	
		<?php 
			echo validation_errors('<div class="error">','</div>');
		?>	
		
<form method="post" action="<?php echo base_url();?>album/admin/edit/<?php echo $info->album_id;?>">	
	<article class="module width_3_quarter" style="width:95%;">
		<header><h3 class="tabs_involved"><?php echo $title;?></h3>
		
		</header>
		<div class="tab_container">
			
			<div id="tab1" class="tab_content">
				
				<fieldset>
					<label>Tên album(Việt) </label>
					<input type="text" name="album_name" style="width:92%" value="<?php echo $info->album_name;?>"/>
				</fieldset>
				<fieldset>
					<label>Tên album (Anh)</label>
					<input type="text" name="album_namee" style="width:92%" value="<?php echo $info->album_namee;?>"/>
				</fieldset>
				<fieldset>
					<label>Danh mục</label>
					<select name="category_id" id="category_id">
						<?php foreach ($list_Danhmuc_anh as $album)
						{?>
							<option <?php if ($album->id == $info->category_id) {
									?> selected="selected" <?php }?> value="<?php echo $album->id?>"><?php echo $album->category_name?></option>
						<?php }?>
					</select>
				</fieldset>
				<fieldset>
					<label>Ảnh đại diện</label>
					<?php echo $this->ckeditor->editor('album_avatar',$info->album_avatar,$config);?>
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
		