<?php 
			echo validation_errors('<div class="error">','</div>');
?>
<form method="post" action="<?php echo base_url();?>langnghe/admin/edit/<?php echo $info->village_id;?>">	
	<article class="module width_3_quarter" style="width:95%;">
		<header><h3 class="tabs_involved"><?php echo $title;?></h3>
		</header>
			<div class="tab_container">
			<div id="tab1" class="tab_content">
				<fieldset>
					<label>Tên làng nghề</label>
					<input type="text" name="village_name" style="width:95%" value="<?php echo $info->village_name;?>"/>
				</fieldset>
				<fieldset>
					<label>Mô tả</label>
					<?php echo $this->ckeditor->editor('village_description',$info->village_description,$config);?>
				</fieldset>
			</div>
			<footer style="float:left">
					<div class="submit_link">
						<input type="submit" name="submit" value="Cập nhật" class="alt_btn">
					</div>
			</footer>
		</div><!-- end of .tab_container -->
		</article>
</form>