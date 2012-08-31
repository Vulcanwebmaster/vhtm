<?php if (validation_errors())
{
	echo '<div class="error" style="color:red; padding-left:30px">';
	echo validation_errors('<p>','</p>');
	echo '</div>';
}?>	    
<form action="<?php echo base_url()?>sanpham/admin/editProductById/<?php echo $info->id;?>" method="post">
	<article class="module width_full" style="width:95%;">
		<header><h3>Contact Infomation</h3></header>
			<div class="module_content">
						<fieldset > <!-- to make two field float next to one another, adjust values accordingly -->
							<label>Tên</label>
							<input type="text" style="width:92%;" name="ten" value="<?php echo $info->ten;?>">
						</fieldset><div class="clear"></div>
			
						<fieldset >
							<label>Danh mục</label>
							<select name="danhmuc_id">
							<?php foreach($category as $rows):?>
								<?php if ($rows->id==$info->danhmuc_id)
								{?>
								<option value="<?php echo $rows->id;?>" selected="selected"><?php echo $rows->ten;?></option>
								<?php }
								else
								{?>
								<option value="<?php echo $rows->id;?>"><?php echo $rows->ten;?></option>
								<?php }?>
							<?php endforeach;?>
							</select> 
						</fieldset><div class="clear"></div>
						
						<fieldset > <!-- to make two field float next to one another, adjust values accordingly -->
							<label>Ảnh đại diện</label>
							<center>
								<?php echo $this->ckeditor->editor('hinhanh',$info->hinhanh,$config);?>
							</center>
						</fieldset><div class="clear"></div>
						
						<fieldset > <!-- to make two field float next to one another, adjust values accordingly -->
							<label>Hình ảnh chi tiết 1</label>
							<center>
								<?php echo $this->ckeditor->editor('hinhanhchitiet1',$info->hinhchitiet1,$config);?>
							</center>
						</fieldset><div class="clear"></div>
						
						<fieldset > <!-- to make two field float next to one another, adjust values accordingly -->
							<label>Hình ảnh chi tiết 2</label>
							<center>
								<?php echo $this->ckeditor->editor('hinhanhchitiet2',$info->hinhchitiet2,$config);?>
							</center>
						</fieldset><div class="clear"></div>
						
						<fieldset > <!-- to make two field float next to one another, adjust values accordingly -->
							<label>Hình ảnh chi tiết 3</label>
							<center>
								<?php echo $this->ckeditor->editor('hinhanhchitiet3',$info->hinhchitiet3,$config);?>
							</center>
						</fieldset><div class="clear"></div>
						
						<fieldset > <!-- to make two field float next to one another, adjust values accordingly -->
							<label>Hình ảnh chi tiết 4</label>
							<center>
								<?php echo $this->ckeditor->editor('hinhanhchitiet4',$info->hinhchitiet4,$config);?>
							</center>
						</fieldset><div class="clear"></div>
						
						<fieldset > <!-- to make two field float next to one another, adjust values accordingly -->
							<label>Mô tả</label>
							<center>
								<?php echo $this->ckeditor->editor('mota',$info->mota,$config);?>
							</center>
						</fieldset><div class="clear"></div>
						
						<fieldset > <!-- to make two field float next to one another, adjust values accordingly -->
							<label>Chi tiết</label>
							<center>
								<?php echo $this->ckeditor->editor('chitiet',$info->chitiet,$config);?>
							</center>
						</fieldset><div class="clear"></div>
						
						<fieldset > <!-- to make two field float next to one another, adjust values accordingly -->
							<label>Giá</label>
							<input type="text" style="width:92%;" name="gia" value="<?php echo $info->gia?>">
						</fieldset><div class="clear"></div>
						
						<fieldset > <!-- to make two field float next to one another, adjust values accordingly -->
							<label>Giá khuyến mãi</label>
							<input type="text" style="width:92%;" name="giakhuyenmai" value="<?php echo $info->giakhuyenmai?>">
						</fieldset><div class="clear"></div>
						
						<fieldset > <!-- to make two field float next to one another, adjust values accordingly -->
							<label>Nổi bật</label>
							<select name="noibat">
								<?php if ($info->noibat==0)
								{?>
									<option value="0" selected="selected">Không</option>
									<option value="1">Có</option>
								<?php }
								else {?>
									<option value="0">Không</option>
									<option value="1" selected="selected">Có</option>
								<?php }?>
							</select>
						</fieldset><div class="clear"></div>
						
						<fieldset > <!-- to make two field float next to one another, adjust values accordingly -->
							<label>Sản phẩm mới</label>
							<select name="moi">
								<?php if ($info->moi==0)
								{?>
									<option value="0" selected="selected">Không</option>
									<option value="1">Có</option>
								<?php }
								else {?>
									<option value="0">Không</option>
									<option value="1" selected="selected">Có</option>
								<?php }?>
							</select>
							</select>
						</fieldset><div class="clear"></div>
						
						<fieldset > <!-- to make two field float next to one another, adjust values accordingly -->
							<label>Số lượng</label>
							<input type="text" style="width:92%;" name="soluong" value="<?php echo $info->soluong?>">
						</fieldset><div class="clear"></div>
						
				</div>
				<footer>
					<div class="submit_link">
						<input type="submit" value="Update" class="alt_btn">
					</div>
				</footer>

		</article><!-- end of post new article -->
</form>	