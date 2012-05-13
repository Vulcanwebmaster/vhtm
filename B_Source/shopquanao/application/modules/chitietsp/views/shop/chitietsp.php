<div class="main-container col2-right-layout">
    <div class="main">
        <div class="breadcrumbs">
            <ul>
                <li class="home"><a href="<?php echo base_url();?>" title="Tới trang chủ">Trang chủ</a>
                    <span>/ </span></li>
                <li class="category53"><strong style="color:#e67817">Chi tiết sản phẩm</strong> </li>
            </ul>
        </div>
        <div class="page-title category-title">
            <h1 style="color:#e67817">
                Chi tiết sản phẩm</h1>
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
                                    <form action="http://demo.emthemes.com/casualwear/checkout/cart/add/uenc/aHR0cDovL2RlbW8uZW10aGVtZXMuY29tL2Nhc3VhbHdlYXIvd29tZW4vd29tZW4tcy1zaG91bGRlci1sb2dvLXRlZS5odG1sP19fX1NJRD1V/product/192/"
                                    method="post" id="product_addtocart_form" enctype="multipart/form-data">
                                    <div class="no-display">
                                        <input type="hidden" name="product" value="192">
                                        <input type="hidden" name="related_product" id="related-products-field" value="">
                                    </div>
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
                                            <ul>
                                            	<?php
														foreach ($kholist as $index => $kho) 
														{
															$tinhtrang =  $kho['total'] == 0 ? "<span style='color:red;'>Hết Hàng<span>" : $kho['total']; 
															echo "<li>". $kho['kho_name']. " : " . $tinhtrang ."</li>";
														}
                                            	?>
                                            </ul>
                                        <!--p class="availability in-stock">Availability: <span>In stock</span></p-->
                                        <div class="price-box">
                                            <span class="regular-price" id="product-price-192"><span class="price"><?php echo $inf->price;?> VNĐ</span>
                                            </span>
                                        </div>
                                        <div class="short-description">
                                            <h2 style="color: #E67817;">
                                                Mô Tả</h2>
                                            <div class="std" style="border-bottom:dotted 1px silver">
                                            	<?php echo substr($inf->longdesc,0,200);?>
                                                <!-- p>
                                                    Feminine and romantic, this beautiful gold and rhodium-plated ring features two
                                                    entwined hearts, symbolising unity and love. The on-trend mixture of Crystal Golden
                                                    Shadow, clear crystal pave and two different platings adds a modern touch...</p -->
                                            </div>
                                        </div>
                                        <div class="product-options" id="product-options-wrapper">
                                            <script type="text/javascript">
//<![CDATA[
                                                var DateOption = Class.create({

                                                    getDaysInMonth: function (month, year) {
                                                        var curDate = new Date();
                                                        if (!month) {
                                                            month = curDate.getMonth();
                                                        }
                                                        if (2 == month && !year) { // leap year assumption for unknown year
                                                            return 29;
                                                        }
                                                        if (!year) {
                                                            year = curDate.getFullYear();
                                                        }
                                                        return 32 - new Date(year, month - 1, 32).getDate();
                                                    },

                                                    reloadMonth: function (event) {
                                                        var selectEl = event.findElement();
                                                        var idParts = selectEl.id.split("_");
                                                        if (idParts.length != 3) {
                                                            return false;
                                                        }
                                                        var optionIdPrefix = idParts[0] + "_" + idParts[1];
                                                        var month = parseInt($(optionIdPrefix + "_month").value);
                                                        var year = parseInt($(optionIdPrefix + "_year").value);
                                                        var dayEl = $(optionIdPrefix + "_day");

                                                        var days = this.getDaysInMonth(month, year);

                                                        //remove days
                                                        for (var i = dayEl.options.length - 1; i >= 0; i--) {
                                                            if (dayEl.options[i].value > days) {
                                                                dayEl.remove(dayEl.options[i].index);
                                                            }
                                                        }

                                                        // add days
                                                        var lastDay = parseInt(dayEl.options[dayEl.options.length - 1].value);
                                                        for (i = lastDay + 1; i <= days; i++) {
                                                            this.addOption(dayEl, i, i);
                                                        }
                                                    },

                                                    addOption: function (select, text, value) {
                                                        var option = document.createElement('OPTION');
                                                        option.value = value;
                                                        option.text = text;

                                                        if (select.options.add) {
                                                            select.options.add(option);
                                                        } else {
                                                            select.appendChild(option);
                                                        }
                                                    }
                                                });
                                                dateOption = new DateOption();
