
<style type="text/css" media="screen">
	.first img{ width: 300px !important; height: 210px !important }
</style>
<!-- Page navigation-->
                <div class="breadcrumb">
                	<?php if ($_SESSION['lang']=="vn") 
					{?>		
                        <a href="<?php echo base_url();?>">NIW – Trang chủ</a>
                    	» Tags
					<?php } else{ ?>
						<a href="<?php echo base_url();?>">NIW – Homepage </a> 
						» Tags
					<?php } ?>
                </div>
                <!-- /Page navigation-->
                <!-- Content -->
                <div class="content sub">
                    <!-- Left Side -->
                    <div class="left">
                        <!-- Page Title -->
                        <div class="line">
                        </div>
                        <!-- / Page Title -->
                        <!-- blog box-->
                        <?php if (isset($list_tintags))
                            	{
                            		foreach ($list_tintags as $tintuc)
                            		{?>
                        <div class="blog">
                            <div class="box blog_left first">
                                <!-- blog image-->
                                	<?php if($tintuc->hinhanh!=""){ echo $tintuc->hinhanh; }else{ ?>
                                		<img src="<?php echo base_url();?>assets/niwcom/images/logo150px.png" />
                                	<?php } ?>
                                <!-- / blog image -->
                            </div>
                            <div class="box blog_right last">
                                <!-- blog headline-->
                                <h3>
                                   <a style="font-size:20px" href="<?php echo base_url();?>tintuc/detail/<?php echo $tintuc->id."/".$tintuc->alias;?>">
                            						<?php 
                            							if ($_SESSION['lang']=="vn"){
													         echo $tintuc->tieude; 
														}else {
															  echo $tintuc->tieudee; 
														} ?></a>
                                </h3>
                                <!-- / blog headline-->
                                <div class="line nomargin">
                                </div>
                                <!-- blog text-->
                                <?php
										if ($_SESSION['lang']=="vn"){
									         echo substr(strip_tags($tintuc->noidung),0,300);
										}else {
											 echo substr(strip_tags($tintuc->noidunge),0,300);
										}                            					
            					 ?> ...<br />
                                <a class="small_button" href="<?php echo base_url();?>tintuc/detail/<?php echo $tintuc->id."/".$tintuc->alias;?>">
	        						<?php if ($_SESSION['lang']=="vn")
									{?>		
										Xem tiếp
									<?php } else{ ?>
										Read more...
									<?php } ?>
        						</a>
                                <!-- /blog text-->
                            </div>
                            <div class="clear">
                            </div>
                        </div>
                        <?php } } ?>
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
