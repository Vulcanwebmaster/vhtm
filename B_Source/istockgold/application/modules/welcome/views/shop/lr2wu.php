<div id="main-column">
            <div id="au-title">
                <label>Liberty Reserve => Western Union</label>
            </div>
            <div style="padding-right:145px">
                <div style="margin-top:40px">
                    <p style="font-size:13px; font-weight:bold; color:#505050">1 Liberty Reserve => <?php if(isset($rate)) echo $rate; else echo set_value('rate');?> Western Union (available: $999999.00)</p>
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
                <?php echo form_open($module."/lr2wu", array('class' => 'expose', 'id' => 'echangeForm')); ?>
                	<input type="hidden" name="fromCurrency" value="<?php if(isset($fromCurrency)) echo $fromCurrency; else echo set_value('fromCurrency');?>"/>
                	<input type="hidden" name="toCurrency" value="<?php if(isset($toCurrency)) echo $toCurrency; else echo set_value('toCurrency');?>"/>
                	<input type="hidden" name="amount" value="<?php if(isset($amount)) echo $amount; else echo set_value('amount');?>"/>
                	<input type="hidden" name="getAmount" value="<?php if(isset($getAmount)) echo $getAmount; else echo set_value('getAmount');?>"/>
                	<input type="hidden" name="rate" value="<?php if(isset($rate)) echo $rate; else echo set_value('rate');?>"/>
                	
                    <table cellspacing="0" style="font-size:13px" class="Liberty2-table">
                        <tr>
                            <td colspan="2" style="padding-left:170px"><p>You will pay	<?php if(isset($amount)) echo $amount; else echo set_value('amount');?> Liberty Reserve</p>
                            	
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" style="padding-left:170px"><p>You will get	<?php if(isset($getAmount)) echo $getAmount; else echo set_value('getAmount');?> Western Union <font style="color:#a0a0a0">(currency transfer fees will be deducted)</font></p></td>
                        </tr>
                        <tr>
                            <td style="width:200px" class="liberty2-col1" align="right"><p>Reciever's First name</p></td>
                            <td><input type="text" name="firstName" value="<?php echo set_value('firstName'); ?>"/></td>
                        </tr>
                        <tr>
                            <td class="liberty2-col1" align="right"><p>Reciever's Last name</p></td>
                            <td><input type="text" name="lastName" value="<?php echo set_value('lastName'); ?>"/></td>
                        </tr>
                        <tr>
                            <td class="liberty2-col1" align="right"><p>Reciever's Street</p></td>
                            <td><input type="text" name="street" value="<?php echo set_value('street'); ?>" style="width:80%"/></td>
                        </tr>
                        <tr>
                            <td class="liberty2-col1" align="right"><p>Reciever's City</p></td>
                            <td><input type="text" name="city" value="<?php echo set_value('city'); ?>" style="width:40%"/></td>
                        </tr>
                        <tr>
                            <td class="liberty2-col1" align="right"><p>Reciever's state/province</p></td>
                            <td><input type="text" name="province" value="<?php echo set_value('province'); ?>" style="width:60%"/></td>
                        </tr>
                        <tr>
                            <td class="liberty2-col1" align="right"><p>Reciever's Country</p></td>
                            <td><input type="text" name="country"  value="<?php echo set_value('country'); ?>" style="width:40%"/></td>
                        </tr>
                        <tr>
                            <td class="liberty2-col1" align="right"><p>Reciever's postal code</p></td>
                            <td><input type="text" name="post_code" value="<?php echo set_value('post_code'); ?>" style="width:25%"/></td>
                        </tr>
                        <tr>
                            <td class="liberty2-col1" align="right"><p>Your E-mail</p></td>
                            <td><input type="text" name="email" value="<?php echo set_value('email'); ?>" style="width:40%"/>
                                <label style="color:#b5b5b5">(input a working e-mail address)</label></td>
                        </tr>
                        <tr>
                        	<td  class="liberty2-col1" align="right"><?php echo $cap['image'];?></td>
                        	<td><input type="text" name="captcha" value="" /></td>
                        </tr>
                        <tr>
                            <td colspan="2"><p class="red" style="margin-top:20px">*Notice 1: you will get paid in 24 hours and you pay the Western Union transfer fee.</p></td>
                        </tr>
                        <tr>
                            <td colspan="2"><p class="red" style="margin-top:5px">*Notice 2: the min amount is 300USD for a Western Union transfer.</p></td>
                        </tr>
                        <tr>
                            <td colspan="2"><hr style="border-top:solid 7px #b0b0b0; margin-top:-5px"/></td>
                        </tr>
                        <tr>
                        	<td colspan="2" align="center"><input type="submit" name="submit" value="Exchange" /></td>
                        </tr>
                    </table>
                   <?php echo form_close(); ?>
                </div>
            </div>
</div>