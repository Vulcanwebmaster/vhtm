	
		<?php 
			echo validation_errors('<div class="error">','</div>');
		?>	
		
<script type="text/javascript">
	$(function() {
		$( "#ngaythang" ).datepicker();
	});
</script>
		
<form method="post" action="<?php echo base_url();?>anh/admin/insert">	
	<article class="module width_3_quarter" style="width:95%;">
		<header><h3 class="tabs_involved"><?php echo $title;?></h3>
		
		</header>
		<div class="tab_container">
			
			<div id="tab1" class="tab_content">
				<fieldset>
					<label>Tên ảnh(Việt)</label>
					<input type="text" name="image_name" style="width:92%"/>
				</fieldset>
				<fieldset>
					<label>Tên ảnh(Anh)</label>
					<input type="text" name="image_namee" style="width:92%"/>
				</fieldset>
				<fieldset>
					<label>Album ảnh</label>
					<select name="image_album">
						<?php foreach ($listAlbums as $album)
						{?>
							<option value="<?php echo $album->album_id?>"><?php echo $album->album_name?></option>
						<?php }?>
					</select>
				</fieldset>
				<fieldset>
					<label>Ảnh </label>
					<?php echo $this->ckeditor->editor('image_file','',$config);?>
				</fieldset>
			</div>
			
			<footer style="float:left">
					<div class="submit_link">
						<input type="submit" name="submit" value="Thêm" class="alt_btn">
					</div>
			</footer>
		</div><!-- end of .tab_container -->
				</article><!-- end of content manager article -->	
</form>
		