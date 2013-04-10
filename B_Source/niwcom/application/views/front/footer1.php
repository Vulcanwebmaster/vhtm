
    </div>
    <!-- / wrapper 2 end-->
</div>
<!-- / wrapper end-->
 <!-- Footer -->
        <div id="footer">
            <div class="bottom_corners">
            </div>
            <!-- First Row -->
            <div class="row footer">
                <!-- box -->
                <div class="box four first">
                    <!-- Latest News -->
                    <h5>
                        Menu
                    </h5>
                    <ul class="footer_list">
                        <?php if ($_SESSION['lang']=="vn") 
						{?>		
						<li class="current_page_item">
                            <a href="<?php echo base_url();?>">Trang chủ</a>
                        </li>
                        <li >
                            <a href="<?php echo base_url();?>gioi-thieu">Giới thiệu</a>
                        </li>
                        <li >
                            <a href="<?php echo base_url();?>dich-vu">Dịch vụ</a>
                        </li>
                        <li >
                            <a href="<?php echo base_url();?>san-pham">Sản phẩm</a>
                        </li>
                        <li >
                            <a href="<?php echo base_url();?>lien-he">Liên hệ</a>
                        </li>
                        <li >
                            <a href="<?php echo base_url();?>tin-tuc">Tin tức</a>
                        </li>
						<?php } else{ ?>
						<li class="current_page_item">
                            <a href="<?php echo base_url();?>">Home</a>
                        </li>
                        <li >
                            <a href="<?php echo base_url();?>gioi-thieu">About us</a>
                        </li>
                        <li >
                            <a href="<?php echo base_url();?>dich-vu">Services</a>
                        </li>
                        <li >
                            <a href="<?php echo base_url();?>san-pham">Products</a>
                        </li>
                        <li >
                            <a href="<?php echo base_url();?>lien-he">Contact us</a>
                        </li>
                        <li >
                            <a href="<?php echo base_url();?>tin-tuc">News</a>
                        </li>	
						<?php } ?>
                    </ul>
                </div>
                <!-- /box -->
                <!-- box -->
                <div class="box four">
                    <!-- Links -->
                    <h5>
                        <?php if ($_SESSION['lang']=="vn") 
						{?>		
							Tin mới  
						<?php } else{ ?>
							Latest News
						<?php } ?>
                    </h5>
                    <ul class="footer_list">
                    	<?php foreach ($list_tintucft as $tintucft): ?>
							<li>
	                           <a href="<?php echo base_url();?>tintuc/detail/<?php echo $tintucft->id."/".$tintucft->alias;?>">
            						<?php 
            							if ($_SESSION['lang']=="vn"){
									         echo word_limiter(strip_tags($tintucft->tieude), 6);
										}else {
											 echo word_limiter(strip_tags($tintucft->tieudee), 6);
										} ?>
								</a>
	                        </li>
						<?php endforeach ?>
                    </ul>
                </div>
                <!-- /box -->
                <!-- box -->
                <div class="box four">
                    <!-- box title-->
                    <h5>
                        <?php if ($_SESSION['lang']=="vn") 
						{?>		
							Sản phẩm  
						<?php } else{ ?>
							Products
						<?php } ?>
                    </h5>
                    <!-- text-->
                     <ul class="footer_list">
                    	<?php foreach ($list_sanphamft as $sanphamft): ?>
							<li>
	                           <a target="_blank" href="<?php echo $sanphamft->link;?>">
            						<?php echo $sanphamft->tensp ?>
								</a>
	                        </li>
						<?php endforeach ?>
                    </ul>
                </div>
                <!-- /box -->
                <!-- box -->
                <div class="box four last">
                    <!-- box title-->
                    <h5>
                    	<?php if ($_SESSION['lang']=="vn") 
						{?>		
							Liên hệ
						<?php } else{ ?>
							Contact Form
						<?php } ?>
                    </h5>
                    <div id="result_footer">
                    </div>
                    <div id="contact_form_footer">
                        <!-- form -->
                        		<?php if ($this->session->userdata('result')!='')
								{
									echo '<p style="color:red; padding-left:30px">';
									echo $this->session->userdata('result');
									$this->session->unset_userdata('result');
									echo '</p>';
								}?>
                        <form action="<?php echo base_url();?>lienhe/send" id="validate_form_footer" method="post" class="showtextback">
                            <fieldset>
                                <ul>
                                    <li>
                                        <label for="name">
                                        </label>
                                        <input id="name" type="text" title="*" name="hoten" 
                                         value="<?php if ($_SESSION['lang']=="vn") {?>Tên: (*)<?php } else{ ?>Your name: (*)<?php } ?>"
                                         class="required" 
                                         />
                                    </li>
                                    <li>
                                        <label for="email">
                                        </label>
                                        <input id="email" type="text" title="*" name="email" 
                                        value="<?php if ($_SESSION['lang']=="vn") {?>Email: (*)<?php } else{ ?>Your Email: (*)<?php } ?>" 
                                        class="required email"
                                        />
                                    </li>
                                    <li>
                                        <label for="message">
                                        </label>
                                        <textarea id="message" title="*" name="noidung" rows="8" cols="40" class="required">
                                            <?php if ($_SESSION['lang']=="vn") {?>Nội dung: (*)<?php } else{ ?>Your message: (*)<?php } ?>
                                        </textarea>
                                    </li>
                                    <li>
                                        <input type="submit" class="submitbutton2" value="<?php if ($_SESSION['lang']=="vn") {?>Gửi<?php } else{ ?>Send<?php } ?>" />
                                        <span class="loading">
                                        </span>
                                    </li>
                                </ul>
                            </fieldset>
                        </form>
                        <!--/ form -->
                    </div>
                </div>
                <!-- /box -->
                <div class="clear">
                </div>
            </div>
            <!-- / First Row -->
            <!-- Second Row -->
            <div class="second_footer">
                <div class="row sfooter">
                    Copyright © 2013, Công ty TNHH Công nghệ phần mềm - NIW, Design by <a href="http://niw.com.vn/"> NIW </a>
                    <!-- social media icons -->
                    <div class="social_media_icons">
                        <a target="_blank" href="https://twitter.com/twitter" class="j_ttip" title="folllow us on twitter"><img src="<?php echo base_url();?>assets/niwcom/images/social_media/twitter_16.png" alt="" /></a>
                        <a target="_blank" href="http://www.facebook.com/NiwVietNam" class="j_ttip" title="folllow us on facebook"><img src="<?php echo base_url();?>assets/niwcom/images/social_media/facebook_16.png" alt="" /></a>
                    </div>
                    <!-- / social media icons -->
                </div>
            </div>
            <!-- / Second Row -->
        </div>
        <!-- / Footer -->