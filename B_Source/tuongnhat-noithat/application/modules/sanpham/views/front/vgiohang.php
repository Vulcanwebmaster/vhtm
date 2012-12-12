<script type="text/javascript" src="<?php echo base_url();?>assets/tuongnhatp2/timepicker/jquery.timepicker.js"></script>
<link type="text/css" rel="stylesheet" href="<?php echo base_url();?>assets/tuongnhatp2/timepicker/jquery.timepicker.css"/>

<script type="text/javascript">
	$(document).ready(function(){
		$( "#order-date" ).datepicker(); // setup date picker
		$('#order-time').timepicker({ 'timeFormat': 'H:i:s' }); // setup time picker
		$(".quantity_product").change(function(){
			var quantity = $(this).val();
			var id = $(this).attr('id');
			var segments = id.split('_');
			var productId = segments[segments.length-1];
			$("#money-"+productId).load("<?php echo base_url()?>sanpham/updateQuantity/"+productId+"/"+quantity, function(){
				$("#total_value").load("<?php echo base_url()?>sanpham/computeTotal");
			});
		});

		//====== order form ========
		$("#order").hide();
		$("#loginBt").click(function(){
			$("#order").slideToggle();
			$('html, body').animate({scrollTop: $(window).height()}, 800);
		});

		//====== validate ==========
		var email = new LiveValidation( "order-email", { validMessage: "Hợp lệ", wait: 500 } );//, { validMessage: "Địa chỉ hợp lệ!", wait: 500 } );
		email.add( Validate.Email, { failureMessage: "Địa chỉ không hợp lệ"});
		email.add(Validate.Presence, { failureMessage: "Không được để trống"});

		var name = new LiveValidation("order-name", { validMessage: "Hợp lệ", wait: 500 });
        name.add(Validate.Presence, { failureMessage: "Không được để trống"});

        var phone = new LiveValidation("order-phone", { validMessage: "Hợp lệ", wait: 500 });
        phone.add(Validate.Presence, { failureMessage: "Không được để trống"});
        phone.add( Validate.Numericality, { failureMessage: "Chỉ chấp nhận các ký tự số"} );

        var address = new LiveValidation("order-address", { validMessage: "Hợp lệ", wait: 500 });
        address.add(Validate.Presence, { failureMessage: "Không được để trống"});

        var date = new LiveValidation("order-date", { validMessage: "Hợp lệ", wait: 500 });
        date.add(Validate.Presence, { failureMessage: "Không được để trống"});

        var time = new LiveValidation("order-time", { validMessage: "Hợp lệ", wait: 500 });
        time.add(Validate.Presence, { failureMessage: "Không được để trống"});

        var captcha = new LiveValidation("recaptcha_response_field", { validMessage: "Hợp lệ", wait: 500 });
        captcha.add(Validate.Presence, { failureMessage: "Không được để trống"});
        
	});
</script>

<style type="text/css">
	#background-image{display:none}
</style>

<div class="line">
	<div class="unit size1of1">
		<div class="breadcrumb"><?php if (isset($where)) echo $where?></div>
	</div>
</div>
<div class="line bkg_noDegrad">
	<div class="unit size1of2">
		<?php if ($_SESSION['lang'] == 'en')
		{?>
			If need help, call to this number. It is free:
		<?php }
		else {?>
			Nếu bạn cần giúp đỡ, gọi miễn phí tới
		<?php }?>
		
		<br><strong><?php if($telefonoInfo) echo $telefonoInfo->info_content ?></strong>
	</div>
