<script type="text/javascript">
	$(document).ready(function(){
		$('.delete').mouseenter(function(){			
			$(this).css('color','red');
			});		
		$('.delete').mouseleave(function(){
			$(this).css('color','black');
			});
		});
</script>

<div class="main-container col1-layout">
    <div class="main">
        <div class="bg-inner">
            <div class="col-main">
                <div class="col-inner">
                    <div class="cart">
                        <div class="page-title title-buttons">
                            <h1 style="color:#f26f05">
                                Shopping Cart</h1>
                             
                        </div>
                        <div class="cart-container-inner">
							<?php echo form_open($module.'/checkout'); ?>        	
                            <fieldset>
                                <table id="shopping-cart-table" class="data-table cart-table">
                                    <colgroup>
                                        <col width="1">
                                        <col>
                                        <col width="1">
                                        <col width="1">
                                        <col width="1">
                                        <col width="1">
                                        <col width="1">
                                    </colgroup>
                                    <thead>
                                        <tr class="first last">
                                            <th rowspan="1">
                                            	ảnh sản phẩm
                                            </th>
                                            <th rowspan="1">
                                                <span class="nobr">tên sản phẩm</span>
                                            </th>
                                            <th class="a-center" colspan="1">
                                                Chức năng
                                            </th>
                                            <th rowspan="1" class="a-center">
                                                <span class="nobr">Giá </span>
                                            </th>
                                            <th class="a-center" colspan="1">
                                                Số lượng
                                            </th>
                                            <th rowspan="1" class="a-center">
                                                Thành tiền
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    	<?php 
                                    		if(isset($_SESSION['totalprice'])){
												$data['totalprice'] = $_SESSION['totalprice'];
												}
											
											if (isset($_SESSION['cart'])){
												foreach ($_SESSION['cart'] as $PID => $row){	
													$data = array(	
															'name' => "li_id[$PID]", 
															'value'=>$row['count'], 
															'id' => "li_id_$PID", 
															'class' => 'process',
															'size' => 5,
															 'style'=>'width:30px',
													);
													
												?>
												<!-- START LIST PRODUCT -->	
												<tr class="first last odd">
	                                            <td>
	                                                <img src="<?php if (isset($row['image'])) echo $this->MKaimonokago->get_link_image($row['image']);?>"
                                                        alt="" title="<?php echo $row['name'];?>" style="width:75px; height:75px;display: block;">
	                                            </td>
	                                            <td>
	                                                <h2 class="product-name">
	                                                    <?php echo $row['name'];?>
	                                                </h2>
	                                            </td>
												<script src='<?php echo base_url();?>assets/js/shopcustomtools.js' type='text/javascript'></script>
                                                <td class="a-center">
	                                               <input type='button' class='delete' name='delete' value='<?php echo lang('webshop_delete'); ?>' onclick='jsRemoveProduct(<?php echo $PID;?>)'>
	                                            </td>
	                                            <td class="a-right">
	                                                <span class="cart-price"><span class="price"><?php echo $row['price'] . lang('webshop_currency_symbol');?></span> </span>
	                                            </td>
	                                            <td class="a-right">
	                                                <?php echo form_input($data);?>
	                                            </td>
	                                            <td class="a-center last">
	                                                <span class="cart-price"><span class="price"><?php echo $data['value'] * $row['price'] . lang('webshop_currency_symbol');?></span> </span>
	                                            </td>
	                                        </tr>
												<?php 
												}
												$TOTALPRICE = $_SESSION['totalprice'];
												$TOTALPRICE = number_format($TOTALPRICE,2,'.',',');
												$total_data = array('name' => 'total', 'id'=>'total', 'value' => $TOTALPRICE);
												
												echo "<tr valign='top'>\n";
												echo "<td colspan='4'>".lang('orders_total_price')."</td>\n";
												echo "<td colspan='2'>"."$TOTALPRICE ".form_hidden($total_data).lang('webshop_currency_symbol')."</td>\n";
											}
											?>
                                    </tbody>
                                     <tfoot>
                                        <tr class="first last">
                                            <td colspan="6" class="a-right last">
                                            	<button type="submit" title="Thanh Toán " class="button btn-update" style="float:right;">
                                                    <span><span>Thanh Toán</span></span></button>
                                            </td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </fieldset>
                            <?php echo form_close(); ?>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
