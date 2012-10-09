<div id="center">
					<div id="discount">
						<img src="<?php echo base_url();?>assets/5sao/images/discount.png" alt="" width="121" height="119" border="0" usemap="#Map" class="transparent" />
						<map name="Map">
						  <area shape="circle" coords="61,57,55" href="#">
						</map>
					</div>
					<div id="photo">
						<div id="slideshow-wrapper">
                            <div id="slider" class="nivoSlider">		
                            <img src="<?php echo base_url();?>assets/5sao/images/slide1.jpg" tppabs="" alt="" /><img src="<?php echo base_url();?>assets/5sao/images/slide3.jpg" tppabs="" alt=""  />
                            <img src="<?php echo base_url();?>assets/5sao/images/slide2.jpg"/> <img src="<?php echo base_url();?>assets/5sao/images/slide4.jpg"/>
                            </div>                           
                          </div>
					</div>
					<div id="items">
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
						<?php }?>
					</div>
				</div>