//]]>
                                            </script>
                                            <script type="text/javascript">
    //<![CDATA[
                                                var optionFileUpload = {
                                                    productForm: $('product_addtocart_form'),
                                                    formAction: '',
                                                    formElements: {},
                                                    upload: function (element) {
                                                        this.formElements = this.productForm.select('input', 'select', 'textarea', 'button');
                                                        this.removeRequire(element.readAttribute('id').sub('option_', ''));

                                                        template = '<iframe id="upload_target" name="upload_target" style="width:0; height:0; border:0;"><\/iframe>';

                                                        Element.insert($('option_' + element.readAttribute('id').sub('option_', '') + '_uploaded_file'), { after: template });

                                                        this.formAction = this.productForm.action;

                                                        var baseUrl = 'http://demo.emthemes.com/casualwear/catalog/product/upload/';
                                                        var urlExt = 'option_id/' + element.readAttribute('id').sub('option_', '');

                                                        this.productForm.action = parseSidUrl(baseUrl, urlExt);
                                                        this.productForm.target = 'upload_target';
                                                        this.productForm.submit();
                                                        this.productForm.target = '';
                                                        this.productForm.action = this.formAction;
                                                    },
                                                    removeRequire: function (skipElementId) {
                                                        for (var i = 0; i < this.formElements.length; i++) {
                                                            if (this.formElements[i].readAttribute('id') != 'option_' + skipElementId + '_file' && this.formElements[i].type != 'button') {
                                                                this.formElements[i].disabled = 'disabled';
                                                            }
                                                        }
                                                    },
                                                    addRequire: function (skipElementId) {
                                                        for (var i = 0; i < this.formElements.length; i++) {
                                                            if (this.formElements[i].readAttribute('name') != 'options_' + skipElementId + '_file' && this.formElements[i].type != 'button') {
                                                                this.formElements[i].disabled = '';
                                                            }
                                                        }
                                                    },
                                                    uploadCallback: function (data) {
                                                        this.addRequire(data.optionId);
                                                        $('upload_target').remove();

                                                        if (data.error) {

                                                        } else {
                                                            $('option_' + data.optionId + '_uploaded_file').value = data.fileName;
                                                            $('option_' + data.optionId + '_file').value = '';
                                                            $('option_' + data.optionId + '_file').hide();
                                                            $('option_' + data.optionId + '').hide();
                                                            template = '<div id="option_' + data.optionId + '_file_box"><a href="#"><img src="var/options/' + data.fileName + '" alt=""><\/a><a href="#" onclick="optionFileUpload.removeFile(' + data.optionId + ')" title="Remove file" \/>Remove file<\/a>';

                                                            Element.insert($('option_' + data.optionId + '_uploaded_file'), { after: template });
                                                        }
                                                    },
                                                    removeFile: function (optionId) {
                                                        $('option_' + optionId + '_uploaded_file').value = '';
                                                        $('option_' + optionId + '_file').show();
                                                        $('option_' + optionId + '').show();

                                                        $('option_' + optionId + '_file_box').remove();
                                                    }
                                                }
                                                var optionTextCounter = {
                                                    count: function (field, cntfield, maxlimit) {
                                                        if (field.value.length > maxlimit) {
                                                            field.value = field.value.substring(0, maxlimit);
                                                        } else {
                                                            cntfield.innerHTML = maxlimit - field.value.length;
                                                        }
                                                    }
                                                }

                                                Product.Options = Class.create();
                                                Product.Options.prototype = {
                                                    initialize: function (config) {
                                                        this.config = config;
                                                        this.reloadPrice();
                                                        document.observe("dom:loaded", this.reloadPrice.bind(this));
                                                    },
                                                    reloadPrice: function () {
                                                        price = new Number();
                                                        config = this.config;
                                                        skipIds = [];
                                                        $$('.product-custom-option').each(function (element) {
                                                            var optionId = 0;
                                                            element.name.sub(/[0-9]+/, function (match) {
                                                                optionId = match[0];
                                                            });
                                                            if (this.config[optionId]) {
                                                                if (element.type == 'checkbox' || element.type == 'radio') {
                                                                    if (element.checked) {
                                                                        if (config[optionId][element.getValue()]) {
                                                                            price += parseFloat(config[optionId][element.getValue()]);
                                                                        }
                                                                    }
                                                                } else if (element.hasClassName('datetime-picker') && !skipIds.include(optionId)) {
                                                                    dateSelected = true;
                                                                    $$('.product-custom-option[id^="options_' + optionId + '"]').each(function (dt) {
                                                                        if (dt.getValue() == '') {
                                                                            dateSelected = false;
                                                                        }
                                                                    });
                                                                    if (dateSelected) {
                                                                        price += parseFloat(this.config[optionId]);
                                                                        skipIds[optionId] = optionId;
                                                                    }
                                                                } else if (element.type == 'select-one' || element.type == 'select-multiple') {
                                                                    if (element.options) {
                                                                        $A(element.options).each(function (selectOption) {
                                                                            if (selectOption.selected) {
                                                                                if (this.config[optionId][selectOption.value]) {
                                                                                    price += parseFloat(this.config[optionId][selectOption.value]);
                                                                                }
                                                                            }
                                                                        });
                                                                    }
                                                                } else {
                                                                    if (element.getValue().strip() != '') {
                                                                        price += parseFloat(this.config[optionId]);
                                                                    }
                                                                }
                                                            }
                                                        });
                                                        try {
                                                            optionsPrice.changePrice('options', price);
                                                            optionsPrice.changePrice('optionsPriceInclTax', price);
                                                            optionsPrice.reload();
                                                        } catch (e) {

                                                        }
                                                    }
                                                }
                                                function validateOptionsCallback(elmId, result) {
                                                    var container = $(elmId).up('ul.options-list');
                                                    if (result == 'failed') {
                                                        container.removeClassName('validation-passed');
                                                        container.addClassName('validation-failed');
                                                    } else {
                                                        container.removeClassName('validation-failed');
                                                        container.addClassName('validation-passed');
                                                    }
                                                }
                                                var opConfig = new Product.Options({ "8": { "12": 220} });
    //]]>
                                            </script>
                                            <!-- dl class="last">
                                                <dt>
                                                    <label>
                                                        18K White Gold</label></dt>
                                                <dd class="last">
                                                    <div class="input-box">
                                                        <ul id="options-8-list" class="options-list">
                                                            <li>
                                                                <input type="checkbox" class="checkbox  product-custom-option" onclick="opConfig.reloadPrice()"
                                                                    name="options[8][]" id="options_8_2" value="12" price="220"><span class="label"><label
                                                                        for="options_8_2">Add <span class="price-notice">+<span class="price">$220.00</span></span></label></span></li></ul>
                                                    </div>
                                                </dd>
                                            </dl -->
                                            <script type="text/javascript">
