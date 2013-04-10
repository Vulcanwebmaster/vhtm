<!-------------Check validation ------------>
	<script>
		$(document).ready(function(){
		 jQuery("#validate_form_footer").validationEngine();
		});
	</script>
<!-------------End Check validation ------------>
        <!--main bottom  wrap-->
        <div id="mainBtmWrap">
        <div class="btmBg">
        <!--news and worksheet-->
        <div id="mainNews" class="clr">
        <div id="mainTwitter">
        <h4> Menu </h4>
        	<ul>
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
        <div id="mainBlog">
        <h4>
        	<?php if ($_SESSION['lang']=="vn") 
						{?>		
							Tin mới  
						<?php } else{ ?>
							Latest News
						<?php } ?></h4>
        	<ol class="blogsitesummary">
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
                    </ol>
        </div>
        <div id="mainBlog">
        <h4><?php if ($_SESSION['lang']=="vn") 
						{?>		
							Sản phẩm  
						<?php } else{ ?>
							Products
						<?php } ?>
		</h4>
        <ol class="blogsitesummary"><?php foreach ($list_sanphamft as $sanphamft): ?>
							<li>
	                           <a target="_blank" href="<?php echo $sanphamft->link;?>">
            						<?php echo $sanphamft->tensp ?>
								</a>
	                        </li>
						<?php endforeach ?></ol></div>
        <div id="mainBlog">
        	        <h4><?php if ($_SESSION['lang']=="vn") 
						{?>		
							Liên hệ  
						<?php } else{ ?>
							Contact Us
						<?php } ?>
					</h4>
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
                                    class="formField ffInput validate[required] text-input"
                                     value="" placeholder="<?php if ($_SESSION['lang']=="vn") {?>Tên: (*)<?php } else{ ?>Your name: (*)<?php } ?>"
                                     />
                                </li>
                                <li>
                                    <label for="email">
                                    </label>
                                    <input id="email" type="text" title="*" name="email" 
                                    placeholder="<?php if ($_SESSION['lang']=="vn") {?>Email: (*)<?php } else{ ?>Your Email: (*)<?php } ?>" 
                                    class="formField ffInput validate[required,custom[email]] text-input"
                                    />
                                </li>
                                <li>
                                    <label for="message">
                                    </label>
                                    <textarea id="message" title="*" name="noidung" rows="8" cols="40" class="formField ffInput validate[required] text-input" >
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
        </div>
        <!--end news and worksheet-->
        </div>
        </div>
        <!--end main bottom wrap-->
        <!--main footer wrap-->
        <div id="mainFtrWrap">
        <div id="mainFtr" class="clr">
        	<!-- <img src="<?php echo base_url();?>assets/niwcom/images/logo150px.png"> -->
    	<span class="date">Copyright ©
	        <script type="text/javascript">
				var d = new Date();
				document.write(d.getFullYear());
			</script>
			Công ty TNHH Công nghệ phần mềm - NIW, Design by <a href="http://niw.com.vn/"> NIW </a>
        </span></div>
        </div>
        <!--end main footer wrap-->
        </div>
        <!--end main wrap-->
