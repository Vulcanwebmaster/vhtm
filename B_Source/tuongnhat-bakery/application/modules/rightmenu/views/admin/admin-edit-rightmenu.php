<?php if (validation_errors())
{
	echo '<div class="error" style="color:red; padding-left:30px">';
	echo validation_errors('<p>','</p>');
	echo '</div>';
}?>	 
<form action="<?php echo base_url();?>rightmenu/admin/editMenuById/<?php echo $info->id;?>" method="post">
		<article class="module width_full">
			<header><h3>Chỉnh sửa</h3></header>
				<div class="module_content" style="overflow-y:auto; height:500px">		
						<fieldset>
							<label>Hình ảnh</label>
							<center>
								<?php echo $this->ckeditor->editor("hinhanh",$info->hinhanh ,$config);?>	
							</center>				
						</fieldset>
										
						<fieldset>
							<label>Tiêu đề (V)</label>
							<input type="text" name="tieudev" value="<?php echo $info->tieudev;?>"/>							
						</fieldset>
						<fieldset>
							<label>Tiêu đề (E)</label>
							<input type="text" name="tieudee" value="<?php echo $info->tieudee;?>"/>							
						</fieldset>						
						<fieldset>
							<label>Nội dung (V)</label>	
							<center>
								<?php echo $this->ckeditor->editor("noidungv",$info->noidungv ,$config);?>	
							</center>
						</fieldset>
						<fieldset>
							<label>Nội dung (E)</label>
							<center>
								<?php echo $this->ckeditor->editor("noidunge",$info->noidunge ,$config);?>	
							</center>
						</fieldset>
						<div class="clear"></div>
				</div>
			<footer>
				<div class="submit_link">
					
					<input type="submit" value="Post" class="alt_btn">
					
				</div>
			</footer>
		</article><!-- end of post new article -->
		</form>