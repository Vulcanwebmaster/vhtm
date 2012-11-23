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
		Nếu bạn cần giúp đỡ, gọi miên phí tới<br><strong><?php if($telefonoInfo) echo $telefonoInfo->info_content ?></strong>
	</div>
</div>
<div id="shopCartDivId" style="visibility: visible; zoom: 1; opacity: 1; ">
	<div>
        	<div class="line">
            	<div class="unit size1of1">
                    <table class="new_shopping_cart " cellpadding="0" cellspacing="0">
                    	<tr>
                            <th colspan="2" align="left" class="sc_th_article">sản phẩm</th>
                            <th align="left" class="sc_th_size">Kích thước</th>
                            <th align="right" class="sc_th_price">Giá</th>
                            <th align="right" class="sc_th_quantity">Số lượng</th>
                            <th align="right" class="sc_th_total">Số tiền</th>
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
								<input id="sc_item_quantity_37669942" size="2" class="units sc_item_quantity" value="<?php echo $amount[$count];?>"/>
								<div class="sc_cant_wrp">
									<a class="sc_cant_up sc_ajax_link" href="#updateItem_37669942_2"></a>                                            
									<div class="sc_cant_down"></div>
								</div>
							</td>
							<td align="right">
								<span class="price">
									<span class="decimal">
										<?php $price = $amount[$count] * intval($item->product_price);
											$totalPrice += $price;
											echo $price;
										?>
									</span>
								</span>
							</td>
							<td>
								<span class="sc_delete" title="Xóa sản phẩm"><a class="sc_item_delete sc_ajax_link" href="#"><img src="<?php echo base_url()?>assets/tuongnhatp2/images/sc_delete.png"></a></span>
							</td>
						</tr>
						<?php $count++;}?>
						<tr class="total">
							<td colspan="3" rowspan="3">
								<div id="frm_codigo_promocional">
									<input type="text" id="frm_codigo_promocional_code" value="Promo Code" onfocus="if(this.value=='Promo Code') this.value=''" onblur="if(this.value=='') this.value='Promo Code'">
										<a class="butWhite3 sc_ajax_link" href="#addPromoCode">Apply</a>
								</div>
							</td>
							<td colspan="4" align="right" class="sc_total">Tổng tiền: <span><?php echo $totalPrice?> VNĐ</span></td>
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
					<button type="button" class="button butWhite2" onclick="">
						<span>Tiếp tục mua hàng</span>
					</button>
					<!-- fin Seguir comprando -->
				</div>
			</div>
			<div class="unit size2of3">
				<div class="actions fRight">
				<a href="#" class="button2" id="registerBA" rel="lightboxsend" style="text-decoration: none;">
					<button value="Entrar" class="button butBlack3" type="button" id="loginBt">		
								<span>
									Đơn đặt hàng
								</span>
					</button>
				</a>
				</div>
			</div>
		</div>
		<input type="hidden" name="orderItemCount" id="orderItemCount" value="1">
	</div>
</div>