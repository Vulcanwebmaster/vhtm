<style type="text/css">
	#background-image{display:none}
	
</style>

	
        <br>
        <br><br>
					<form method="post" action="<?php echo base_url() ?>lienhe/send" id="formContact"> 
					<input type="hidden" name="countryABBR" value="US">
					
					<ul class="formControls">
					<li class="formControl">
						<label class="labelLeft">&nbsp;</label>
						
					</li>
						<li class="formControl formEmail">
							<label class="labelLeft" for="name">Name<em class="required">*</em></label>
							<input class="required msgPos:'msgPos01'" id="name" name="name" maxlength="">
							
														
						</li>
						
						<li class="formControl formEmail">
							<label class="labelLeft" for="email">E-mail<em class="required">*</em></label>
							<input class="required validate-email  msgPos:'msgPos03'" id="email" name="email" maxlength="">
																	
						</li>						
						<li class="formControl">

							<input type="text" name="comboTopicHidden" id="comboTopicHidden" class="offleft required msgPos:'msgPosOt2'" value="">					
							<span class="inputTip tipHelp">
							</span>
							<span class="inputTip tipWarn" id="msgPosOt2"><img src="../images/tip_warn.png" alt="warning"></span>
							<span class="inputTip tipOk"><img src="../images/tip_ok.png" alt="ok"></span>
						</li>
						<li class="formControl formEmail">
							<label class="labelLeft" for="subject">Subject<em class="required">*</em></label>
							<input class="required msgPos:'msgPos06'" id="subject" name="subject" maxlength="">
							<span class="inputTip tipOk">
								<img src="../images/tip_ok.png" alt="ok">
							</span>	
							<span class="inputTip tipWarn" id="msgPos06">
								<img alt="warning" src="../images/tip_warn.png">
								
							</span>		
															
						</li>
						<li class="formControl textAreaEmail">
							<label class="labelLeft labelTextarea" for="message">Message<em class="required">*</em></label>
							<span><textarea style="height: 150px;" class="textArea" name="note"></textarea></span>
																	
						</li>
						<div>
         	<?php echo validation_errors();?>
        </div>	
        
							<p><center> <input type="submit" value="SEND"></center></p>
					</ul>
				
				</form></div>	
	
					<div class="line mod">
					
					 <div class="login_message">
			          <div class="unit size1of1">
			          	 
			          	<div class="contact">
							
					   </div>
			          </div>
			          You can also call us on our free customer service line: 
				         <strong>1-877 550 1107</strong>
				         (Monday to Friday from 9:00 am to 6:00 pm EST.) 
			          
			        </div>
			       </div>
			</div>
	</div>
	<!--/line-->
	