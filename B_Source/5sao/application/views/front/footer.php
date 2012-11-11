<?php $newmodel=new CI_Model();?>
<div id="footer">
		<div class="footer_top_add">
			<ul>
				<li><a href="<?php echo base_url();?>"><?php echo $this->lang->line('menu-trangchu');?></a></li><li>|</li>
				<li><a href="<?php echo base_url();?>gioithieu"><?php echo $this->lang->line('menu-gioithieu');?></a></li><li>|</li>
				<li><a href="<?php echo base_url();?>sanpham"><?php echo $this->lang->line('menu-sanpham');?></a></li><li>|</li>
				<li><a href="<?php echo base_url();?>baohanh"><?php echo $this->lang->line('menu-baohanh');?></a></li><li>|</li>
				<li><a href="<?php echo base_url();?>tintuc"><?php echo $this->lang->line('menu-tintuc');?></a></li><li>|</li>
               	<li><a href="<?php echo base_url();?>lienhe"><?php echo $this->lang->line('menu-lienhe');?></a></li>
			</ul>
																																																																																					
		</div>		
		<div class="boxfooter_main">            
			<p style="text-align: center; margin:0; padding:0">	
				<span style="font-size:18px;line-height:40px; margin:0; padding-top:0">Công ty cổ phần thiết bị Thái Dương</span><br>	
				<span style="font-size: 13px;">Số 29/3, Khu Cầu Đơ 4, Phường Hà Cầu, Quận Hà Đông, Thành phố Hà Nội<br>	
					Tel/ Fax: 0466861137  - Hotline : 0985.534.534</span><br>	
				<span style="font-size:13px;"> Bản quyền thuộc về Công ty cổ phần thiết bị Thái Dương</span>
			</p>            
			<ul class="back_link">   
				<?php 
				$count=0;
				foreach ($categories as $category)
						{
							if ($count<8)
							{
								if ($lang=="vn") 
								{?>
									<li <?php if ($count==0) ?>><a <?php if (count($newmodel->getListByColumn('danhmuc','parent_id',$category->id))==0) echo 'href="'.base_url().'sanpham/'.$category->alias.'"';?> style="cursor:pointer"><?php echo $category->ten_v; ?></a>	
									</li>
									<?php if ($count<7) echo "<li>|</li>";?>
								<?php }
								else {?>
									<li <?php if ($count==0) echo "style='margin-left:120px'"?>><a <?php if (count($newmodel->getListByColumn('danhmuc','parent_id',$category->id))==0) echo 'href="'.base_url().'sanpham/'.$category->alias.'"';?> style="cursor:pointer"><?php echo $category->ten_e;?></a>
									</li>
									<?php if ($count<5) echo "<li>|</li>";?>
									<?php }
							}
							$count++;
						}?>             
			</ul>            
		</div>           
		<p id="bft">Copyright &copy;. All rights reserved. Design by <a href="http://niw.com.vn/" target="_blank" title="Best Free Templaes">NIW</a></p>	
	</div>