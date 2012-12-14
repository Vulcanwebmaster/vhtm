	
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
					<label>Tên album </label>
					<input type="text" name="album_name" style="width:92%" value="<?php echo $info->album_name;?>"/>
				</fieldset>
				<fieldset>
					<label>Danh mục</label>
					<select name="category_id" id="category_id">
						<option value="0" <?php if ($info->category_id == '0') echo "selected='selected'"?>>Hình ảnh trung tâm</option>
						<option value="1" <?php if ($info->category_id == '1') echo "selected='selected'"?>>Hình ảnh khóa học</option>
						<option value="2" <?php if ($info->category_id == '2') echo "selected='selected'"?>>Hình ảnh sự kiện</option>
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
		