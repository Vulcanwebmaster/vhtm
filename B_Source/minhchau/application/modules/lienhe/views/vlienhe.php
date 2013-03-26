
<!-------------Check registry------------>
	<script>
		jQuery(document).ready(function(){
			// binds form submission and fields to the validation engine
			jQuery("#gclienhe").validationEngine();
		});
	</script>
<!-------------End Check registry------------>

<div id="main_block">
	<div class="content">
		
		<?php if ($_SESSION['lang']=="vn"){
         	echo $nd_gioithieu->contentv; 
		}else {
		    echo $nd_gioithieu->contente; 
		} ?>
		
<!-- 		<?php if ($this->session->userdata('result')!='')
		{
			echo '<p style="color:red; padding-left:30px">';
			echo $this->session->userdata('result');
			$this->session->unset_userdata('result');
			echo '</p>';
		}?> -->
		<?php if ($_SESSION['lang']=="vn") 
		{?>		
			<h3>GỬI PHẢN HỒI</h3> 
			<form action="<?php echo base_url();?>lienhe/send" id="gclienhe" method="post">
			<p style="text-transform: uppercase">Họ Tên: <span style="color:red">*</span></p>
			<input type="text" name="hoten" class="formField ffInput validate[required] text-input" />
			<p style="text-transform: uppercase">Công ty <span style="color:red">*</span></p>
			<input type="text" name="congty" class="formField ffInput validate[required] text-input" />
			<p style="text-transform: uppercase">E-mail </p>
			<input type="text" name="email" class="formField ffInput validate[required,custom[email]] text-input"/><br/>
			<p style="text-transform: uppercase">Tiêu đề </p>
			<input type="text" name="tieude" class="formField ffInput validate[required] text-input"/><br/>
			<p style="clear: both">Nội dung<span style="color:red">*</span></p>
			<textarea name="noidung" class="formField ffInput validate[required] text-input"></textarea>
			<input type="submit" value="Submit" class="submitlh" />
		<?php } else{ ?>
			<p class="ttlh">Information Contact</p>
			<form action="<?php echo base_url();?>lienhe/send" id="gclienhe" method="post">
			<p style="text-transform: uppercase">Name <span style="color:red">*</span></p>
			<input type="text" name="hoten" class="formField ffInput validate[required] text-input" />
			<p style="text-transform: uppercase">Organisation <span style="color:red">*</span></p>
			<input type="text" name="congty" class="formField ffInput validate[required] text-input" />
			<p style="text-transform: uppercase">E-mail </p>
			<input type="text" name="email" class="formField ffInput validate[required,custom[email]] text-input"/><br/>
			<p style="text-transform: uppercase">Subject </p>
			<input type="text" name="tieude" class="formField ffInput validate[required] text-input"/><br/>
			<p style="clear: both">Message  <span style="color:red">*</span></p>
			<textarea name="noidung" class="formField ffInput validate[required] text-input"></textarea>
			<input type="submit" value="Submit" class="submitlh" />
		<?php } ?>
		</form>
	</div>
</div>
