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
            <h1 style="color:#e67817">
                Chi tiết sản phẩm</h1>
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
                                        <div class="product-name">
                                            <h1 style="color:#f65719"><?php echo $inf->name;?></h1>
                                        </div>
                                        <p class="email-friend">
                                            <a href="http://demo.emthemes.com/casualwear/sendfriend/product/send/id/192/cat_id/53/">
                                                Gửi mail tới bạn bè</a></p>
                                        <p class="no-rating">
                                            <a href="http://demo.emthemes.com/casualwear/review/product/list/id/192/category/53/#review-form">
                                                Be the first to review this product</a></p>
                                        <p class="availability in-stock">
                                            Tình Trạng: 
                                            <br/>
                                            <ul style="font-size: 12px; font-style: italic; margin-bottom: 20px;">
                                            	<?php
														foreach ($kholist as $index => $kho) 
														{
															$tinhtrang =  $kho['total'] == 0 ? "<span style='color:red;'>Hết Hàng<span>" : $kho['total']; 
															echo "<li><b>". $kho['kho_name']. " </b> : " . $tinhtrang ."</li>";
														}
                                            	?>
                                            </ul>
                                        <!--p class="availability in-stock">Availability: <span>In stock</span></p-->
                                        <div class="price-box">
                                            <span class="regular-price" id="product-price-192"><b>Giá: </b><span class="price"><?php echo $inf->price;?> VNĐ</span>
                                            </span>
                                        </div>
                                        <div class="product-options-bottom">
                                            <div class="add-to-cart">
                                                <button type="button" title="Add to Cart" class="button btn-cart" onclick="productAddToCartForm.submit(this)">
                                                    <span><span>THêm Vào Giỏ</span></span></button>
                                            </div>
                                        </div>
                                        <div class="short-description">
                                            <h2 style="color: #E67817;">
                                                Mô Tả</h2>
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
                                                    <img src="<?php echo convert_image_path($inf->image);?>"
                                                        alt="" title="<?php echo $inf->name;?>" style="width:267px; height:267px;display: block;">
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
                                                            <li><a href="http://demo.emthemes.com/casualwear/media/catalog/product/cache/1/image/800x800/9df78eab33525d08d6e5fb8d27136e95/u/n/untitled-6.png"
                                                                class="cloud-zoom-gallery" title="" rel="useZoom: 'zoom1', smallImage: 'http://demo.emthemes.com/casualwear/media/catalog/product/cache/1/image/267x/9df78eab33525d08d6e5fb8d27136e95/u/n/untitled-6.png' ">
                                                                <img src="<?php echo convert_image_path($inf->image);?>" style="width:64px; height:64px"
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
                                            Chi Tiết Sản Phẩm</h2>
                                        <div class="std">
                                            <table border="0">
                                                <tbody>
                                                    <tr valign="top">                                                        
                                                        <td style="text-align:justify">
                                                        	<?php echo $inf->longdesc;?>                                                                                                                       
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="box-collateral box-up-sell">
                                        <h2 style="color: #E67817;">
                                            Sản Phẩm Tương Tự</h2>
                                        <table class="products-grid" id="upsell-product-table">
                                            <tbody>
                                                <tr class="first last odd">
                                                	<?php foreach($other as $item)
                                                	{
                                                		echo '<td>
                                                        <a href="" title=""
                                                            class="product-image">
                                                            <img src="'.convert_image_path($item->image).'"
                                                                width="199" height="199" alt=""></a>
                                                        <h3 class="product-name">
                                                            <a href="#" title="">'.$item->name.'
                                                                </a></h3>
                                                        <div class="price-box">
                                                            <span class="regular-price" id="product-price-189-upsell"><span class="price">$'.$item->price.'</span>
                                                            </span>
                                                        </div>
                                                    </td>';
                                                	}?>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <script type="text/javascript">                                            decorateTable('upsell-product-table')</script>
                                    </div>
                                    <div class="box-collateral box-tags">
                                        <h2 style="color: #E67817;">
                                            Product Tags</h2>
                                        <form id="addTagForm" action="http://demo.emthemes.com/casualwear/tag/index/save/product/192/uenc/aHR0cDovL2RlbW8uZW10aGVtZXMuY29tL2Nhc3VhbHdlYXIvd29tZW4vd29tZW4tcy1zaG91bGRlci1sb2dvLXRlZS5odG1s/"
                                        method="get">
                                        <div class="form-add">
                                            <label for="productTagName">
                                                Add Your Tags:</label>
                                            <div class="input-box">
                                                <input type="text" class="input-text required-entry" name="productTagName" id="productTagName">
                                            </div>
                                            <button type="button" title="Add Tags" class="button" onclick="submitTagForm()">
                                                <span><span>Add Tags</span> </span>
                                            </button>
                                        </div>
                                        </form>
                                        <p class="note">
                                            Use spaces to separate tags. Use single quotes (') for phrases.</p>
                                        <script type="text/javascript">
    //<![CDATA[
                                            var addTagFormJs = new VarienForm('addTagForm');
                                            function submitTagForm() {
                                                if (addTagFormJs.validator.validate()) {
                                                    addTagFormJs.form.submit();
                                                }
                                            }
    //]]>
                                        </script>
                                    </div>
                                </div>
                            </div>
                            <script type="text/javascript">
                                var lifetime = 3600;
                                var expireAt = Mage.Cookies.expires;
                                if (lifetime > 0) {
                                    expireAt = new Date();
                                    expireAt.setTime(expireAt.getTime() + lifetime * 1000);
                                }
                                Mage.Cookies.set('external_no_cache', 1, expireAt);
                            </script>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-right sidebar">
                
                <div class="block block-cart">
                    <div class="block-title">
                        <strong><span>shopping cart</span></strong>
                    </div>
                    <div class="block-content">
                        <p class="empty">
                            You have no items in your shopping cart.</p>
                    </div>
                </div>
                <div class="block block-list block-viewed">
                    <div class="block-title">
                        <strong><span>Recently Viewed Products</span></strong>
                    </div>
                    <div class="block-content">
                        <ol id="recently-viewed-items">
                            <li class="item last odd">
                                <p class="product-name">
                                    <a href="http://demo.emthemes.com/casualwear/all-star-reverse-print.html">all star reverse
                                        print</a></p>
                            </li>
                        </ol>
                        <script type="text/javascript">                            decorateList('recently-viewed-items');</script>
                    </div>
                </div>
                <div class="block block-banner">
                    <div class="block-content">
                        <img src="<?php echo base_url();?>assets/women_files/col_right_callout.jpg" style="width: 100%"
                            title="Keep your eyes open for our special Back to School items and save A LOT!"
                            alt="Keep your eyes open for our special Back to School items and save A LOT!">
                    </div>
                </div>
                <script type="text/javascript">
//<![CDATA[
                    function validatePollAnswerIsSelected() {
                        var options = $$('input.poll_vote');
                        for (i in options) {
                            if (options[i].checked == true) {
                                return true;
                            }
                        }
                        return false;
                    }
//]]>
                </script>
                <div class="block block-poll">
                    <div class="block-title">
                        <strong><span>Community Poll</span></strong>
                    </div>
                    <form id="pollForm" action="http://demo.emthemes.com/casualwear/poll/vote/add/poll_id/2/"
                    method="post" onsubmit="return validatePollAnswerIsSelected();">
                    <div class="block-content">
                        <p class="block-subtitle">
                            What is your favorite Magento feature?</p>
                        <ul id="poll-answers">
                            <li class="odd">
                                <input type="radio" name="vote" class="radio poll_vote" id="vote_5" value="5">
                                <span class="label">
                                    <label for="vote_5">
                                        Layered Navigation</label></span> </li>
                            <li class="even">
                                <input type="radio" name="vote" class="radio poll_vote" id="vote_6" value="6">
                                <span class="label">
                                    <label for="vote_6">
                                        Price Rules</label></span> </li>
                            <li class="odd">
                                <input type="radio" name="vote" class="radio poll_vote" id="vote_7" value="7">
                                <span class="label">
                                    <label for="vote_7">
                                        Category Management</label></span> </li>
                            <li class="last even">
                                <input type="radio" name="vote" class="radio poll_vote" id="vote_8" value="8">
                                <span class="label">
                                    <label for="vote_8">
                                        Compare Products</label></span> </li>
                        </ul>
                        <script type="text/javascript">                            decorateList('poll-answers');</script>
                        <div class="actions">
                            <button type="submit" title="Vote" class="button">
                                <span><span>Vote</span></span></button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
