
<div id="center">
					<div id="photo">
						<!--<div id="slideshow-wrapper">
                            <div id="slider" class="nivoSlider">		
	                            <img src="<?php echo base_url();?>assets/5sao/images/slide1.jpg" tppabs="" alt="" />
	                            <img src="<?php echo base_url();?>assets/5sao/images/slide3.jpg" tppabs="" alt=""  />
	                            <img src="<?php echo base_url();?>assets/5sao/images/slide2.jpg"/> 
	                            <img src="<?php echo base_url();?>assets/5sao/images/slide4.jpg"/>
                            </div>                           
                       </div>-->
                       		<div id="slideshow-wrapper">
					        	<div id="slider" class="nivoSlider">	
					        		<?php foreach ($list_slide as $slide)
									{
										 echo $slide->anh1;
										 echo $slide->anh2;
										 echo $slide->anh3;
										 echo $slide->anh4;
									}?>
					            </div>                           
					        </div>
					</div>
					<div id="items">
					<?php if ($_SESSION['lang']=="vn") 
						{?>
						<p id="newpr">Sản phẩm mới</p>
					<?php } else {?>
						<p id="newpr">New Product</p>
					<?php } ?>
					  <?php foreach ($list as $item)
						{?>
							<div class="item">
								<div class="itemimage">
									<a href="<?php echo base_url();?>sanpham/detail/<?php echo $item->danhmuc_id."-".$item->id."-".$item->alias;?>">
										<?php echo $item->hinhanh;?>
									</a>							
								</div>
					            <div class="itemh5"><?php if ($_SESSION['lang']=="vn") echo $item->ten_v; else echo $item->ten_e;?></div>
							</div>
						<?php }?><br clear="both"/>
					</div>
					<div align="center" style="height:50px; padding-top:10px">
						<?php echo $this->pagination->create_links();?>
					</div>
				</div>
				

<script type="text/javascript">
	$('#menu-trangchu').parent().addClass('currentmenu');
	$('#bg_itemmenu_1').addClass('styleshow');
	
	
</script>
