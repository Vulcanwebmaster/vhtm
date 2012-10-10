<?php if ($this->session->userdata('result')!='')
{
	echo '<p style="color:red; padding-left:30px">';
	echo $this->session->userdata('result');
	$this->session->unset_userdata('result');
	echo '</p>';
}?>
<section id="main" class="column" style="width:100%;">	
	
<form action="<?php echo base_url()?>danhmuc/admin/saveColumn1" method="post">    
	<article class="module width_full" style="width:95%;">
		<header>
			<h3><?php echo $title; ?></h3>			
		</header>
		<div class="tab_container">
			<div id="tab1" class="tab_content" style="height:500px; overflow:auto">
				<table class="tablesorter" cellspacing="0"> 
					<thead> 
						<tr> 
		    				<th>Họ tên</th> 
		    				<th>Email</th>
		    				<th>Điện thoại</th> 
		    				<th>Tiêu đề</th>
		    				<th>Nội dung</th>
		    				<th>Ngày tháng</th>
		    				<th>Xóa</th>
						</tr> 
					</thead> 
					<tbody>
					 	<?php 
					 	foreach ($list as $item)
					 	{?>
					 		<tr>  
			    				<td><?php echo '<a href="'.base_url().'lienhe/admin/detail/'.$item->id.'">'.$item->hoten.'</a>';?></td> 
			    				<td><?php echo $item->email;?></td>
			    				<td><?php echo $item->dienthoai;?></td>
			    				<td><?php echo $item->tieude;?></td> 
			    				<td><?php echo $item->noidung;?></td> 
			    				<td><?php echo $item->ngaythang;?></td> 
			    				<td><a href="<?php echo base_url()?>lienhe/admin/delete/<?php echo $item->id?>" title="Del"><img src="<?php echo base_url()?>assets/admin/images/icn_trash.png"></a></td>
							</tr>
					 	<?php }?>
					</tbody> 
				</table>
			</div><!-- end of #tab1 -->
			<center style="font-size: 15px;color:red">
				<?php echo $this->pagination->create_links();?>
			</center>
			<footer>
			</footer>
		</div>
	</article>
</form>	
</section>

</body>