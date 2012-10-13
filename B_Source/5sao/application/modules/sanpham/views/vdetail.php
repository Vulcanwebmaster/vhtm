<div id="center">
	<p style="border-bottom: 1px solid #7a7875; font-size: 26px; font-weight: bold; margin-top:20px">Chi tiết sản phẩm</p>
	<div>
		<div class="product_image">
			<?php echo $detail->hinhanh;?>
		</div>
		<div class="product_description">
			<h3 style="font-size: 22px; font-weight: bold"><?php if ($lang=='vn') echo $detail->ten_v; else echo $detail->ten_e;?></h3>
			<div>
				<?php if ($lang=='vn') echo $detail->mota_v; else echo $detail->mota_e;?>
			</div>
		</div>
		<div class="product_detail">
			<?php if ($lang=='vn') echo $detail->chitiet_v; else echo $detail->chitiet_e;?>
		</div>
	</div>
	<div id="relate_list">
		<h4><?php echo $this->lang->line('detailpr-relates');?></h4>
		<ul>
			<?php foreach ($relates as $rl_item)
			{?>
				<li><a href="<?php echo base_url();?>sanpham/detail/<?php echo $rl_item->id;?>"><?php if ($lang=='vn') echo $rl_item->ten_v; else  echo $rl_item->ten_e;?></a></li>
			<?php }?>
		</ul>
	</div>
</div>