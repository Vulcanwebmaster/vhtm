<?php 
	$newModel=new CI_Model();
?>
<div class="nav">
		<!--menu vertical desplegable-->
        <div class="line">
            <div class="unit">
                <div class="navMenu">
                    <ul class="menuLevel1">            
<!------<<<<<<< .mine Trung-------->
					<?php
					//var_dump($parents);die();
					if(isset($parents))
					{
						for ($i=0;$i<count($parents);$i++)
						{
								$num=$newModel->getListByColumn('tn_categories','category_parent_id',$parents[$i]->category_id);
								if(count($num)>0)
								{
									?>
										<li> 
										<a href="<?php echo base_url() ?>sanpham/view/<?php echo $parents[$i]->category_id."-".$parents[$i]->alias ?>">
											<?php
													echo $parents[$i]->category_name;
											?>
										</a>	
										
										<?php
											$childs=$newModel->getListByColumn('tn_categories','category_parent_id',$parents[$i]->category_id);
											if (isset($childs))
											{ ?>
												<ul class="menuLevel2">
										<?php	foreach($childs as $child)
												{ ?>
									            	<li><a href="<?php echo base_url() ?>sanpham/view/<?php echo $child->category_id."-".$child->alias ?>">
									                    		<?php echo $child->category_name; ?>
									                    </a>
									                </li>
						                  <?php }?>
						                	  </ul>
									 <?php }  ?>
				                		</li>
			            		<?php
		            			}
		            			else
								{
									?>
										<li> 
											<a href="<?php echo base_url() ?>sanpham/view/<?php echo $parents[$i]->category_id."-".$parents[$i]->alias ?>">
												<?php echo $parents[$i]->category_name; ?>
											</a>
				                		</li>
			            			<?php	
								}
						}
					}
		            ?>          
<!-- End Trung=======-->
<!---------- A Mạnh
                    	<?php foreach ($listCategories as $category)
                    	{?>
                    		<li class=""><a href="html/halloween.htm"><?php echo $category->category_name;?></a></li>
                    	<?php }?>            
                        <!-- Begin ItxContentSpotDisplay.jsp (ZH_ESpot_GiftCardMenu) --><!-- End ItxContentSpotDisplay.jsp (ZH_ESpot_GiftCardMenu) -->        
<!--r1086------------>
                    </ul>
                </div>
            </div>
        </div>
		<div class="line">
			<div class="unit">
				<div id="ZH_KIDS_US">
					<a href="html/80289977.htm" title="">
						<img src="<?php echo base_url()?>assets/tuongnhatp2/images/zara_home_kids_button.png">
					</a>
				</div>
			</div>
		</div>
		<style type="text/css">
	        .nav {
	           background-image:url(<?php echo base_url()?>assets/tuongnhatp2/images/fondomenu.png); 
	           background-repeat:repeat-y;
	           padding: 15px 1px 15px 4px;      
	        }
        </style>
		<div class="line moreInfo">
			<div class="unit">
				<div class="navMenu navMenuInfo info"><li><a href="#">+ INFO</a></li></div>
				<div class="nav_spots navMenu navMenuEspecialGeneric infodown" style="display: none; ">
					<ul class="menuLevel1">       
                        <li><a href="#">Đăng ký</a></li>
                    	<li><a id="myStaticShopGuideLink" href="#">Liên hệ</a></li>
                        <li><a href="#">Cửa hàng</a></li>                    
                    	<li><a id="myStaticShopGuideLink" href="#">Báo chí</a></li>                     
                    </ul>
                <ul class="menuLevel1">   
                   <li><a id="myStaticShopGuideLink" href="#">Hướng dẫn mua hàng</a></li>
                	<li><a href="#">Chính sách bảo mật</a></li>   
                     <li><span>Liên hệ cho chúng tôi</span>
                        <ul class="subLevelhero">
                       
                            <li><a href="#" class="facebook" target="_blank"></a></li>
                            <li><a href="#" class="twitter" target="_blank"></a></li>                    
                            <li><a href="#" class="movil"></a></li>  
                            <li><span class="telefono">TEL: 1-877-550-1107</span></li>              
                      
                        </ul>
                    </li>              
                </ul>
			</div>
        </div>
      </div> 
	</div>