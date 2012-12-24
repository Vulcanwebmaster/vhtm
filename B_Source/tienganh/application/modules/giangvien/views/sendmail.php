<form action="<?php echo base_url();?>giangvien/send" method="post">
				 				<p style="text-transform: uppercase">Tên người gửi <span style="color:red">*</span></p>
				 				<input type="text" name="contact_name">
				 				<p style="text-transform: uppercase">Email người gửi <span style="color:red">*</span></p>
				 				<input type="text" name="contact_email">
				 				
				 				<p style="text-transform: uppercase">Tên người nhận <span style="color:red">*</span></p>
				 				<input type="text" name="contact_name">
				 				<p style="text-transform: uppercase">Email người nhận <span style="color:red">*</span></p>
				 				<input type="text" name="contact_email">
				 				
				 				
				 				<input type="checkbox" class="checkbox" name="check"> <p class="chelh">Chọn nếu bạn muốn chúng tôi gọi lại cho bạn</p><br>
				 				<p style="clear: both">Nội dung lời nhắn <span style="color:red">*</span></p>
				 				<textarea name="mesage_content"></textarea>
				 				<p> <span style="color:red">*</span>Các trường hợp bắt buộc </p>
				 				<input type="submit" value="Gửi đi" class="submitlh">
				 				<input type="submit" value="Đóng lại" class="submitlh">
</form>