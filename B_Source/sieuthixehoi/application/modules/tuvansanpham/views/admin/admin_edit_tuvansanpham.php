	
		<?php 
			echo validation_errors('<div class="error">','</div>');
		?>	
<form method="post" action="<?php echo base_url();?>tuvansanpham/admin/edit/<?php echo $info->id;?>">	
	<article class="module width_3_quarter" style="width:95%;">
		<header><h3 class="tabs_involved"><?php echo $title;?></h3>
		
		</header>
		<div class="tab_container">
			
			<div id="tab1" class="tab_content">
				<fieldset>
					<label>Menu tiêu đề</label>
					<input type="text" name="sub_menu_title" style="width:92%" value="<?php echo $info->sub_menu_title;?>"/>
				</fieldset>
				<fieldset>
					<label>Tiêu đề</label>
					<input type="text" name="title" style="width:92%" value="<?php echo $info->title;?>"/>
				</fieldset>
				<fieldset>
					<label>Danh mục cha</label>
					<select name="parent_id">
						<option value="0">Tư vấn nội thất</option>
						<option value="1">Tư vấn mua xe</option>
					</select>
				</fieldset>
				<fieldset>
					<label>Nội dung</label>
					<?php echo $this->ckeditor->editor('content',$info->content,$config);?>
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
		