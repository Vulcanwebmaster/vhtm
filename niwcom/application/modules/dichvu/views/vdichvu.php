               
               
               <style type="text/css" media="screen">
                   .noidungniw p{ width: 100%; }
                   	.box.four{ height: 230px; width: 208px !important }
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
                        
                        <div class="line">
                        </div>
                        <!-- / Page Title -->
                        <!-- row -->
                    <div class="row white">
                        <!-- box -->
                        <?php if (isset($list_dichvu))
                            	{
                            		foreach ($list_dichvu as $dichvu)
                            		{?>
                        <div class="box four">
                            <!-- title-->
                            <h5>
                            	<?php
										if ($_SESSION['lang']=="vn"){
	                            			echo $dichvu->tieude; 
		                            	}else {
											echo $dichvu->tieudee; 
										}
									?>
                            </h5>
                            <!-- portfolio image -->
                             <?php
										if ($_SESSION['lang']=="vn"){
											echo word_limiter(strip_tags($dichvu->noidung), 30);
		                            	}else {
											echo word_limiter(strip_tags($dichvu->noidunge), 30);
										}
									?>  
							<br /><a href="<?php echo base_url();?>index.php/dichvu/detail/<?php echo $dichvu->id."/".$dichvu->alias;?>" class="scrollTop">
													<?php if ($_SESSION['lang']=="vn") 
													{?>		
														Xem tiếp
													<?php } else{ ?>
														Read more...
													<?php } ?></a>
                        </div>
                        <?php } } ?>
                        <!-- /box -->
                    </div>
                    <!-- / row -->
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

