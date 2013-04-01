
<style type="text/css" media="screen">
	.stl_sp { width: 45%; float: left }
	.imgsanpham img{ width: 195px !important; height: 132px !important }
	.box.four{ height: 230px; }
</style>
<!-- Page navigation-->
                <div class="breadcrumb">
                	<?php if ($_SESSION['lang']=="vn") 
					{?>		
                        <a href="<?php echo base_url();?>">NIW – Trang chủ</a>
                    	» Sản phẩm
					<?php } else{ ?>
						<a href="<?php echo base_url();?>">NIW – Homepage </a> 
						» Products
					<?php } ?>
                </div>
                <!-- /Page navigation-->
                
                <!-- Content -->
                <div class="content">
                    <!-- Page Title -->
                    <div class="row titlebar">
                        <h2>
                            Sản phẩm
                        </h2>
                        <div class="line nomargin">
                        </div>
                    </div>
                    <!-- / Page Title -->
                    <!-- Start Porfolio Items -->
                    <!-- row -->
                    <div class="row white">
                        <!-- box -->
                        <?php if (isset($list_sanpham))
                            	{
                            		foreach ($list_sanpham as $sanpham)
                            		{?>
                        <div class="box four">
                            <!-- title-->
                            <h5>
                            	<a target="_blank" href="<?php echo $sanpham->link ?>" >
                    				<?php echo $sanpham->tensp ?>
                    			</a>
                            </h5>
                            <!-- portfolio image -->
                            <span class="aligncenter">
                                <span class="border imgsanpham">
                                    <a target="_blank" href="<?php echo $sanpham->link ?>" >
                                    <?php echo $sanpham->hinhanh ?></a>
                                </span>
                            </span>
                        </div>
                        <?php } } ?>
                        <!-- /box -->
                    </div>
                    <!-- / row -->
                    <div class="clear">
                    </div>
                    <!-- End Porfolio Items -->
                    <!-- pagingation wrapper -->
                    <div class="row silver no-vertical-padding">
                        <!-- paging-->
                        <ul class="paging portfolio">
<!--                         	<?php echo $this->pagination->create_links();?> -->
                        </ul>
                        <!-- / paging-->
                        <div class="clear">
                        </div>
                    </div>
                    <!-- / pagingation wrapper -->
                </div>
                <!-- / Content -->
