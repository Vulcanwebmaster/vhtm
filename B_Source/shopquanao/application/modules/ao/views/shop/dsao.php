<div class="main-container col2-right-layout" style="width:750px; float:left">
	<?php foreach ($list as $index => $row)
        {
        	?>
        	<div class="post hentry">
            <a name="1655744853648508510"></a>
            <h3 class="post-title entry-title" style="width:200px;clear:both; height:62px; background-image:url('<?php echo base_url();?>assets/women_files/pricebox_bg2.png'); background-repeat:no-repeat">
            	<!-- div style="width:200px;clear:both; height:62px; background-image:url('<?php echo base_url();?>assets/women_files/pricebox_bg2.png'); background-repeat:no-repeat" -->
                    	<span style="float:left;color:white; padding-top:10px;padding-left:25px;"><?php echo $this->MKaimonokago->format_price($row['price']);?> VNĐ</span>
                    	<a href="<?php echo base_url();?>index.php/welcome/cart/<?php echo $row['id'];?>"
                    	style="padding-top:0px;padding-right:10px;text-transform:uppercase; float:right; font-size:9px">
							<img style="background:transparent; border:transparent" src="<?php echo base_url();?>assets/women_files/shopping_cart.png" width="30px"/>
						</a>
                <!-- /div -->
                                
            </h3>
            <a href="<?php echo base_url();?>index.php/chitietsp/get_inf/<?php echo $row['id'];?>"><?php echo $row['name'];?></a>
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
                <div class="summary1655744853648508510">
                    <a href="<?php echo base_url();?>index.php/chitietsp/get_inf/<?php echo $row['id'];?>" style="float: left; padding: 0px 10px 5px 0px;">
                        <img src="<?php echo $this->MKaimonokago->get_link_image($row['image']) ;?>" width="200px" height="270px"/>
                    </a>
                    
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
	    <div style="clear: both;">
	    </div>
	    <div align="center">
	    	<?php echo $this->pagination->create_links();?>
	    </div>
	</div>
	<div id="right" style="float:right">
    	<?php $this->load->view('shop/right');?>
    </div>
	
    <div class="clear">
    </div>

