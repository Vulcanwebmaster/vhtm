<section id="main" class="column" style="width:100%;">
<form action="<? echo base_url()?>danhmuc/admin/edit/<?php echo $query->category_id ?>" method="post">
	<article class="module width_full" style="width:95%;">
		<header><h3>Thông tin danh mục</h3></header>
			<div class="module_content">
				<fieldset>
					<label>Tên danh mục</label>
					<input type="text" name="category_name" value="<?php echo $query->category_name?>">
					<span class="validate"><?php echo form_error('category_name');?></span>
				</fieldset>
				<fieldset>
					<label>Danh mục cha</label>
					<?php 
						$m = new CI_Model();
						$parentName = $m->getRowById('tn_categories','category_id',$query->category_parent_id);
					?>
					<select name="category_parent_id">
						<?php if(isset($parentName->category->name)){?>
							<option value="<?php echo $query->category_parent_id ?>"><?php echo $parentName->category_name ?></option>
						<?php }
						if(count($listParent) > 0)
						{
							foreach($listParent as $parent)
							{
								if($parent->category_id != $query->category_parent_id)
								{
								?>
									<option value="<?php echo $parent->category_id ?>"><?php echo $parent->category_name ?></option>
								<?php
								}
							}
						}
						if(isset($parentName->category->name))
						{
							?>
							<option value="0"></option>
							<?php
						}
						?>
					</select>
				</fieldset>
			</div>
			<footer>
				<div class="submit_link">
					<input type="submit" value="Update" name="submit" class="alt_btn">
				</div>
			</footer>

		</article><!-- end of post new article -->
</form>	
<!-- End Contact Info -->

		<div class="clear"></div>

</section>

</body>