//<![CDATA[
                                                enUS = { "m": { "wide": ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"], "abbr": ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"]} }; // en_US locale reference
                                                Calendar._DN = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"]; // full day names
                                                Calendar._SDN = ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"]; // short day names
                                                Calendar._FD = 0; // First day of the week. "0" means display Sunday first, "1" means display Monday first, etc.
                                                Calendar._MN = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"]; // full month names
                                                Calendar._SMN = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"]; // short month names
                                                Calendar._am = "AM"; // am/pm
                                                Calendar._pm = "PM";

                                                // tooltips
                                                Calendar._TT = {};
                                                Calendar._TT["INFO"] = "About the calendar";

                                                Calendar._TT["ABOUT"] =
"DHTML Date/Time Selector\n" +
"(c) dynarch.com 2002-2005 / Author: Mihai Bazon\n" +
"For latest version visit: http://www.dynarch.com/projects/calendar/\n" +
"Distributed under GNU LGPL. See http://gnu.org/licenses/lgpl.html for details." +
"\n\n" +
"Date selection:\n" +
"- Use the \xab, \xbb buttons to select year\n" +
"- Use the " + String.fromCharCode(0x2039) + ", " + String.fromCharCode(0x203a) + " buttons to select month\n" +
"- Hold mouse button on any of the above buttons for faster selection.";
                                                Calendar._TT["ABOUT_TIME"] = "\n\n" +
