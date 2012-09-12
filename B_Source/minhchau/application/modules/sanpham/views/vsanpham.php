<div id="wrapper">																																																																											
	<div id="content_inside">
		<?php $this->load->view('front/left');?>
		<div id="main_block">
			<style>
				.item p img{width:202px !important; height:173px !important}
			</style>
			<div id="items">
				<?php foreach ($list as $item)
				{?>
					<div class="item">
						<?php echo $item->image;?>
						<span><?php echo $item->price;?> VNĐ</span>
						<a href="<?php echo $item;?>" class="view">Chi tiết</a>
					</div>
				<?php }?>
			</div>
		</div>
	</div>
</div>