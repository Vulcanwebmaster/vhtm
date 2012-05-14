<div class="subscribesec">
	<div class="feedlist">
		<ul style="float: left">
			<li><span>Hỗ trợ trực tuyến: </span></li>
			<!-- chat yahoo start 1 -->
			<li><a href="ymsgr:sendim?vananhshop01"> <img border="0"
					src="http://opi.yahoo.com/online?u=vananhshop01&amp;m=g&amp;t=2">
			</a>
			</li>
			<li><a href="ymsgr:sendim?vananhshop01"> <img border="0"
					src="http://opi.yahoo.com/online?u=vananhshop01&amp;m=g&amp;t=2">
			</a>
			</li>
			<li><a href="ymsgr:sendim?vananhshop01"> <img border="0"
					src="http://opi.yahoo.com/online?u=vananhshop01&amp;m=g&amp;t=2">
			</a>
			</li>
			<!-- chat yahoo end 1 -->
		</ul>
		<ul style="float: right">
			<li><a href="http://www.vananhshop.com/feeds/posts/default"><img
					title="subscribe"
					src="http://2.bp.blogspot.com/_4HKUHirY_2U/TP8O1PPQk1I/AAAAAAAAI-Y/OprutrrAa6M/s1600/rss.png"
					alt="RSS">
			</a>
			</li>
			<li><a
				href="https://www.facebook.com/pages/vananhshop/127616774009510"><img
					title="Facebook"
					src="http://1.bp.blogspot.com/_4HKUHirY_2U/TP8OrKbfrbI/AAAAAAAAI-A/paIKvGLnLRM/s1600/facebook.png"
					alt="Facebook">
			</a>
			</li>
			<li><a href="http://twitter.com/vananhshop"><img title="Twitter"
					src="http://1.bp.blogspot.com/_4HKUHirY_2U/TP8PC7OMGzI/AAAAAAAAI_A/rvwJ94Czplg/s1600/twitter.png"
					alt="Twitter">
			</a>
			</li>
			</ul>
	</div>
	<div class="clear"></div>
</div>
<div class="main-container col2-right-layout">
	<?php foreach ($list as $index => $product)
        {
        	?><div class="post hentry">
            <a name="1655744853648508510"></a>
            <h3 class="post-title entry-title">
            	<div style="width:200px;clear:both; height:62px; background-image:url('<?php echo base_url();?>assets/women_files/pricebox_bg.png'); background-repeat:no-repeat">
                    	<h5 style="float:left;color:white; padding-top:15px;padding-left:25px;"><?php echo $product['price'];?></h5>
                    	<a style="padding-top:20px;padding-right:10px;color:red;text-transform:uppercase; float:right; font-size:9px">Thêm giỏ hàng</a>
                    </div>
                <a href="<?php echo base_url();?>index.php/chitietsp/get_inf/<?php echo $product['id'];?>"><?php echo $product['name'];?></a>                
            </h3>
            <div class="post-header-line-1">
            </div>
            <div class="post-body entry-content">
                <p>
                    <script type="text/javascript">
                        summary_noimg = 1;
                        summary_img = 1;
                        img_thumb_height = 270;
                        img_thumb_width = 200; 
                    </script>
                    <script type="text/javascript">
//<![CDATA[

                        function removeHtmlTag(strx, chop) {
                            if (strx.indexOf("<") != -1) {
                                var s = strx.split("<");
                                for (var i = 0; i < s.length; i++) {
                                    if (s[i].indexOf(">") != -1) {
                                        s[i] = s[i].substring(s[i].indexOf(">") + 1, s[i].length);
                                    }
                                }
                                strx = s.join("");
                            }
                            chop = (chop < strx.length - 1) ? chop : strx.length - 2;
                            while (strx.charAt(chop - 1) != ' ' && strx.indexOf(' ', chop) != -1) chop++;
                            strx = strx.substring(0, chop - 1);
                            return strx + '...';
                        }

                        function createSummaryAndThumb(pID) {
                            var div = document.getElementById(pID);
                            var imgtag = "";
                            var img = div.getElementsByTagName("img");
                            var summ = summary_noimg;
                            if (img.length >= 1) {
                                imgtag = '<span style="float:left; padding:0px 10px 5px 0px;"><img src="' + img[0].src + '" width="' + img_thumb_width + 'px" height="' + img_thumb_height + 'px"/></span>';
                                summ = summary_img;
                            }

                            var summary = imgtag + "<div>" + removeHtmlTag(div.innerHTML, summ) + '</div>';
        	
                            div.innerHTML = summary;
                        }

//]]>
                    </script>
                </p>
                <div id="summary1655744853648508510">
                    <span style="float: left; padding: 0px 10px 5px 0px;">
                        <img src="<?php echo convert_image_path($product['image']) ;?>"
                            width="200px" height="270px">
                    </span>
                    
                            <div>...</div>
                </div>
                <script type="text/javascript">                    createSummaryAndThumb("summary1655744853648508510");</script>
                <p>
                </p>
                <div style="clear: both;">
                </div>
            </div>
            <div class="post-footer">
                <div class="post-footer-line post-footer-line-1">
                </div>
                <div class="post-footer-line post-footer-line-2">
                </div>
                <div class="post-footer-line post-footer-line-3">
                </div>
            </div>
        </div>
        <?php }?>
	</div>
	
	<div style="clear: both;">
    </div>
    <div align="center">
    	<?php echo $this->pagination->create_links();?>
    </div>
    <div class="clear">
    </div>

