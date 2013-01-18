	
		<?php 
			echo validation_errors('<div class="error">','</div>');
		?>	
		
<form method="post" action="<?php echo base_url();?>anh/admin/edit/<?php echo $info->image_id;?>">	
	<article class="module width_3_quarter" style="width:95%;">
		<header><h3 class="tabs_involved"><?php echo $title;?></h3>
		
		</header>
		<div class="tab_container">
			
			<div id="tab1" class="tab_content">
				
				<fieldset>
					<label>Tên ảnh(Việt) </label>
					<input type="text" name="image_name" style="width:92%" value="<?php echo $info->image_name;?>"/>
				</fieldset>
				<fieldset>
					<label>Tên ảnh(Anh) </label>
					<input type="text" name="image_namee" style="width:92%" value="<?php echo $info->image_namee;?>"/>
				</fieldset>
				<fieldset>
					<label>Album ảnh</label>
					<select name="image_album">
						<?php foreach ($listAlbums as $album)
						{?>
							<option <?php if ($album->album_id == $info->image_album) {
									?> selected="selected" <?php }?> value="<?php echo $album->album_id?>"><?php echo $album->album_name?></option>
						<?php }?>
					</select>
				</fieldset>
				<fieldset>
					<label>Ảnh </label>
					<?php echo $this->ckeditor->editor('image_file',$info->image_file,$config);?>
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
		