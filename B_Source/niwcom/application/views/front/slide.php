<!-- <script type="text/javascript" src="<?php echo base_url();?>assets/niwcom/js/custom.js"></script> -->
<style type="text/css">
	.slideshow p{ padding: 0; }
	.slideshow_Thumbs12 img{ height: 50px !important; width: 70px !important }
</style>

<div class="wrapper wrapper_shadow ie6fix" id="wrapper_featured_area">
            <div class="overlay_top ie6fix">
            </div>
            <div class="overlay_bottom ie6fix">
            </div>
            <div class="center ie6fix">
                <!-- ###################################################################### -->
                <div class="feature_wrap">
                    <!-- ###################################################################### -->
                    <?php if(isset($show_slide)==1){ ?>
                    <ul class='slideshow aviaslider'>
                    	<?php foreach ($list_slide as $slide)
						{
							  echo '<li class="featured featured1"><span>'.$slide->anh1.'</span></li>'; 
							  echo '<li class="featured featured6"><span>'.$slide->anh2.'</span></li>'; 
							  echo '<li class="featured featured7"><span>'.$slide->anh3.'</span></li>'; 
							  echo '<li class="featured featured8"><span>'.$slide->anh4.'</span></li>'; 
							  echo '<li class="featured featured9"><span>'.$slide->anh5.'</span></li>'; 
						}?>
                        <!-- end .featured -->
                    </ul>
                    <?php } ?>
                    <div class="slidecontrolls" style="width: 70px; float: none; display: none;"><a href="http://niw.com.vn/#" class="ie6fix"></a><a href="http://niw.com.vn/#" class="ie6fix  active_item"></a><a href="http://niw.com.vn/#" class="ie6fix "></a><a href="http://niw.com.vn/#" class="ie6fix "></a><a href="http://niw.com.vn/#" class="ie6fix "></a></div>
                    <!-- end .featured_inside -->
                    <!-- ###################################################################### -->
                </div>
                <!-- end featuredwrap -->
                <!-- ###################################################################### -->
                <!-- end center-->
            </div>
            <!--end wrapper-->
        </div>
        <div class="wrapper" id="wrapper_featured_stripe">
            <div class="center">
                <ul class='slideshowThumbs'>
                	<?php foreach ($list_slide as $slide)
						{ ?>
                    <li class='slideThumb ie6fix slideThumb1'><span class='slideThumWrap slideshow_Thumbs12'><span class='slideThumbTitle'>
                        <strong class='slideThumbHeading rounded ie6fix'>NIW</strong> </span><span class='fancy'>
                        </span >
                        <?php echo $slide->anh1 ?>
                        </span>
                    </li><!-- end .slideThumb -->
                    
                    <li class='slideThumb ie6fix slideThumb1'><span class='slideThumWrap slideshow_Thumbs12'><span class='slideThumbTitle'>
                        <strong class='slideThumbHeading rounded ie6fix'>Website</strong> </span><span class='fancy'>
                        </span>
                        <?php echo $slide->anh2 ?>
                        </span>
                    </li><!-- end .slideThumb -->
                    <li class='slideThumb ie6fix slideThumb2'><span class='slideThumWrap slideshow_Thumbs12'><span class='slideThumbTitle'>
                        <strong class='slideThumbHeading rounded ie6fix'>Phần mềm ứng dụng options</strong>
                  	    </span><span class='fancy'></span>
                         <?php echo $slide->anh3 ?>
                            </span>
                    </li><!-- end .slideThumb -->
                    <li class='slideThumb ie6fix slideThumb3'><span class='slideThumWrap slideshow_Thumbs12'><span class='slideThumbTitle'><strong class='slideThumbHeading rounded ie6fix'>
                        Chất lượng</strong> </span><span class='fancy'></span>
                         <?php echo $slide->anh4 ?>
                         </span>
                    </li><!-- end .slideThumb -->
                    <li class='slideThumb ie6fix slideThumb3'><span class='slideThumWrap slideshow_Thumbs12'><span class='slideThumbTitle'><strong class='slideThumbHeading rounded ie6fix'>
                        Dịch vụ</strong> </span><span class='fancy'></span>
                         <?php echo $slide->anh5 ?>
                         </span>
                    </li><!-- end .slideThumb -->
                    <?php } ?>
                    <!-- end .slideThumb -->
                </ul>
                <!-- end .slideshowThumbs -->
                <!-- end center-->
            </div>
            <!--end wrapper-->
            <a style="width: 210px; height: 50px; background-image: url(&#39;http://niw.com.vn/assets/niw/images/contac_button.png&#39;);
                background-repeat: no-repeat; float: right; color: #777; margin-top: 45px; margin-right: 200px;
                vertical-align: 50%; line-height: 50px; font-size: 20px; padding-left: 40px;" href="<?php echo base_url();?>lienhe" id="lien_he">
				<?php if ($_SESSION['lang']=="vn") 
				{?>		
					Liên hệ		
				<?php } else{ ?>
					Contact Us
				<?php } ?>
			</a>
        </div>
<!-- ************************************************************************** -->
