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
			<h2 class="contentheading"><?php echo $this->lang->line('content-lienhe'); ?></h2>
			<div class="stuff">
				  <div id="stuff-contact">
                  	<div id="stuff-location">
                    	<?php
                    		if($lang=='vn')
								echo $query->contentv;
							else echo $query->contente;
                    	?>
                    </div>
                    <div id="stuff-map">
                    <iframe width="230" height="150" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=vi&amp;geocode=&amp;q=M%E1%BB%85+Tr%C3%AC+Th%C6%B0%E1%BB%A3ng+-+T%E1%BB%AB+Li%C3%AAm+-+H%C3%A0+N%E1%BB%99i&amp;aq=&amp;sll=37.0625,-95.677068&amp;sspn=36.452734,86.572266&amp;ie=UTF8&amp;hq=M%E1%BB%85+Tr%C3%AC+Th%C6%B0%E1%BB%A3ng+-+T%E1%BB%AB+Li%C3%AAm+-&amp;hnear=Ho%C3%A0n+Ki%E1%BA%BFm,+H%C3%A0+N%E1%BB%99i,+Vi%E1%BB%87t+Nam&amp;t=m&amp;ll=21.019778,105.801258&amp;spn=0.024036,0.03931&amp;z=13&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=vi&amp;geocode=&amp;q=M%E1%BB%85+Tr%C3%AC+Th%C6%B0%E1%BB%A3ng+-+T%E1%BB%AB+Li%C3%AAm+-+H%C3%A0+N%E1%BB%99i&amp;aq=&amp;sll=37.0625,-95.677068&amp;sspn=36.452734,86.572266&amp;ie=UTF8&amp;hq=M%E1%BB%85+Tr%C3%AC+Th%C6%B0%E1%BB%A3ng+-+T%E1%BB%AB+Li%C3%AAm+-&amp;hnear=Ho%C3%A0n+Ki%E1%BA%BFm,+H%C3%A0+N%E1%BB%99i,+Vi%E1%BB%87t+Nam&amp;t=m&amp;ll=21.019778,105.801258&amp;spn=0.024036,0.03931&amp;z=13" style="color:#0000FF;text-align:left">Xem Bản đồ cỡ lớn hơn</a></small>
                    </div>
                  </div>
        <div style="color:red">
         	<?php echo validation_errors();?>
         </div>
        <form method="post" action="<?php echo base_url() ?>lienhe/send"> 
                 <div class="FormContainer HorizontalFormContainer">
			<table>
			<tr ><td><label > <?php echo $this->lang->line('contact-tendaydu'); ?> :</label></td>
            <td><input type="text" name="contact_fullname" id="contact_fullname" class="Textbox Field200" value=""></td></tr><br/><br/>
            <tr><td><label  ><span class="Required"></span> <?php echo $this->lang->line('contact-email'); ?> (*):</label></td>
			<td><input type="text" name="contact_email" id="contact_email" class="Textbox Field200" value=""></td></tr>
			<tr><td><label  > <?php echo $this->lang->line('contact-tencongty'); ?> :</label></td>
			<td><input type="text" name="contact_companyname" id="contact_companyname" class="Textbox Field200" value=""></td></tr>
			<tr><td><label > <?php echo $this->lang->line('contact-sodienthoai'); ?>:</label></td>
			<td><input type="text" name="contact_phone" id="contact_phone" class="Textbox Field200" value=""></td></tr>
			<tr><td><label > <?php echo $this->lang->line('contact-madonhang'); ?>:</label></td>
			<td><input type="text" name="contact_orderno" id="contact_orderno" class="Textbox Field200" value=""></td></tr>
			<tr><td><label > <?php echo $this->lang->line('contact-maRMA'); ?>:</label></td>
			<td><input type="text" name="contact_rma" id="contact_rma" class="Textbox Field200" value=""></td></tr>
			<tr><td><label ><span class="Required"></span> <?php echo $this->lang->line('contact-chitiet'); ?> (*):</label></td>
			<td><textarea name="contact_question" id="contact_question" class="Field300" rows="5" cols="50"></textarea></td></tr>
			</table>
            <p class="Submit" style="text-align:center;">
                <input type="submit" value="Gửi mẫu" class="ContactButton">
            </p>
         </form>
          
			</div>       
			</div>
        <!---------------end content center----------------------->
	 
	</div>
	
 <?php $this->load->view('front/left');?>