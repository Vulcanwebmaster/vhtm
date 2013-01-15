	
		<?php 
			echo validation_errors('<div class="error">','</div>');
		?>	
<form method="post" action="<?php echo base_url();?>quangcao/admin/edit/<?php echo $info->id;?>">	
	<article class="module width_3_quarter" style="width:95%;">
		<header><h3 class="tabs_involved"><?php echo $title;?></h3>
		
		</header>
		<div class="tab_container">
			
			<div id="tab1" class="tab_content">
				<fieldset>
					<label>Đường dẫn (Link)1</label>
					<input type="text" name="link1" style="width:95%" value="<?php echo $info->link1;?>"/>
				</fieldset>
				<fieldset>
					<label>Ảnh 1</label>
					<?php echo $this->ckeditor->editor('anh1',$info->anh1,$config);?>
				</fieldset>
				<fieldset>
					<label>Đường dẫn (Link)2</label>
					<input type="text" name="link2" style="width:95%" value="<?php echo $info->link2;?>"/>
				</fieldset>
				<fieldset>
					<label>Ảnh 2</label>
					<?php echo $this->ckeditor->editor('anh2',$info->anh2,$config);?>
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
		