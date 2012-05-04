

<script type="text/javascript">
	var rateData = <?php echo json_encode($rateData); ?>;
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
                    <div><p>Pay</p></div>
                    <div><p>Cast out</p></div>
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
	                    						<?php if($currency['code'] == 'LR') echo 'checked="checked"';?>
	                    						onclick="changeBuy('<?php echo $currency['code'];?>', '<?php echo $currency['c_name'];?>');"/>
	                            <img alt="" src="<?php echo base_url()?>assets/images/<?php echo $currency['logo_src'];?>" class="image-selection1"/>
		                        <a><?php echo $currency['c_name'];?></a>
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
	                    		<?php if($currency['code'] == 'WU') echo 'checked="checked"';?> onclick="changeSell('<?php echo $currency['code'];?>', '<?php echo $currency['c_name'];?>');"/>
	                            <img alt="" src="<?php echo base_url()?>assets/images/<?php echo $currency['logo_src'];?>" class="image-selection1"/>
		                        <a><?php echo $currency['c_name'];?></a>
	                    	</div>	
	                    	<!-- THE DIV for each currency -->
					 	<?php 
						  	}
						?>
                    </div>
                    <div class="clearboth"> </div>
                    
                    <div style="float: right; width: 53%; padding-bottom: 10px; margin-bottom: 10px; font-size: 12px;">
                    	 <hr align="right" width="70%">
                    	 You pay <input id="pay_amount" name="amount" onkeyup="update_amount();" value="1000" style="color:red;width: 35px;border-style:none none solid none; border-color:red; border-width:1px"> <span id="pay">Liberty Reserve</span>, will get <span class="redText" id="get_amount" style="border-style:none none solid none; border-color:red; border-width:1px">786.26</span> <span id="get">Western Union </span> <button>Exchange</button>
                         <br />
                         <span class="redText">*Notice: e-currency transfer fees also tobe deducted from this transaction</span>
                    </div>
                    
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
                    	<ul style="font-size:13px; margin-top:25px;">
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
                    <!-- 
                    <div id="news-content">
                        <a><img alt="" src="<?php echo base_url()?>assets/images/checked.png"/>Telepay Service : Prices Go Down, Number of Operators Go Up</a>
                        <br />
                        <a><img alt="" src="<?php echo base_url()?>assets/images/checked.png"/>More top-up options available in Vietnam</a>
                        <br />
                        <a><img alt="" src="<?php echo base_url()?>assets/images/checked.png"/>The first online exchange for WMV is now open in Vietnam</a>
                        <br />
                        <a><img alt="" src="<?php echo base_url()?>assets/images/checked.png"/>Top-up via FOXBOX temirals available now in Lithuania</a>
                        <br />
                        <a><img alt="" src="<?php echo base_url()?>assets/images/checked.png"/>WebMoney News: Cheap Chineese gadgets at wsdeal.com</a>
                        <br />
                        <div align="right">
                            <a style="text-decoration:underline; margin-right:20px"><img src="<?php echo base_url()?>assets/images/play-icon.png" alt=""/>All WebMoney News</a>
                        </div>
                    </div>
                    -->
                    <!-- Author: tienlx -->
                    <div id="news-content">
                    	<?php foreach ($topnews as $rs):?>
                    	<a href="<?php echo base_url()?>index.php/welcome/detailnews/<?=$rs->id;?>"><img alt="" src="<?php echo base_url()?>assets/images/checked.png"/><?=$rs->title?></a>
                    	<br />
                    	<?php endforeach;?>
						<div align="right">
                            <a href="<?php echo base_url()?>index.php/welcome/allNews"style="text-decoration:underline; margin-right:20px"><img src="<?php echo base_url()?>assets/images/play-icon.png" alt=""/>All WebMoney News</a>
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
                        <select>
                            <option>20</option>
                        </select>
                        
                    <div style="float:right">
                        <button>First</button>
                        <button>Previous</button>
                        <button style="background-color: #C1E0FF">1</button>
                        <button>2</button>
                        <button>3</button>
                        <button>4</button>
                        <button>5</button>
                        <button>Next</button>
                        <button>Last</button>                          
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
                        for ($i=1;$i<=$list['rating'];$i++)
							{
                        ?>
                        
                            <img src="<?php echo base_url()?>assets/images/star.png" alt="" />   
                        <?php 
							}
                        ?>
                          
                        </td>
                       
                        <td>
                            <button><?php echo $list['rating'];?>.0</button>
                            <span><?php echo $list['title'];?></span>
                        </td>
                    </tr>
                    <tr>
                        <td class="comment-col1">
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
                              
                <div id="register-center">
                    <table cellspacing="15">
                        <tr>
                            <td align="right" colspan="2">
                                <span>*</span>= required
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span>*</span> Your name:
                            </td>
                            <td>
                                <input name="your_name" type="text" id="your_name" type="text" style="width:290px"/>
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
                            <td style="border: 1px inset #C0C0C0" class="tddb">
                                <input name="your_phone" type="text" id="your_phone" type="text"  style="width:200px"/>
                                <br />
                                <label style="color:#7b7b7b; font-size:11px">We will call you when your order delivered</label>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span>*</span> Please filled your order number :
                            </td>
                            <td style="border: 1px inset #C0C0C0" class="tddb">
                                <input name="your_order" type="text" id="your_order" type="text"  style="width:200px"/>
                                <br />
                                <label style="color:#7b7b7b; font-size:11px">This required for check valid order when you submit your review</label>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span>*</span> Review Title:
                            </td>
                            <td style="border: 1px inset #C0C0C0" class="tddb">
                                <input name="review_title" type="text" id="review_title" type="text"  style="width:98%"/>
                                <br />
                                <img alt="" src="<?php echo base_url();?>assets/images/down-arrow.png"/>
                                <a style="font-size:11px;color:#53b0da">Hide examples</a>
                                <br />
                                <span style="margin-left:5px; color:Black; font-size:11px; margin-top:5px">"Don't judge a book by its cover"</span><br />
                                <span style="margin-left:5px; color:Black; font-size:11px">"I would buy this product again and again"</span><br />
                                <span style="margin-left:5px; color:Black; font-size:11px">"Too much whiz and not enough bang"</span>
                            </td>
                        </tr>
                        <tr>
                            <td width="439px">
                                <span>*</span> Comment:
                            </td>
                            <td>
                                
                                <textarea name="comment" id="comment" style="height:80px; width:99%;color:#7b7b7b;" rows="1" cols="1">Leave a comment...</textarea>                              
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <table>
                                    <tr>
                                        <td>
                                             <label style=" text-decoration:underline; margin-right:5px"><span>*</span><strong>Service Rating:</strong></label>
                                			<script type="text/javascript">
                                				$(document).ready(function(){
                                    				value.innerHTML="...";
													$("#star1").mouseenter(function(){														
														star1.src="<?php echo base_url();?>assets/images/star2.png";
														value.style.width='50px';
														value.innerHTML="very bad";										
													});
													$("#star1").mouseleave(function(){
														star1.src="<?php echo base_url();?>assets/images/star.png";
													});

													$("#star2").mouseenter(function(){														
														$("#star1").mouseenter();
														star2.src="<?php echo base_url();?>assets/images/star2.png";
														value.style.width='50px';
														value.innerHTML="bad";
													});
													$("#star2").mouseleave(function(){
														$("#star1").mouseleave();
														star2.src="<?php echo base_url();?>assets/images/star.png";
													});

													$("#star3").mouseenter(function(){														
														$("#star2").mouseenter();
														star3.src="<?php echo base_url();?>assets/images/star2.png";
														value.style.width='50px';
														value.innerHTML="normal";
													});
													$("#star3").mouseleave(function(){
														$("#star2").mouseleave();
														star3.src="<?php echo base_url();?>assets/images/star.png";
													});

													$("#star4").mouseenter(function(){														
														$("#star3").mouseenter();
														star4.src="<?php echo base_url();?>assets/images/star2.png";
														value.style.width='50px';
														value.innerHTML="good";
													});
													$("#star4").mouseleave(function(){
														$("#star3").mouseleave();
														star4.src="<?php echo base_url();?>assets/images/star.png";
													});

													$("#star5").mouseenter(function(){														
														$("#star4").mouseenter();
														star5.src="<?php echo base_url();?>assets/images/star2.png";
														value.style.width='50px';
														value.innerHTML="perfect";
													});
													$("#star5").mouseleave(function(){
														$("#star4").mouseleave();
														star5.src="<?php echo base_url();?>assets/images/star.png";
													});
                                    			});
                                					
                                				
                                			</script>
                                
                                            <img id="star1" src="<?php echo base_url()?>assets/images/star.png" alt="" />
                                            <img id="star2" src="<?php echo base_url()?>assets/images/star.png" alt="" />
                                            <img id="star3" src="<?php echo base_url()?>assets/images/star.png" alt="" />
                                            <img id="star4" src="<?php echo base_url()?>assets/images/star.png" alt="" />
                                            <img id="star5" src="<?php echo base_url()?>assets/images/star.png" alt="" />
                                            <label id="value" style=" margin-left:5px; width:50px">Perfect. It doesn't get any better</label>
                                            
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
        </div>
    </div>