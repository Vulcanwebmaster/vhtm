<?php if (validation_errors())
{
	echo '<div style="color:red; padding-left:30px">';
	echo validation_errors('<p>','</p>');
	echo '</p>';
}?>

<form action="<?php echo base_url()?>danhmuc/admin/insertNewProduct" method="post">
	<article class="module width_full" style="width:95%;">
		<header><h3>Contact Infomation</h3></header>
			<div class="module_content">
						<fieldset > <!-- to make two field float next to one another, adjust values accordingly -->
							<label>Tên</label>
							<input type="text" style="width:92%;" name="ten" value="">
						</fieldset><div class="clear"></div>
			</div>
			<footer>
				<div class="submit_link">
					<input type="submit" value="Insert" class="alt_btn">
				</div>
			</footer>
		</article><!-- end of post new article -->
</form>	