	
		<?php 
			echo validation_errors('<div class="error">','</div>');
		?>	
<form method="post" action="<?php echo base_url();?>danhmuc/admin/edit/<?php echo $info->category_id;?>">	
	<article class="module width_3_quarter" style="width:95%;">
		<header><h3 class="tabs_involved"><?php echo $title;?></h3>
		</header>
		<div class="tab_container">
			<div id="tab1" class="tab_content">
				<fieldset>
					<label>Tên danh mục </label>
					<input type="text" name="category_name" style="width:92%" value="<?php echo $info->category_name;?>"/>
				</fieldset>
				<fieldset>
					<label>Kích hoạt </label>
					
					<select name="is_active">
								<option value="0" selected="selected">Chưa kích hoạt</option>
								<option value="1">Đã kích hoạt</option>
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
		