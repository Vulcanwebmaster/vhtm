<div class="widget Blog" id="Blog1">
    <div class="blog-posts hfeed">
        <!-- google_ad_section_start(name=default) -->
        <?php foreach ($newArrivals as $row)
        {
        	?><div class="post hentry">
            <a name="1655744853648508510"></a>
            <h3 class="post-title entry-title">
                <a href="<?php echo base_url();?>index.php/chitietsp/get_inf/<?php echo $row->id;?>"><?php echo $row->name;?></a>
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
                        <img src="<?php echo convert_image_path($row->image) ;?>"
                            width="200px" height="270px"></span><div>
                                ...</div>
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
        
        
        <!-- google_ad_section_end -->
    </div>
    <div style="clear: both;">
    </div>
    <div align="center">
    	<?php echo $this->pagination->create_links();?>
    </div>
    <div class="clear">
    </div>
</div>
