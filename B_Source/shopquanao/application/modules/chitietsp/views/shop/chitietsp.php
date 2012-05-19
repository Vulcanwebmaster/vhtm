


<div class="main-container col2-right-layout">
    <div class="main">
        <div class="breadcrumbs">
            <ul>
                <li class="home"><a href="<?php echo base_url();?>" title="Tới trang chủ">Trang chủ</a>
                    <span>/ </span></li>
                <li class="category53"><strong style="color:#E67817">Chi tiết sản phẩm</strong> </li>
            </ul>
        </div>
        <div class="page-title category-title">
        </div>
        <div class="bg-inner">
            <div class="col-main">
                <div class="col-inner">
                    <!-- ma thieu -->
                    <div class="col-main">
                        <div class="col-inner">
                            <script type="text/javascript">
                                var optionsPrice = new Product.OptionsPrice({ "productId": "192", "priceFormat": { "pattern": "$%s", "precision": 2, "requiredPrecision": 2, "decimalSymbol": ".", "groupSymbol": ",", "groupLength": 3, "integerRequired": 1 }, "includeTax": "false", "showIncludeTax": false, "showBothPrices": false, "productPrice": 110, "productOldPrice": 110, "priceInclTax": 110, "priceExclTax": 110, "skipCalculate": 1, "defaultTax": 0, "currentTax": 0, "idSuffix": "_clone", "oldPlusDisposition": 0, "plusDisposition": 0, "oldMinusDisposition": 0, "minusDisposition": 0 });
                            </script>
                            <div id="messages_product_view">
                            </div>
                            <div class="product-view">
                                <div class="product-essential">                                
							                                
                                    <div class="product-shop">
                                        <div class="product-name" >
                                            <h1 style="padding:3px 0 3px 10px;color:orange;background-color:#595959; border:solid 1px black; border-radius:5px"><?php echo $inf->name;?></h1>
                                            <?php $this->load->library('session');
                                            	if ($this->session->userdata('added'))
                                            	{
                                            		echo '<p style="padding-top:10px; color:orange">Đã thêm vào giỏ hàng thành công</p>';
                                            		$this->session->unset_userdata('added');
                                            	}
                                            ?>
                                        </div>
                                                                              
                                        <p class="availability in-stock" style="text-transform:uppercase; padding:0 0 5px 0">
                                            Tình trạng: 
                                            
                                            <ul style="font-size: 12px; font-style: italic; margin-bottom: 20px; padding-left:20px">
                                            	<?php
														foreach ($kholist as $index => $kho) 
														{
															$tinhtrang =  $kho['total'] == 0 ? "<span style='color:red;'>Hết hàng<span>" : $kho['total']; 
															echo "<li><b>". $kho['kho_name']. " </b> : " . $tinhtrang ."</li>";
														}
                                            	?>
                                            </ul>
                                        <!--p class="availability in-stock">Availability: <span>In stock</span></p-->
                                        <div style="border:solid 1px silver; border-radius:7px; padding:10px; height:50px">
	                                        <div class="price-box" style="float:left">
	                                            <span class="regular-price" id="product-price-192"><b>Giá: </b><span class="price"><?php echo $this->MKaimonokago->format_price($inf->price);?> VNĐ</span>
	                                            </span>
	                                        </div>
	                                        <div class="product-options-bottom" style="float:right">
	                                            <div class="add-to-cart">
	                                                <a title="Add to Cart" class="button btn-cart" href="<?php echo base_url();?>index.php/welcome/cart/<?php echo $inf->id;?>" style="text-decoration:none">
	                                                    <span><span>Thêm vào giỏ</span></span>
	                                                </a>
	                                            </div>
	                                        </div>
	                                    </div>
                                        <div class="short-description">
                                            <h2 style="color: #E67817;">
                                                Mô tả</h2>
                                            <div class="std" style="border-bottom:dotted 1px silver">
                                            	<?php echo substr($inf->shortdesc,0,200);?>
                                                <!-- p>
                                                    Feminine and romantic, this beautiful gold and rhodium-plated ring features two
                                                    entwined hearts, symbolising unity and love. The on-trend mixture of Crystal Golden
                                                    Shadow, clear crystal pave and two different platings adds a modern touch...</p -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-img-box">
                                        <p class="product-image">
                                            <div id="wrap" style="top: 0px; z-index: 99; position: relative;">
                                                <a href="<?php echo convert_image_path($inf->image);?>"
                                                    class="cloud-zoom" id="zoom1" rel="position:'right',showTitle:1,titleOpacity:0.5,lensOpacity:0.5,adjustX: 10, adjustY:-4"
                                                    style="position: relative; display: block;">
                                                    <img src="<?php echo $this->MKaimonokago->get_link_image($inf->image);?>" alt="" title="<?php echo $inf->name;?>" style="width:267px; height:267px;display: block;"/>
                                                </a>
                                                <div class="mousetrap" style="background-image: initial; background-attachment: initial;
                                                    background-origin: initial; background-clip: initial; background-color: rgb(255, 255, 255);
                                                    opacity: 0; z-index: 99; position: absolute; width: 267px; height: 267px; left: 0px;
                                                    top: 0px; cursor: move; background-position: initial initial; background-repeat: initial initial;">
                                                </div>
                                            </div>
                                        </p>
                                        <div class="more-views">
                                            <div class="slideshow-wrapper">
                                                <div id="slideshow_moreview" class="slideshow moreview">
                                                    <div class="slideshow-box">
                                                        <h2>
                                                            More Views</h2>
                                                        <ul class="products-grid" style="width: 76px; top: 0px; left: 0px;">
                                                            <li><a href=""
                                                                class="cloud-zoom-gallery" title="" rel="useZoom: 'zoom1', smallImage: 'http://demo.emthemes.com/casualwear/media/catalog/product/cache/1/image/267x/9df78eab33525d08d6e5fb8d27136e95/u/n/untitled-6.png' ">
                                                                <img src="<?php echo $this->MKaimonokago->get_link_image($inf->image);?>" style="width:64px; height:64px"
                                                                    alt="">
                                                            </a></li>
                                                        </ul>
                                                    </div>
                                                    <a href="#" class="previous">Previous</a> <a href="#" class="next">Next</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clearer">
                                    </div>
                                </div>
                                <div class="product-collateral">
                                    <div class="box-collateral box-description">
                                        <h2 style="color: #E67817;">
                                            Chi tiết sản phẩm</h2>
                                        <div class="std" style=" padding:10px;background-color:white;background-image:url('<?php echo base_url();?>assets/women_files/des-bg.png'); background-repeat:repeat-x;border:solid 1px silver; border-radius:5px; min-height:200px; width:620px">
                                                        	<?php echo $inf->longdesc;?>                                                                                                                       
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-right sidebar" style="padding:30px 10px 0 45px; background-image:url('<?php echo base_url();?>assets/women_files/right-bg.png'); background-repeat:repeat-y">
                <div class="block block-cart">
                    <div class="block-title">
                        <strong><span>Giỏ hàng</span></strong>
                    </div>
                    <div class="block-content">
                    	<?php if (isset($_SESSION['cart'])){
                    		$count=0;
												foreach ($_SESSION['cart'] as $PID => $row){	
													$count++;
												}
												if ($count>0)
												echo '<h3 style="width:100%; text-align:center; text-transform:none"><span style="color:red; text-weight:bold; font-size:40px">'.$count.'</span> máº·t hÃ ng</h3>';
												else 
												echo '<p class="empty">Chưa có mặt hàng nào trong giỏ hàng của bạn</p>';
                    	}
                    	else echo '<p class="empty">Chưa có mặt hàng nào trong giỏ hàng của bạn</p>';
												?>
						<?php 
							if (isset($_SESSION['totalprice']))
							{
							$TOTALPRICE = $_SESSION['totalprice'];
												$TOTALPRICE = number_format($TOTALPRICE,2,'.',',');
												$total_data = array('name' => 'total', 'id'=>'total', 'value' => $TOTALPRICE);
												
												echo '<p style="text-align:center">Tá»•ng giÃ¡:  <label style="text-align:center; font-size:15px; color:#fe4201">'.$TOTALPRICE.'</label>'.lang('webshop_currency_symbol').'</p>';
												//echo "<td colspan='2'>"."$TOTALPRICE ".form_hidden($total_data).lang('webshop_currency_symbol')."</td>\n";
							}
						?>
                        
                    </div>
                </div>
                <div class="block block-list block-viewed">
                    <div class="block-title">
                        <strong><span>Sản phẩm liên quan</span></strong>
                    </div>
                    <div class="block-content">
                    	<ul>
                    		<?php 
                    			foreach($other as $item) {
                    				echo '<li>';
                    				echo '<a href="'.base_url().'index.php/chitietsp/get_inf/'.$item->id.'" title=""
                                                            class="product-image" style="margin-bottom:10px">                                                            
                                                            <img style="margin-bottom:10px" src="'.$this->MKaimonokago->get_link_image($item->image).'"
                                                                width="199" height="199" alt=""></a>';
                    				echo '<h3 class="product-name">
                                                            <a href="'.base_url().'index.php/chitietsp/get_inf/'.$item->id.'" title="">'.$item->name.'
                                                                </a></h3>';
                    				
                    				echo '</li>';
                    			}
                    		
                    		?>
                    	</ul>
                    	
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
