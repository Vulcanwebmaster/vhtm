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
                    	 You pay <input id="pay_amount" name="amount" onkeyup="update_amount();" value="1000" style="width: 35px;"> <span id="pay">Liberty Reserve</span>, will get <span class="redText" id="get_amount">786.26</span> <span id="get">Western Union </span> <button>Exchange</button>
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
            </div>