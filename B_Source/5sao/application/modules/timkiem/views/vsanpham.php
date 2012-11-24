<script type="text/javascript">
	$('#menu-sanpham').css('color','#D9B24A');
</script>

<div id="center">
	<?php if (isset($current_category))
	{
		if ($lang=="vn")
			echo '<h2>Danh mục sản phẩm: '.$current_category->ten_v.'</h2>';
		else echo '<h2>Danh mục sản phẩm: '.$current_category->ten_e.'</h2>';
	}
	else echo '<h2>Danh sách sản phẩm</h2>';?>
	
	<div id="items">
		<?php foreach ($list as $item)
		{?>
			<div class="item">
				<div class="itemimage">
					<a href="<?php echo base_url();?>sanpham/detail/<?php echo $item->danhmuc_id."-".$item->id."-".$item->alias;?>">
						<?php echo $item->hinhanh;?>
					</a><br />								
				</div>
	            <div class="itemh5"><?php if ($lang=="vn") echo $item->ten_v; else echo $item->ten_e;?></div>
			</div>
		<?php }?>
		<br class="clear"/>
	</div>
	<div class="pagination-control"><?php echo $this->pagination->create_links();?></div>
</div>