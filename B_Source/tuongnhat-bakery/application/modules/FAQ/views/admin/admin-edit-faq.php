<?php if (validation_errors())
{
	echo '<div class="error" style="color:red; padding-left:30px">';
	echo validation_errors('<p>','</p>');
	echo '</div>';
}?>	 
<form action="<?php echo base_url();?>faq/admin/editById/<?php echo $info->id;?>" method="post">
		<article class="module width_full">
			<header><h3>Chỉnh sửa</h3></header>
				<div class="module_content" style="overflow-y:auto; height:500px">		
						<fieldset>
							<label>Ngày tháng</label>
							<input type="text" name="ngaythang" value="<?php echo $info->ngaythang;?>"/>				
						</fieldset>
										
						<fieldset>
							<label>Tiêu đề</label>
							<input type="text" name="tieude" value="<?php echo $info->tieude;?>"/>							
						</fieldset>
						<fieldset>
							<label>Nội dung</label>	
							<center>
								<?php echo $this->ckeditor->editor("noidung",$info->noidung ,$config);?>	
							</center>
						</fieldset>
						<fieldset>
							<label>Trả lời</label>
							<center>
								<?php echo $this->ckeditor->editor("traloi",$info->traloi ,$config);?>	
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