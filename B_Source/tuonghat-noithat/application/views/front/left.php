<?php 
	$newModel=new CI_Model();
?>
<div class="nav">
		<!--menu vertical desplegable-->
        <div class="line">
            <div class="unit">
                <div class="navMenu">
                    <ul class="menuLevel1">            
					<?php $model=new CI_Model();
					//var_dump($parents);die();
					if(isset($parents))
					{
						for ($i=0;$i<count($parents);$i++)
						{
								$listChildren=$newModel->getListByColumn('tn_categories','category_parent_id',$parents[$i]->category_id);
								if(count($listChildren)>0)
								{
									?>
										<li class="menuLevel1"> 
											<a><?php echo $parents[$i]->category_name; ?></a>
										<?php
											if (isset($listChildren))
											{ ?>
												<ul class="menuLevel2">
										<?php	foreach($listChildren as $child)
												{ ?>
									            	<li><a href="<?php echo base_url() ?>danh-muc/<?php echo $parents[$i]->category_id."-".$parents[$i]->alias.'.htm' ?>">
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
										<li class="menuLevel1"> 
											<a href="<?php echo base_url() ?>danh-muc/<?php echo $parents[$i]->category_id."-".$parents[$i]->alias.'.htm' ?>">
												<?php echo $parents[$i]->category_name; ?>
											</a>
				                		</li>
			            			<?php	
								}
						}
					}
		            ?>          
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