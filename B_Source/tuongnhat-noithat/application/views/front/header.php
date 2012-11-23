<input name="urlSubscNewsletterPopUp" value="" type="hidden">	
	<!--logo-->
	<div class="logo">		
		<h1>
            <a href="<?php echo base_url();?>" title="Tường Nhật">
                <img src="<?php echo base_url()?>assets/tuongnhatp2/images/logo_Zara_Home.png" alt="HOME">
            </a>
		</h1>		
	</div>
	<!--/logo-->
	<div class="page">		
		<!--main-->
		<div class="main">		
		    <div class="head">		     		    				
                <div class="line">
                    <div class="size1of1 unit">	
                        <div class="menuUser" id="ajaxUserMenuDivId">
                        	<div>
                            	<ul class="listH">
                                	<div class="search">
                                    	<form method="get" action="<?php echo base_url()?>sanpham/timkiem/0" name="CatalogSearchForm">
                                            <input type="text" class="textField searchTextField placeholder" id="search" name="searchTerm" size="18"/>
                                            <input type="submit" id="searchBtn" name="searchBtn" class="button searchButton" value=" "/>
                                       </form>
                                     </div>
                                     <li>
                                     	<?php if (isset($_SESSION['front_user_fullname']))
                                     	{?>
                                     		<p style="padding:0">Xin chào <strong><?php echo $_SESSION['front_user_fullname'];?></strong> &ndash;
                                     			<a href="<?php echo base_url();?>dangnhap/logOut"><?php echo $this->lang->line('header-dangxuat');?></a>
                                     		</p>
                                     	<?php }
                                     	else {?>
                                     		<a class="logonLinkNoAjax" style="cursor:pointer"><?php echo $this->lang->line('header-dangnhap');?></a>
                                     	<?php }?>
                                     </li> 
                                     <li>|</li> 
                                     <li id="basket" class="basket">
                                     	<div id="miniShopCart" class="unit size1of1">                                        	
                                            	<a id="shoppingCartBar" href="#">
                                            		<img id="bag" src="<?php echo base_url()?>assets/tuongnhatp2/images/ico_shopping_bag.png">
                                            		<?php echo $this->lang->line('header-giohang');?> 
                                            		<span>(<span id="miniShopCartItems"><?php if (isset($_SESSION['basket'])) echo count($_SESSION['basket']);?></span>
                                            		<span id="miniShopCartItemsQuantity">Items)</span>
                                            		</span>
                                            	</a>                                 
                                      	</div>
                                     </li>   
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>											           		                       
		    </div>				
		
			<div class="body">
				<?php $this->load->view('front/content');?>
			</div>
		</div>
	</div>