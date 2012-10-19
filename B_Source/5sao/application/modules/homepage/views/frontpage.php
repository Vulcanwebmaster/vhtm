<script type="text/javascript">
	$('#menu-trangchu').parent().addClass('currentmenu');
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
									<a href="<?php echo base_url();?>sanpham/<?php echo $item->alias;?>">
										<?php echo $item->hinhanh;?>
									</a>							
								</div>
					            <div class="itemh5"><?php if ($lang=="vn") echo $item->ten_v; else echo $item->ten_e;?></div>
							</div>
						<?php }?><br clear="both"/>
					</div>
					<div align="center">
						<?php echo $this->pagination->create_links();?>
					</div>
				</div>