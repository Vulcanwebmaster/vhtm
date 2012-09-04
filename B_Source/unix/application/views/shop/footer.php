<?php $query=$this->MKaimonokago->getContact();?>
<div id="footer">
	<div id="footer-content">
		<div id="footer-catarogy">
			<div id="footer-ul">
				<ul>
					<li><a style="color:white" href="<?php echo base_url(); ?>index.php">Trang chủ</a></li>
					<li>|</li>
					<li><a style="color:white" href="<?php echo base_url(); ?>index.php/gioithieu">Giới thiệu</a></li>
					<li>|</li>
					<li><a style="color:white" href="<?php echo base_url(); ?>index.php/hoithao">Hội thảo</a></li>
					<li>|</li>
					<li><a style="color:white" href="<?php echo base_url(); ?>index.php/khoahoc">Khóa học</a></li>
					<li>|</li>
					<li><a style="color:white" href="<?php echo base_url(); ?>index.php/thuvien">Thư viện</a></li>
					<li>|</li>
					<li><a style="color:white" href="<?php echo base_url(); ?>index.php/camnhan">Cảm nhận</a></li>
					<li>|</li>
					<li><a style="color:white" href="<?php echo base_url(); ?>index.php/tintuc">Tin tức</a></li>
					<li>|</li>
					<li><a style="color:white" href="<?php echo base_url(); ?>index.php/lienhe">Liên hệ</a></li>
				</ul><br clear="both"/>
			</div>
			<div id="show-contact">
				<ul>
					<li><img src="<?php echo base_url(); ?>assets/unix/images/home.png" height="20px" width="20px"/> <?php echo $query->diachi; ?></li>
					<li><img src="<?php echo base_url(); ?>assets/unix/images/contact.png" height="20px" width="20px"/> <?php echo $query->dienthoai ?></li>
					<li><img src="<?php echo base_url(); ?>assets/unix/images/mess.png" height="18px" width="18px"/> <?php echo $query->email;?></li>
				</ul>
			</div>
		</div>
		<div id="information">
		<div style="border-bottom:1px solid #FFFFFF; padding:10px">Bản quyền © 2012 - UNIX. Thiết kế bởi <a href="http://niw.com.vn" style="color:#37BBED; text-decoration:underline">NIW</a></div>
		<div style="padding:10px"><img src="<?php echo base_url(); ?>assets/unix/images/fire.png" height="20px" width="20px"/><?php echo $query->website;?></div>
		
	</div>
	</div>		
	
	
</div>