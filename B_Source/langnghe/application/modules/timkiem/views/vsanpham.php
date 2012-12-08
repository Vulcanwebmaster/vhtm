<script type="text/javascript">
	$('#menu-sanpham').css('color','#D9B24A');
</script>

<div id="center">
	<?php if (isset($current_category))
	{
			echo '<h2>Danh mục sản phẩm: '.$current_category->product_name.'</h2>';
	}
	else echo '<h2>Danh sách sản phẩm</h2>';?>
	
	<div id="items">
		<?php foreach ($list as $item)
		{?>
			<div class="item">
				<div class="itemimage">
					<a href="<?php echo base_url();?>sanpham/detail/<?php echo $item->category_id."-".$item->product_id."-".$item->alias;?>">
						<?php echo $item->hinhanh;?>
					</a><br />								
				</div>
	            <div class="itemh5"><?php echo $item->category_name?></div>
			</div>
		<?php }?>
		<br class="clear"/>
	</div>
	<!--<div class="pagination-control"><?php echo $this->pagination->create_links();?></div>-->
</div>