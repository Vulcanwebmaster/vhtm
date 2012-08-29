<script type="text/javascript">
	$(document).ready(function(){
		$('.menu-item a').removeClass('active');
		$('#sanpham-menu a').addClass('active');
	});
</script>

<div class="breadcrumb">
	<a href="<?php echo base_url();?>"><?php echo $this->lang->line('menu-trangchu');?></a>
	&rsaquo; <?php echo $this->lang->line('menu-sanpham');?>
</div>

<div id="node-5721" class="product-group product-group clear-block prodcat-5 prodcat-31">
	<?php foreach($list as $item)
	{?>
		<div class="views-row views-row-1 views-row-odd views-row-first">
		            <a name="crusty-spelt-wheat-roll-85g-partly-baked-5354"></a>
		            <div id="node-5354" class="product product-teaser clear-block">
		                <div class="details">
		                    <h2>
		                        <?php 
						        	$lang=$this->session->userdata('lang');
						        	if ($lang=='vn')
						        		echo $item->product_name_vn;
						        	else echo $item->product_name_en;
						        ?>
		                    </h2>
		                    <table>
		                        <colgroup>
		                            <col width="120">
		                            <col width="300">
		                        </colgroup>
		                        <tbody>
		                            <tr>
		                                <th>
		                                    Units/carton:
		                                </th>
		                                <td>
		                                	<?php $units=$item->product_units;
		                                		$cartons=$item->product_cartons;
		                                		echo $units/$cartons;
		                                	?>
		                                     pcs
		                                </td>
		                            </tr>
		                        </tbody>
		                    </table>
		                    <a href="<?php echo base_url();?>sanpham/detail_product/<?php echo $item->product_id;?>"
		                        class="button"><?php if ($lang=='vn') echo 'Chi tiết';
						        	else echo 'Product sheet';
						        ?></a>
		                </div>
		                <div class="foto">
		                    <?php echo $item->product_img;?>
		                </div>
		                <?php if ($item->product_new!='')
		                {?>
		                	<img src="<?php echo base_url();?>assets/bakery/images/icon_new_en.png" alt="New!" class="new pngfix">
		                <?php }?>
		                <div class="bottom">
		                </div>
		            </div>
	        	</div>
	<?php }?>
</div>