"Time selection:\n" +
"- Click on any of the time parts to increase it\n" +
"- or Shift-click to decrease it\n" +
"- or click and drag for faster selection.";

                                                Calendar._TT["PREV_YEAR"] = "Prev. year (hold for menu)";
                                                Calendar._TT["PREV_MONTH"] = "Prev. month (hold for menu)";
                                                Calendar._TT["GO_TODAY"] = "Go Today";
                                                Calendar._TT["NEXT_MONTH"] = "Next month (hold for menu)";
                                                Calendar._TT["NEXT_YEAR"] = "Next year (hold for menu)";
                                                Calendar._TT["SEL_DATE"] = "Select date";
                                                Calendar._TT["DRAG_TO_MOVE"] = "Drag to move";
                                                Calendar._TT["PART_TODAY"] = ' (' + "Today" + ')';

                                                // the following is to inform that "%s" is to be the first day of week
                                                Calendar._TT["DAY_FIRST"] = "Display %s first";

                                                // This may be locale-dependent. It specifies the week-end days, as an array
                                                // of comma-separated numbers. The numbers are from 0 to 6: 0 means Sunday, 1
                                                // means Monday, etc.
                                                Calendar._TT["WEEKEND"] = "0,6";

                                                Calendar._TT["CLOSE"] = "Close";
                                                Calendar._TT["TODAY"] = "Today";
                                                Calendar._TT["TIME_PART"] = "(Shift-)Click or drag to change value";

                                                // date formats
                                                Calendar._TT["DEF_DATE_FORMAT"] = "%b %e, %Y";
                                                Calendar._TT["TT_DATE_FORMAT"] = "%B %e, %Y";

                                                Calendar._TT["WK"] = "Week";
                                                Calendar._TT["TIME"] = "Time:";
//]]>
                                            </script>
                                        </div>
                                        <script type="text/javascript">                                            decorateGeneric($$('#product-options-wrapper dl'), ['last']);</script>
                                        <div class="product-options-bottom">
                                            <div class="add-to-cart">
                                                <button type="button" title="Add to Cart" class="button btn-cart" onclick="productAddToCartForm.submit(this)">
                                                    <span><span>THêm Vào Giỏ</span></span></button>
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
                                        <div class="hidden">
                                            <noscript>
                                                Magento CloudZoom Extenstion by &lt;a href="http://magento-team.com"&gt;MagentoTeam&lt;/a&gt;.
                                                CloudZoom &lt;a href="http://extensions.magento-team.com/demo/cloudzoom/"&gt;demo
                                                page&lt;/a&gt;.</noscript></div>
                                    </div>
                                    <div class="clearer">
                                    </div>
                                    </form>
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
