	<?php 
			echo validation_errors('<div class="error">','</div>');
		?>	
<form method="post" action="<?php echo base_url();?>slide/admin/edit/<?php echo $info->id;?>">	
	<article class="module width_3_quarter" style="width:95%;">
		<header><h3 class="tabs_involved"><?php echo $title;?></h3>
		
		</header>
		<div class="tab_container">
			
			<div id="tab1" class="tab_content">
				<fieldset>
					<label>Link 1 </label>
					<input type="text" name="link1" style="width:92%" value="<?php echo $info->link1;?>"/>
				</fieldset>
				<fieldset>
					<label>Image 1</label>
					<?php echo $this->ckeditor->editor('image1',$info->image1,$config);?>
				</fieldset>
				<fieldset>
					<label>Title 1 </label>
					<input type="text" name="title1" style="width:92%" value="<?php echo $info->title1;?>"/>
				</fieldset>
				<fieldset>
					<label>Content 1 </label>
					<input type="text" name="content1" style="width:92%" value="<?php echo $info->content1;?>"/>
				</fieldset>
				
				<fieldset>
					<label>Link 2 </label>
					<input type="text" name="link2" style="width:92%" value="<?php echo $info->link2;?>"/>
				</fieldset>
				<fieldset>
					<label>Image 2</label>
					<?php echo $this->ckeditor->editor('image2',$info->image2,$config);?>
				</fieldset>
				<fieldset>
					<label>Title 2 </label>
					<input type="text" name="title2" style="width:92%" value="<?php echo $info->title2;?>"/>
				</fieldset>
				<fieldset>
					<label>Content 2 </label>
					<input type="text" name="content2" style="width:92%" value="<?php echo $info->content2;?>"/>
				</fieldset>
				
				<fieldset>
					<label>Link 3 </label>
					<input type="text" name="link3" style="width:92%" value="<?php echo $info->link3;?>"/>
				</fieldset>
				<fieldset>
					<label>Image 3</label>
					<?php echo $this->ckeditor->editor('image3',$info->image3,$config);?>
				</fieldset>
				<fieldset>
					<label>Title 3 </label>
					<input type="text" name="title3" style="width:92%" value="<?php echo $info->title3;?>"/>
				</fieldset>
				<fieldset>
					<label>Content 3 </label>
					<input type="text" name="content3" style="width:92%" value="<?php echo $info->content3;?>"/>
				</fieldset>
				
				<fieldset>
					<label>Link 4 </label>
					<input type="text" name="link4" style="width:92%" value="<?php echo $info->link4;?>"/>
				</fieldset>
				<fieldset>
					<label>Image 4</label>
					<?php echo $this->ckeditor->editor('image4',$info->image4,$config);?>
				</fieldset>
				<fieldset>
					<label>Title 4 </label>
					<input type="text" name="title4" style="width:92%" value="<?php echo $info->title4;?>"/>
				</fieldset>
				<fieldset>
					<label>Content 4 </label>
					<input type="text" name="content4" style="width:92%" value="<?php echo $info->content4;?>"/>
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
		