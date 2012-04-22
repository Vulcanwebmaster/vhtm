<div id="main-column">
        <!--MỤC RIÊNG -->
            <div id="au-title">
                <label>Western Union => Liberty Reserve</label>
            </div>
            <div style="padding-right:145px">
                <div style="margin-top:40px">
                    <p style="font-size:13px; font-weight:bold; color:#505050">1 Western Union => <?php if(isset($rate)) echo $rate; else echo set_value('rate');?> Liberty Reserve (available: $35948.65)</p>
                    <hr style="border-top:solid 7px #b0b0b0; margin-top:-5px"/>
                </div>
                <div>
                	<?php
					if ($this->session->flashdata('msg')|| $this->session->flashdata('error')){ 
						echo "<div class='status_box'>";
						echo $this->session->flashdata('msg');
						echo $this->session->flashdata('error');
						echo "</div>";
					}
					?>
					<?php echo validation_errors('<div class="message error">','</div>'); ?>
	                <?php echo form_open($module."/wu2lr", array('class' => 'expose', 'id' => 'echangeForm')); ?>
                	<input type="hidden" name="fromCurrency" value="<?php if(isset($fromCurrency)) echo $fromCurrency; else echo set_value('fromCurrency');?>"/>
                	<input type="hidden" name="toCurrency" value="<?php if(isset($toCurrency)) echo $toCurrency; else echo set_value('toCurrency');?>"/>
                	<input type="hidden" name="getAmount" value="<?php if(isset($getAmount)) echo $getAmount; else echo set_value('getAmount');?>"/>
                	<input type="hidden" name="rate" value="<?php if(isset($rate)) echo $rate; else echo set_value('rate');?>"/>
                	
                    <table class="Liberty2-table" cellspacing="0" style="font-size:13px" >
                        <tr>
                            <td colspan="2" style="padding-left:170px"><p>You will pay	<?php if(isset($amount)) echo $amount; else echo set_value('amount');?>  Western Union<br />
                                                            You will get	<?php if(isset($getAmount)) echo $getAmount; else echo set_value('getAmount');?> Liberty Reserve</p></td>
                        </tr>                        
                        <tr>
                            <td colspan="2"><hr style="border-top:solid 4px #b0b0b0; margin-top:-5px"/></td>
                        </tr>
                        <tr>
                            <td colspan="2"><p><font class="red">*Notice: you will get paid in 24 hours</font></P>
                                <p><strong>Please follow these steps:</strong></p>
                                <p class="green">Step 1:send <?php if(isset($amount)) echo $amount; else echo set_value('amount');?>USD to the following our info through Western Union:</p>
                                <p style="padding-left:30px; line-height:30px"><?php echo $wuInfo;?>
                                <p class="green">Step 2:fill out the following form and press Confirm:</p>
                            </td>
                        </tr>  
                         <tr>
                            <td class="liberty2-col1" align="right" style="width:120px"><p>MTCN</p></td>
                            <td>
                                <input type="text" name="mtcn" value="<?php echo set_value('mtcn'); ?>" style="width:20%"/>
                                <font style="color:#a0a0a0">(input the Money Transfer Control Number of Western Union transaction)</font>
                            </td>
                        </tr> 
                        <tr>
                            <td class="liberty2-col1" align="right"><p>Amount</p></td>
                            <td>
                                <input type="text" name="amount" value="<?php if(isset($amount)) echo $amount; else echo set_value('amount');?>" style="width:17%" value="1000.00"/>
                                <font style="color:#a0a0a0"> (input the amount in USD of Western Union transaction. 300USD as minimum)</font>
                            </td>
                        </tr>      
                        <tr>
                            <td class="liberty2-col1" align="right"><p>Sender's First name</p></td>
                            <td>
                                <input type="text" name="firstName" value="<?php echo set_value('firstName'); ?>" style="width:30%"/>
                                <font style="color:#a0a0a0"> (input the sender's first name of Western Union transaction)</font>
                            </td>
                        </tr>    
                        <tr>
                            <td class="liberty2-col1" align="right"><p>Sender's Last name</p></td>
                            <td>
                                <input type="text" name="lastName" value="<?php echo set_value('lastName'); ?>" style="width:30%"/>
                                <font style="color:#a0a0a0"> (input the sender's last name of Western Union transaction)</font>
                            </td>
                        </tr>  
                        <tr>
                            <td class="liberty2-col1" align="right"><p>Sender's City</p></td>
                            <td>
                                <input type="text" name="city" value="<?php echo set_value('city'); ?>" style="width:21%"/>
                                <font style="color:#a0a0a0">(input the sender's city of Western Union transaction)</font>
                            </td>
                        </tr>   
                        <tr>
                            <td class="liberty2-col1" align="right"><p>Sender's Country</p></td>
                            <td>
                                <input type="text" name="country" value="<?php echo set_value('country'); ?>" style="width:21%"/>
                                <font style="color:#a0a0a0">(input the sender's country of Western Union transaction)</font>
                            </td>
                        </tr>  
                        <tr>
                            <td class="liberty2-col1" align="right"><p>Your LR account</p></td>
                            <td>
                                <input type="text" name="lrAccount" value="<?php echo set_value('lrAccount'); ?>" style="width:23%"/>                                
                            </td>
                        </tr> 
                        <tr>
                            <td class="liberty2-col1" align="right"><p>Your E-mail</p></td>
                            <td>
                                <input type="text" name="email" value="<?php echo set_value('email'); ?>" style="width:32%"/>  
                                <font style="color:#a0a0a0">(input a working e-mail address)</font>                              
                            </td>
                        </tr>  
                        <tr>
                        	<td  class="liberty2-col1" align="right"><?php echo $cap['image'];?></td>
                        	<td><input type="text" name="captcha" value="" /></td>
                        </tr>
                        <tr>
                            <td colspan="2" style="padding-top:20px"><hr style="border-top:solid 4px #b0b0b0; margin-top:-5px"/></td>
                        </tr> 
                        <tr>
                            <td align="center" colspan="2"><input type="submit" name="submit" value="Exchange" /></td>
                        </tr>  
                    </table>
                    <?php echo form_close(); ?>
                </div>
            </div>
</div>