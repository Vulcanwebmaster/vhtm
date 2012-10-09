<div id="center">
	<h1>Danh sách sản phẩm</h1>
	<div id="items">
		<?php foreach ($list as $item)
		{?>
			<div class="item">
				<div class="itemimage">
					<a href="<?php echo base_url();?>sanpham/detail/<?php echo $item->id;?>">
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