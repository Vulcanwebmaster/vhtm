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
                    	<div class="lr">
                    		<input type="radio" name="fromCurrency" value="LR" checked="checked"/>
                            <img alt="" src="<?php echo base_url()?>assets/images/Liberty Reserve.jpg" class="image-selection1"/>
	                        <a>Liberty Reserve</a>
                    	</div>
                    	<div class="wu">
	                    	<input type="radio" name="fromCurrency" value="WU" />
	                        <img alt="" src="<?php echo base_url()?>assets/images/wu2.jpg" class="image-selection1"/>
	                        <a>Western Union</a>
                    	</div>
                    </div>
                    <div class="currencyRate">
                    	<span class="content-head2">Rate</span>
                    	<br/>
                    	<span style="color:Red">1 : 0.8092</span>
                    </div>
                    <div class="toCurrency">
                    	<span class="content-head2">What's currencty you will get?</span>
                    	<div class="lr">
                    		<input type="radio" name="toCurrency" value="LR" />
                            <img alt="" src="<?php echo base_url()?>assets/images/Liberty Reserve.jpg" class="image-selection1"/>
	                        <a>Liberty Reserve</a>
                    	</div>
                    	<div class="wu">
	                    	<input type="radio" name="toCurrency" value="WU" checked="checked"/>
	                        <img alt="" src="<?php echo base_url()?>assets/images/wu2.jpg" class="image-selection1"/>
	                        <a>Western Union</a>
                    	</div>
                    </div>
                    <div class="clearboth"> </div>
                    
                    <div style="float: right; width: 51%; padding-bottom: 10px; margin-bottom: 10px; font-size: 12px;">
                    	 <hr align="right" width="70%">
                    	 You pay <input name="amount" value="1000" style="width: 35px;"> Money Gram, will get <span class="redText">786.26</span> Liberty reserve <button>Exchange</button>
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
                </div>
            </div>
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
                    <tr>
                        <td class="comment-col1">
                            <img src="<?php echo base_url()?>assets/images/star.png" alt="" />
                            <img src="<?php echo base_url()?>assets/images/star.png" alt="" />
                            <img src="<?php echo base_url()?>assets/images/star.png" alt="" />
                            <img src="<?php echo base_url()?>assets/images/star.png" alt="" />
                            <img src="<?php echo base_url()?>assets/images/star.png" alt="" />
                        </td>
                        <td>
                            <button>5.0</button>
                            <span>Wow...truly a memorable centerpiece!</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="comment-col1">
                            <label class="frostwrath">frostwrath</label>
                            <label class="from-UK">from UK</label>
                        </td>
                        <td>
                            <label class="comment-date">Date : DEC. 4, 2011 </label>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <label class="comment-content">The south could always start by rising from the couch and doing something with that obesity rate.</label>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <hr />
                        </td>
                    </tr>

                    <!---->
                    <tr>
                        <td class="comment-col1">
                            <img src="<?php echo base_url()?>assets/images/star.png" alt="" />
                            <img src="<?php echo base_url()?>assets/images/star.png" alt="" />
                            <img src="<?php echo base_url()?>assets/images/star.png" alt="" />
                            <img src="<?php echo base_url()?>assets/images/star.png" alt="" />
                            <img src="<?php echo base_url()?>assets/images/star.png" alt="" />
                        </td>
                        <td>
                            <button>5.0</button>
                            <span>Wow...truly a memorable centerpiece!</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="comment-col1">
                            <label class="frostwrath">frostwrath</label>
                            <label class="from-UK">from UK</label>
                        </td>
                        <td>
                            <label class="comment-date">Date : DEC. 4, 2011 </label>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <label class="comment-content">The south could always start by rising from the couch and doing something with that obesity rate.</label>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <hr />
                        </td>
                    </tr>

                    <!---->
                    <tr>
                        <td class="comment-col1">
                            <img src="<?php echo base_url()?>assets/images/star.png" alt="" />
                            <img src="<?php echo base_url()?>assets/images/star.png" alt="" />
                            <img src="<?php echo base_url()?>assets/images/star.png" alt="" />
                            <img src="<?php echo base_url()?>assets/images/star.png" alt="" />
                            <img src="<?php echo base_url()?>assets/images/star.png" alt="" />
                        </td>
                        <td>
                            <button>5.0</button>
                            <span>Wow...truly a memorable centerpiece!</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="comment-col1">
                            <label class="frostwrath">frostwrath</label>
                            <label class="from-UK">from UK</label>
                        </td>
                        <td>
                            <label class="comment-date">Date : DEC. 4, 2011 </label>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <label class="comment-content">The south could always start by rising from the couch and doing something with that obesity rate.</label>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <hr />
                        </td>
                    </tr>

                    <!---->
                    <tr>
                        <td class="comment-col1">
                            <img src="<?php echo base_url()?>assets/images/star.png" alt="" />
                            <img src="<?php echo base_url()?>assets/images/star.png" alt="" />
                            <img src="<?php echo base_url()?>assets/images/star.png" alt="" />
                            <img src="<?php echo base_url()?>assets/images/star.png" alt="" />
                            <img src="<?php echo base_url()?>assets/images/star.png" alt="" />
                        </td>
                        <td>
                            <button>5.0</button>
                            <span>Wow...truly a memorable centerpiece!</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="comment-col1">
                            <label class="frostwrath">frostwrath</label>
                            <label class="from-UK">from UK</label>
                        </td>
                        <td>
                            <label class="comment-date">Date : DEC. 4, 2011 </label>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <label class="comment-content">The south could always start by rising from the couch and doing something with that obesity rate.</label>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <hr />
                        </td>
                    </tr>

                    <!---->
                    <tr>
                        <td class="comment-col1">
                            <img src="<?php echo base_url()?>assets/images/star.png" alt="" />
                            <img src="<?php echo base_url()?>assets/images/star.png" alt="" />
                            <img src="<?php echo base_url()?>assets/images/star.png" alt="" />
                            <img src="<?php echo base_url()?>assets/images/star.png" alt="" />
                            <img src="<?php echo base_url()?>assets/images/star.png" alt="" />
                        </td>
                        <td>
                            <button>5.0</button>
                            <span>Wow...truly a memorable centerpiece!</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="comment-col1">
                            <label class="frostwrath">frostwrath</label>
                            <label class="from-UK">from UK</label>
                        </td>
                        <td>
                            <label class="comment-date">Date : DEC. 4, 2011 </label>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <label class="comment-content">The south could always start by rising from the couch and doing something with that obesity rate.</label>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <hr />
                        </td>
                    </tr>
                </table>
            </div>
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
                                <input type="text" style="width:290px"/>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span>*</span> Your Location:
                            </td>
                            <td>
                                <select style="width:165px">
                                    <option>VietNam</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span>*</span> Your email:
                            </td>
                            <td>
                                <input type="text"  style="width:290px"/>
                            </td>
                        </tr>
                        <tr>
                            <td style="padding-left:18px">
                                Please filled your phone number (option):
                            </td>
                            <td style="border: 1px inset #C0C0C0" class="tddb">
                                <input type="text"  style="width:200px"/>
                                <br />
                                <label style="color:#7b7b7b; font-size:11px">We will call you when your order delivered</label>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span>*</span> Please filled your order number :
                            </td>
                            <td style="border: 1px inset #C0C0C0" class="tddb">
                                <input type="text"  style="width:200px"/>
                                <br />
                                <label style="color:#7b7b7b; font-size:11px">This required for check valid order when you submit your review</label>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span>*</span> Review Title:
                            </td>
                            <td style="border: 1px inset #C0C0C0" class="tddb">
                                <input type="text"  style="width:98%"/>
                                <br />
                                <img alt="" src="images/down-arrow.png"/>
                                <a style="font-size:11px;color:#53b0da">Hide examples</a>
                                <br />
                                <span style="margin-left:5px; color:Black; font-size:11px; margin-top:5px">"Don't judge a book by its cover"</span><br />
                                <span style="margin-left:5px; color:Black; font-size:11px">"I would buy this product again and again"</span><br />
                                <span style="margin-left:5px; color:Black; font-size:11px">"Too much whiz and not enough bang"</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span>*</span> Comment:
                            </td>
                            <td>
                                
                                <textarea style="height:80px; width:99%;color:#7b7b7b;" rows="1" cols="1">Leave a comment...</textarea>                              
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <table>
                                    <tr>
                                        <td>
                                             <label style=" text-decoration:underline; margin-right:5px"><span>*</span><strong>Service Rating:</strong></label>
                                
                                            <img src="<?php echo base_url()?>assets/images/star.png" alt="" />
                                            <img src="<?php echo base_url()?>assets/images/star.png" alt="" />
                                            <img src="<?php echo base_url()?>assets/images/star.png" alt="" />
                                            <img src="<?php echo base_url()?>assets/images/star.png" alt="" />
                                            <img src="<?php echo base_url()?>assets/images/star.png" alt="" />
                                            <label style=" margin-left:5px"">Perfect. It doesn't get any better</label>
                                            <input type="button" value="Submit" />
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
            <div id="content5">
                <img src="<?php echo base_url()?>assets/images/bottom-banner.png" alt="" style="margin:10px 0"/>
            </div>
        </div>
    </div>