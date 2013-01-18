	
		<?php 
			echo validation_errors('<div class="error">','</div>');
		?>	
		
<script type="text/javascript">
	$(function() {
		$( "#ngaythang" ).datepicker();
	});
</script>
		
<form method="post" action="<?php echo base_url();?>danhmuc/admin/edit/<?php echo $info->id;?>">	
	<article class="module width_3_quarter" style="width:95%;">
		<header><h3 class="tabs_involved"><?php echo $title;?></h3>
		</header>
		<div class="tab_container">
			
			<div id="tab1" class="tab_content">
				<fieldset>
					<label>Tên danh mục(Việt) </label>
					<input type="text" name="cate_name" style="width:92%" value="<?php echo $info->cate_name;?>"/>
				</fieldset>
				<fieldset>
					<label>Tên danh mục(Anh) </label>
					<input type="text" name="cate_namee" style="width:92%" value="<?php echo $info->cate_namee;?>"/>
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
		