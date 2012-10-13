<?php $newmodel=new CI_Model();?>
<div id="left">
			<div  class="bodermove" style="margin-left:10px;">
					<h4 class="title1"><?php echo $this->lang->line('left-danhmuc');?></h4>
					<ul id="list">
						<?php foreach ($categories as $category)
						{
							if ($lang=="vn") 
							{?>
								<li class="slidecontrol"><a <?php if (count($newmodel->getListByColumn('danhmuc','parent_id',$category->id))==0) echo 'href="'.base_url().'sanpham/category/'.$category->id.'"';?> class="type2" style="cursor:pointer"><?php echo $category->ten_v; ?></a>	
									<div class="slidemove">
										<ul id="inside">
											<?php 
												$listlevel2=$newmodel->getListByColumn('danhmuc','parent_id',$category->id);
												foreach ($listlevel2 as $level2)
												{?>
													<li><a class="menuleft-lv2" href="<?php echo base_url()?>sanpham/category/<?php echo $level2->id?>"><?php echo $level2->ten_v;?></a></li>
												<?php }
											?>
										</ul>
									</div>
								</li>
							<?php }
							else {?>
								<li class="slidecontrol"><a <?php if (count($newmodel->getListByColumn('danhmuc','parent_id',$category->id))==0) echo 'href="'.base_url().'sanpham/category/'.$category->id.'"';?> class="type2" style="cursor:pointer"><?php echo $category->ten_e;?></a>
									<div class="slidemove">
										<ul id="inside">
											<?php $newmodel=new CI_Model();
												$listlevel2=$newmodel->getListByColumn('danhmuc','parent_id',$category->id);
												foreach ($listlevel2 as $level2)
												{?>
													<li><a class="menuleft-lv2"  href="<?php echo base_url()?>sanpham/category/<?php echo $level2->id?>"><?php echo $level2->ten_e;?></a></li>
												<?php }
											?>
										</ul>
									</div>
								</li>
								<?php }
						}?>
					</ul>
					<div class="bottomh4"><img src="<?php echo base_url();?>assets/5sao/images/bth4.jpg" /></div>
				</div>
                    <div class="bodermove" id="prnew">
                        <div class="title2"><h4><?php echo $this->lang->line('left-spbanchay');?></h4></div>
                        <marquee direction="down" behavior="alternate"  scrollamount="2"  loop="-1" onmouseover="this.stop()" scrollamount="2" onmouseout="this.start()" height="300"  width="182" style="margin:4px 0 10px 0">
                           <?php foreach ($list_spbanchay as $spbc)
                           {?>
                          		<div class="pr-img">
                          			<?php echo $spbc->hinhanh;?>
                          			<h4 style="text-align:center; font-weight:bold; margin:5px"><?php if ($lang=="vn") echo $spbc->ten_v; else echo $spbc->ten_e;?></h4>
	                           </div>
                           <?php }?>
                        </marquee>
                        <div class="bottomh4"><img src="<?php echo base_url();?>assets/5sao/images/bth4.jpg" /></div>
                      </div>
                      <div  class="bodermove" style="margin-left:9px">
                    <h4 class="title3" style=" padding-top:10px">Thư viện ảnh</h4>
                	
                	<style>
                		.pr-img p img{width:170px !important; height:131px !important}
                	</style>
                	 <marquee direction="down" behavior="alternate" scrollamount="2"  loop="-1" onmouseover="this.stop()" scrollamount="2" onmouseout="this.start()" height="300" style="margin:-8px 0 5px 0">
                	 	<?php foreach ($list_thuvienanh as $tva)
                	 	{ ?>
                	 		<div class="pr-img">
                	 			<?php echo $tva->file;?>
                	 		</div>
                	 	<?php }?>
                    </marquee>
                      <div class="bottomh4"><img src="<?php echo base_url();?>assets/5sao/images/bth4.jpg" /></div>          
                </div>	
					
				</div>