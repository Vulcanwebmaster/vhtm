<script type="text/javascript">
	$('#menu-sanpham').parent().addClass('currentmenu');	
	$(document).ready(function(){		
		$('.product_detail').hide();
		$('.desptext').show();
		$('#desp_dt').addClass('detail_desp_add');
		$('#param_dt').addClass('detail_desp_color');
		$('#desp_dt').click(function(){
			$('.product_detail').hide();
			$('.desptext').show();
			$('#desp_dt').removeClass('detail_desp_color').addClass('detail_desp_add');
			$('#param_dt').removeClass('detail_desp_add').addClass('detail_desp_color');
		});
		$('#param_dt').click(function(){
			$('.product_detail').show();
			$('.desptext').hide();
			$('#param_dt').removeClass('detail_desp_color').addClass('detail_desp_add');
			$('#desp_dt').removeClass('detail_desp_add').addClass('detail_desp_color');
		});
	});
</script>
<ul id="breadcrum">
	<li><a href="<?php echo base_url();?>"><?php echo $this->lang->line('menu-trangchu');?></a></li>
	<li><a href="<?php echo base_url();?>san-pham"><?php echo '  >  '.$this->lang->line('menu-sanpham');?></a></li>
	<li>> <h1><?php if(isset($current_breadcrum)) echo $current_breadcrum;?></h1></li>
</ul>
<div id="center">
	<div style="height:270px; margin-bottom: 50px">
		<div class="product_image">
			<?php echo $detail->hinhanh;?>
		</div>
		<div class="product_description">
			<h3 style="font-size: 22px; font-weight: bold; color: red; text-align: left;margin:0; padding:0"><?php if ($lang=='vn') echo $detail->ten_v; else echo $detail->ten_e;?></h3>
			<div id="mota_detail">
				<?php if ($lang=='vn') echo $detail->mota_v; else echo $detail->mota_e;?>
			</div>
		</div>			
	</div>
	
	<div id="detail_desp">	
		<div id="desp_dt"><a>Mô tả chung</a></div>
		<div id="param_dt"><a>Thông số kỹ thuật</a></div>	
		<div class="product_detail">
			<?php if ($lang=='vn') echo $detail->chitiet_v; else echo $detail->chitiet_e;?>
		</div>			
		<div class="desptext">
			1、Máy sử dụng nguyên lý thành hình cắt bánh bằng khay dao,sp thành hình một lần,tất cả sp to nhỏ như nhau.bánh sau khi được thành hình thông qua băng tải ra ngoài,từ đó giảm thiểu được tình trạng tổn thất bánh.<br/>

			2、Thiết bị sử dụng biến tần điều tốc vô cấp và đưa nhân ,đưa bột dạng nằm,bánh bao to nho ra bột ra nhân có thể điều chỉnh tùy ý.do vậy,nguyên liệu bột đưa ra ổn định,hệ thống nhân cũng ổn định.tốc độ ra nhân nhanh,áp lực nhỏ,ổn định ,thích hợp càng nhiều loại nhân.<br/>
			
			3、Đầu đùn sử dụng kỹ thuật tiên tiến,có thể điều tiết độ dày mỏng của bột.<br/>
			
			4、thiết bị hoạt động tương đương với 8-12 người làm việc,đầu tư thấp hiệu quả cao,tiết kiệm vốn đầu tư<br/>
		</div>
	</div>
	<div id="relate_list">
		<h4><?php echo $this->lang->line('detailpr-relates');?></h4>
		<div id="items">
			<?php foreach ($relates as $item)
			{?>
				<div class="item">
					<div class="itemimage">
						<a href="<?php echo base_url();?>sanpham/<?php echo $item->alias;?>">
							<?php echo $item->hinhanh;?>
						</a><br />								
					</div>
		            <div class="itemh5"><?php if ($lang=="vn") echo $item->ten_v; else echo $item->ten_e;?></div>
				</div>
			<?php }?>
			<br class="clear"/>
		</div>
	</div>
</div>