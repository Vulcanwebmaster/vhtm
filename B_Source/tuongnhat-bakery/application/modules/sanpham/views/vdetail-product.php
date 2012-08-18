<a name="top"></a><a name="crusty-spelt-wheat-roll-85g-partly-baked-5354"></a>
<div id="node-5354" class="product product clear-block">
    <div class="details">
        <h1>
        	<?php $lang=$this->session->userdata('lang');
                    		if ($lang=='vn')
                    			echo $detail_product->product_name_vn;
                    		else echo $detail_product->product_name_en;
                    	?>
        </h1>
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
                        <?php echo $detail_product->product_units/$detail_product->product_cartons;?> pcs
                    </td>
                </tr>
                <tr>
                    <th>
                    	<?php $lang=$this->session->userdata('lang');
                    		if ($lang=='vn')
                    			echo 'Mô tả';
                    		else echo 'Sales name:';
                    	?>                        
                    </th>
                    <td>
                    	<?php $lang=$this->session->userdata('lang');
                    		if ($lang=='vn')
                    			echo $detail_product->product_sales_name_vn;
                    		else echo $detail_product->product_sales_name_en;
                    	?>
                    </td>
                </tr>
                <tr>
                    <th>
                        <?php 
                    		if ($lang=='vn')
                    			echo 'Giới thiệu';
                    		else echo 'Introductions:';
                    	?> 
                    </th>
                    <td>
                        <?php
                    		if ($lang=='vn')
                    			echo $detail_product->product_introductions_vn;
                    		else echo $detail_product->product_introductions_en;
                    	?>
                    </td>
                </tr>
                <tr>
                    <th>
						<?php 
                    		if ($lang=='vn')
                    			echo 'Lò đối lưu:';
                    		else echo 'Convection oven:';
                    	?> 
                    </th>
                    <td>
                        <?php
                    		if ($lang=='vn')
                    			echo $detail_product->product_convection_oven_vn;
                    		else echo $detail_product->product_convection_oven_en;
                    	?>
                    </td>
                </tr>
                <tr>
                    <th>
						<?php 
                    		if ($lang=='vn')
                    			echo 'Lò quay:';
                    		else echo 'Rotary oven:';
                    	?>
                    </th>
                    <td>
                        <?php
                    		if ($lang=='vn')
                    			echo $detail_product->product_rotary_oven_vn;
                    		else echo $detail_product->product_rotary_oven_en;
                    	?>
                    </td>
                </tr>
                <tr>
                    <th>
						<?php 
                    		if ($lang=='vn')
                    			echo 'Hàm lượng dinh dưỡng trong 100g:';
                    		else echo 'Nutrient content per 100g:';
                    	?>
                    </th>
                    <td>
                        <?php
                    		if ($lang=='vn')
                    			echo $detail_product->product_nutrient_content_vn;
                    		else echo $detail_product->product_nutrient_content_en;
                    	?>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" class="notice">
                    	<?php
                    		if ($lang=='vn')
                    			echo 'Xin vui lòng đăng nhập để truy cập vào bảng sản phẩm hoàn chỉnh. Để có được mật khẩu cá nhân của bạn, 
                    			xin vui lòng sử dụng hình thức liên lạc của chúng tôi.';
                    		else echo 'Please log in to access the complete product sheet. To obtain your personal password, 
                    		please use our Contact form.';
                    	?>
                    </td>
                </tr>
            </tbody>
        </table>
        <p>
            <a href="#" class="button">« <?php if ($lang=='vn') echo 'quay lai';
            								else echo 'back';?></a> 
            <a href="#" class="button external" target="_blank"><?php if ($lang=='vn') echo 'In';
            								else echo 'print';?></a>
        </p>
    </div>
    <div class="foto">
        <img src="<?php echo base_url().$detail_product->product_img;?>" alt="Crusty spelt wheat roll 85g, partly baked " title="Crusty spelt wheat roll 85g, partly baked "
            width="195" height="143" class="imagecache imagecache-product_thumb">
    </div>
    <?php if ($detail_product->product_new!='' || $detail_product->product_new!='0')
    {?>
    <img src="<?php echo base_url();?>assets/bakery/images/icon_new_en.png" alt="New!" class="new pngfix"/>
    <?php }?>
    
    <div class="bottom">
    </div>
</div>
