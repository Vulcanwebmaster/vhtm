<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/thoitrang/css/main.css-build=0.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/thoitrang/css/main.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/thoitrang/css/prodbrowser.css"/>

<div id="wrapper" class="highlights">
    <div id="content" class="cols" style="">
        <div id="accessoriesFilter">
            <h2 class="macro">
                <a href="" title=""></a>
            </h2>
            <ul id="micro">
            </ul>
        </div>
    </div>
    <div id="col1" class="cols">
        <div>
            <img src="<?php echo base_url();?>assets/thoitrang/images/1147_1_HL_dentelle BIANCO.jpg" alt="DENTELLE"></div>
        <div id="standardMaskContainer">
            <div id="standardMask">
                <div id="standardContent" class="prod">
                	<h1 style="text-transform:uppercase; font-size:20px; margin-top:15px"><?php echo $title?></h1>
                    <div id="elementsContainer">
                    	<?php foreach($list as $item)
                    	{?>
                    		<div class="productimage">
	                            <div class="imageSlideContainer">
	                                <a class="itemContainer" href="<?php echo base_url();?>sanpham/chitiet/<?php echo $item->id;?>">
	                                	<?php echo $item->hinhanh;?>
	                                </a></div>
	                            <div class="infoImageSlideContainer">
	                                <div class="descCont">
	                                    <span class="prodInfoViewAll"><?php echo $item->ten;?></span></div>
	                                <div class="priceCont">
	                                    <?php if ($item->giakhuyenmai!='')
	                                    {?>
	                                    	<span class="prodPriceDiscount">€&nbsp;<?php echo $item->gia;?></span>&nbsp;<span class="prodPriceSaleInline">€&nbsp;<?php echo $item->giakhuyenmai;?></span>
	                                    <?php }
	                                    else {?>
	                                    	<span class="prodPriceSaleInline">€&nbsp;<?php echo $item->gia;?></span>
	                                    <?php }?>
	                                </div>
                            </div>
                        </div>
                    	<?php }?>
                    </div>
                </div>
            </div>
        </div>
        <div id="backToTop" style="display: none;" class="">
            <div>
                <a href="javascript:window.scrollTo(0,0);" name="&amp;lid=topPage&amp;lpos=searchResult">
                    <span>BACK TO TOP</span></a></div>
        </div>
    </div>
</div>
