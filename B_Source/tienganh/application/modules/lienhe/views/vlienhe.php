	<?php if (validation_errors())
	{
		echo '<div class="error-panel">';
		//echo validation_errors('<p style="color:#f83d43">','</p>');
		echo '</div>';
	}?>
<div id="content">
				<!--<img src="<?php echo base_url();?>assets/trungtam-tienganh/images/leffgv.png" id="imgleftgv">-->
				 <div id="content_left">
				 	<div id="imgleftgv"><p align="center">Liên hệ</p></div>
				 	<div id="contentlefftgv">
				 	</div>
				 </div>			 
				 <style>				
				 	#slider img{ width:663px !important; height:235px!important;}
				 </style>
				 <div id="content_right">
				 	<div class="slidegv">
				 		<div class="slider-wrapper theme-default">
				            <div id="slider" class="nivoSlider">
				            	<?php foreach ($list_slide as $slide)
									{
										 echo $slide->anh1;
										 echo $slide->anh2;
										 echo $slide->anh3;
										 echo $slide->anh4;
									}?>
		        		</div>
				 	</div>
				 	<div id="contentgv">
				 		<div id="lhlefft">
				 			<p class="ttlh">Thông tin liên hệ</p>
				 			<?php 
								echo '<p style="color:#f83d43; margin:10px;  font-size: 13px; font-weight: bold ">'.$this->session->userdata('lienhe_result').'</p>';
								$this->session->unset_userdata('lienhe_result');
							?>
				 			<p style="text-transform: uppercase">Bạn quan tâm dến</p>
				 			<form action="<?php echo base_url();?>lienhe/send" method="post">
				 				<select name="lecturers_category">
				 					<option value="Trợ giảng">Trợ giảng</option>
				 					<option value="Thầy giáo">Thầy giáo</option>
				 					<option value="Cô giáo">Cô giáo</option>
				 					<option value="Trung tâm Jenny">Trung tâm Jenny</option>
				 					<option value="Khóa học">Khóa học</option>
				 				</select>
				 				<p style="text-transform: uppercase">Tên <span style="color:red">*</span></p>
				 				<input type="text" name="contact_name">
				 				<p style="text-transform: uppercase">Địa chỉ mail <span style="color:red">*</span></p>
				 				<input type="text" name="contact_email">
				 				<p style="text-transform: uppercase">Số mobile </p>
				 				<input type="text" name="contact_phone"><br>
				 				<input type="checkbox" class="checkbox" name="check"> <p class="chelh">Chọn nếu bạn muốn chúng tôi gọi lại cho bạn</p><br>
				 				<p style="clear: both">Nội dung thông điệp <span style="color:red">*</span></p>
				 				<textarea name="mesage_content"></textarea>
				 				<p> <span style="color:red">*</span>Các trường hợp bắt buộc </p>
				 				<input type="submit" value="Gửi tin" class="submitlh">
				 			</form>
				 			<?php echo validation_errors('','</p>'); ?>
				 		</div>
				 		<div id="lhrigh">
				 			<p class="ttlh">Địa chỉ liên hệ</p>
				 			<p style="padding-top:10px">TRUNG TÂM TIẾNG ANH JENNIFER<br>Thos mas - Nguyễn Ngọc Vũ - Hà Nội</p>
				 			<p>Tel: 0123 456 789<br>
Email: info@jennifer.com<br>
Website: www.jennifer.edu.vn</p><br>
<p>Bản đồ chỉ dẫn đường đi:</p>
							<div>
								<iframe width="299" height="250" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=vi&amp;geocode=&amp;q=TRUNG+T%C3%82M+TI%E1%BA%BENG+ANH+JENNIFER+Thos+mas+-+Nguy%E1%BB%85n+Ng%E1%BB%8Dc+V%C5%A9+-+H%C3%A0+N%E1%BB%99i&amp;sll=37.0625,-95.677068&amp;sspn=38.638819,86.572266&amp;ie=UTF8&amp;hq=TRUNG+T%C3%82M+TI%E1%BA%BENG+ANH+JENNIFER+Thos+mas+-+Nguy%E1%BB%85n+Ng%E1%BB%8Dc+V%C5%A9+-&amp;hnear=H%C3%A0+N%E1%BB%99i,+Ho%C3%A0n+Ki%E1%BA%BFm,+H%C3%A0+N%E1%BB%99i,+Vi%E1%BB%87t+Nam&amp;t=m&amp;ll=21.009202,105.800915&amp;spn=0.040062,0.054417&amp;z=13&amp;output=embed"></iframe><br><small><a target="_blank" href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=vi&amp;geocode=&amp;q=TRUNG+T%C3%82M+TI%E1%BA%BENG+ANH+JENNIFER+Thos+mas+-+Nguy%E1%BB%85n+Ng%E1%BB%8Dc+V%C5%A9+-+H%C3%A0+N%E1%BB%99i&amp;sll=37.0625,-95.677068&amp;sspn=38.638819,86.572266&amp;ie=UTF8&amp;hq=TRUNG+T%C3%82M+TI%E1%BA%BENG+ANH+JENNIFER+Thos+mas+-+Nguy%E1%BB%85n+Ng%E1%BB%8Dc+V%C5%A9+-&amp;hnear=H%C3%A0+N%E1%BB%99i,+Ho%C3%A0n+Ki%E1%BA%BFm,+H%C3%A0+N%E1%BB%99i,+Vi%E1%BB%87t+Nam&amp;t=m&amp;ll=21.009202,105.800915&amp;spn=0.040062,0.054417&amp;z=13" style="color:#0000FF;text-align:left">Xem Bản đồ cỡ lớn hơn</a></small>
							</div>
				 		</div>
				 	</div>
			</div>
			</div>
			<script type="text/javascript">
				$('#contactushd').addClass('bgli');
			</script>