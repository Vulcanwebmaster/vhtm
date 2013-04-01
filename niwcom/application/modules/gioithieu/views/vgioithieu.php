               
               
               <style type="text/css" media="screen">
                   .noidungniw p{ width: 100%; }
               </style>
                <!-- Page navigation-->
                <div class="breadcrumb">
                	<?php if ($_SESSION['lang']=="vn") 
					{?>		
                        <a href="<?php echo base_url();?>">NIW – Trang chủ</a>
                    	» Giới thiệu
					<?php } else{ ?>
						<a href="<?php echo base_url();?>">NIW – Homepage </a> 
						» About us
					<?php } ?>
                </div>
                <!-- /Page navigation-->
                <!-- Content -->
                <div class="content sub">
                    <!-- Left Side -->
                    <div class="left">
                        <!-- Page Title -->
                        <h2>
                            <?php if ($_SESSION['lang']=="vn"){
                            		echo $list_gioithieu->tieude; 
                            	}else {
									echo $list_gioithieu->tieudee; 
								}
                            	?>
                        </h2>
                        <div class="line">
                        </div>
                        <!-- / Page Title -->
                        <!-- blog box-->
                        <div class="blog noidungniw">
                            <?php if ($_SESSION['lang']=="vn"){
                        		echo $list_gioithieu->noidung; 
                        	}else {
								echo $list_gioithieu->noidunge; 
							}
                        	?>
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