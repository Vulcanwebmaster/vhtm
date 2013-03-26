<script type="text/javascript">
	$(document).ready(function(){
		$('#menu-trangchu').addClass('but1_active');
	});
</script>
<?php $lang=$this->session->userdata('lang');?>
<style>
	.item p img{width:202px !important; height:160px !important}
</style>
<div id="main_block">
	<div class="about">
		<h2><?php echo $this->lang->line('menu-gioithieu');?></h2>
		<?php $newModel=new CI_Model();
			if ($_SESSION['lang']=="vn"){
				echo $newModel->cutString($aboutus->contentv,1200).'...</p>';
			}else {
			  	echo $newModel->cutString($aboutus->contente,1200).'...</p>';
			} 
			
		?>
		<a href="<?php echo base_url();?>gioithieu">
		<?php if ($_SESSION['lang']=="vn") 
		{?>		
			Xem thêm
		<?php } else{ ?>
			Read more
		<?php } ?>
		</a>
	</div>
	<div class="news">
		<a href="<?php echo base_url();?>dathang"><img src="<?php echo base_url();?>assets/minhchau/images/order.png" alt="" style="width:220px; height:140px"/></a>
	</div>
	<h2 style="padding-top: 15px; clear:both"><?php echo $this->lang->line('home-spmoi');?></h2>
	<div id="items">
		<?php foreach ($listnew as $item)
		{?>
			<div class="item">
				<h3 style="margin-top:15px; margin-left:25px; text-transform:capitalize; color:#6c6c6c">
					<?php if ($_SESSION['lang']=="vn") echo $item->namev;
					else echo $item->namee;?>
				</h3>
				<?php echo $item->image;?>
<!-- 				<span><?php echo $item->price;?> VNĐ</span> -->
				<a href="<?php echo base_url();?>sanpham/chiTiet/<?php echo $item->id."-".$item->alias;?>" class="view">
					<?php if ($_SESSION['lang']=="vn") 
					{?>		
						Chi tiết
					<?php } else{ ?>
						Details
					<?php } ?>
					</a>
			</div>
		<?php }?>
	</div>
</div>
