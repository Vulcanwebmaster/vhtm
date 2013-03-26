<script type="text/javascript">
	$(document).ready(function(){
		$('#menu-sanpham').addClass('but1_active');
	});
</script>
<style>
	.big_view p img{height:319px !important; width:311px !important}
</style>
<?php $lang=$this->session->userdata('lang');?>
<div id="main_block" class="style1">																																																																													
	<div id="item">
		<h4>
			<?php if ($lang=='vn')
			{
				echo $info->namev;
			}
			else echo $info->namee;?>
		</h4><br />
		<div class="big_view">
			<?php echo $info->image;?>
<!-- 			<span><?php echo $info->price;?> VNĐ</span> -->
		</div>
		<div class="scroll" style="display:none">
			<a href="#"><img src="images/pic1.jpg" alt="" width="62" height="62" /></a>
			<a href="#"><img src="images/pic2.jpg" alt="" width="62" height="62" /></a>
			<a href="#"><img src="images/pic3.jpg" alt="" width="62" height="62" /></a>
			<a href="#"><img src="images/pic4.jpg" alt="" width="62" height="62" /></a>
			<a href="#"><img src="images/pic5.jpg" alt="" width="62" height="62" /></a>
			<a href="#"><img src="images/pic6.jpg" alt="" width="62" height="62" /></a>
		</div>
	</div>
	<div class="description">
		<p>
			<h2>Chức năng</h2><br /> 
			<?php if ($lang=='vn') echo $info->usesv;
			else echo $info->usese;?> 
		</p>
	</div>
	<div class="technical-info" style="clear:both; padding-top:15px">
		<h2>Thông số kỹ thuật</h2>
		<?php if ($lang=='vn') echo $info->technical_infov;
			else echo $info->technical_infoe;?> 
	</div>
</div>