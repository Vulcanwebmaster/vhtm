<form action="<?php echo base_url();?>giangvien/send" method="post">
				 				<p style="text-transform: uppercase">Tên người gửi <span style="color:red">*</span></p>
				 				<input type="text" name="name1">
				 				<p style="text-transform: uppercase">Email người gửi <span style="color:red">*</span></p>
				 				<input type="text" name="email1">
				 				
				 				<p style="text-transform: uppercase">Tên người nhận <span style="color:red">*</span></p>
				 				<input type="text" name="name2">
				 				<p style="text-transform: uppercase">Email người nhận <span style="color:red">*</span></p>
				 				<input type="text" name="email2">
				 				
				 				<p>
				 				<input type="checkbox" class="checkbox" name="check"> <p class="chelh">Chọn nếu bạn muốn chúng tôi gọi lại cho bạn</p></p><br>
				 				<p style="clear: both">Nội dung lời nhắn <span style="color:red">*</span></p>
				 				<textarea name="mesage_content" rows="10" cols="80"></textarea>
				 				<p> <span style="color:red">*</span>Các trường hợp bắt buộc </p>
				 				<br>
				 				<p></p>
				 					<br>
				 				<p></p>
				 				<p><input type="submit" value="Gửi đi" class="submitlh"></p>
</form>