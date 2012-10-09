<div id="center">
					<div id="photo">
						<div id="slideshow-wrapper">
                            <div id="slider" class="nivoSlider">		
                            <img src="images/slide1.jpg" tppabs="" alt="" /><img src="images/slide3.jpg" tppabs="" alt=""  />
                            <img src="images/slide2.jpg"/> <img src="images/slide4.jpg"/>
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