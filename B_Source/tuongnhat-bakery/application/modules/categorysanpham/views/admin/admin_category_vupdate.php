<?php foreach ($product as $row):?>
<form action="<?php echo base_url()?>categorysanpham/admin/updateCategory/<?php echo $row->category_id?>" method="post">
	<article class="module width_full" style="width:95%;">
		<header><h3>Category Product</h3></header>
			<div class="module_content">
						<fieldset style="width:48%; float:left;">
							<label>Category name en</label>
							<input type="text" style="width:92%;" name="category_name_en" value="<?php echo $row->category_name_en?>">
						</fieldset><div class="clear"></div>
						<fieldset style="width:48%; float:left;">
							<label>Category name vn</label>
							<input type="text" style="width:92%;" name="category_name_vn" value="<?php echo $row->category_name_vn?>">
						</fieldset><div class="clear"></div>
						<fieldset style="width:48%; float:left;"> <!-- to make two field float next to one another, adjust values accordingly -->
							<label>Category decription en</label>
							<textarea rows="5" style="width: 521px; height: 100px;" name="category_decription_en"><?php echo $row->category_decription_en?></textarea>
						</fieldset><div class="clear"></div>
						<fieldset style="width:48%; float:left;"> <!-- to make two field float next to one another, adjust values accordingly -->
							<label>Category decription en</label>
							<textarea rows="5" style="width: 521px; height: 100px;" name="category_decription_vn"><?php echo $row->category_decription_vn?></textarea>
						</fieldset><div class="clear"></div>
							
				</div>
				<?php endforeach?>
				<footer>
					<div class="submit_link">
						<input type="submit" value="Update" class="alt_btn">
					</div>
				</footer>

		</article><!-- end of post new article -->
</form>	