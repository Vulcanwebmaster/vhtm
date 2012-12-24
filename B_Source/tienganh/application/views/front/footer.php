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
							<li><a href="#">Văn phòng học viện Jennifer<br/>(+84) 04 665 22 666</a><br/>
								<li><a href="#">Hỗ trợ trực tuyến<br/>
								<?php foreach ($hotro_online as $value) {?>
									<?php echo $value->name ?> - <?php echo $value->sdt ?></br>
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
					<div class="copyright">Copyright©Học viện Jennifer - All Rights Reserved - Design by <a href="http://niw.com.vn/" style="color:#fff"> NIW</a></div>
					<div class="menubottom">
						<ul>
							<li class="homebottom"><a href="<?php echo base_url();?>homepage">Trang chủ</a></li>
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