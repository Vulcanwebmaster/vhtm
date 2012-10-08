	
		<?php 
			echo validation_errors('<div class="error">','</div>');
		?>	
<form method="post" action="<?php echo base_url();?>danhmuc/admin/insert">	
	<article class="module width_3_quarter" style="width:95%;">
		<header><h3 class="tabs_involved"><?php echo $title;?></h3>
		
		</header>
		<div class="tab_container">
			<div id="tab1" class="tab_content">
				<fieldset>
					<label>Tên (Việt)</label>
					<input type="text" name="ten_v" style="width:92%"/>
				</fieldset>
				<fieldset>
					<label>Tên (Anh)</label>
					<input type="text" name="ten_e" style="width:92%"/>
				</fieldset>
				<fieldset>
					<label>Danh mục cha</label>
					<select name="parent_id">
						<option value="0">Không chọn</option>
						<?php foreach ($listParents as $category)
						{
							if ($category->id!=$info->id)
							{
							?>
								<option value="<?php echo $category->id;?>"><?php echo $category->ten_v;?></option>
							<?php }
							}?>
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
		