</div>
<div id="shopCartDivId" style="visibility: visible; zoom: 1; opacity: 1; ">
	<div>
        	<div class="line">
            	<div class="unit size1of1">
                    <table class="new_shopping_cart " cellpadding="0" cellspacing="0">
                    	<tr>
                            <th colspan="2" align="left" class="sc_th_article"><?php echo $this->lang->line('sanpham')?></th>
                            <th align="left" class="sc_th_size"><?php echo $this->lang->line('kichthuoc')?></th>
                            <th align="right" class="sc_th_price"><?php echo $this->lang->line('gia')?></th>
                            <th align="right" class="sc_th_quantity"><?php echo $this->lang->line('soluong')?></th>
                            <th align="right" class="sc_th_total"><?php echo $this->lang->line('sotien')?></th>
                            <th class="sc_th_delete">&nbsp;</th>
                   		</tr>
                   		
                   		<?php 
                   		$totalPrice = 0;
                   		$count = 0;
                   		foreach ($listProducts as $item)
                   		{?>
						<tr class="item-cart " id="4085809170020-I2012">
							<td>
								<input type="hidden" id="order_item_id_0" value="37669942">
								<?php echo $item->product_image;?>
							</td>
							<td>
                                <span class="name">
                                	<a href="#">
                                		<?php if ($_SESSION['lang'] == 'en') echo $item->product_name_e;
                                				else echo $item->product_name_v;?>
                                	</a>
                                </span><br>
                                <span class="code"><?php echo $item->product_ma;?></span>
                             </td>
							<td>
								<span class="size"><?php echo $item->size;?></span>
							</td>
							<td align="right">
								<span class="price">
									<span class="decimal"><?php echo $item->product_price;?> VNĐ</span>	
								</span>
							</td>
							<td align="right">
								<input type="number" id="quantity_id_<?php echo $item->product_id?>" size="2" min="0" class="quantity_product" value="<?php echo $amount[$count];?>"/>
							</td>
							<td align="right">
								<span class="price">
									<span class="decimal" id="money-<?php echo $item->product_id?>">
										<?php $price = $amount[$count] * intval($item->product_price);
											$totalPrice += $price;
											echo $price;
										?>
									</span>
								</span>
							</td>
							<td>
								<span class="sc_delete" title="Xóa sản phẩm">
									<a class="sc_item_delete sc_ajax_link" href="<?php echo base_url()?>sanpham/xoasanphamgiohang/<?php echo $item->product_id?>">
										<img src="<?php echo base_url()?>assets/tuongnhatp2/images/sc_delete.png"/>
									</a>
								</span>
							</td>
						</tr>
						<?php $count++;}?>
						<tr class="total">
							<td colspan="3" rowspan="3">
							</td>
							<td colspan="4" align="right" class="sc_total"><?php echo $this->lang->line('tongtien')?>: <span id="total_value"><?php echo $totalPrice?> VNĐ</span></td>
						</tr>                            
					</table>
				</div>
			</div>
		<input type="hidden" id="processUrlInput" value="#"/>
		<form action="" name="Logon" method="post" id="Logon">
			<input type="hidden" value="84009527" name="storeId">
			<input type="hidden" value="80289977" name="catalogId">
			<input type="hidden" value="-15" name="langId"> 
			<input type="hidden" value="RequestRedirectView" name="viewname"> 
			<input type="hidden" value="" name="urlToRedirect"> 
			<input type="hidden" value="ShopCartView" name="errorViewName">
			<input type="hidden" value="" name="staticLogonValue">
			<input type="hidden" name="performMerge" value="false"> 
			<input type="hidden" id="logonIdHidden" name="logonId">
			<input type="hidden" id="passwordHidden" name="logonPassword">
		</form>			
		<div class="line">
			<div class="unit size1of3">
				<div class="actions fLeft">							
					<!-- ini Seguir comprando -->
					<div id="divId_lastRecentlyViewed"></div>
					<a class="button butWhite2" href="<?php echo base_url();?>">
						<span><?php echo $this->lang->line('tieptuc')?></span>
					</a>
					<!-- fin Seguir comprando -->
				</div>
			</div>
			<div class="unit size2of3">
				<div class="actions fRight">
				<a class="button2" id="registerBA" rel="lightboxsend" style="text-decoration: none; cursor:pointer">
					<button value="Entrar" class="button butBlack3" type="button" id="loginBt">		
								<span><?php echo $this->lang->line('dathang')?></span>
					</button>
				</a>
				</div>
			</div>
		</div>
		<input type="hidden" name="orderItemCount" id="orderItemCount" value="1">
	</div>
</div>
<!-- ====== order form ====== -->
<style type="text/css">
	#order_form td{padding:5px 10px; vertical-align: top}
</style>
<div id="order">
	<h3 style="text-transform: uppercase; margin-bottom:15px; text-align:center">Thông tin đặt hàng</h3>
	<form name="order_form" id="order_form" method="post" action="<?php echo base_url()?>hoadon/insertOrder">
		<table id="order-info">
			<tr>
				<td><?php echo $this->lang->line('order-tenkhachhang');?><span class="red">(*)</span></td>
				<td><input type="text" name="order-name" id="order-name" value="<?php echo $_SESSION['front_user_fullname']?>"/></td>
				
			</tr>
			<tr><td class="space-td"></td></tr>
			<tr>
				<td>Email <span class="red">(*)</span></td>
				<td><input type="text" name="order-email" id="order-email" value="<?php echo $_SESSION['front_user_email']?>"/></td>
			</tr>
			<tr><td class="space-td"></td></tr>
			<tr>
				<td><?php echo $this->lang->line('dienthoai');?><span class="red">(*)</span></td>
				<td><input type="text" name="order-phone" id="order-phone" value="<?php echo $_SESSION['front_user_phone']?>"/></td>
			</tr>
			<tr><td class="space-td"></td></tr>
			<tr>
				<td><?php echo $this->lang->line('order-diachinhanhang');?><span class="red">(*)</span></td>
				<td><textarea name="order-address" id="order-address" style="width: 200px; height:100px"><?php echo $_SESSION['front_user_address']?></textarea></td>
			</tr>
			<tr><td class="space-td"></td></tr>
		</table>
		
		<table id="order-deadline">
			<tr>
				<td><?php echo $this->lang->line('ngay');?><span class="red">(*)</span></td>
				<td><input type="text" name="order-date" id="order-date"/></td>
			</tr>
			<tr><td class="space-td"></td></tr>
			<tr>
				<td><?php echo $this->lang->line('gio');?><span class="red">(*)</span></td>
				<td><input type="text" name="order-time" id="order-time"/></td>
			</tr>
			<tr><td class="space-td"></td></tr>
			<tr>
				<td colspan="2" align="center">
					<?php echo $captcha;?>
				</td>
			</tr>
			<tr><td class="space-td"></td></tr>
			<tr>
				<td colspan="2" align="center">
					<input type="submit" class="regist-button" name="submit" id="submit" value="<?php echo $this->lang->line('dathang')?>" style="padding:5px 20px"/>
				</td>
			</tr>
		</table>
	</form>
	<br class="clear"/>
</div>