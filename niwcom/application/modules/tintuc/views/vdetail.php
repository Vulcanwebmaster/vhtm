               
               
               <style type="text/css" media="screen">
                   .noidungniw p{ width: 100%; }
               </style>
                <!-- Page navigation-->
                <div class="breadcrumb">
                	<?php if ($_SESSION['lang']=="vn") 
					{?>		
                        <a href="<?php echo base_url();?>">NIW – Trang chủ</a>
                    	» Tin tức
					<?php } else{ ?>
						<a href="<?php echo base_url();?>">NIW – Homepage </a> 
						» News
					<?php } ?>
                </div>
                <!-- /Page navigation-->
                <!-- Content -->
                <div class="content sub">
                    <!-- Left Side -->
                    <div class="left">
                        <!-- Page Title -->
                        <?php if (isset($tintuc))
                        		{?>
                        		<h4 style="color: #626262"><?php 
										if ($_SESSION['lang']=="vn"){
									         echo $tintuc->tieude; 
										}else {
											  echo $tintuc->tieudee; 
										}?>
								</h4>
                        <div class="line">
                        </div>
                        <!-- / Page Title -->
                        <!-- blog box-->
                        <div class="blog noidungniw">
                            
                        		<div style="text-align:justify">
                        			<?php
                        			if ($_SESSION['lang']=="vn"){
                        			      echo $tintuc->noidung;
                    			 	}else {
										  echo $tintuc->noidunge; 
									}?>
                        		</div>
                        	<?php }?>
                        </div>
                        <!-- blog box-->
                        <div class="clear">
                        </div>
                    </div>
                    <!-- / Left -->
<!-- Slidebar -->
<?php $this->load->view('front/slidebar_right');?>
<!-- End Slidebar -->


                    <div class="clear">
                    </div>
                </div>
                <!-- / Content -->