	
		<?php 
			echo validation_errors('<div class="error">','</div>');
		?>	
<form method="post" action="<?php echo base_url();?>sanpham/admin/edit/<?php echo $info->id;?>">	
	<article class="module width_3_quarter" style="width:95%;">
		<header><h3 class="tabs_involved"><?php echo $title;?></h3>
		
		</header>
		<div class="tab_container">
			
			<div id="tab1" class="tab_content">
				<fieldset>
					<label>Tên (Việt)</label>
					<input type="text" name="namev" style="width:95%" value="<?php echo $info->namev;?>"/>
				</fieldset>
				<fieldset>
					<label>Tên (Anh)</label>
					<input type="text" name="namee" style="width:95%" value="<?php echo $info->namee;?>"/>
				</fieldset>
				<fieldset>
					<label>Danh mục</label>
					<select name="category_id">
						<option></option>
						<?php foreach ($list as $item)
						{
							if ($item->id==$info->category_id)
							{?>
								<option value="<?php echo $item->id?>" selected="selected"><?php echo $item->namev;?></option>
							<?php }
							else {?>
								<option value="<?php echo $item->id?>"><?php echo $item->namev;?></option>
						<?php }}?>
					</select>
				</fieldset>
				<fieldset>
					<label>Giá (VNĐ)</label>
					<input type="text" name="price" style="width:95%" value="<?php echo $info->price;?>"/>
				</fieldset>
				<fieldset>
					<label>Chức năng (Việt)</label>
					<?php echo $this->ckeditor->editor('usesv',$info->usesv,$config);?>
				</fieldset>
				<fieldset>
					<label>Chức năng (Anh)</label>
					<?php echo $this->ckeditor->editor('usese',$info->usese,$config);?>
				</fieldset>
				<fieldset>
					<label>Thông tin kỹ thuật (Việt)</label>
					<?php echo $this->ckeditor->editor('technical_infov',$info->technical_infov,$config);?>
				</fieldset>
				<fieldset>
					<label>Thông tin kỹ thuật (Anh)</label>
					<?php echo $this->ckeditor->editor('technical_infoe',$info->technical_infoe,$config);?>
				</fieldset>
				<fieldset>
					<label>Hình ảnh</label>
					<?php echo $this->ckeditor->editor('image',$info->image,$config);?>
				</fieldset>
				<fieldset>
					<label>Sản phẩm mới</label>
					<select name="is_new">
						<?php if ($info->is_new==1)
						{?>
							<option value="1" selected="selected">Có</option>
							<option value="0">Không</option>
						<?php }
						else 
						{?>
							<option value="1">Có</option>
							<option value="0" selected="selected">Không</option>
						<?php }?>
					</select>
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
		