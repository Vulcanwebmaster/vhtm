<!-- Author: tienlx -->
<div id="main-column">
<ul id="mapsite">
		<li><a href="<?php echo base_url();?>">Home</a></li>
		<li>></li>
		<li><a>Buy/sell-LR</a></li>
	</ul>
<div id="au-title">
	<label>Buy/Sell LR</label>
</div>
<!-- ?php 
if (count($exchangers))
foreach ($exchangers as $key => $list)
	echo $list['content'];
? -->
<script type="text/javascript">
	var rateData = {"LR":{"WU":"0.982"},"WU":{"LR":"0.879"}};
	function reset_value()
	{
		if (document.getElementById('pay_amount').value != '') {
        	document.getElementById('pay_amount').value = '';
        	document.getElementById('get_amount').innerHTML = '0';
		}
    }
	
</script>
<style type="text/css">
	form{clear:both}
	#tab-head p{margin:10px 0 3px 0}
	.newcol_3{text-align:right}
</style>
<div style="width:80%; margin-top:50px">
                <form action="<?php echo base_url();?>exchange" method="post" accept-charset="utf-8">    
                	<table style="width:100%; margin-bottom:5px">
                		<tr>
                			<td><span style="font-size:13px; font-weight:bold; color:#505050;">Exchange-out currency</span></td>
                			<td><span style="font-size:13px; font-weight:bold; color:#505050">Rate</span></td>
                			<td class="newcol_3"><span style="font-size:13px; font-weight:bold; color:#505050">Exchange-in currency</span></td>
                		</tr>
                		<tr>
                			<td colspan="3"><hr style=" border-bottom:solid 6px #b0b0b0; border-style:none none solid none"/></td>
                		</tr>
                		<tr>
                			<td><input type="radio" name="buyCurrency" value="LR" onclick="changeBuy('LR', 'Liberty Reserve');">
		                        <a style=" color:#0f5997; font-size:13px">Liberty Reserve</a></td>
		                    <td rowspan="3"><span id="rate" style="color:Red; margin-top:10px">N/A</span>
                    			<input type="hidden" name="rate" id="input_rate" value="0.982"></td>
		                    <td class="newcol_3" style="padding-right:30px"><input type="radio" name="sellCurrency" value="LR" onclick="changeSell('LR', 'Liberty Reserve');" checked="checked">
		                        <a style="color:#0f5997; font-size:13px">Liberty Reserve</a></td>
                		</tr>
                		<tr>
                			<td colspan="3" height="5px"/>
                		</tr>
                		<tr>
                			<td><input type="radio" name="buyCurrency" value="WU" onclick="changeBuy('WU', 'Western Union');" checked="checked">
		                        <a style="color:#0f5997; font-size:13px">Western Union&nbsp;&nbsp;</a></td>
		                    <td class="newcol_3"  style="padding-right:33px"><input type="radio" name="sellCurrency" value="WU" onclick="changeSell('WU', 'Western Union');">
		                        <a style="color:#0f5997; font-size:13px">Western Union</a></td>
                		</tr>
                		<tr>
                			<td colspan="3"><hr style=" border-bottom:solid 6px #b0b0b0; border-style:none none solid none"/></td>
                		</tr>
                	</table>
                    
                    <div style="text-align:justify; padding-bottom: 10px;padding-right: 15px; margin-bottom: 10px; font-size: 13px;">
                    	 <div style="text-align:justify; width:auto; color:#2a2a2a">
	                    	 You pay <input onclick="reset_value();" id="pay_amount" name="amount" onkeyup="update_amount();" value="1000" style="width: 35px;border-style:none none solid none; border-width:1px">
	                    	 <span id="pay">Western Union</span>, will get <span class="redText" id="get_amount" style="color:#2a2a2a;over-flow:hidden; width:20px;border-style:none none solid none;  border-width:1px">NaN</span>
	                    	 
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
	                    	 <span id="get" style="margin-right:10px">Western Union</span> 
	                    	 <button id="exchange-button" style="height:22px;">Exchange</button>
	                         <br>

	                         <span class="redText">*Notice: e-currency transfer fees also tobe deducted from this transaction</span>
                         </div>
                    </div>
                    <script type="text/javascript">
                    //changeBuy("WR","Western Union");
                    //changeSell("LR","Liberty Reserve");
                    </script>
                    <div class="clearboth"> </div>
                    
                    
                    <div class="note" style="float:left">
                    	<ul style="font-size:12px; margin-top:15px;">
                             <li style="margin-bottom:20px">
                                        The transer free of Liberty Reserve:<br>
                                        1% of the transfer amount, minimum 0.01USD, maximun 2.99USD
                             </li>
                             <li>
                                        The transer free of WMZ:<br>
                                        0.8% of the transfer amount, minimun 0.01 USD, maximun 50USD
                             </li>
                        </ul>
                    </div>
                 </form>                
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
