
<!--<div id='pleft'>
<h2>
</div>


-->




<div class="main-container col2-right-layout">
    <div class="main">
        <div class="breadcrumbs">
            <ul>
                <li class="home"><a href="http://demo.emthemes.com/casualwear/" title="Tới trang chủ">
                    Trang chủ</a> <span>/ </span></li>
                <li class="category53"><strong>Tìm kiếm</strong> </li>
            </ul>
        </div>
        <div class="page-title category-title">
                        <h1>Tìm kiếm</h1>
                    </div>
        <div class="bg-inner">
            <div class="col-main">
                <div class="col-inner">
                    <div class="category-image-container">
                        <div class="category-image-container-inner">
                            <p class="category-image">
                                <img src="http://demo.emthemes.com/casualwear/media/catalog/category/swarovski-rings_6.jpg"
                                    alt="women" title="women"></p>
                        </div>
                    </div>
                    
                    <div class="category-products">
                        <div class="toolbar">
                            <div class="pager">
                                <p class="amount">
                                    <strong>10 Item(s)</strong>
                                </p>
                                <div class="limiter">
                                    <label>Show 10</label>                                    
                                    per page
                                </div>
                            </div>
                            <div class="sorter">
                                <p class="view-mode">
                                    <label>
                                        View as:</label>
                                    <strong title="Grid" class="grid">Grid</strong>&nbsp; <a href="http://demo.emthemes.com/casualwear/women.html?mode=list"
                                        title="List" class="list">List</a>&nbsp;
                                </p>
                                <div class="sort-by">
                                    <label>
                                        Sort By</label>
                                    <select onchange="setLocation(this.value)">
                                        <option value="http://demo.emthemes.com/casualwear/women.html?dir=asc&amp;order=position"
                                            selected="selected">Position </option>
                                        <option value="http://demo.emthemes.com/casualwear/women.html?dir=asc&amp;order=name">
                                            Name </option>
                                        <option value="http://demo.emthemes.com/casualwear/women.html?dir=asc&amp;order=price">
                                            Price </option>
                                        <option value="http://demo.emthemes.com/casualwear/women.html?dir=asc&amp;order=gender">
                                            Gender </option>
                                    </select>
                                    <a href="http://demo.emthemes.com/casualwear/women.html?dir=desc&amp;order=position"
                                        title="Set Descending Direction">
                                        <img src="http://demo.emthemes.com/casualwear/skin/frontend/em0015/default/images/i_asc_arrow.gif"
                                            alt="Set Descending Direction" class="v-middle"></a>
                                </div>
                            </div>
                        </div>
                        <div class="products-container">
                            <div class="products-container-inner"> 
                            	<?php                             		                            	
                            		for ($i=0;$i<count($fsearch);$i+=2)
                            	{
                            		echo '<ul class="products-grid first odd">
                                    <li class="item first">                                    
                                    <a href="#"
                                        title="" class="product-image">                                        
                                        <img src="';
                            		echo convert_image_path($fsearch[$i]->image);
                            		echo '" width="168px" height="185px" alt=""/></a>';
                            		echo '<h2 class="product-name">
                                            <a href=""
                                                title="">'.$fsearch[$i]->name.'</a></h2>
                                        <div class="price-box">
                                            <span class="regular-price" id="product-price-192"><span class="price">'.$fsearch[$i]->price.'</span>
                                            </span>
                                        </div>
                                        <ul class="add-to-links">
                                            <li><a href="#"
                                                class="link-wishlist">Add to Wishlist</a></li>
                                            <li><span class="separator">|</span> <a href="http://demo.emthemes.com/casualwear/catalog/product_compare/add/product/192/uenc/aHR0cDovL2RlbW8uZW10aGVtZXMuY29tL2Nhc3VhbHdlYXIvd29tZW4uaHRtbA,,/"
                                                class="link-compare">Add to Compare</a></li>
                                        </ul>
                                        <div class="actions">
                                            <button type="button" title="Add to Cart" class="button btn-cart" onclick="setLocation('.base_url().'welcome/cart/'.$fsearch[$i]->id.')">
                                                <span><span>Add to Cart</span></span></button>
                                        </div>
                                    </li>';
                            		if ($i+1<count($fsearch))
                            		{ 
                            		echo 
                                    '<li class="item last"><a href="#"
                                        title="" class="product-image">
                                        <img src="';
                            		echo convert_image_path($fsearch[$i+1]->image);;
                            		echo '"
                                            width="168" height="185" alt=""></a>
                                        <h2 class="product-name">
                                            <a href="#" title="">'.$fsearch[$i+1]->name.'</a></h2>
                                        <div class="price-box">
                                            <span class="regular-price" id="product-price-187"><span class="price">'.$fsearch[$i+1]->price.'</span>
                                            </span>
                                        </div>
                                        <ul class="add-to-links">
                                            <li><a href="http://demo.emthemes.com/casualwear/wishlist/index/add/product/187/"
                                                class="link-wishlist">Add to Wishlist</a></li>
                                            <li><span class="separator">|</span> <a href="http://demo.emthemes.com/casualwear/catalog/product_compare/add/product/187/uenc/aHR0cDovL2RlbW8uZW10aGVtZXMuY29tL2Nhc3VhbHdlYXIvd29tZW4uaHRtbA,,/"
                                                class="link-compare">Add to Compare</a></li>
                                        </ul>
                                        <div class="actions">
                                            <button type="button" title="Add to Cart" class="button btn-cart" onclick="setLocation('.base_url().'welcome/cart/'.$fsearch[$i+1]->id.')">
                                                <span><span>Add to Cart</span></span></button>
                                        </div>
                                    </li>';
                            		}
                                echo '</ul>';
                            	}
                            	
                            	echo $this->pagination->create_links();
                            	
                            	?>                            	
                            	<!-- ?php                             		
                            	for ($i=0;$i<count($list);$i+=2)
                            	{
                            		echo '<ul class="products-grid first odd">
                                    <li class="item first">                                    
                                    <a href="#"
                                        title="" class="product-image">                                        
                                        <img src="';
                            		echo convert_image_path($list[$i]->image);
                            		echo '" width="168px" height="185px" alt=""/></a>';
                            		echo '<h2 class="product-name">
                                            <a href=""
                                                title="">'.$list[$i]->name.'</a></h2>
                                        <div class="price-box">
                                            <span class="regular-price" id="product-price-192"><span class="price">'.$list[$i]->price.'</span>
                                            </span>
                                        </div>
                                        <ul class="add-to-links">
                                            <li><a href="#"
                                                class="link-wishlist">Add to Wishlist</a></li>
                                            <li><span class="separator">|</span> <a href="http://demo.emthemes.com/casualwear/catalog/product_compare/add/product/192/uenc/aHR0cDovL2RlbW8uZW10aGVtZXMuY29tL2Nhc3VhbHdlYXIvd29tZW4uaHRtbA,,/"
                                                class="link-compare">Add to Compare</a></li>
                                        </ul>
                                        <div class="actions">
                                            <button type="button" title="Add to Cart" class="button btn-cart" onclick="setLocation('.'http://demo.emthemes.com/casualwear/checkout/cart/add/uenc/aHR0cDovL2RlbW8uZW10aGVtZXMuY29tL2Nhc3VhbHdlYXIvd29tZW4uaHRtbA,,/product/192/'.')">
                                                <span><span>Add to Cart</span></span></button>
                                        </div>
                                    </li>';
                            		if ($i+1<count($list))
                            		{ 
                            		echo 
                                    '<li class="item last"><a href="#"
                                        title="" class="product-image">
                                        <img src="';
                            		echo convert_image_path($list[$i+1]->image);;
                            		echo '"
                                            width="168" height="185" alt=""></a>
                                        <h2 class="product-name">
                                            <a href="#" title="">'.$list[$i+1]->name.'</a></h2>
                                        <div class="price-box">
                                            <span class="regular-price" id="product-price-187"><span class="price">'.$list[$i+1]->price.'</span>
                                            </span>
                                        </div>
                                        <ul class="add-to-links">
                                            <li><a href="http://demo.emthemes.com/casualwear/wishlist/index/add/product/187/"
                                                class="link-wishlist">Add to Wishlist</a></li>
                                            <li><span class="separator">|</span> <a href="http://demo.emthemes.com/casualwear/catalog/product_compare/add/product/187/uenc/aHR0cDovL2RlbW8uZW10aGVtZXMuY29tL2Nhc3VhbHdlYXIvd29tZW4uaHRtbA,,/"
                                                class="link-compare">Add to Compare</a></li>
                                        </ul>
                                        <div class="actions">
                                            <button type="button" title="Add to Cart" class="button btn-cart" onclick="setLocation('.'http://demo.emthemes.com/casualwear/checkout/cart/add/uenc/aHR0cDovL2RlbW8uZW10aGVtZXMuY29tL2Nhc3VhbHdlYXIvd29tZW4uaHRtbA,,/product/187/'.')">
                                                <span><span>Add to Cart</span></span></button>
                                        </div>
                                    </li>';
                            		}
                                echo '</ul>';
                            	}? -->                            	                                                    
                                
                                <script type="text/javascript">                                    decorateGeneric($$('ul.products-grid'), ['odd', 'even', 'first', 'last'])</script>
                            </div>
                        </div>
                        <div class="toolbar-bottom">
                            <div class="toolbar">
                                <div class="pager">
                                    <p class="amount">
                                        <strong>10 Item(s)</strong>
                                    </p>
                                    <div class="limiter">
                                        <label>
                                            Show 10</label>                                        
                                        per page
                                    </div>
                                </div>
                                <div class="sorter">
                                    <p class="view-mode">
                                        <label>
                                            View as:</label>
                                        <strong title="Grid" class="grid">Grid</strong>&nbsp; <a href="http://demo.emthemes.com/casualwear/women.html?mode=list"
                                            title="List" class="list">List</a>&nbsp;
                                    </p>
                                    <div class="sort-by">
                                        <label>
                                            Sort By</label>
                                        <select onchange="setLocation(this.value)">
                                            <option value="http://demo.emthemes.com/casualwear/women.html?dir=asc&amp;order=position"
                                                selected="selected">Position </option>
                                            <option value="http://demo.emthemes.com/casualwear/women.html?dir=asc&amp;order=name">
                                                Name </option>
                                            <option value="http://demo.emthemes.com/casualwear/women.html?dir=asc&amp;order=price">
                                                Price </option>
                                            <option value="http://demo.emthemes.com/casualwear/women.html?dir=asc&amp;order=gender">
                                                Gender </option>
                                        </select>
                                        <a href="http://demo.emthemes.com/casualwear/women.html?dir=desc&amp;order=position"
                                            title="Set Descending Direction">
                                            <img src="http://demo.emthemes.com/casualwear/skin/frontend/em0015/default/images/i_asc_arrow.gif"
                                                alt="Set Descending Direction" class="v-middle"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-right sidebar">
                <div class="block block-list block-compare">
                    <div class="block-title">
                        <strong><span>Compare Products </span></strong>
                    </div>
                    <div class="block-content">
                        <p class="empty">
                            You have no items to compare.</p>
                    </div>
                </div>
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
                        <img src="<?php echo base_url();?>assets/women_files/col_right_callout.jpg" style="width:100%"
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
                <div class="block block-tags">
                    <div class="block-title">
                        <strong><span>Popular Tags</span></strong>
                    </div>
                    <div class="block-content">
                        <ul class="tags-list">
                            <li><a href="http://demo.emthemes.com/casualwear/tag/product/list/tagId/23/" style="font-size: 98.333333333333%;">
                                Camera</a></li>
                            <li><a href="http://demo.emthemes.com/casualwear/tag/product/list/tagId/109/" style="font-size: 86.666666666667%;">
                                Hohoho</a></li>
                            <li><a href="http://demo.emthemes.com/casualwear/tag/product/list/tagId/27/" style="font-size: 145%;">
                                SEXY</a></li>
                            <li><a href="http://demo.emthemes.com/casualwear/tag/product/list/tagId/61/" style="font-size: 75%;">
                                Tag</a></li>
                            <li><a href="http://demo.emthemes.com/casualwear/tag/product/list/tagId/29/" style="font-size: 110%;">
                                Test</a></li>
                            <li><a href="http://demo.emthemes.com/casualwear/tag/product/list/tagId/17/" style="font-size: 86.666666666667%;">
                                bones</a></li>
                            <li><a href="http://demo.emthemes.com/casualwear/tag/product/list/tagId/12/" style="font-size: 110%;">
                                cool</a></li>
                            <li><a href="http://demo.emthemes.com/casualwear/tag/product/list/tagId/184/" style="font-size: 86.666666666667%;">
                                cool t-shirt</a></li>
                            <li><a href="http://demo.emthemes.com/casualwear/tag/product/list/tagId/173/" style="font-size: 86.666666666667%;">
                                crap</a></li>
                            <li><a href="http://demo.emthemes.com/casualwear/tag/product/list/tagId/41/" style="font-size: 86.666666666667%;">
                                good</a></li>
                            <li><a href="http://demo.emthemes.com/casualwear/tag/product/list/tagId/16/" style="font-size: 86.666666666667%;">
                                green</a></li>
                            <li><a href="http://demo.emthemes.com/casualwear/tag/product/list/tagId/5/" style="font-size: 86.666666666667%;">
                                hip</a></li>
                            <li><a href="http://demo.emthemes.com/casualwear/tag/product/list/tagId/51/" style="font-size: 75%;">
                                laptop</a></li>
                            <li><a href="http://demo.emthemes.com/casualwear/tag/product/list/tagId/70/" style="font-size: 75%;">
                                nice</a></li>
                            <li><a href="http://demo.emthemes.com/casualwear/tag/product/list/tagId/77/" style="font-size: 75%;">
                                notebook</a></li>
                            <li><a href="http://demo.emthemes.com/casualwear/tag/product/list/tagId/42/" style="font-size: 86.666666666667%;">
                                phone</a></li>
                            <li><a href="http://demo.emthemes.com/casualwear/tag/product/list/tagId/30/" style="font-size: 98.333333333333%;">
                                red</a></li>
                            <li><a href="http://demo.emthemes.com/casualwear/tag/product/list/tagId/28/" style="font-size: 86.666666666667%;">
                                tight</a></li>
                            <li><a href="http://demo.emthemes.com/casualwear/tag/product/list/tagId/2/" style="font-size: 75%;">
                                trendy</a></li>
                            <li><a href="http://demo.emthemes.com/casualwear/tag/product/list/tagId/4/" style="font-size: 86.666666666667%;">
                                young</a></li>
                        </ul>
                        <div class="actions">
                            <a href="http://demo.emthemes.com/casualwear/tag/list/">View All Tags</a>
                        </div>
                    </div>
                </div>
                <div class="paypal-logo">
                    <a href="#" title="Additional Options" onclick="javascript:window.open('https://www.paypal.com/us/cgi-bin/webscr?cmd=xpt/Marketing/popup/OLCWhatIsPayPal-outside','paypal','width=600,height=350,left=0,top=0,location=no,status=yes,scrollbars=yes,resizable=yes'); return false;">
                        <img src="https://www.paypalobjects.com/en_US/i/bnr/bnr_nowAccepting_150x60.gif"
                            alt="Additional Options" title="Additional Options"></a>
                </div>
            </div>
        </div>
    </div>
</div>
