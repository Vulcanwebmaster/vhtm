<div class="jquery-slider-wrapper jquery-slider-option-navigation-selector-control-timer" style="width: 900px; height: 325px; máº£">
	<div id="slideshow" class="slider" style="width: 900px; height: 325px; overflow-x: hidden; overflow-y: hidden; position: relative; ">
		<div class="jquery-slider-slide jquery-slider-slide-1" style="opacity: 0; "><img class="hideme" src="assets/images/frontpage/big_tree.jpg" alt="big_tree.jpg"></div><div class="jquery-slider-slide jquery-slider-slide-2" style="opacity: 0; ">
			<img class="hideme" src="assets/images/frontpage/build.jpg" alt="build.jpg">
		</div>
		<div class="jquery-slider-slide jquery-slider-slide-3 jquery-slider-slide-current" style="opacity: 1; ">
			<img class="hideme" src="assets/images/frontpage/station.jpg" alt="station.jpg">
		</div>
	</div>
	<div class="jquery-slider-timer">
		<div class="jquery-slider-timer-mask">
			<div class="jquery-slider-timer-rotator"></div>
		</div>
		<div class="jquery-slider-timer-bar" style="overflow-x: hidden; overflow-y: hidden; width: 37.17777777777778%; ">
		</div>
	</div>
	<a href="#" class="jquery-slider-control jquery-slider-control-pause"><span>Play/Pause</span></a>
	<div class="jquery-slider-navigation">
		<a href="#" class="jquery-slider-navigation-prev" rel="-1">
			<span>Prev</span>
		</a>
		<a href="#" class="jquery-slider-navigation-next" rel="+1">
			<span>Next</span>
		</a>
	</div>
	<div class="jquery-slider-selectors">
		<a href="#" class="jquery-slider-selector" rel="1">
			<span class="jquery-slider-selector-span jquery-slider-selector-1">
				<span>1</span>
			</span>
		</a>
		<a href="#" class="jquery-slider-selector" rel="2">
			<span class="jquery-slider-selector-span jquery-slider-selector-2">
				<span>2</span>
			</span>
		</a>
		<a href="#" class="jquery-slider-selector jquery-slider-selector-current" rel="3">
			<span class="jquery-slider-selector-span jquery-slider-selector-3">
				<span>3</span>
			</span>
		</a>
	</div>
</div>
<div>
	<div class="main-container col1-layout">
    <div class="main" style="margin-top:15px">
        <div class="bg-inner">
            <div class="col-main">
                <div class="col-inner">
                    <div class="page-title">
                        <p style="font-weight:bold; font-size:20px; line-height:100%">
                            New arrivals this month</p>
                    </div>
                    <div class="std">
                        <div>
                            <div class="widget widget-new-products">
                                <div class="widget-products">
                                    <div class="slideshow-wrapper">
                                        <div class="slideshow-wrapper-inner">
                                            <div class="slideshow" id="slideshow">
                                                <div class="slideshow-box">
                                                    <ul class="products-grid" style="width: 2539px; position: relative; left: 0px; top: 0px;">
                                                    <?php foreach ($newArrivals as $rs):?>
                                                        <li class="item first"><a href="http://demo.emthemes.com/casualwear/all-star-reverse-print.html"
                                                            title="all star reverse print" class="product-image">
                                                            <img src="<?php echo convert_image_path(base_url().$rs->image);?>" width="168px" height="185px" alt="all star reverse print"></a>
                                                            <h3 class="product-name">
                                                                <a href="<?php echo base_url();?>index.php/chitietsp/get_inf/<?php echo $rs->id;?>" title="all star reverse print)">
                                                                    <?php echo $rs->name;?></a></h3>
                                                            <div class="price-box">
                                                                <span class="regular-price" id="product-price-198-widget-new-grid"><span class="price">
                                                                    $<?php echo $rs->price;?></span> </span>
                                                            </div>
                                                            <div class="add-to-cart"  style="margin-top: 45px;">
				                                                <button type="button" title="Add to Cart" class="button btn-cart" onclick="setLocation('<?php echo site_url().'/welcome/cart/'.$rs->id; ?>')">
				                                                    <span><span>THêm Vào Giỏ</span></span></button>
				                                            </div>
                                                        </li>
                                                        <?php endforeach;?>
                                                    </ul>
                                                </div>
                                                <a href="#" class="previous">Previous</a> <a href="#" class="next">Next</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>    
</div>