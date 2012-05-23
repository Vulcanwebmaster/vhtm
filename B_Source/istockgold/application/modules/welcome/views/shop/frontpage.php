

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
                    	<span class="content-head2" style="font-weight:bold; color:#2c5692">What's your currencty base?</span>
                    	<?php
						  	foreach ($buyCurrencies as $key => $currency){
						 ?>
						 	<!-- THE DIV for each currency -->
						 	<div class="<?php echo strtolower($currency['code']);?>">
	                    		<input type="radio" name="buyCurrency" value="<?php echo $currency['code'];?>" 
	                    						onclick="changeBuy('<?php echo $currency['code'];?>', '<?php echo $currency['c_name'];?>');"
	                    						<?php if($currency['code'] == 'WU') echo 'checked="checked"';?>/>
	                            <img alt="" src="<?php echo base_url()?>assets/images/<?php echo $currency['logo_src'];?>" class="image-selection1"/>
		                        <a style="font-weight:bold; color:#2c6eaa"><?php if ($currency['code'] == 'LR') echo $currency['c_name']; else echo $currency['c_name']."&nbsp;&nbsp;";?></a>
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
                    	<span class="content-head2" style="font-weight:bold; color:#2c5692">What's currencty you will get?</span>
                    	<?php
						  	foreach ($sellCurrencies as $key => $currency){
						 ?>
						 	<!-- THE DIV for each currency -->
						 	<div class="<?php echo strtolower($currency['code']);?>">
	                    		<input type="radio" name="sellCurrency" value="<?php echo $currency['code'];?>" 
	                    		 onclick="changeSell('<?php echo $currency['code'];?>', '<?php echo $currency['c_name'];?>');"
	                    		 <?php if($currency['code'] == 'LR') echo 'checked="checked"';?>/>
	                            <img alt="" src="<?php echo base_url()?>assets/images/<?php echo $currency['logo_src'];?>" class="image-selection1"/>
		                        <a style="font-weight:bold; color:#2c6eaa"><?php echo $currency['c_name'];?></a>
	                    	</div>	
	                    	<!-- THE DIV for each currency -->
					 	<?php 
						  	}
						?>
                    </div>
                    <div class="clearboth"> </div>
                    
                    <div style="float: right; width: 54%;text-align:justify; padding-bottom: 10px;padding-right: 15px; margin-bottom: 10px; font-size: 13px;">
                    	 <hr align="right" width="80%" style="border-style:solid">
                    	 <div style="text-align:justify; width:auto">
	                    	 You pay <input onclick="reset_value();" id="pay_amount" name="amount" onkeyup="update_amount();" value="1000" style="color:red;width: 35px;border-style:none none solid none; border-color:red; border-width:1px">
	                    	 <span id="pay"></span>, will get <span class="redText" id="get_amount" style="border-style:none none solid none; border-color:red; border-width:1px">786.26</span>
	                    	 
	                    	 <script type="text/javascript">
	                    	 	$(document).ready(function(){
									var exbt=document.getElementById('exchange-button');
									$('#exchange-button').mouseenter(function(){
										$(this).css('background-image','url(<?php echo base_url();?>assets/images/button2.png)');
										});
									$('#exchange-button').mouseleave(function(){
										$(this).css('background-image','url(<?php echo base_url();?>assets/images/button1.png)');
										});
		                    	 	});	                    	 	
	                    	 </script>
	                    	 <span id="get"></span> <button id="exchange-button" style="height:22px;">Exchange</button>
	                         <br />

	                         <span class="redText">*Notice: e-currency transfer fees also tobe deducted from this transaction</span>
                         </div>
                    </div>
                    <script type="text/javascript">
                    //changeBuy("WR","Western Union");
                    //changeSell("LR","Liberty Reserve");
                    </script>
                    <div class="clearboth"> </div>
                    
                    <div class="how-link">
						<style type="text/css">
                    		.how-item{font-weight:bold; text-decoration:underline; font-family:arial; font-size:14px}
                    	</style>
                    	<span>HOW?</span>
                    	<ul>
                    		<li>
                    			<img src="<?php echo base_url()?>assets/images/arrow.png" alt="" />
                                <a class="how-item">Via online exchangers</a>

                    		</li>
                    		<li>
                    			 <img src="<?php echo base_url()?>assets/images/arrow.png" alt="" />
                                  <a class="how-item">By a bank wire</a>

                    		</li>
                    		<li>
                                 <img src="<?php echo base_url()?>assets/images/arrow.png" alt="" />
                                  <a class="how-item">With a scratch card</a>

                    		</li>
                    		<li>
                    			<img src="<?php echo base_url()?>assets/images/hcn.png" alt="" />
                                <a class="how-item" style="font-size:12px">All pop-up method</a>
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
                    	<a style="font-size:14px; line-height:20px" href="<?php echo base_url()?>index.php/welcome/detailnews/<?php echo $rs->id;?>"><img style="border-style:none" alt="" src="<?php echo base_url()?>assets/images/checked.png"/><?php echo $rs->title?></a>
                    	<br />
                    	<?php endforeach;?>
						<div align="right">
                            <a href="<?php echo base_url()?>index.php/welcome/allNews"style="text-decoration:underline; margin-right:20px"><img style="border-style:none" src="<?php echo base_url()?>assets/images/play-icon.png" alt=""/><strong>All WebMoney News</strong></a>
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
                	<script type="text/javascript"
                    src="<?php echo base_url()?>assets/js/jquery-1.6.2.min.js">
                    </script> 
                    <span style="font-size:12px; font-weight:bold">Show</span>
                    <select id="show_id" name = "show_id">
                            <option <?php if (isset($_SESSION['show'])) if ($_SESSION['show'] == 5) echo 'selected = "selected"'?> id = "option5" value = "5" >5</option>
                            <option <?php if (isset($_SESSION['show'])) if ($_SESSION['show'] == 10) echo 'selected = "selected"'?> id ="option10" value="10">10</option>
                            <option <?php if (isset($_SESSION['show'])) if ($_SESSION['show'] == 20) echo 'selected = "selected"'?> id ="option20" value="20">20</option>
                            <option <?php if (isset($_SESSION['show'])) if ($_SESSION['show'] == 40) echo 'selected = "selected"'?> id ="option40" value="40">40</option>
                    </select>
                    <script type="text/javascript">
                    $('#show_id').change(function(){
                    	var select = document.getElementById('show_id');
                    	if (select)
                    	{
                    	   if (select.selectedIndex == 0)
                    	   {
                    		   $.post('<?php echo base_url()?>index.php/welcome/ajax_review_show/5', {'t' : 't'}, 
                                   	function(data){$('#content3').html(data);; });
                    	   } else 
                    		   if (select.selectedIndex == 1)
                        	   {
                    			   $.post('<?php echo base_url()?>index.php/welcome/ajax_review_show/10', {'t' : 't'}, 
                                          	function(data){$('#content3').html(data);; });
                        	   } else
                        		   if (select.selectedIndex == 2)
                            	   {
                        			   $.post('<?php echo base_url()?>index.php/welcome/ajax_review_show/20', {'t' : 't'}, 
                                              	function(data){$('#content3').html(data);; });
                            	   } else
                            		   if (select.selectedIndex == 3)
                                	   {
                            			   $.post('<?php echo base_url()?>index.php/welcome/ajax_review_show/40', {'t' : 't'}, 
                                                  	function(data){$('#content3').html(data);; });
                                	   }    
                    	}
                    });
                    </script>
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
                    				<option value="" selected="selected">Select Country</option> 
<option value="United States">United States</option> 
<option value="United Kingdom">United Kingdom</option> 
<option value="Afghanistan">Afghanistan</option> 
<option value="Albania">Albania</option> 
<option value="Algeria">Algeria</option> 
<option value="American Samoa">American Samoa</option> 
<option value="Andorra">Andorra</option> 
<option value="Angola">Angola</option> 
<option value="Anguilla">Anguilla</option> 
<option value="Antarctica">Antarctica</option> 
<option value="Antigua and Barbuda">Antigua and Barbuda</option> 
<option value="Argentina">Argentina</option> 
<option value="Armenia">Armenia</option> 
<option value="Aruba">Aruba</option> 
<option value="Australia">Australia</option> 
<option value="Austria">Austria</option> 
<option value="Azerbaijan">Azerbaijan</option> 
<option value="Bahamas">Bahamas</option> 
<option value="Bahrain">Bahrain</option> 
<option value="Bangladesh">Bangladesh</option> 
<option value="Barbados">Barbados</option> 
<option value="Belarus">Belarus</option> 
<option value="Belgium">Belgium</option> 
<option value="Belize">Belize</option> 
<option value="Benin">Benin</option> 
<option value="Bermuda">Bermuda</option> 
<option value="Bhutan">Bhutan</option> 
<option value="Bolivia">Bolivia</option> 
<option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option> 
<option value="Botswana">Botswana</option> 
<option value="Bouvet Island">Bouvet Island</option> 
<option value="Brazil">Brazil</option> 
<option value="British Indian Ocean Territory">British Indian Ocean Territory</option> 
<option value="Brunei Darussalam">Brunei Darussalam</option> 
<option value="Bulgaria">Bulgaria</option> 
<option value="Burkina Faso">Burkina Faso</option> 
<option value="Burundi">Burundi</option> 
<option value="Cambodia">Cambodia</option> 
<option value="Cameroon">Cameroon</option> 
<option value="Canada">Canada</option> 
<option value="Cape Verde">Cape Verde</option> 
<option value="Cayman Islands">Cayman Islands</option> 
<option value="Central African Republic">Central African Republic</option> 
<option value="Chad">Chad</option> 
<option value="Chile">Chile</option> 
<option value="China">China</option> 
<option value="Christmas Island">Christmas Island</option> 
<option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option> 
<option value="Colombia">Colombia</option> 
<option value="Comoros">Comoros</option> 
<option value="Congo">Congo</option> 
<option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option> 
<option value="Cook Islands">Cook Islands</option> 
<option value="Costa Rica">Costa Rica</option> 
<option value="Cote D'ivoire">Cote D'ivoire</option> 
<option value="Croatia">Croatia</option> 
<option value="Cuba">Cuba</option> 
<option value="Cyprus">Cyprus</option> 
<option value="Czech Republic">Czech Republic</option> 
<option value="Denmark">Denmark</option> 
<option value="Djibouti">Djibouti</option> 
<option value="Dominica">Dominica</option> 
<option value="Dominican Republic">Dominican Republic</option> 
<option value="Ecuador">Ecuador</option> 
<option value="Egypt">Egypt</option> 
<option value="El Salvador">El Salvador</option> 
<option value="Equatorial Guinea">Equatorial Guinea</option> 
<option value="Eritrea">Eritrea</option> 
<option value="Estonia">Estonia</option> 
<option value="Ethiopia">Ethiopia</option> 
<option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option> 
<option value="Faroe Islands">Faroe Islands</option> 
<option value="Fiji">Fiji</option> 
<option value="Finland">Finland</option> 
<option value="France">France</option> 
<option value="French Guiana">French Guiana</option> 
<option value="French Polynesia">French Polynesia</option> 
<option value="French Southern Territories">French Southern Territories</option> 
<option value="Gabon">Gabon</option> 
<option value="Gambia">Gambia</option> 
<option value="Georgia">Georgia</option> 
<option value="Germany">Germany</option> 
<option value="Ghana">Ghana</option> 
<option value="Gibraltar">Gibraltar</option> 
<option value="Greece">Greece</option> 
<option value="Greenland">Greenland</option> 
<option value="Grenada">Grenada</option> 
<option value="Guadeloupe">Guadeloupe</option> 
<option value="Guam">Guam</option> 
<option value="Guatemala">Guatemala</option> 
<option value="Guinea">Guinea</option> 
<option value="Guinea-bissau">Guinea-bissau</option> 
<option value="Guyana">Guyana</option> 
<option value="Haiti">Haiti</option> 
<option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option> 
<option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option> 
<option value="Honduras">Honduras</option> 
<option value="Hong Kong">Hong Kong</option> 
<option value="Hungary">Hungary</option> 
<option value="Iceland">Iceland</option> 
<option value="India">India</option> 
<option value="Indonesia">Indonesia</option> 
<option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option> 
<option value="Iraq">Iraq</option> 
<option value="Ireland">Ireland</option> 
<option value="Israel">Israel</option> 
<option value="Italy">Italy</option> 
<option value="Jamaica">Jamaica</option> 
<option value="Japan">Japan</option> 
<option value="Jordan">Jordan</option> 
<option value="Kazakhstan">Kazakhstan</option> 
<option value="Kenya">Kenya</option> 
<option value="Kiribati">Kiribati</option> 
<option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option> 
<option value="Korea, Republic of">Korea, Republic of</option> 
<option value="Kuwait">Kuwait</option> 
<option value="Kyrgyzstan">Kyrgyzstan</option> 
<option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option> 
<option value="Latvia">Latvia</option> 
<option value="Lebanon">Lebanon</option> 
<option value="Lesotho">Lesotho</option> 
<option value="Liberia">Liberia</option> 
<option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option> 
<option value="Liechtenstein">Liechtenstein</option> 
<option value="Lithuania">Lithuania</option> 
<option value="Luxembourg">Luxembourg</option> 
<option value="Macao">Macao</option> 
<option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option> 
<option value="Madagascar">Madagascar</option> 
<option value="Malawi">Malawi</option> 
<option value="Malaysia">Malaysia</option> 
<option value="Maldives">Maldives</option> 
<option value="Mali">Mali</option> 
<option value="Malta">Malta</option> 
<option value="Marshall Islands">Marshall Islands</option> 
<option value="Martinique">Martinique</option> 
<option value="Mauritania">Mauritania</option> 
<option value="Mauritius">Mauritius</option> 
<option value="Mayotte">Mayotte</option> 
<option value="Mexico">Mexico</option> 
<option value="Micronesia, Federated States of">Micronesia, Federated States of</option> 
<option value="Moldova, Republic of">Moldova, Republic of</option> 
<option value="Monaco">Monaco</option> 
<option value="Mongolia">Mongolia</option> 
<option value="Montserrat">Montserrat</option> 
<option value="Morocco">Morocco</option> 
<option value="Mozambique">Mozambique</option> 
<option value="Myanmar">Myanmar</option> 
<option value="Namibia">Namibia</option> 
<option value="Nauru">Nauru</option> 
<option value="Nepal">Nepal</option> 
<option value="Netherlands">Netherlands</option> 
<option value="Netherlands Antilles">Netherlands Antilles</option> 
<option value="New Caledonia">New Caledonia</option> 
<option value="New Zealand">New Zealand</option> 
<option value="Nicaragua">Nicaragua</option> 
<option value="Niger">Niger</option> 
<option value="Nigeria">Nigeria</option> 
<option value="Niue">Niue</option> 
<option value="Norfolk Island">Norfolk Island</option> 
<option value="Northern Mariana Islands">Northern Mariana Islands</option> 
<option value="Norway">Norway</option> 
<option value="Oman">Oman</option> 
<option value="Pakistan">Pakistan</option> 
<option value="Palau">Palau</option> 
<option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option> 
<option value="Panama">Panama</option> 
<option value="Papua New Guinea">Papua New Guinea</option> 
<option value="Paraguay">Paraguay</option> 
<option value="Peru">Peru</option> 
<option value="Philippines">Philippines</option> 
<option value="Pitcairn">Pitcairn</option> 
<option value="Poland">Poland</option> 
<option value="Portugal">Portugal</option> 
<option value="Puerto Rico">Puerto Rico</option> 
<option value="Qatar">Qatar</option> 
<option value="Reunion">Reunion</option> 
<option value="Romania">Romania</option> 
<option value="Russian Federation">Russian Federation</option> 
<option value="Rwanda">Rwanda</option> 
<option value="Saint Helena">Saint Helena</option> 
<option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option> 
<option value="Saint Lucia">Saint Lucia</option> 
<option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option> 
<option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option> 
<option value="Samoa">Samoa</option> 
<option value="San Marino">San Marino</option> 
<option value="Sao Tome and Principe">Sao Tome and Principe</option> 
<option value="Saudi Arabia">Saudi Arabia</option> 
<option value="Senegal">Senegal</option> 
<option value="Serbia and Montenegro">Serbia and Montenegro</option> 
<option value="Seychelles">Seychelles</option> 
<option value="Sierra Leone">Sierra Leone</option> 
<option value="Singapore">Singapore</option> 
<option value="Slovakia">Slovakia</option> 
<option value="Slovenia">Slovenia</option> 
<option value="Solomon Islands">Solomon Islands</option> 
<option value="Somalia">Somalia</option> 
<option value="South Africa">South Africa</option> 
<option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option> 
<option value="Spain">Spain</option> 
<option value="Sri Lanka">Sri Lanka</option> 
<option value="Sudan">Sudan</option> 
<option value="Suriname">Suriname</option> 
<option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option> 
<option value="Swaziland">Swaziland</option> 
<option value="Sweden">Sweden</option> 
<option value="Switzerland">Switzerland</option> 
<option value="Syrian Arab Republic">Syrian Arab Republic</option> 
<option value="Taiwan, Province of China">Taiwan, Province of China</option> 
<option value="Tajikistan">Tajikistan</option> 
<option value="Tanzania, United Republic of">Tanzania, United Republic of</option> 
<option value="Thailand">Thailand</option> 
<option value="Timor-leste">Timor-leste</option> 
<option value="Togo">Togo</option> 
<option value="Tokelau">Tokelau</option> 
<option value="Tonga">Tonga</option> 
<option value="Trinidad and Tobago">Trinidad and Tobago</option> 
<option value="Tunisia">Tunisia</option> 
<option value="Turkey">Turkey</option> 
<option value="Turkmenistan">Turkmenistan</option> 
<option value="Turks and Caicos Islands">Turks and Caicos Islands</option> 
<option value="Tuvalu">Tuvalu</option> 
<option value="Uganda">Uganda</option> 
<option value="Ukraine">Ukraine</option> 
<option value="United Arab Emirates">United Arab Emirates</option> 
<option value="United Kingdom">United Kingdom</option> 
<option value="United States">United States</option> 
<option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option> 
<option value="Uruguay">Uruguay</option> 
<option value="Uzbekistan">Uzbekistan</option> 
<option value="Vanuatu">Vanuatu</option> 
<option value="Venezuela">Venezuela</option> 
<option value="Viet Nam">Viet Nam</option> 
<option value="Virgin Islands, British">Virgin Islands, British</option> 
<option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option> 
<option value="Wallis and Futuna">Wallis and Futuna</option> 
<option value="Western Sahara">Western Sahara</option> 
<option value="Yemen">Yemen</option> 
<option value="Zambia">Zambia</option> 
<option value="Zimbabwe">Zimbabwe</option>
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
																											
															star1.src="<?php echo base_url();?>assets/images/star2.png";
															if (flag==1)
															{
																flag=0;
																star2.src="<?php echo base_url();?>assets/images/star.png";
																star3.src="<?php echo base_url();?>assets/images/star.png";
																star4.src="<?php echo base_url();?>assets/images/star.png";
																star5.src="<?php echo base_url();?>assets/images/star.png";
															}
															value.style.width='50px';
															value.innerHTML="very bad";
													});
													$("#star1").mouseleave(function(){
														if (flag == 0) {
															star1.src="<?php echo base_url();?>assets/images/star.png";
														}
													});
													
													$("#star1").mousedown(function(){
														//if (flag == 0)
														{											
														flag = 1;
														star1.src="<?php echo base_url();?>assets/images/star2.png";
														ratingstarvalue.value = 1;
														}
													});

													

													$("#star2").mouseenter(function(){
														//if (flag == 0) {														
														$("#star1").mouseenter();
														star2.src="<?php echo base_url();?>assets/images/star2.png";
														value.style.width='50px';
														value.innerHTML="bad";
														
													});
													$("#star2").mouseleave(function(){
														if (flag == 0) {
														$("#star1").mouseleave();
														star2.src="<?php echo base_url();?>assets/images/star.png";
														}
													});

													$("#star2").mousedown(function(){
														//if (flag == 0)
														$("#star1").mousedown();
														star1.src="<?php echo base_url();?>assets/images/star2.png";
														ratingstarvalue.value = 2;
													});

													$("#star3").mouseenter(function(){	
														//if (flag == 0) {													
														$("#star2").mouseenter();
														star3.src="<?php echo base_url();?>assets/images/star2.png";
														value.style.width='50px';
														value.innerHTML="normal";
													});
													$("#star3").mouseleave(function(){
														if (flag == 0) {
														$("#star2").mouseleave();
														star3.src="<?php echo base_url();?>assets/images/star.png";
														}
													});

													$("#star3").mousedown(function(){
														$("#star2").mousedown();														
														star1.src="<?php echo base_url();?>assets/images/star2.png";
														ratingstarvalue.value = 3;
													});


													
													$("#star4").mouseenter(function(){
														//if (flag == 0) {														
														$("#star3").mouseenter();
														star4.src="<?php echo base_url();?>assets/images/star2.png";
														value.style.width='50px';
														value.innerHTML="good";
													});
													$("#star4").mouseleave(function(){
														if (flag == 0) {
														$("#star3").mouseleave();
														star4.src="<?php echo base_url();?>assets/images/star.png";
														}
													});

													$("#star4").mousedown(function(){	
														$("#star3").mousedown();											
														star1.src="<?php echo base_url();?>assets/images/star2.png";
														ratingstarvalue.value = 4;
													});


													$("#star5").mouseenter(function(){
														//if (flag == 0) {														
														$("#star4").mouseenter();
														star5.src="<?php echo base_url();?>assets/images/star2.png";
														value.style.width='50px';
														value.innerHTML="perfect";
													});
													$("#star5").mouseleave(function(){
														$("#star4").mouseleave();
														if (flag == 0) {
														star5.src="<?php echo base_url();?>assets/images/star.png";
														}
													});

													$("#star5").mousedown(function(){
														$("#star4").mousedown();
															star1.src="<?php echo base_url();?>assets/images/star2.png";
															ratingstarvalue.value = 5;
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
                                            
                                            <script type="text/javascript">
                                            	$(document).ready(function(){
													var sm=document.getElementById('Submit');
													$('#Submit').mouseenter(function(){
														$('#Submit').css('background-image','url(<?php echo base_url();?>assets/images/submitbt2.png)');
														});
													$('#Submit').mouseleave(function(){
														$('#Submit').css('background-image','url(<?php echo base_url();?>assets/images/submitbt1.png)');
														});
                                                	});
                                            </script>
                                            <input type="submit" value="Submit" id="Submit"/>
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