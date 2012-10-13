<script type="text/javascript">
	$('#menu-trangchu').css('color','#D9B24A');
</script>

<div id="center">
					<div id="photo">
						<div id="slideshow-wrapper">
                            <div id="slider" class="nivoSlider">		
                            <img src="<?php echo base_url();?>assets/5sao/images/slide1.jpg" tppabs="" alt="" /><img src="<?php echo base_url();?>assets/5sao/images/slide3.jpg" tppabs="" alt=""  />
                            <img src="<?php echo base_url();?>assets/5sao/images/slide2.jpg"/> <img src="<?php echo base_url();?>assets/5sao/images/slide4.jpg"/>
                            </div>                           
                          </div>
					</div>
					<div id="items">
						<p id="newpr">Sản phẩm mới</p>
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
						<?php }?><br clear="both"/>
					</div>
				</div>