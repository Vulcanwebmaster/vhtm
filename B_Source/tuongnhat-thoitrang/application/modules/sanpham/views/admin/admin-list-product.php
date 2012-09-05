<?php if ($this->session->userdata('backend_product_result')!='')
{
	echo '<p style="color:red; padding-left:30px">';
	echo $this->session->userdata('backend_product_result');
	$this->session->unset_userdata('backend_product_result');
	echo '</p>';
}?>

<article class="module width_3_quarter" style="width: 95%;">
<header>
	<h3 class="tabs_involved"><?php if (isset($bcCurrent)) echo $bcCurrent;?></h3>
	<ul class="tabs"></ul>
</header>

<div class="tab_container">
	<div id="tab1" class="tab_content" style="overflow:auto">
		<table class="tablesorter" cellspacing="0" style="font-size:12p; width:1700px"> 
			<thead> 
				<tr>
					<th>Chức năng</th> 
		    		<th>Tên</th>
		    		<th>Danh mục</th>
		    		<th>Ảnh đại diện</th> 
		    		<th>Hình ảnh chi tiết 1</th>
		    		<th>Hình ảnh chi tiết 2</th>
		    		<th>Hình ảnh chi tiết 3</th>
		    		<th>Hình ảnh chi tiết 4</th>
					<th>Mô tả</th>				
					<th>Chi tiết</th>
					<th>Giá</th>
					<th>Giá khuyến mãi</th>
					<th>Nổi bật</th>
					<th>Sản phẩm mới</th>	
					<th>Số lượng</th>				
				</tr> 
			</thead> 
			<tbody> 
				<?php foreach ($list as $item)
				{?>
					<tr> 
						<td><a href="<?php echo base_url();?>sanpham/admin/editProductById/<?php echo $item->id;?>" title="Edit"><img src="<?php echo base_url();?>assets/admin/images/icn_edit.png"></a>
    				<a href="<?php echo base_url();?>sanpham/admin/deleteProductById/<?php echo $item->id;?>" title="Del"><img src="<?php echo base_url();?>assets/admin/images/icn_trash.png"></a></td>
			    		<td><?php echo $item->ten;?></td> 
			    		<td><?php echo $item->danhmuc_id;?></td> 
			    		<td><?php echo $item->hinhanh;?></td> 
			    		<td><?php echo $item->hinhchitiet1;?></td>
			    		<td><?php echo $item->hinhchitiet2;?></td>
			    		<td><?php echo $item->hinhchitiet3;?></td>
			    		<td><?php echo $item->hinhchitiet4;?></td>
			    		<td><?php echo $item->mota;?></td>
			    		<td><?php echo $item->chitiet;?></td>
			    		<td><?php echo $item->gia;?></td> 
			    		<td><?php echo $item->giakhuyenmai;?></td> 
			    		<td><?php echo $item->noibat;?></td> 
						<td><?php echo $item->moi;?></td> 
						<td><?php echo $item->soluong;?></td> 
					</tr>
				<?php }?>
			</tbody> 
		</table>
	</div><!-- end of #tab1 -->
			
<footer>
<form method="post">
		<div class="submit_link">
			<?php echo $this->pagination->create_links();?>	
			<a href="<?php echo base_url();?>sanpham/admin/insertNewProduct" class='alt_btn'>Thêm mới</a>				
		</div>
		</form>
	</footer>
			
</div><!-- end of .tab_container -->
		
</article>
