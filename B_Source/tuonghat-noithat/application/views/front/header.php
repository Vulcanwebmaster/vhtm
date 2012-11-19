<input name="urlSubscNewsletterPopUp" value="" type="hidden">	
	<!--logo-->
	<div class="logo">		
		<h1>
            <a href="index.htm" title="ZARA HOME">
                <span class="offleft">ZARA HOME</span>
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
                                    	<form method="get" action="" name="CatalogSearchForm">
                                        	<input type="hidden" name="storeId" value="84009527">
                                            <input type="hidden" name="catalogId" value="80279977">
                                            <input type="hidden" name="langId" value="-15">
                                            <input type="hidden" name="usarCookie" value="0">
                                            <input type="text" class="textField searchTextField placeholder" id="search" name="searchTerm" size="18">
                                            <input type="submit" id="WC_searchForm_button_1" name="searchBtn" class="button searchButton" value="">
                                       </form>
                                     </div>
                                     <li><a class="menuUserCountry" href="#">UNITED STATES</a></li>
                                   	 <li>|</li> 
                                     <li><a class="logonLinkNoAjax" href="#">Đăng nhập</a></li> 
                                     <li>|</li> 
                                     <li id="basket" class="basket">
                                     	<div id="miniShopCart" class="unit size1of1">                                        	
                                            	<a id="shoppingCartBar" href="#"><img id="bag" src="<?php echo base_url()?>assets/tuongnhatp2/images/ico_shopping_bag.png">Basket <span>(<span id="miniShopCartItems">0</span><span id="miniShopCartItemsQuantity">Items)</span></span></a>                                 
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