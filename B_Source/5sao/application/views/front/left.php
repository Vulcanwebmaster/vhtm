<?php $newmodel=new CI_Model();?>

<div id="left">
	<div id="search">
		<?php echo $this->lang->line('menu-timkiem');?>			
			<form class="searchform" action="<?php echo base_url();?>timkiem/doSearch" method="post">
				<input name="search-text" class="t" onfocus="if (this.value == 'Tìm kiếm sản phẩm …') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Tìm kiếm sản phẩm …';}" type="text" name="s" value="Tìm kiếm sản phẩm …" />
				<input class="searchsubmit" type="submit" value="" style="cursor:pointer"/>
			</form>																																																			
	</div>
			<div  class="bodermove" style="margin-top:0px; text-align: left;">
					<h4 class="title1"><?php echo $this->lang->line('left-danhmuc');?></h4>
					<ul id="list">
						<?php 
						foreach ($categories as $category)
						{
							if ($_SESSION['lang']=="vn") 
							{?>
								<li class="slidecontrol" style="display:inline"><a <?php 
									echo 'href="'.base_url().'sanpham/category/'.$category->id."-".$category->alias.'"';?> class="type2" style="cursor:pointer">
									<?php echo $category->ten_v; ?></a>	
									<?php $listlevel2=$newmodel->getListByColumn('danhmuc','parent_id',$category->id);?>
									<?php if (count($listlevel2)>0)
									{?>
									<div class="slidemove">
										<ul class="inside">
											<?php 												
												foreach ($listlevel2 as $level2)
												{?>
													<li><a class="menuleft-lv2" href="<?php echo base_url()?>sanpham/category/<?php echo $level2->id."-".$level2->alias?>"><?php echo $level2->ten_v;?></a></li>
												<?php }
											?>
										</ul>
									</div>
									<?php }?>
								</li>
							<?php }
							else {?>
								<li class="slidecontrol"><a <?php 
									echo 'href="'.base_url().'sanpham/category/'.$category->id."-".$category->alias.'"';?> class="type2" style="cursor:pointer">
									<?php echo $category->ten_e; ?></a>	
									<?php $listlevel2=$newmodel->getListByColumn('danhmuc','parent_id',$category->id);?>
									<?php if (count($listlevel2)>0)
									{?>
									<div class="slidemove">
										<ul class="inside" style="display:none">
											<?php 												
												foreach ($listlevel2 as $level2)
												{?>
													<li><a class="menuleft-lv2" href="<?php echo base_url()?>sanpham/category/<?php echo $level2->id."-".$level2->alias?>"><?php echo $level2->ten_e;?></a></li>
												<?php }
											?>
										</ul>
									</div>
									<?php }?>
								</li>
								<?php }
						}?>
					</ul>
					<div class="bottomh4"><img src="<?php echo base_url();?>assets/5sao/images/bth4.jpg" /></div>
				</div>
                    <div class="bodermove" id="prnew">
                        <div class="title2"><h4><?php echo $this->lang->line('left-spbanchay');?></h4></div>
                        <marquee direction="down"  scrollamount="2"  loop="-1" onmouseover="this.stop()" scrollamount="2" onmouseout="this.start()" height="220"  width="182" style="margin:4px 0 10px 0">&nbsp;
                           <?php foreach ($list_spbanchay as $spbc)
                           {?>
                          		<div class="pr-img">
                          			<a href="<?php echo base_url();?>sanpham/detail/<?php echo $spbc->danhmuc_id."-".$spbc->id."-".$spbc->alias;?>">
                          			<?php echo $spbc->hinhanh;?>
                          			<h4 style="text-align:center; font-weight:bold; margin:5px"><?php if ($lang=="vn") echo $spbc->ten_v; else echo $spbc->ten_e;?></h4>
                          			</a>
	                           </div>
                           <?php }?>
                        </marquee>
                        <div class="bottomh4"><img src="<?php echo base_url();?>assets/5sao/images/bth4.jpg" /></div>
                      </div>
                      <div id="mainmap"  class="bodermove">
                   		<h4 class="title3" style=" margin-top:0px;"><?php echo $this->lang->line('right-bando');?></h4>
                        <div id="map"><iframe width="170" height="145" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=vi&amp;geocode=&amp;q=Khu+%C4%91%C3%B4+th%E1%BB%8B+V%C4%83n+Ph%C3%BA,+ph%C6%B0%E1%BB%9Dng+Ph%C3%BA+La,+qu%E1%BA%ADn+H%C3%A0+%C4%90%C3%B4ng,+th%C3%A0nh+ph%E1%BB%91+H%C3%A0+N%E1%BB%99i+&amp;aq=&amp;sll=20.967153,105.756518&amp;sspn=0.022481,0.042272&amp;g=La+kh%C3%AA+10+h%C3%A0+%C4%91%C3%B4ng+h%C3%A0+n%E1%BB%99i&amp;ie=UTF8&amp;hq=Khu+%C4%91%C3%B4+th%E1%BB%8B+V%C4%83n+Ph%C3%BA,&amp;hnear=Ph%C3%BA+La,+H%C3%A0+%C4%90%C3%B4ng,+H%C3%A0+N%E1%BB%99i,+Vi%E1%BB%87t+Nam&amp;t=m&amp;ll=20.959115,105.765209&amp;spn=0.002906,0.003626&amp;z=16&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=vi&amp;geocode=&amp;q=Khu+%C4%91%C3%B4+th%E1%BB%8B+V%C4%83n+Ph%C3%BA,+ph%C6%B0%E1%BB%9Dng+Ph%C3%BA+La,+qu%E1%BA%ADn+H%C3%A0+%C4%90%C3%B4ng,+th%C3%A0nh+ph%E1%BB%91+H%C3%A0+N%E1%BB%99i+&amp;aq=&amp;sll=20.967153,105.756518&amp;sspn=0.022481,0.042272&amp;g=La+kh%C3%AA+10+h%C3%A0+%C4%91%C3%B4ng+h%C3%A0+n%E1%BB%99i&amp;ie=UTF8&amp;hq=Khu+%C4%91%C3%B4+th%E1%BB%8B+V%C4%83n+Ph%C3%BA,&amp;hnear=Ph%C3%BA+La,+H%C3%A0+%C4%90%C3%B4ng,+H%C3%A0+N%E1%BB%99i,+Vi%E1%BB%87t+Nam&amp;t=m&amp;ll=20.959115,105.765209&amp;spn=0.002906,0.003626&amp;z=16" style="color:#0000FF;text-align:left">Xem Bản đồ cỡ lớn hơn</a></small></div>
                        <div class="bottomh4"><img src="<?php echo base_url();?>assets/5sao/images/bth4.jpg" /></div>
                   	 </div>		
                   	  <div id="mainmap"  class="bodermove">
                   	<?php if ($_SESSION['lang']=="vn"){?>
                    	<h4 class="title3" style=" margin-top:0px;">Thống kê</h4>
                    <?php } else{ ?>
                    	<h4 class="title3" style=" margin-top:0px;">Statistics</h4>
                    <?php } ?>	
                   		
                        <div id="statistics" style="text-align: left">
                        	<ul>
                        	<li><img src="<?php echo base_url(); ?>assets/5sao/images/time.png"/><label>Hôm nay:</label> <?php echo $counting['today'];?></li>
                        	<li><img src="<?php echo base_url(); ?>assets/5sao/images/month.png"/><label>Tháng hiện tại:</label> <?php echo $counting['month'];?></li>
                        	<li><img src="<?php echo base_url(); ?>assets/5sao/images/statistics.png"/><label>Tổng lượt truy cập:</label> <?php echo $counting['total'];?></li>
                        	</ul>                        	
                        </div>
                        <div class="bottomh4"><img src="<?php echo base_url();?>assets/5sao/images/bth4.jpg" /></div>
                   	 </div>		
					
					
				</div>