<?php
	$lang=$this->session->userdata('lang');
?>
<style>
	.menu-visited{ background:url(<?php echo base_url(); ?>assets/minhchau2/images/but4.gif);}
</style>
<script>
	$(document).ready(function() {
	  $('#m-lienhe').addClass('menu-visited');
	});
</script>
<div id="ja-mainbody" class="clearfix">
      <!---------------begin center----------------------->																																																																																																																																																																										
	  		
       <!--------------begin content center----------------------->
        	<div id="ja-pathway">
        		<a href="<?php echo base_url() ?>"><?php echo $this->lang->line('content-trangchu'); ?> </a>
					<img src="<?php echo base_url()?>assets/minhchau2/images/arrow.png" alt="">
					 <a href="<?php echo base_url() ?>lienhe"><?php echo $this->lang->line('content-lienhe'); ?> </a>
        	</div>
			<h3 class="contentheading" style="color: red">Bạn hãy điền đầy đủ các thông tin dưới đây: </h3>
			<div class="stuff">
        <div style="color:red">
         	<?php echo validation_errors();?>
         </div>
        <form method="post" action="<?php echo base_url() ?>lienhe/send"> 
                 <div class="FormContainer HorizontalFormContainer">
			<table>
			<tr ><td><label > <?php echo $this->lang->line('contact-tendaydu'); ?> :</label></td>
            <td><input type="text" name="contact_fullname" id="contact_fullname" class="Textbox Field200" value="" style="margin-bottom: 15px; width: 100%" ></td></tr><br/><br/>
            <tr><td><label  ><span class="Required"></span> <?php echo $this->lang->line('contact-email'); ?> (*):</label></td>
			<td><input type="text" name="contact_email" id="contact_email" class="Textbox Field200" value="" style="margin-bottom: 15px; width: 100%" ></td></tr>
			<tr><td><label  > <?php echo $this->lang->line('contact-tencongty'); ?> :</label></td>
			<td><input type="text" name="contact_companyname" id="contact_companyname" class="Textbox Field200" value="" style="margin-bottom: 15px; width: 100%" ></td></tr>
			<tr><td><label > <?php echo $this->lang->line('contact-sodienthoai'); ?>:</label></td>
			<td><input type="text" name="contact_phone" id="contact_phone" class="Textbox Field200" value="" style="margin-bottom: 15px; width: 100%" ></td></tr>
			<tr><td><label > <?php echo $this->lang->line('contact-madonhang'); ?>:</label></td>
			<td><input type="text" name="contact_orderno" id="contact_orderno" class="Textbox Field200" value="" style="margin-bottom: 15px; width: 100%" ></td></tr>
			<tr><td><label > <?php echo $this->lang->line('contact-maRMA'); ?>:</label></td>
			<td><input type="text" name="contact_rma" id="contact_rma" class="Textbox Field200" value="" style="margin-bottom: 15px; width: 100%" ></td></tr>
			<tr><td><label ><span class="Required" style="vertical-align:inherit"></span> <?php echo $this->lang->line('contact-chitiet'); ?> (*):</label></td>
			<td><textarea name="contact_question" id="contact_question" class="Field300" rows="5" cols="50"></textarea></td></tr>
			</table>
            <p class="Submit" style="text-align:center; width: 56%;">
                <input type="submit" value="Gửi mẫu" class="ContactButton" style="height: 31px; width:85px">
            </p>
         </form>
          
			</div>       
			</div>
        <!---------------end content center----------------------->
	</div>
 <?php $this->load->view('front/left');?>