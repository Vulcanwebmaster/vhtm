<section id="main" class="column" style="width:100%;">
<form action="<? echo base_url()?>danhmuc/admin/insert" method="post">
	<article class="module width_full" style="width:95%;">
		<header><h3>Nhập thông tin danh mục</h3></header>
			<div class="module_content">
				<fieldset>
					<label>Tên danh mục</label>
					<input type="text" name="category_name">
					<span class="validate"><?php echo form_error('category_name');?></span>
				</fieldset>
				<fieldset>
					<label>Danh mục cha</label>
					<select name="category_parent_id">
						<option value="0"></option>
						<?php 
						if(isset($listParent)){
							foreach($listParent as $parent){
								?>
									<option value="<?php echo $parent->category_id ?>"><?php echo $parent->category_name ?></option>
								<?php
							}
						}
						?>
					</select>
				</fieldset>
			</div>
				<footer>
					<div class="submit_link">
						<input type="submit" name="submit" value="Thêm mới" class="alt_btn">
					</div>
				</footer>

		</article><!-- end of post new article -->
</form>	
<!-- End Contact Info -->

		<div class="clear"></div>

</section>

</body>