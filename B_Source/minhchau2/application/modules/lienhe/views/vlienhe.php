<?php
	$lang=$this->session->userdata('lang');
?>
<div id="container">
      <!---------------begin center----------------------->																																																																																																																																																																										
	  <div id="center" class="column">
     
       <!--------------begin content center----------------------->
	  	<div id="content2">
        	<div id="ml1">
        		<a href="<?php echo base_url() ?>"><?php echo $this->lang->line('content-trangchu'); ?> </a>>> <a href="<?php echo base_url() ?>lienhe"><?php echo $this->lang->line('content-lienhe'); ?> </a>
        	</div>
			<p  style=" font-size:20px; border-bottom:1px solid #999; padding-top:20px; color:#26a1cc; font-weight:bold;"><?php echo $this->lang->line('content-lienhe'); ?></p>
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
                 <div class="FormContainer HorizontalFormContainer">
		
			<label  style="margin-left:29px"> <?php echo $this->lang->line('contact-tendaydu'); ?> :</label>
            <input type="text" name="contact_fullname" id="contact_fullname" class="Textbox Field200" value=""><br/><br/>
            <label  style="margin-left:16px"><span class="Required">*</span> <?php echo $this->lang->line('contact-email'); ?>:</label>
			<input type="text" name="contact_email" id="contact_email" class="Textbox Field200" value=""><br/><br/>
			<label  style="margin-left:27px"> <?php echo $this->lang->line('contact-tencongty'); ?> :</label>
			<input type="text" name="contact_companyname" id="contact_companyname" class="Textbox Field200" value=""><br/><br/>
			<label  style="margin-left:22px"> <?php echo $this->lang->line('contact-sodienthoai'); ?>:</label>
			<input type="text" name="contact_phone" id="contact_phone" class="Textbox Field200" value=""><br/><br/>
			<label style="margin-left:8px"> <?php echo $this->lang->line('contact-madonhang'); ?>:</label>
			<input type="text" name="contact_orderno" id="contact_orderno" class="Textbox Field200" value=""><br/><br/>
			<label style="margin-left:30px"> <?php echo $this->lang->line('contact-maRMA'); ?>:</label>
			<input type="text" name="contact_rma" id="contact_rma" class="Textbox Field200" value=""><br/><br/>
			<label style="margin-left:20px"><span class="Required">*</span> <?php echo $this->lang->line('contact-chitiet'); ?>:</label>
			<textarea name="contact_question" id="contact_question" class="Field300" rows="5" cols="50"></textarea><br/><br/><div id="SearchResults"></div>
			
            <p class="Submit" style="text-align:center;">
                <input type="submit" value="Gửi mẫu" class="ContactButton">
            </p>
			</div>       
			</div>
		</div>
        <!---------------end content center----------------------->
	  </div>
      <!--------------end center----------------------->
      
      <!---------------begin left----------------------->
	  <?php $this->load->view('front/left');?>
      <!---------------end đối tác---------------------->
      
      <!---------------begin right----------------------->
	  <?php $this->load->view('front/right');?>
	</div>