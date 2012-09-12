<?php if ($this->session->userdata('result')!='')
{
	echo '<p style="color:red; padding-left:30px">';
	echo $this->session->userdata('result');
	$this->session->unset_userdata('result');
	echo '</p>';
}?>

<?php function cutString($str)
{
	$offset=200;
	if (strlen($str)>200)
	{
		while ($str[$offset]!=' ')
			$offset++;
	}
	else $offset==strlen($str);
	return substr($str, 0, $offset);
}?>

<form method="post" action="<?php echo base_url();?>sanpham/admin">
<article class="module width_3_quarter" style="width:95%;">
		<header><h3 class="tabs_involved"><?php echo $title;?></h3>
		<ul class="tabs">
		</ul>
		</header>

		<div class="tab_container">
			<div id="tab1" class="tab_content">
				<table class="tablesorter" cellspacing="0" style="width:1000px"> 
					<thead> 
						<tr>
		    				<th>Tên (V)</th>
		    				<th>Tên (E)</th> 
		    				<th>Mã danh mục</th>
		    				<th>Giá</th>
		    				<th>Công dụng (V)</th>
		    				<th>Công dụng (E)</th>
		    				<th>Thông tin kỹ thuật (V)</th>
		    				<th>Thông tin kỹ thuật (E)</th>
		    				<th>Hình ảnh</th>
		    				<th>Mới</th>
		    				<th>Action</th>
						</tr> 
					</thead> 
					<tbody>
					 	<?php foreach ($list as $item)
					 	{?>
					 		<tr>  
			    				<td><?php echo $item->namev;?></td>
			    				<td><?php echo $item->namee;?></td> 
			    				<td><?php echo $item->category_id;?></td>
			    				<td><?php echo $item->price;?></td> 
			    				<td><?php echo cutString($item->usesv);?></td>
			    				<td><?php echo cutString($item->usese);?></td> 
			    				<td><?php echo cutString($item->technical_infov);?></td>
			    				<td><?php echo cutString($item->technical_infoe);?></td> 
			    				<td><?php echo $item->image;?></td> 
			    				<td><?php echo $item->is_new;?></td> 
			    				<td>
			    					<a href="<?php echo base_url()?>sanpham/admin/edit/<?php echo $item->id?>" title="Edit"><img src="<?php echo base_url()?>assets/admin/images/icn_edit.png"></a>
				    				<a href="<?php echo base_url()?>sanpham/admin/delete/<?php echo $item->id?>" title="Del"><img src="<?php echo base_url()?>assets/admin/images/icn_trash.png"></a>
			    				</td>
							</tr>
					 	<?php }?>
					</tbody> 
				</table>
			</div><!-- end of #tab1 -->
			<center style="font-size: 15px;color:red">
				<?php echo $this->pagination->create_links();?>
			</center>
				<footer>
						<div class="submit_link">
							<a class="alt_btn" href="<?php echo base_url();?>sanpham/admin/insert">Thêm</a>
						</div>
				</footer>
						
		</div><!-- end of .tab_container -->
		
</article>
</form>