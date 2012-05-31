 <div id="main-column">
 <ul id="mapsite">
		<li><a href="<?php echo base_url();?>">Home</a></li>
		<li>></li>
		<li><a>Tracking-my-order</a></li>
	</ul>
        <!--MỤC RIÊNG -->
            <div id="tracking-column-center">
                <div id="au-title">
                    <label>Tracking my order</label>
                </div>
                <div style="padding-top:10px">
                    <label>You can only check your order by unique order number that was send to your email.</label>
                </div>
                <div style="margin-top:15px; height:20px; padding-top:5px; background-image:url('images/Tracking_gradient.png'); background-repeat:repeat-x; border:1px none #EBEBEB">
                    <label style="color:#0b7dce; font-size:11px;font-weight:bold; padding-left:15px">Track Your Exchange Order</label>
                </div>
                <div>
                
                <?php echo form_open($module."/order", array('class' => 'expose', 'id' => 'orderForm')); ?>
                    <div style="margin:20px 15px 25px 35px; padding-right:0">
                        <div class="tracking-row">
                            <div class="tracking-col1">
                                <label>Order ID</label>
                            </div>
                            <div class="tracking-col2">
                                <input type="text" name="orderId" style="width:100%"/>
                            </div>
                        </div>
                        <div class="tracking-row">
                            <div class="tracking-col1">
                                <label>To e-Currency Account :</label>
                            </div>
                            <div class="tracking-col2">
                                <input type="text"  style="width:100%"/>
                            </div>
                        </div>
                        <div class="tracking-row">
                            <div class="tracking-col1">
                                <label>Turing Number : </label>
                            </div>
                            <div class="tracking-col2">
                                <?php echo $cap;?>
                            </div>
                        </div>
                        <div class="tracking-row" align="right">
                            <input type="submit" name="submit" value="Track" />
                        </div>
                    </div>
                    <?php echo form_close(); ?>
                </div>
            </div>
        <!---->
</div>