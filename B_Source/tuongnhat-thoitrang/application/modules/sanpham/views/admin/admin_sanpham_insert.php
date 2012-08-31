<?php if (validation_errors())
{
	echo '<div style="color:red; padding-left:30px">';
	echo validation_errors('<p>','</p>');
	echo '</p>';
}?>

<form action="<?php echo base_url()?>sanpham/admin/insertNewProduct" method="post">
	<article class="module width_full" style="width:95%;">
		<header><h3>Contact Infomation</h3></header>
			<div class="module_content">
						<fieldset > <!-- to make two field float next to one another, adjust values accordingly -->
							<label>Tên</label>
							<input type="text" style="width:92%;" name="ten" value="">
						</fieldset><div class="clear"></div>
			
						<fieldset >
							<label>Danh mục</label>
							<select name="danhmuc_id">
							<?php foreach($category as $rows):?>
								<option value="<?php echo $rows->id;?>"><?php echo $rows->ten;?></option>
							<?php endforeach;?>
							</select> 
						</fieldset><div class="clear"></div>
						
						<fieldset > <!-- to make two field float next to one another, adjust values accordingly -->
							<label>Ảnh đại diện</label>
							<center>
								<?php echo $this->ckeditor->editor('hinhanh','',$config);?>
							</center>
						</fieldset><div class="clear"></div>
						
						<fieldset > <!-- to make two field float next to one another, adjust values accordingly -->
							<label>Hình ảnh chi tiết 1</label>
							<center>
								<?php echo $this->ckeditor->editor('hinhanhchitiet1','',$config);?>
							</center>
						</fieldset><div class="clear"></div>
						
						<fieldset > <!-- to make two field float next to one another, adjust values accordingly -->
							<label>Hình ảnh chi tiết 2</label>
							<center>
								<?php echo $this->ckeditor->editor('hinhanhchitiet2','',$config);?>
							</center>
						</fieldset><div class="clear"></div>
						
						<fieldset > <!-- to make two field float next to one another, adjust values accordingly -->
							<label>Hình ảnh chi tiết 3</label>
							<center>
								<?php echo $this->ckeditor->editor('hinhanhchitiet3','',$config);?>
							</center>
						</fieldset><div class="clear"></div>
						
						<fieldset > <!-- to make two field float next to one another, adjust values accordingly -->
							<label>Hình ảnh chi tiết 4</label>
							<center>
								<?php echo $this->ckeditor->editor('hinhanhchitiet4','',$config);?>
							</center>
						</fieldset><div class="clear"></div>
						
						<fieldset > <!-- to make two field float next to one another, adjust values accordingly -->
							<label>Mô tả</label>
							<center>
								<?php echo $this->ckeditor->editor('mota','',$config);?>
							</center>
						</fieldset><div class="clear"></div>
						
						<fieldset > <!-- to make two field float next to one another, adjust values accordingly -->
							<label>Chi tiết</label>
							<center>
								<?php echo $this->ckeditor->editor('chitiet','',$config);?>
							</center>
						</fieldset><div class="clear"></div>
						
						<fieldset > <!-- to make two field float next to one another, adjust values accordingly -->
							<label>Giá</label>
							<input type="text" style="width:92%;" name="gia" value="">
						</fieldset><div class="clear"></div>
						
						<fieldset > <!-- to make two field float next to one another, adjust values accordingly -->
							<label>Giá khuyến mãi</label>
							<input type="text" style="width:92%;" name="giakhuyenmai" value="">
						</fieldset><div class="clear"></div>
						
						<fieldset > <!-- to make two field float next to one another, adjust values accordingly -->
							<label>Nổi bật</label>
							<select name="noibat">
								<option value="0">Không</option>
								<option value="1">Có</option>
							</select>
						</fieldset><div class="clear"></div>
						
						<fieldset > <!-- to make two field float next to one another, adjust values accordingly -->
							<label>Sản phẩm mới</label>
							<select name="moi">
								<option value="0">Không</option>
								<option value="1">Có</option>
							</select>
						</fieldset><div class="clear"></div>
						
						<fieldset > <!-- to make two field float next to one another, adjust values accordingly -->
							<label>Số lượng</label>
							<input type="text" style="width:92%;" name="soluong"/>
						</fieldset><div class="clear"></div>
				</div>
				<footer>
					<div class="submit_link">
						<input type="submit" value="Insert" class="alt_btn">
					</div>
				</footer>

		</article><!-- end of post new article -->
</form>	