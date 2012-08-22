<article class="module width_3_quarter" style="width: 95%;">
<header>
	<h3 class="tabs_involved"><?php if (isset($bcCurrent)) echo $bcCurrent;?></h3>
	<ul class="tabs"></ul>
</header>

<div class="tab_container">
	<div id="tab1" class="tab_content" style="overflow:auto">
		<table class="tablesorter" cellspacing="0" style="width:2300px"> 
			<thead> 
				<tr> 
		    		<th style="width:70px">Danh mục</th> 
		    		<th>Tên V</th>
		    		<th>Tên E</th>
		    		<th>Unit</th> 
		    		<th>Carton</th>
					<th>Mô tả V</th>				
					<th>Mô tả E</th>
					<th>Hướng dẫn V</th>
					<th>Hướng dẫn E</th>
					<th>Lò đối lưu V</th>
					<th>Lò đối lưu E</th>
					<th>Lò quay V</th>
					<th>Lò quay E</th>
					<th>Dinh dưỡng V</th>
					<th>Dinh dưỡng E</th>
					<th style="width:100px">Sản phẩm mới</th>
					<th>Hình ảnh</th>
					<th style="width:80px">Chức năng</th>
				</tr> 
			</thead> 
			<tbody> 
				<?php foreach ($list as $item)
				{?>
					<tr> 
			    		<td><?php echo $item->category_id;?></td> 
			    		<td><?php echo $item->product_name_vn;?></td> 
			    		<td><?php echo $item->product_name_en;?></td> 
			    		<td><?php echo $item->product_units;?></td> 
			    		<td><?php echo $item->product_cartons;?></td> 
			    		<td><?php echo $item->product_sales_name_vn;?></td> 
			    		<td><?php echo $item->product_sales_name_en;?></td> 
			    		<td><?php echo $item->product_introductions_vn;?></td> 
			    		<td><?php echo $item->product_introductions_en;?></td> 
			    		<td><?php echo $item->product_convection_oven_vn;?></td> 
			    		<td><?php echo $item->product_convection_oven_en;?></td> 
			    		<td><?php echo $item->product_rotary_oven_vn;?></td> 
			    		<td><?php echo $item->product_rotary_oven_en;?></td> 
			    		<td><?php echo $item->product_nutrient_content_vn;?></td> 
			    		<td><?php echo $item->product_nutrient_content_en;?></td> 
			    		<td><?php echo $item->product_new;?></td> 
			    		<td><?php echo $item->product_img;?></td> 
			    		<td><a href="<?php echo base_url();?>sanpham/admin/editProductById/<?php echo $item->product_id;?>" title="Edit"><img src="<?php echo base_url();?>assets/admin/images/icn_edit.png"></a>
    				<a href="http://localhost/leerobertsonx/app/admin/delApp/1" title="Del"><img src="<?php echo base_url();?>assets/admin/images/icn_trash.png"></a></td>
					</tr>
				<?php }?>
			</tbody> 
		</table>
	</div><!-- end of #tab1 -->
			
<footer>
<form action="http://localhost/leerobertsonx/app/admin/getPost" method="post">
		<div class="submit_link">
			<?php echo $this->pagination->create_links();?>	
			<input type="submit" value="Thêm sản phẩm" class="alt_btn">
					
		</div>
		</form>
	</footer>
			
</div><!-- end of .tab_container -->
		
</article>
