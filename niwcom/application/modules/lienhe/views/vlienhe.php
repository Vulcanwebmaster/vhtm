
               <style type="text/css" media="screen">
                   .noidungniw p{ width: 100%; }
               </style>
                <!-- Page navigation-->
                <div class="breadcrumb">
                	<?php if ($_SESSION['lang']=="vn") 
					{?>		
                        <a href="<?php echo base_url();?>">NIW – Trang chủ</a>
                    	» Liên hệ
					<?php } else{ ?>
						<a href="<?php echo base_url();?>">NIW – Homepage </a> 
						» Contact us
					<?php } ?>
                </div>
                <!-- /Page navigation-->
                <!-- Content -->
                <div class="content sub">
                    <!-- Left Side -->
                    <div class="left">
                        <!-- Page Title -->
                        <?php if ($_SESSION['lang']=="vn") 
						{?>		
                       		<h4 style="color: #626262"> CÔNG TY TNHH CÔNG NGHỆ PHẦN MỀM NIW </h4>
                       		<p><strong>Địa chỉ:</strong> Tòa nhà CT5B - Mễ Trì Thượng - Từ Liêm - Hà Nội.</p>
                        	<p><strong>Điện thoại:</strong> (+84) 85898964.</p>
                        	<p><strong>Email:</strong> support@niw.com.vn.</p>
						<?php } else{ ?>
							<h4 style="color: #626262"> CÔNG TY TNHH CÔNG NGHỆ PHẦN MỀM NIW </h4>
                       		<p><strong>Address:</strong> CT5B Building - Me Tri Thuong - Tu Liem - Ha Noi.</p>
                        	<p><strong>Phone number:</strong> (+84) 85898964.</p>
                        	<p><strong>Email:</strong> support@niw.com.vn.</p>
						<?php } ?>
                        
                        <div class="line">
                        </div>
                        <!-- / Page Title -->
                        <!-- blog box-->
                        <div class="blog noidungniw">
                            
                         <iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps/ms?msa=0&amp;msid=216745339241060542234.0004c4102909de9d3e735&amp;ie=UTF8&amp;t=m&amp;source=embed&amp;ll=21.004354,105.781817&amp;spn=0.014022,0.022745&amp;output=embed"></iframe><br /><small>Xem <a target="_blank" href="https://maps.google.com/maps/ms?msa=0&amp;msid=216745339241060542234.0004c4102909de9d3e735&amp;ie=UTF8&amp;t=m&amp;source=embed&amp;ll=21.004354,105.781817&amp;spn=0.014022,0.022745" style="color:#0000FF;text-align:left">Công ty TNHH NIW</a> ở bản đồ lớn hơn</small>
                         <br />
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
