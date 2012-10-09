<div id="center">
	<h1>Chi tiết sản phẩm</h1>
	<div>
		<div class="product_image">
			<?php echo $detail->hinhanh;?>
		</div>
		<div class="product_description">
			<h3><?php if ($lang=='vn') echo $detail->ten_v; else echo $detail->ten_e;?></h3>
			<div>
				<?php if ($lang=='vn') echo $detail->mota_v; else echo $detail->mota_e;?>
			</div>
		</div>
		<div class="product_detail">
			<?php if ($lang=='vn') echo $detail->chitiet_v; else echo $detail->chitiet_e;?>
		</div>
	</div>
</div>