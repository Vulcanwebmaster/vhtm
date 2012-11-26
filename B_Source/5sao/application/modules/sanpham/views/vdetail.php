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
			
			<?php
			 echo $detail->hinhanh;?>
		</div>
		<div class="product_description">
			<h3 style="font-size: 22px; font-weight: bold; color: red; text-align: left;margin:0; padding:0"><?php if ($_SESSION['lang']=="vn") echo $detail->ten_v; else echo $detail->ten_e;?></h3>
			<div id="mota_detail">
				<?php if ($_SESSION['lang']=="vn") { ?>
				</br>
					<p style="font-weight: bold;  float: left ">Model</p> 		 <p style="font-weight: bold; color:red; margin-left: 108px ">: <?php echo $detail->model ?></p> </br>
					<p style="font-weight: bold;  float: left ">Hãng sản xuất</p> <p style="font-weight: bold; color:red; margin-left: 108px ">: <?php echo $detail->hangsx ?></p></br> 
					<p style="font-weight: bold;  float: left ">Bảo hành</p>		 <p style="font-weight: bold; color:red; margin-left: 108px ">: <?php echo $detail->baohanh ?></p> </br>
					<p style="font-weight: bold;  float: left ">Kho hàng</p>		 <p style="font-weight: bold; color:red; margin-left: 108px ">: <?php echo $detail->khohang ?></p> </br>
					<p style="font-weight: bold;  float: left ">Giá bán</p>		 <p style="font-weight: bold; color:red; margin-left: 108px ">: <?php echo $detail->giaban ?></p> </br>
				<?php } else { ?>
					</br>
					<p style="font-weight: bold;  float: left ">Model : </p> 		     <p style="font-weight: bold; color:red "><?php echo $detail->modele ?></p> </br>
					<p style="font-weight: bold;  float: left ">Manufacturer :</p>  	 <p style="font-weight: bold; color:red "><?php echo $detail->hangsxe ?></p></br> 
					<p style="font-weight: bold;  float: left ">warranty : </p>		 	 <p style="font-weight: bold; color:red "><?php echo $detail->baohanhe ?></p> </br>
					<p style="font-weight: bold;  float: left ">warehouse : </p>		 <p style="font-weight: bold; color:red "><?php echo $detail->khohange ?></p> </br>
					<p style="font-weight: bold;  float: left ">sale price : </p>		 <p style="font-weight: bold; color:red "> <?php echo $detail->giabane ?></p> </br>
					<?php } ?>
			</div>
		</div>			
	</div>
	
	<div id="detail_desp">	
		<div id="desp_dt"><a>Mô tả chung</a></div>
		<div id="param_dt"><a>Thông số kỹ thuật</a></div>	
		<div class="product_detail">
			<?php if ($_SESSION['lang']=="vn") echo $detail->chitiet_v; else echo $detail->chitiet_e;?>
		</div>			
		<div class="desptext">
			<?php if ($_SESSION['lang']=="vn") echo $detail->mota_v; else echo $detail->mota_e;?><br/>
		</div>
	</div>
	<div id="relate_list">
		<h4><?php echo $this->lang->line('detailpr-relates');?></h4>
		<div id="items">
			<?php foreach ($relates as $item)
			{?>
				<div class="item">
					<div class="itemimage">
						<a href="<?php echo base_url();?>sanpham/detail/<?php echo $item->danhmuc_id."-".$item->id."-".$item->alias;?>">
							<?php echo $item->hinhanh;?>
						</a><br />								
					</div>
		            <div class="itemh5"><?php if ($_SESSION['lang']=="vn") echo $item->ten_v; else echo $item->ten_e;?></div>
				</div>
			<?php }?>
			<br class="clear"/>
		</div>
	</div>
</div>