<section id="main" class="column" style="width:100%;">	
	
<form action="<?php echo base_url()?>sanpham/admin/saveColumn1" method="post">    
	<article class="module width_full" style="width:95%;">
		<header>
			<h3><?php echo $this->lang->line('sanpham-admin-column1'); ?></h3>			
		</header>
		<div class="tab_container">
			<div id="tab1" class="tab_content">
				<table class="tablesorter" cellspacing="0"> 
					<thead> 
						<tr> 
		    				<th>Tên (Việt)</th> 
		    				<th>Tên (Anh)</th>
		    				<th>Mô tả (Việt)</th>
		    				<th>Mô tả (Anh)</th>
		    				<th>Danh mục</th>
		    				<th>Sửa</th>
		    				<th>Xóa</th>
						</tr> 
					</thead> 
					<tbody>
					 	<?php 
					 	$count=0;
					 	foreach ($list as $item)
					 	{?>
					 		<tr>  
			    				<td><?php echo $item->ten_v;?></td> 
			    				<td><?php echo $item->ten_e;?></td> 
			    				<td><?php echo $item->mota_v;?></td>
			    				<td><?php echo $item->mota_e;?></td>
			    				<td><?php echo $listCategories[$count]->ten_v;?></td>
			    				<td>
			    					<a href="<?php echo base_url()?>sanpham/admin/edit/<?php echo $item->id?>" title="Edit"><img src="<?php echo base_url()?>assets/admin/images/icn_edit.png"></a>
			    				</td>
			    				<td>
			    					<a href="<?php echo base_url()?>sanpham/admin/delete/<?php echo $item->id?>" title="Del"><img src="<?php echo base_url()?>assets/admin/images/icn_trash.png"></a>
			    				</td>
							</tr>
					 	<?php $count++; }?>
					</tbody> 
				</table>
			</div><!-- end of #tab1 -->
			<center style="font-size: 15px;color:red">
				<?php echo $this->pagination->create_links();?>
			</center>
				<footer>
						
						<div class="submit_link">
							<a class="alt_btn" href="<?php echo base_url();?>sanpham/admin/insert">Thêm mới</a>
						</div>
				</footer>
						
		</div>
	</article>
</form>	
</section>

</body>