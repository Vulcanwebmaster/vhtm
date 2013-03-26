
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
			<h3 style="margin-top:20px; font-weight:bold; font-size: 14px;">GỬI PHẢN HỒI</h3> 
			
			<form action="<?php echo base_url();?>lienhe/send" id="gclienhe" method="post" class="formcontactus">
				<table class="tablecontactus">
				<tr>
					<td style="width:100px"><label style="text-transform: uppercase;">Họ Tên: <span style="color:red">*</span></label></td>
					<td><input type="text" name="hoten" class="formField ffInput validate[required] text-input" /></td>
				</tr>
				<tr>
					<td><label style="text-transform: uppercase">Công ty <span style="color:red">*</span></label></td>
					<td><input type="text" name="congty" class="formField ffInput validate[required] text-input" /></td>
				</tr>
				<tr>
					<td><label style="text-transform: uppercase">E-mail </label></td>
					<td><input type="text" name="email" class="formField ffInput validate[required,custom[email]] text-input"/></td>
				</tr>
				<tr>
					<td><label style="text-transform: uppercase">Tiêu đề </label></td>
					<td><input type="text" name="tieude" class="formField ffInput validate[required] text-input"/></td>
				</tr>
				<tr>
					<td><label style="clear: both;text-transform: uppercase">Nội dung<span style="color:red">*</span></label></td>
					<td><textarea name="noidung" class="formField ffInput validate[required] text-input"></textarea></td>
				</tr>
				<tr>
					<td colspan="2"><input type="submit" value="Submit" class="submitlh" /></td>
				</tr>
				</table>
		<?php } else{ ?>
			<p class="ttlh" style="margin-top:20px; font-weight:bold; font-size: 14px;">Information Contact</p>
			<form action="<?php echo base_url();?>lienhe/send" id="gclienhe" method="post">
				<table class="tablecontactus">
			<tr>
				<td><p style="text-transform: uppercase">Name <span style="color:red">*</span></p></td>
				<td><input type="text" name="hoten" class="formField ffInput validate[required] text-input" /></td>
			</tr>
			<tr>
				<td><p style="text-transform: uppercase">Organisation <span style="color:red">*</span></p></td>
				<td><input type="text" name="congty" class="formField ffInput validate[required] text-input" /></td>
			</tr>
			<tr>
				<td><p style="text-transform: uppercase">E-mail </p></td>
				<td><input type="text" name="email" class="formField ffInput validate[required,custom[email]] text-input"/></td>
			</tr>
			<tr>
				<td><p style="text-transform: uppercase">Subject </p></td>
				<td><input type="text" name="tieude" class="formField ffInput validate[required] text-input"/></td>
			</tr>
			<tr>
				<td><p style="clear: both">Message  <span style="color:red">*</span></p></td>
				<td><textarea name="noidung" class="formField ffInput validate[required] text-input"></textarea></td>
			</tr>
			<tr>
				<td  colspan="2"><input type="submit" value="Submit" class="submitlh" /></td>
			</tr>
		<?php } ?>
		</form>
		</table>
	</div>
</div>
