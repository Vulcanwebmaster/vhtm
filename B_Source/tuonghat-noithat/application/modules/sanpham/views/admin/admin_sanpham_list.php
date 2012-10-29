<?php if($this->session->userdata('session'))
{
	echo '<p class="message">';
	echo $this->session->userdata('session');
	echo '</p>';
	$this->session->unset_userdata('session');
}
?>
	<article id="content" class="module width_3_quarter" style="width:95%;">
		<header><h3 class="tabs_involved">Danh sách sản phẩm</h3>
			<ul class="tabs">
			<div id="ajax_paging">
   				<?php if(isset($paging))echo $paging;?>
   			</div>
			</ul>
		</header>
		<div class="tab_container">
			<div id="tab1" class="tab_content">
   		

			<table class="tablesorter" cellspacing="0"> 
			<thead> 
				<tr>
					<th align="center">STT</th> 
    				<th align="center">Ảnh đại diện</th> 
    				<th align="center">Tên sản phẩm</th>
    				<th align="center">Giá</th> 
    				<th align="center">Ngày tạo</th> 
    				<th align="center">Ngày sửa</th> 
    				<th align="center">Sản phẩm mới</th>
    				<th align="center">Danh mục</th>
    				<th align="center">Actions</th> 
				</tr> 
			</thead> 
			<tbody> 
			<?php 
			$count = 0;
			foreach ($listpaging as $row)
			{
			?>
				<tr>
					<td align="center"><?php echo $count+1; ?></td>
    				<td align="center" style="padding: 0px;"><?php echo $row->product_image ?></td> 
    				<td><?php echo $row->product_name?></td>
    				<td align="center"><?php echo $row->product_price ?></td>  
    				<td align="center"><?php echo $row->product_date_create?></td> 
    				<td align="center"><?php echo $row->product_date_edit ?></td>
    				<td align="center"><?php if($row->is_new == 0) echo 'Không'; else echo 'Có';?></td>
    				<td align="center"><?php echo $listCategory[$count]?></td>
    				<td align="center">
    					<a href="<?php echo base_url()?>sanpham/admin/edit/<?php echo $row->product_id?>" title="View"><img src="<?php echo base_url()?>assets/admin/images/icn_view.png"></a>
    					<a href="<?php echo base_url()?>sanpham/admin/del/<?php echo $row->product_id?>" title="Del"><img src="<?php echo base_url()?>assets/admin/images/icn_trash.png"></a>
    				</td>
    			</tr> 
			<?php
			$count++;
			}
			?>				
			</tbody> 
			</table>
			</div>
			
		</div><!-- end of .tab_container -->
		<footer>
			<form method="post" action="<?php echo base_url(); ?>sanpham/admin/insert">
				<div class="submit_link">
					<input type="submit" value="Thêm mới" class="alt_btn">
				</div>
			</form>
		</footer>
				</article><!-- end of content manager article -->	
		
		