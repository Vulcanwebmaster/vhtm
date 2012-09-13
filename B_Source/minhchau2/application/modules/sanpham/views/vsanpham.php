<script type="text/javascript">
	$(document).ready(function(){
		$('#menu-sanpham').addClass('but1_active');
	});
</script>
<?php $lang=$this->session->userdata('lang');?>
<div id="main_block">
	<style>
		.item p img{width:202px !important; height:160px !important}
	</style>
	<?php if (isset($category))
			if ($lang=='vn')
				echo "<h2>".$category->namev."</h2>";
			else echo "<h2>".$category->namee."</h2>";?>
	<div id="items">
		<?php foreach ($list as $item)
		{?>
			<div class="item">
				<h3 style="margin-top:15px; margin-left:25px; text-transform:capitalize; color:#6c6c6c">
					<?php if ($lang=='vn') echo $item->namev;
					else echo $item->namee;?>
				</h3>
				<?php echo $item->image;?>
				<span><?php echo $item->price;?> VNĐ</span>
				<a href="<?php echo base_url();?>sanpham/chiTiet/<?php echo $item->id;?>" class="view">Chi tiết</a>
			</div>
		<?php }?>
	</div>
</div>
