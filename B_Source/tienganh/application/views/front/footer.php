<div id="footer">
				<div class="contentfooter">
					<div class="ft1">
						<?php if ($_SESSION['lang']=="vn") 
						{?>		
							<p>Sản phẩm và dịch vụ</p>
						<?php } else{ ?>
							<p>Products and services</p>
						<?php } ?>

						
						<ul>
							<?php foreach ($list_dichvu as $key) {?>
								<li><a href="<?php echo base_url();?>">
									<?php if ($_SESSION['lang']=="vn") 
										{
											echo $key->ten; 
										}else{
											echo $key->tene; 
										}
										?>
											</a></li>
							<?php }?>
						</ul>
					</div>
					<div class="ft1">
						<?php if ($_SESSION['lang']=="vn") 
						{?>		
							<p>Đối tác</p>
						<?php } else{ ?>
							<p>Partners</p>
						<?php } ?>

						
						<ul>
							<?php foreach ($list_doitac as $value) 
							{ ?>
								<li><a href="http://mamnon.com">
									<?php if ($_SESSION['lang']=="vn") 
											{
												 echo $value->ten; 
											}else{
												echo $value->tene;
											}
									?></a></li>
							<?php } ?>						
						</ul>
					</div>
					<div class="ft1">
						<?php if ($_SESSION['lang']=="vn") 
						{?>		
							<p>Giáo viên</p>
							<ul>
							<li><a href="#">Giáo viên học viện Jennifer</a></li>
							<li><a href="#">Cảm nhận học viên</a></li>
							<li><a href="#">Cảm nhận của phụ huynh</a></li>
							</ul>
						<?php } else{ ?>
							<p>Teachers </p>
							<ul>
								<li><a href="#">Teachers Academy Jennifer</a></li>
								<li><a href="#">Comments students</a></li>
								<li><a href="#">Perceived by parents</a></li>
							</ul>	
						<?php } ?>
					</div>
					<div class="ft1" style="border:0">
						<?php if ($_SESSION['lang']=="vn") 
						{?>		
							<p>Hỗ trợ</p>
						<?php } else{ ?>
							<p>Support</p>
						<?php } ?>
						<ul>
							<li><a href="#">
								<?php if ($_SESSION['lang']=="vn") 
								{?>		
									Văn phòng học viện Jennifer
								<?php } else{ ?>
									Office Institute Jennifer
								<?php } ?>

								<br/>(+84) 04 665 22 666</a><br/>
								<li><a href="#">
									<?php if ($_SESSION['lang']=="vn") 
									{?>		
										Hỗ trợ trực tuyến
									<?php } else{ ?>
										Support Online
									<?php } ?>
									<br/>
								<?php foreach ($hotro_online as $value) {?>
									<?php if ($_SESSION['lang']=="vn") 
											{
												echo $value->name; 
											}else{
												echo $value->name;
											}
									?> - <?php echo $value->sdt ?></br>
									<a href="ymsgr:sendim?<?php echo $value->yahoo;?>">        		
			                        <img src="<?php echo base_url();?>assets/trungtam-tienganh/images/iconyaho.png"/>
			                        </a>
			                        <a href="skype:<?php echo $value->skype;?>?call">
			                        <img src="<?php echo base_url();?>assets/trungtam-tienganh/images/icon10.gif"/>
			                        </a></a>
							
								<?php } ?></li></li>
						</ul>
					</div>
				</div>
				<div class="footerbottom">
					<div class="copyright">Copyright© Học viện Jennifer - All Rights Reserved - Design by <a href="http://niw.com.vn/" style="color:#fff"> NIW</a></div>
					<div class="menubottom">
						<ul>
							<?php if ($_SESSION['lang']=="vn") 
							{?>		
								<li class="homebottom"><a href="<?php echo base_url();?>homepage">Trang chủ</a></li>
								<li><a href="<?php echo base_url();?>gioithieu">Giới thiệu</a></li>
								<li><a href="<?php echo base_url();?>tintuc">Tin tức</a></li>
								<li><a href="<?php echo base_url();?>khoahoc">Khóa học</a></li>
								<li><a href="<?php echo base_url();?>giangvien">Giảng viên</a></li>
								<li><a href="<?php echo base_url();?>thuvien">Thư viện</a></li>
								<li><a href="<?php echo base_url();?>lienhe">Liên hệ</a></li>
							<?php } else{ ?>
								<li class="homebottom"><a href="<?php echo base_url();?>homepage">Home</a></li>
								<li><a href="<?php echo base_url();?>gioithieu">About Us</a></li>
								<li><a href="<?php echo base_url();?>tintuc">News</a></li>
								<li><a href="<?php echo base_url();?>khoahoc">Course</a></li>
								<li><a href="<?php echo base_url();?>giangvien">Lecturer</a></li>
								<li><a href="<?php echo base_url();?>thuvien">Library</a></li>
								<li><a href="<?php echo base_url();?>lienhe">Contact Us</a></li>
							<?php } ?>

							
						</ul>
					</div>
				</div>
			</div>