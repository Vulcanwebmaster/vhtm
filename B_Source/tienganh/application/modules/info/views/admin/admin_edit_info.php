	
<form method="post" action="<?php echo base_url();?>info/admin/edit/<?php echo $info->info_id;?>">	
	<article class="module width_3_quarter" style="width:95%;">
		<header><h3 class="tabs_involved"><?php echo $title;?></h3>
		</header>
		<div class="tab_container">
			<div id="tab1" class="tab_content">
				<fieldset>
					<label>Tên Thông Tin</label>
					<input type="text" name="info_name" value="<?php echo $info->info_name;?>"/>
				</fieldset>
				<fieldset>
					<label>Nội Dung</label>
					<input type="text" name="info_content" value="<?php echo $info->info_content;?>"/>
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
		