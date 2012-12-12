<script type="text/javascript">
	$(function() {
		$( "#birthday" ).datepicker();
	});
	$(document).ready(function(){
		
		var email = new LiveValidation( "email", { validMessage: "Địa chỉ hợp lệ", wait: 500 } );//, { validMessage: "Địa chỉ hợp lệ!", wait: 500 } );
		email.add( Validate.Email, { failureMessage: "Địa chỉ không hợp lệ"});
		email.add(Validate.Presence);

        var password = new LiveValidation("password", { validMessage: "Hợp lệ", wait: 500 });
        password.add(Validate.Presence, { failureMessage: "Không được để trống"});

        var fullname = new LiveValidation("name", { validMessage: "Hợp lệ", wait: 500 });
        fullname.add(Validate.Presence, { failureMessage: "Không được để trống"});

        var confirm = new LiveValidation('subject',{validMessage:"Hợp lệ"});
        confirm.add(Validate.Presence, { failureMessage: "Không được để trống"});

        var message = new LiveValidation('message',{validMessage:"Hợp lệ"});
        message.add(Validate.Presence, { failureMessage: "Không được để trống"});
	});
</script>

<style type="text/css">
	#background-image{display:none}
</style>
				<form method="post" action="<?php echo base_url() ?>lienhe/send" id="formContact" style="margin-top:30px"> 
					<input type="hidden" name="countryABBR" value="US">
					
					<div>
			         	<?php echo validation_errors();?>
			        </div>
					<ul class="formControls">
						<li class="formControl">
							<label class="labelLeft">&nbsp;</label>
						</li>
						<li class="formControl formEmail">
							<label class="labelLeft" for="name"><?php echo $this->lang->line('contact-ten');?> <span class="red">(*)</span></label>
							<input class="required msgPos:'msgPos01'" id="name" name="name" maxlength="">
						</li>
						<li class="formControl formEmail">
							<label class="labelLeft" for="email">E-mail <span class="red">(*)</span></label>
							<input class="required validate-email  msgPos:'msgPos03'" id="email" name="email" maxlength="">
						</li>						
						<li class="formControl">
							<input type="text" name="comboTopicHidden" id="comboTopicHidden" class="offleft required msgPos:'msgPosOt2'" value="">					
						</li>
						<li class="formControl formEmail">
							<label class="labelLeft" for="subject"><?php echo $this->lang->line('contact-chude')?> <span class="red">(*)</span></label>
							<input class="required msgPos:'msgPos06'" id="subject" name="subject" maxlength="">
						</li>
						<li class="formControl textAreaEmail">
							<label class="labelLeft labelTextarea" for="message"><?php echo $this->lang->line('contact-noidung')?> <span class="red">(*)</span></label>
							<span><textarea style="height: 200px;" class="textArea" name="message" id="message"></textarea></span>
																	
						</li>
						<li><center> <input type="submit" style="text-transform: uppercase" value="<?php echo $this->lang->line('contact-gui');?>"></center></li>
					</ul>
				
				</form>	
	
				<div class="line mod">
					<div class="login_message">
						<div class="unit size1of1">
			          		<div class="contact">
					   		</div>
			          	</div>
			          	<?php if ($_SESSION['lang'] == 'en')
			          	{?>
			          		You can also call us on our free customer service line:
			          	<?php }
			          	else
			          	{?>
			          		Bạn có thể liên lạc với chúng tôi qua đường dây:
			          	<?php }?> 
				         <strong><?php if($telefonoInfo) echo $telefonoInfo->info_content ?></strong>
			        </div>
		       </div>
	<!--/line-->
	