
               
               
               <style type="text/css" media="screen">
                   .noidungniw p{ width: 100%; }
               </style>
                <!-- Page navigation-->
                <div class="breadcrumb">
                	<?php if ($_SESSION['lang']=="vn") 
					{?>		
                        <a href="<?php echo base_url();?>">NIW – Trang chủ</a>
                    	» Dịch vụ
					<?php } else{ ?>
						<a href="<?php echo base_url();?>">NIW – Homepage </a> 
						» Service
					<?php } ?>
                </div>
                <!-- /Page navigation-->
                <!-- Content -->
                <div class="content sub">
                    <!-- Left Side -->
                    <div class="left">
                        <!-- Page Title -->
                        <?php if (isset($dichvu))
                        		{?>
                        		<h4 style="color: #626262"><?php 
										if ($_SESSION['lang']=="vn"){
									         echo $dichvu->tieude; 
										}else {
											  echo $dichvu->tieudee; 
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
                        			      echo $dichvu->noidung;
                    			 	}else {
										  echo $dichvu->noidunge; 
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
 