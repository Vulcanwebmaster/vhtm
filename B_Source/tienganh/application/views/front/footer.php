<div id="footer">
				<div class="contentfooter">
					<div class="ft1">
						<p>Sản phẩm và dịch vụ</p>
						<ul>
							<li><a href="#">Tiếng anh cho mầm non</a></li>
							<li><a href="#">Tiếng anh cho tiểu học</a></li>
							<li><a href="#">Tiếng anh cho sinh viên</a></li>
						</ul>
					</div>
					<div class="ft1">
						<p>Đối tác</p>
						
							
						
						<ul>
							<?php foreach ($list_doitac as $value) 
							{ ?>
								<li><a href="http://mamnon.com"><?php echo $value->ten ?></a></li>
							<?php } ?>						
						</ul>
					</div>
					<div class="ft1">
						<p>Giáo viên</p>
						<ul>
							<li><a href="#">Giáo viên học viện Jennifer</a></li>
							<li><a href="#">Cảm nhận học viên</a></li>
							<li><a href="#">Cảm nhận của phụ huynh</a></li>
						</ul>
					</div>
					<div class="ft1" style="border:0">
						<p>Hỗ trợ</p>
						<ul>
							<li><a href="#">Văn phòng học viện Jennifer<br/>(+84) 04 665 22 666</a></li>
							<li><a href="#">Hỗ trực tuyến<br/>
								Mss. Yến-123 456 789</a><br/>
								<img src="<?php echo base_url();?>assets/trungtam-tienganh/images/icon10.gif" class="skype"/>
								<img src="<?php echo base_url();?>assets/trungtam-tienganh/images/iconyaho.png"/>
							</li>
						</ul>
					</div>
				</div>
				<div class="footerbottom">
					<div class="copyright">Copyright©Học viện Jennifer - All Rights Reserved</div>
					<div class="menubottom">
						<ul>
							<li class="home"><a href="#">Trang chủ</a></li>
							<li><a href="<?php echo base_url();?>gioithieu">Giới thiệu</a></li>
							<li><a href="<?php echo base_url();?>tintuc">Tin tức</a></li>
							<li><a href="<?php echo base_url();?>khoahoc">Khóa học</a></li>
							<li><a href="<?php echo base_url();?>giangvien">Giảng viên</a></li>
							<li><a href="<?php echo base_url();?>thuvien">Thư viện</a></li>
							<li><a href="<?php echo base_url();?>lienhe">Liên hệ</a></li>
						</ul>
					</div>
				</div>
			</div>