<?php 
	$newModel=new CI_Model();
?>
<style>
	
</style>
<div class="nav">
		<!--menu vertical desplegable-->
        <div class="line">
            <div class="unit">
                <div class="navMenu">
                    <ul class="menuLevel1">            
					 <?php
					if(isset($parents))
					{
						for ($i=0;$i<count($parents);$i++)
						{
								$listChildren=$newModel->getListByColumn('tn_categories','category_parent_id',$parents[$i]->category_id);
								if(count($listChildren)>0)
								{
									?>
										<li class="menuLevel1"> 
											<a><?php if ($_SESSION['lang'] == 'en') echo $parents[$i]->category_name_e;
													else echo $parents[$i]->category_name_v; ?></a>
										<?php
											if (isset($listChildren))
											{ ?>
												<ul class="menuLevel2">
										<?php	foreach($listChildren as $child)
												{ ?>
									            	<li><a href="<?php echo base_url() ?>danh-muc/<?php echo $child->category_id."-".$child->alias.'.htm' ?>">
								                    		<?php if ($_SESSION['lang'] == 'en') echo $child->category_name_e;
																else echo $child->category_name_v; ?>
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
												<?php if ($_SESSION['lang'] == 'en') echo $parents[$i]->category_name_e;
																else echo $parents[$i]->category_name_v; ?>
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
		<style type="text/css">
	        .nav {
	           background-image:url(<?php echo base_url()?>assets/tuongnhatp2/images/fondomenu.png); 
	           background-repeat:repeat-y;
	           padding: 15px 1px 15px 4px;      
	        }
        </style>
		<div class="line moreInfo">
			<div class="unit">
				<div class="navMenu navMenuInfo info"><li><a style="cursor: pointer">+ INFO</a></li></div>
				<div class="nav_spots navMenu navMenuEspecialGeneric infodown" style="display: none; ">
					<ul class="menuLevel1">       
                        <li><a href="<?php echo base_url()?>dangnhap/registAccount"><?php echo $this->lang->line('dangky');?></a></li>
                    	<li><a id="myStaticShopGuideLink" href="<?php echo base_url() ?>lienhe/send/"><?php echo $this->lang->line('menu-lienhe');?></a></li>
                    </ul>
                <ul class="menuLevel1">   
                     <li><span><?php echo $this->lang->line('menu-thongtin');?></span>
                        <ul class="subLevelhero">
							
	                           	<li><a href="http://facebook.com.vn" class="facebook"></a></li>
	                            <li><a href="http://twitter.com.vn" class="twitter"></a></li>                   
	                            <li><a href="http://movil.com.vn" class="movil"></a></li> 
	                            <center><span class="telefono"><?php if($telefonoInfo) echo $telefonoInfo->info_content ?></center>    
							
                        </ul>
                    </li>  
                </ul>
			</div>
        </div>
      </div> 
	</div>