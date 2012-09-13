<?php 
	$newModel=new CI_Model();
	$lang=$this->session->userdata('lang');
?>
	  	<div class="block">
        
			<div id="danhmuc">
				<img src="<?php echo base_url()?>assets/minhchau2/images/top_dm.gif" alt="" width="170" height="12" />
				<p style="text-decoration: none;padding-top:6px">
					<a href="<?php echo base_url() ?>sanpham" style="color:#FFF; text-decoration:none;">
						<?php echo $this->lang->line('left-danhmuc')?>
					</a>
				</p>
			</div>
			<ul id="navigation">
				<?php
					if(isset($parents))
					{ 
						foreach($parents as $parent)
						{
							$num=$newModel->getListByColumn('mc_category','parent_id',$parent->id);
							if(count($num)>0)
							{
								?>
									<li id="color" class="sub-item"> 
									<a href="#"><img src="<?php echo base_url()?>assets/minhchau2/images/tamgiac.gif">
										<?php
											if ($lang=='vn') 
												echo $parent->namev;
											else echo $parent->namee;
										?>
									</a>
									<?php
										$childs=$newModel->getListByColumn('mc_category','parent_id',$parent->id);
										if (isset($childs))
										{
											foreach($childs as $child)
											{ 
												?>
								                	<div class="main-item">
								                    	<a href="<?php echo base_url() ?>sanpham/view/<?php echo $child->id ?>"><img src="<?php echo base_url()?>assets/minhchau2/images/arrow12.gif">
								                    		<?php
								                    			if ($lang=='vn') 
								                    				echo $child->namev;
																else echo $child->namee;
								                    		?>
								                    	</a><br/>
								                    </div>
					                			<?php
											}
										}
				                	?>
			                		</li>
		            			<?php
							}
							else 
							{
								?>
									<li id="color" class="sub-item"> 
									<a href="<?php echo base_url() ?>sanpham/view/<?php echo $parent->id ?>"><img src="<?php echo base_url()?>assets/minhchau2/images/tamgiac.gif">
										<?php
											if($lang=='vn') 
												echo $parent->namev;
											else echo $parent->namee;
										?>
									</a>
			                		</li>
		                		<?php
							}
						}
					}
		            ?>
				
			</ul>
            
		</div>
        <img src="<?php echo base_url()?>assets/images/bot_bg.gif" alt="" width="170" height="10" style="margin-bottom:5px" />
        <!--------------end danh mục----------------------->
        
        <!---------------begin đối tác----------------------->
		<div  id="doitac">
        	<div id="danhmuc" ><img src="<?php echo base_url()?>assets/minhchau2/images/top_dm.gif" alt="" width="170" height="12" /><p style="padding-top:6px"><?php echo $this->lang->line('left-doitac') ;?></p></div>
            <div style="margin-top:5px">
            	<img src="<?php echo base_url()?>assets/minhchau2/images/dt1.jpg" width="168px" height="120px"/>
               	<img src="<?php echo base_url()?>assets/minhchau2/images/dt2.jpg" width="168px" height="120px"/>
            </div>
        </div>
        <img src="<?php echo base_url()?>assets/minhchau2/images/bot_bg.gif" alt="" width="170" height="10" />
