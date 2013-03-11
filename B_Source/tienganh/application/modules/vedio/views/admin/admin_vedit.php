	
		<?php 
			echo validation_errors('<div class="error">','</div>');
		?>	
		
<script type="text/javascript">
	$(function() {
		$( "#ngaythang" ).datepicker();
	});
</script>
		
<form method="post" action="<?php echo base_url();?>vedio/admin/edit/<?php echo $info->vedio_id;?>">	
	<article class="module width_3_quarter" style="width:95%;">
		<header><h3 class="tabs_involved"><?php echo $title;?></h3>
		
		</header>
		<div class="tab_container">
			
			<div id="tab1" class="tab_content">
				
				<fieldset>
					<label>Tiêu đề(Việt) </label>
					<input type="text" name="vedio_title" style="width:92%" value="<?php echo $info->vedio_title;?>"/>
				</fieldset>
				<fieldset>
					<label>Tiêu đề(Anh) </label>
					<input type="text" name="vedio_titlee" style="width:92%" value="<?php echo $info->vedio_titlee;?>"/>
				</fieldset>
				<fieldset>
					<label>Link</label>
					<input type="text" name="link_vedio" style="width:92%" value="<?php echo $info->link_vedio;?>"/>
				</fieldset>
				<fieldset>
					<label>Danh mục Video</label>
					<select name="category_id" id="category_id">
						<?php foreach ($list_Danhmuc_video as $album)
						{?>
							<option <?php if ($album->id == $info->category_id) {
									?> selected="selected" <?php }?> value="<?php echo $album->id?>"><?php echo $album->category_name?></option>
						<?php }?>
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
		