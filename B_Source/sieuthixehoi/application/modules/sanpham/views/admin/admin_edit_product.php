	
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
					<label>Hãng sản xuất</label>
					<input type="text" name="hangsx" style="width:95%" value="<?php echo $info->hangsx;?>"/>
				</fieldset>
				<fieldset>
					<label>Giá (VNĐ)</label>
					<input type="text" name="price" style="width:95%" value="<?php echo $info->price;?>"/>
				</fieldset>
				<fieldset>
					<label>Mô tả (Việt)</label>
					<?php echo $this->ckeditor->editor('mota',$info->mota,$config);?>
				</fieldset>
				<fieldset>
					<label>Hình ảnh</label>
					<?php echo $this->ckeditor->editor('image',$info->image,$config);?>
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
		