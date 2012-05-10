

<script type="text/javascript">
	var rateData = <?php echo json_encode($rateData); ?>;
	function reset_value()
	{
		if (document.getElementById('pay_amount').value != '') {
        	document.getElementById('pay_amount').value = '';
        	document.getElementById('get_amount').innerHTML = '0';
		}
    }
	
</script>

<div id="main-column">
            <div id="label">
                <p>LOW FEES - GOOD RATES - FAST AND EASY EXCHANGE E-CURRENCY - SECURE TRANSACTION</p>
            </div>
            <div id="content1">
                <div id="tab-head">
                    <div>
                        <p>Exchange</p>
                    </div>
                    <div><p>iStockgold marketplace</p></div>                    
                </div>
                <?php echo form_open( $module."/exchange" ); ?>
                    <div class="fromCurrency">
                    	<span class="content-head2">What's your currencty base?</span>
                    	<?php
						  	foreach ($buyCurrencies as $key => $currency){
						 ?>
						 	<!-- THE DIV for each currency -->
						 	<div class="<?php echo strtolower($currency['code']);?>">
	                    		<input type="radio" name="buyCurrency" value="<?php echo $currency['code'];?>" 
	                    						onclick="changeBuy('<?php echo $currency['code'];?>', '<?php echo $currency['c_name'];?>');"
	                    						<?php if($currency['code'] == 'WU') echo 'checked="checked"';?>/>
	                            <img alt="" src="<?php echo base_url()?>assets/images/<?php echo $currency['logo_src'];?>" class="image-selection1"/>
		                        <a><?php if ($currency['code'] == 'LR') echo $currency['c_name']; else echo $currency['c_name']."&nbsp;&nbsp;";?></a>
	                    	</div>	
	                    	<!-- THE DIV for each currency -->
					 	<?php 
						  	}
						?>
                    </div>
                    <div class="currencyRate">
                    	<span class="content-head2">Rate</span>
                    	<br/>
                    	<span id="rate" style="color:Red"></span>
                    	<input type="hidden" name="rate" id="input_rate">
                    </div>
                    <div class="toCurrency">
                    	<span class="content-head2">What's currencty you will get?</span>
                    	<?php
						  	foreach ($sellCurrencies as $key => $currency){
						 ?>
						 	<!-- THE DIV for each currency -->
						 	<div class="<?php echo strtolower($currency['code']);?>">
	                    		<input type="radio" name="sellCurrency" value="<?php echo $currency['code'];?>" 
	                    		 onclick="changeSell('<?php echo $currency['code'];?>', '<?php echo $currency['c_name'];?>');"
	                    		 <?php if($currency['code'] == 'LR') echo 'checked="checked"';?>/>
	                            <img alt="" src="<?php echo base_url()?>assets/images/<?php echo $currency['logo_src'];?>" class="image-selection1"/>
		                        <a><?php echo $currency['c_name'];?></a>
	                    	</div>	
	                    	<!-- THE DIV for each currency -->
					 	<?php 
						  	}
						?>
                    </div>
                    <div class="clearboth"> </div>
                    
                    <div style="float: right; width: 53%; padding-bottom: 10px; margin-bottom: 10px; font-size: 13px;">
                    	 <hr align="right" width="70%" style="border-style:solid; margin-right:15px">
                    	 You pay <input onclick="reset_value();" id="pay_amount" name="amount" onkeyup="update_amount();" value="1000" style="color:red;width: 35px;border-style:none none solid none; border-color:red; border-width:1px">
                    	 <span id="pay"></span>, will get <span class="redText" id="get_amount" style="border-style:none none solid none; border-color:red; border-width:1px">786.26</span>
                    	 <span id="get"></span> <button>Exchange</button>
                         <br />
                         <span class="redText">*Notice: e-currency transfer fees also tobe deducted from this transaction</span>
                    </div>
                    <script type="text/javascript">
                    //changeBuy("WR","Western Union");
                    //changeSell("LR","Liberty Reserve");
                    </script>
                    <div class="clearboth"> </div>
                    
                    <div class="how-link">
                    	<span>HOW?</span>
                    	<ul>
                    		<li>
                    			<img src="<?php echo base_url()?>assets/images/arrow.png" alt="" />
                                <a>Via online exchangers</a>
                    		</li>
                    		<li>
                    			 <img src="<?php echo base_url()?>assets/images/arrow.png" alt="" />
                                  <a>By a bank wire</a>
                    		</li>
                    		<li>
                                 <img src="<?php echo base_url()?>assets/images/arrow.png" alt="" />
                                  <a>With a scratch card</a>
                    		</li>
                    		<li>
                    			<img src="<?php echo base_url()?>assets/images/hcn.png" alt="" />
                                <a style="font-size:12px">All pop-up method</a>
                    		</li>
                    		<li style="font-size: 12px;">
                    			<br/>
                    			*In Russian language only
                    		</li>
                    	</ul>
                    </div>
                    
                    <div class="note">
                    	<ul style="font-size:12px; margin-top:15px;">
                             <li style="margin-bottom:20px">
                                        The transer free of Liberty Reserve:<br />
                                        1% of the transfer amount, minimum 0.01USD, maximun 2.99USD
                             </li>
                             <li>
                                        The transer free of WMZ:<br />
                                        0.8% of the transfer amount, minimun 0.01 USD, maximun 50USD
                             </li>
                        </ul>
                    </div>
                 <?php echo form_close(); ?>
                
            </div>
            <div id="content2" align="center">
                <div id="news-panel" align="left">
                    <div id="news-title">
                        <img src="<?php echo base_url()?>assets/images/news-icon.png" alt="" />
                        <span>News</span>
                    </div>
                    
                    <!-- Author: tienlx -->
                    <div id="news-content">
                    	<?php foreach ($topnews as $rs):?>
                    	<a href="<?php echo base_url()?>index.php/welcome/detailnews/<?php echo $rs->id;?>"><img style="border-style:none" alt="" src="<?php echo base_url()?>assets/images/checked.png"/><?php echo $rs->title?></a>
                    	<br />
                    	<?php endforeach;?>
						<div align="right">
                            <a href="<?php echo base_url()?>index.php/welcome/allNews"style="text-decoration:underline; margin-right:20px"><img style="border-style:none" src="<?php echo base_url()?>assets/images/play-icon.png" alt=""/>All WebMoney News</a>
                        </div>
                    </div>
                    <!-- End Author: tienlx -->
                </div>
            </div>
            
            
            <!--
             hien thi review by An
            -->
             
            
            <div id="content3">
                <div id="comment-header">
                    <img src="<?php echo base_url()?>assets/images/comment-icon.jpg" alt="" />
                    <a>REVIEWS | Customers Feedback </a>
                </div>
                
                <div id="news-control-panel">
                
                    <span style="font-size:12px; font-weight:bold">Show</span> 
                    <form name="your_form_name" method="post" action="<?php echo base_url();?>">
                        <select id="show_id" name = "show_id" onchange="document.your_form_name.submit()">
                        	<option value="1">1</option>
                            <option value="5">5</option>
                            <option value="10">10</option>
                            <option value="15">15</option>
                            <option value="20">20</option>
                        </select>
                    </form>
                    <script type="text/javascript">
                    	$(document).ready(function(){
							$('.bt').mouseenter(function(){								
								$(this).css('background-color','#C1E0FF');
								});
							$('.bt').mouseleave(function(){								
								$(this).css('background-color','silver');
								});
                        	});
                    </script>
                    <script type="text/javascript"
                    src="<?php echo base_url()?>assets/js/jquery-1.6.2.min.js">
                    </script> 
                    <div style="float:right">
						<?php echo $pagination;?>                   
                    </div>
                    
                </div>
                <br />
                <table id="comment-table">
                <?php
                if(count($reviews))
					{						
						foreach ($reviews as $key => $list)
						{						

                ?>
                    <tr> 
                    <td class="comment-col1">                     
                        <?php 
                        for ($i=1; $i<=$list['rating']; $i++)
							{
                        ?>
                            <img src="<?php echo base_url()?>assets/images/star.png" alt="" />   
                        <?php 
							}
                        ?>
                          
                        </td>
                       
                        <td>
                            <button><?php echo $list['rating'];?>.0</button>
                            <span style="margin-left:10px;font-size:12px;line-height:20px"><?php echo $list['title'];?></span>
                        </td>
                    </tr>
                    <tr>
                        <td class="comment-col1" style="width: 25%">
                            <label class="frostwrath"><?php echo $list['name'];?></label>
                            <label class="from-UK">from <?php echo $list['location'];?></label>
                        </td>

                        <td>
                            <label class="comment-date">Date : <?php echo $list['date'];?></label>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <label class="comment-content"><?php echo $list['comment'];?></label>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <hr />
                        </td>
                    </tr>
                    
                    <?php 
						}
					}
                    
                    ?>
                      
                </table>
            </div>
            <!-- end   -->
            
        
            <!-- form by AN   -->
            <form id="form1" name="form1" method="post" action="<?php echo base_url()?>index.php/welcome/review"> 
            
            <div id="content4">
                <div id="register-head1">
                    <img src="<?php echo base_url()?>assets/images/message-icon.png" alt="" style="float:left"/>
                    <label style="float:left; margin-top:5px; margin-left:10px">Write a review of this product to share your opinions with others.</label>
                    
                </div>
                <div style="width:830px">
                    <p>Thank you for sharing your thoughts about one of our products! Please focus on the product appearance and quality. Your review may be posted on Teleflora.com. Please read our Privacy Policy and Terms of Use for more information about the review process.</p>
                </div>

                <div id="register-head2">
                    <img src="<?php echo base_url()?>assets/images/i-icon.png" alt=""/>
                    <label>Please focus on product's appearance and quality. You may also leave service comments below.</label>                    
            	</div> 
                
                
                <?php 
                if($this->session->flashdata('message'))
                {
   				 echo '<div><a style="color:red;font-size:12px;line-height:20px">
   				 '.$this->session->flashdata('message').'</a></div>';
                }
                if($this->session->flashdata('error'))
                {
   				 echo '<div><a style="color:red;font-size:12px;line-height:20px">
   				 '.$this->session->flashdata('error').'</a></div>';
                }
                ?>
                  <?php echo validation_errors(); ?>            
                <div id="register-center">
                    <table cellspacing="15" style="font-size:12px; color:#414142; font-family:Arial">
                        <tr>
                            <td align="right" colspan="2">
                                <span>*</span>= required
                            </td>
                        </tr>
                        <tr>
                            <td style="width:32%">
                                <span>*</span> Your name:
                            </td>
                            <td>
                            	<?php echo form_error('username'); ?>
                                <input name="your_name" type="text" id="your_name" type="text" style="width:290px" ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span>*</span> Your Location:
                            </td>
                            <td>
                                <select name="location" id="location" style="width:165px">
                                    <option value="Vietnam">VietNam</option>
                                    <option value="Thailand">Thailand</option>
                                    <option value="China">China</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span>*</span> Your email:
                            </td>
                            <td>
                                <input name="your_email" type="text" id="your_email" type="text"  style="width:290px " />
                            </td>
                        </tr>
                        <tr>
                            <td style="padding-left:18px">
                                Please filled your phone number (option):
                            </td>
                            <td style="border: 1px solid #C0C0C0" class="tddb">
                                <input name="your_phone" type="text" id="your_phone" type="text"  style="width:200px"/>
                                <br />
                                <label style="color:#7b7b7b; font-size:11px">We will call you when your order delivered</label>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span>*</span> Please filled your order number :
                            </td>
                            <td style="border: 1px solid #C0C0C0" class="tddb">
                                <input name="your_order" type="text" id="your_order" type="text"  style="width:200px"/>
                                <br />
                                <label style="color:#7b7b7b; font-size:11px">This required for check valid order when you submit your review</label>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span>*</span> Review Title:
                            </td>
                            <td style="border: 1px solid #C0C0C0" class="tddb">
                                <input name="review_title" type="text" id="review_title" type="text"  style="width:98%"/>
                                <br />
                                <img alt="" src="<?php echo base_url();?>assets/images/down-arrow.png"/>
                                
                                <script type="text/javascript">
                                	$(document).ready(function(){
                                		$('#exampletrigger').css('cursor','default');
                                		$('#exampletrigger').mouseenter(function(){
                                			$('#exampletrigger').css('color','orange');
                                    	});
                                		$('#exampletrigger').mouseleave(function(){
                                			$('#exampletrigger').css('color','#53b0da');
                                    	});
										$('#exampletrigger').click(function(){
											if (exampletrigger.innerHTML=="Hide examples")
											{
												exampletrigger.innerHTML="Show examples";
												$('#examples').slideUp(500);
											}
											else if (exampletrigger.innerHTML=="Show examples")
											{
												exampletrigger.innerHTML="Hide examples";
												$('#examples').slideDown(500);
											}
										});
                                    });
                                </script>
                                <a id="exampletrigger" style="font-size:11px;color:#53b0da">Hide examples</a>
                                <br />
                                <div id="examples">
	                                <span style="margin-left:5px; color:Black; font-size:11px; margin-top:5px">"Don't judge a book by its cover"</span><br />
	                                <span style="margin-left:5px; color:Black; font-size:11px">"I would buy this product again and again"</span><br />
	                                <span style="margin-left:5px; color:Black; font-size:11px">"Too much whiz and not enough bang"</span>
                            	</div>
                            </td>
                        </tr>
                        <tr>
                            <td width="439px">
                                <span>*</span> Comment:
                            </td>
                            <td>
                                <script type="text/javascript">
			                        $(document).ready(function () {
				                        var comment=document.getElementById("comment")
			                            comment.value = "Leave a comment...";
			                            $('#comment').focusin(function () {
			                                if (comment.value=="Leave a comment...")
			                                    comment.value = "";
			                            });
			                            $('#comment').focusout(function () {
			                                if (comment.value == "")
			                                    comment.value = "Leave a comment...";
			                            });
			                        });
                   		 		</script>
                                <textarea name="comment" id="comment" style="height:80px; width:99%;color:#7b7b7b;" rows="1" cols="1">Leave a comment...</textarea>                              
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <table>
                                    <tr>
                                        <td>
                                             <label style=" text-decoration:underline; margin-right:5px"><span>*</span><strong>Service Rating:</strong></label>
                                			<script type="text/javascript">
                                				$(document).ready(function(){													
                                    				var flag = 0;  
                                    				                                  				
                                    				var value = document.getElementById("value");
                                    				
                                    				var ratingstarvalue = document.getElementById("ratingstarvalue");
                                    				var star1 = document.getElementById("star1");
                                    				var star2 = document.getElementById("star2");
                                    				var star3 = document.getElementById("star3");
                                    				var star4 = document.getElementById("star4");
                                    				var star5 = document.getElementById("star5");

                                    				value.innerHTML="...";
                                    				
													$("#star1").mouseenter(function(){	
																											
														if (flag == 0) {
															star1.src="<?php echo base_url();?>assets/images/star2.png";
															value.style.width='50px';
															value.innerHTML="very bad";
														}
													})
													$("#star1").mouseleave(function(){
														if (flag == 0) {
															star1.src="<?php echo base_url();?>assets/images/star.png";
														}
													});
													
													$("#star1").mousedown(function(){
														if (flag == 0)
														{											
														flag = 1;
														star1.src="<?php echo base_url();?>assets/images/star2.png";
														ratingstarvalue.value = 1;
														}
													});

													

													$("#star2").mouseenter(function(){
														if (flag == 0) {														
														$("#star1").mouseenter();
														star2.src="<?php echo base_url();?>assets/images/star2.png";
														value.style.width='50px';
														value.innerHTML="bad";
														}
													});
													$("#star2").mouseleave(function(){
														if (flag == 0) {
														$("#star1").mouseleave();
														star2.src="<?php echo base_url();?>assets/images/star.png";
														}
													});

													$("#star2").mousedown(function(){
														if (flag == 0)
														{													
														flag = 1;
														star1.src="<?php echo base_url();?>assets/images/star2.png";
														ratingstarvalue.value = 2;
														}
													});

													$("#star3").mouseenter(function(){	
														if (flag == 0) {													
														$("#star2").mouseenter();
														star3.src="<?php echo base_url();?>assets/images/star2.png";
														value.style.width='50px';
														value.innerHTML="normal";
														}
													});
													$("#star3").mouseleave(function(){
														if (flag == 0) {
														$("#star2").mouseleave();
														star3.src="<?php echo base_url();?>assets/images/star.png";
														}
													});

													$("#star3").mousedown(function(){
														if (flag == 0)
														{														
														flag = 1;
														star1.src="<?php echo base_url();?>assets/images/star2.png";
														ratingstarvalue.value = 3;
														}
													});


													
													$("#star4").mouseenter(function(){
														if (flag == 0) {														
														$("#star3").mouseenter();
														star4.src="<?php echo base_url();?>assets/images/star2.png";
														value.style.width='50px';
														value.innerHTML="good";
														}
													});
													$("#star4").mouseleave(function(){
														if (flag == 0) {
														$("#star3").mouseleave();
														star4.src="<?php echo base_url();?>assets/images/star.png";
														}
													});

													$("#star4").mousedown(function(){	
														if (flag == 0)
														{												
														flag = 1;
														star1.src="<?php echo base_url();?>assets/images/star2.png";
														ratingstarvalue.value = 4;
														}
													});


													$("#star5").mouseenter(function(){
														if (flag == 0) {														
														$("#star4").mouseenter();
														star5.src="<?php echo base_url();?>assets/images/star2.png";
														value.style.width='50px';
														value.innerHTML="perfect";
														}
													});
													$("#star5").mouseleave(function(){
														$("#star4").mouseleave();
														if (flag == 0) {
														star5.src="<?php echo base_url();?>assets/images/star.png";
														}
													});

													$("#star5").mousedown(function(){
														if (flag == 0)
														{														
															flag = 1;
															star1.src="<?php echo base_url();?>assets/images/star2.png";
															ratingstarvalue.value = 5;
														}
													});
													
                                    			});
                                					
                                			</script>
                                
                                            <img id="star1" src="<?php echo base_url()?>assets/images/star.png" alt="" />
                                            <img id="star2" src="<?php echo base_url()?>assets/images/star.png" alt="" />
                                            <img id="star3" src="<?php echo base_url()?>assets/images/star.png" alt="" />
                                            <img id="star4" src="<?php echo base_url()?>assets/images/star.png" alt="" />
                                            <img id="star5" src="<?php echo base_url()?>assets/images/star.png" alt="" />
                                            <label id="value" style=" margin-left:5px; width:50px">...</label>
                                            <input type="hidden" name ="ratingstarvalue" id="ratingstarvalue" value=""/> 
                                            <input type="submit" value="Submit" />
                                        </td>
                                    </tr>
                                    <tr style=" margin-top:-30px">
                                        <td style="padding-left:30px">
                                            <label style="font-size:11px;color:#7b7b7b">Click to rate</label>
                                        </td>
                                    </tr>
                                </table>
                               
                            </td>
                        </tr>
                        
                    </table>

                </div>
            </div>
            </form> <!--  End form by AN   -->
            
            <div id="content5">
                <img src="<?php echo base_url()?>assets/images/bottom-banner.png" alt="" style="margin:10px 0"/>
            </div>
            <script type="text/javascript">
        	var buy_code = "WU";
            var buy_name = "Western Union";
            var sell_code = "LR";
            var sell_name = "Liberty Reserve";
            
            function update() {
            	if (buy_code == sell_code) {
            		$('#rate').html('N/A');
            	} else if (rateData[buy_code][sell_code]) {
            		$('#rate').html('1:' + rateData[buy_code][sell_code]);
            		$('#input_rate').val(rateData[buy_code][sell_code]);
            	}
            	update_amount();
            }

            function update_amount() {
            	var pay_amount = document.getElementById('pay_amount').value;
            	var get_amount = Math.hold(pay_amount * rateData[buy_code][sell_code], 2);
            	$('#get_amount').html(get_amount);
            	$('#pay').html(buy_name);
            	$('#get').html(sell_name);
            }
                        
            $(document).ready(function() {
            	var buyCurrencyRadio = $('input[name=buyCurrency]');
            	buy_code = buyCurrencyRadio.filter(':checked').val();
            	var sellCurrencyRadio = $('input[name=sellCurrency]');
            	sell_code = sellCurrencyRadio.filter(':checked').val();
            	update();
            });
            </script>
        </div>    