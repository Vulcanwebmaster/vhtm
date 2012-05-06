<?php
if ($this->session->flashdata('conf_msg')){
	echo "<div class='status_box'>";
	echo $this->session->flashdata('conf_msg');
	echo "</div>";
}
?>
<?php 
	$imageinfo = $product['image'];
	$image=convert_image_path($imageinfo);
?>
<div class="main-container col2-right-layout">
	<div class="main">
		<div class="bg-inner">
			<div class="col-main">
				<div class="col-inner">
					<div class="product-view">
						<div class="product-essential">
								<div class="product-shop">
									<div class="product-name">
						                <h1><?php echo $product['name'];?></h1>
						            </div>
						            <p class="availability in-stock">Mã Hàng: <span>#K123H9SC</span></p>
						            <p class="availability in-stock">Tình Trạng: <span>Con Hang</span></p>
						            <p class="email-friend"><a href="http://demo.emthemes.com/casualwear/sendfriend/product/send/id/196/cat_id/48/">Email to a Friend</a></p>
						            <p class="no-rating"><a href="http://demo.emthemes.com/casualwear/review/product/list/id/196/category/48/#review-form">Be the first to review this product</a></p>
						            
									<div class="price-box">
										<p class="availability in-stock"><?php echo $this->lang->line('webshop_price');?> : <span id="product-price-196" class="regular-price"> <span
											class="price"><?php echo  $this->lang->line('webshop_currency_symbol'). $product['price'];?></span> </span></p>
									</div>
									<div class="clear-both"></div>
									<button onclick="productAddToCartForm.submit(this)" class="button btn-cart" title="Add to Cart" type="button"><span><span>Thêm Vào Giỏ Hàng</span></span></button>
									<div class="short-description">
					                    <h2>Mô Tả</h2>
					                    <div class="std"><p><?php echo replace_image_path($product['shortdesc']) . "\n";?></p></div>
					                </div>
								</div>
								<div class="product-img-box">
									<div class="product-image"><div style="top: 0px; z-index: 99; position: relative;" id="wrap">
										<a rel="position:'right',showTitle:1,titleOpacity:0.5,lensOpacity:0.5,adjustX: 10, adjustY:-4" id="zoom1" class="cloud-zoom" href="<?php echo $image;?>" style="position: relative; display: block;">
											<?php
													echo "<img src='".$image."' border='0' align='left' style='display: block;'/>\n";
												?>
										</a>
										<div style="background: none repeat scroll 0% 0% rgb(255, 255, 255); opacity: 0; z-index: 99; position: absolute; width: 267px; height: 267px; left: 0px; top: 0px; cursor: move;" class="mousetrap"></div></div>
										
					   				</div>
										
									<div class="clear-both"></div>
										<div class="more-views">
											<div class="slideshow-wrapper">
												<div class="slideshow moreview" id="slideshow_moreview">
													<div class="slideshow-box">
														<h2>More Views</h2>
														<ul class="products-grid" style="width: 76px;">
															<li><a
																rel="useZoom: 'zoom1', smallImage: '<?php echo $image;?>' "
																title="" class="cloud-zoom-gallery"
																href="<?php echo $image;?>">
																	<img alt=""
																	src="<?php echo $image;?>">
															</a>
															</li>
															<li><a
																rel="useZoom: 'zoom1', smallImage: 'http://demo.emthemes.com/casualwear/media/catalog/product/cache/1/image/267x/9df78eab33525d08d6e5fb8d27136e95/u/n/untitled-9.png' "
																title="" class="cloud-zoom-gallery"
																href="http://demo.emthemes.com/casualwear/media//article-demo1.jpg">
																	<img alt=""
																	src="http://demo.emthemes.com/casualwear/media//article-demo1.jpg">
															</a>
															</li>
							
														</ul>
													</div>
													<a class="previous" href="#">Previous</a> <a class="next" href="#">Next</a>
												</div>
											</div>
										</div>
						
									
								</div>
						</div>
						
						<div class="product-collateral">
							<h2>Chi Tiết</h2>
							<?php echo replace_image_path($product['longdesc']) . "\n";?>
						</div>
						</div>
				</div>
			</div>
			<div class="col-right sidebar">
				<div class="block block-cart">
					<div class="block-title">
						<strong><span>Giỏ Hàng</span> </strong>
					</div>
					<div class="block-content">
						<p class="empty">Bạn chưa có Item nào Trong giỏ.</p>
					</div>
				</div>
				<div class="block block-list block-viewed">
					    <div class="block-title">
					        <strong><span>Hàng Mới Về</span></strong>
					    </div>
					    <div class="block-content">
					        <ol id="recently-viewed-items">
					                    <li class="item odd">
					                <p class="product-name"><a href="http://demo.emthemes.com/casualwear/women-s-pincross-tee.html">women's pincross tee</a></p>
					            </li>
					                    <li class="item even">
					                <p class="product-name"><a href="http://demo.emthemes.com/casualwear/women-s-poverty-tee.html">women's poverty tee</a></p>
					            </li>
					                    <li class="item last odd">
					                <p class="product-name"><a href="http://demo.emthemes.com/casualwear/women-s-shoulder-logo-tee.html">women's shoulder logo tee</a></p>
					            </li>
					                </ol>
					        <script type="text/javascript">decorateList('recently-viewed-items');</script>
					    </div>
					</div>
					<div class="block block-banner">
					    <div class="block-content">
					                    <img alt="Keep your eyes open for our special Back to School items and save A LOT!" title="Keep your eyes open for our special Back to School items and save A LOT!" src="http://demo.emthemes.com/casualwear/skin/frontend/em0015/default/images/media/col_right_callout.jpg">
					            </div>
					</div>
					<script type="text/javascript">
					//&lt;![CDATA[
					    function validatePollAnswerIsSelected()
					    {
					        var options = $$('input.poll_vote');
					        for( i in options ) {
					            if( options[i].checked == true ) {
					                return true;
					            }
					        }
					        return false;
					    }
					//]]&gt;
					</script>
					<div class="block block-poll">
					    <div class="block-title">
					        <strong><span>Hỗ Trợ Trực Tuyến</span></strong>
					    </div>
					</div>
					<div class="block block-tags">
					    <div class="block-title">
					        <strong><span>Popular Tags</span></strong>
					    </div>
					    <div class="block-content">
					        <ul class="tags-list">
					                            <li><a style="font-size:98.333333333333%;" href="http://demo.emthemes.com/casualwear/tag/product/list/tagId/23/">Camera</a></li>
					                            <li><a style="font-size:86.666666666667%;" href="http://demo.emthemes.com/casualwear/tag/product/list/tagId/109/">Hohoho</a></li>
					                            <li><a style="font-size:145%;" href="http://demo.emthemes.com/casualwear/tag/product/list/tagId/27/">SEXY</a></li>
					                            <li><a style="font-size:75%;" href="http://demo.emthemes.com/casualwear/tag/product/list/tagId/61/">Tag</a></li>
					                            <li><a style="font-size:110%;" href="http://demo.emthemes.com/casualwear/tag/product/list/tagId/29/">Test</a></li>
					                            <li><a style="font-size:86.666666666667%;" href="http://demo.emthemes.com/casualwear/tag/product/list/tagId/17/">bones</a></li>
					                            <li><a style="font-size:110%;" href="http://demo.emthemes.com/casualwear/tag/product/list/tagId/12/">cool</a></li>
					                            <li><a style="font-size:86.666666666667%;" href="http://demo.emthemes.com/casualwear/tag/product/list/tagId/184/">cool t-shirt</a></li>
					                            <li><a style="font-size:86.666666666667%;" href="http://demo.emthemes.com/casualwear/tag/product/list/tagId/173/">crap</a></li>
					                            <li><a style="font-size:86.666666666667%;" href="http://demo.emthemes.com/casualwear/tag/product/list/tagId/41/">good</a></li>
					                            <li><a style="font-size:86.666666666667%;" href="http://demo.emthemes.com/casualwear/tag/product/list/tagId/16/">green</a></li>
					                            <li><a style="font-size:86.666666666667%;" href="http://demo.emthemes.com/casualwear/tag/product/list/tagId/5/">hip</a></li>
					                            <li><a style="font-size:75%;" href="http://demo.emthemes.com/casualwear/tag/product/list/tagId/51/">laptop</a></li>
					                            <li><a style="font-size:75%;" href="http://demo.emthemes.com/casualwear/tag/product/list/tagId/70/">nice</a></li>
					                            <li><a style="font-size:75%;" href="http://demo.emthemes.com/casualwear/tag/product/list/tagId/77/">notebook</a></li>
					                            <li><a style="font-size:86.666666666667%;" href="http://demo.emthemes.com/casualwear/tag/product/list/tagId/42/">phone</a></li>
					                            <li><a style="font-size:98.333333333333%;" href="http://demo.emthemes.com/casualwear/tag/product/list/tagId/30/">red</a></li>
					                            <li><a style="font-size:86.666666666667%;" href="http://demo.emthemes.com/casualwear/tag/product/list/tagId/28/">tight</a></li>
					                            <li><a style="font-size:75%;" href="http://demo.emthemes.com/casualwear/tag/product/list/tagId/2/">trendy</a></li>
					                            <li><a style="font-size:86.666666666667%;" href="http://demo.emthemes.com/casualwear/tag/product/list/tagId/4/">young</a></li>
					                    </ul>
					        <div class="actions">
					            <a href="http://demo.emthemes.com/casualwear/tag/list/">View All Tags</a>
					        </div>
					    </div>
					</div>
										</div>
		</div>
	</div>
</div>
