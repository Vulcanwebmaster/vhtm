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
							<span class="inputTip tipOk">
								<img src="../images/tip_ok.png" alt="ok">
							</span>	
							<span class="inputTip tipWarn" id="msgPos01">
								<img alt="warning" src="../images/tip_warn.png">
								
							</span>								
						</li>
						<li class="formControl formEmail">
							<label class="labelLeft" for="surname">Surname(s)</label>
							<input class="" id="surname" name="surname" maxlength="">									
						</li>	
						
						<li class="formControl formEmail">
							<label class="labelLeft" for="email">E-mail<em class="required">*</em></label>
							<input class="required validate-email  msgPos:'msgPos03'" id="email" name="email" maxlength="">
							<span class="inputTip tipOk">
								<img src="../images/tip_ok.png" alt="ok">
							</span>	
							<span class="inputTip tipWarn" id="msgPos03">
								<img alt="../images/tip_warn.png">
								
							</span>											
						</li>						
						<li class="formControl">
							<label for="comboTopic" class="labelLeft">Category<em class="required">*</em></label>	
														
						<div class="select seletTopic" id="comboTopic" tabindex="100">
															
									<select style="width:261px; background-color:#eee; border:1px solid #ccc">
										<?php 
										foreach ($parents as $category) 
										{ ?>
											<option><?php echo $category->category_name_v ?></option>
										<?php } ?>
                                    	
                                    </select>
								<style>
									
									
								</style>
								<div class="selectChild temaformEmail">
									<div class="lt"></div>
									<div class="rt"></div>
									<div class="lb"></div>
									<div class="rb"></div>
									<div class="selectChildCont temaformEmail warselectEmail">
										<ul>
											<li>
												<a href="javascript:void(0);"><input type="radio" name="radTopic" value="Customer Service" class="offleft"><span>Customer Service</span></a>
											</li>
											<li>
												<a href="javascript:void(0);"><input type="radio" name="radTopic" value="Online orders" class="offleft"><span>Online orders</span></a>
											</li>
											<li>
												<a href="javascript:void(0);"><input type="radio" name="radTopic" value="Picture Catalogue" class="offleft"><span>Picture Catalogue</span></a>
											</li>
											<li>
												<a href="javascript:void(0);"><input type="radio" name="radTopic" value="Technical questions" class="offleft"><span>Technical questions</span></a>
											</li>
											<li>
												<a href="javascript:void(0);"><input type="radio" name="radTopic" value="Zara Home Shops" class="offleft"><span>Zara Home Shops</span></a>
											</li>
											<li>
												<a href="javascript:void(0);"><input type="radio" name="radTopic" value="Professional opportunities" class="offleft"><span>Professional opportunities</span></a>
											</li>
											<li>
												<a href="javascript:void(0);"><input type="radio" name="radTopic" value="Wedding gift list" class="offleft"><span>Wedding gift list</span></a>
											</li>
										</ul>
									</div>
								</div>
							</div>

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
							<textarea class="textArea" name="note" maxlength></textarea>
																	
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
	