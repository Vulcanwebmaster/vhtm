<?php if ($this->session->userdata('result')!='')
{
	echo '<p style="color:red; padding-left:30px">';
	echo $this->session->userdata('result');
	$this->session->unset_userdata('result');
	echo '</p>';
}?>
<style>
	.del_button{cursor:pointer}
</style>
<script type="text/javascript">
		function confirmDel(value)
				{
					var x;
					var r=confirm("Bạn muốn xóa tin tức này?");
					if (r==true)
					{
						var uri="<?php echo base_url()?>lienhe/admin/delete/"+value;
						window.location=uri;
					}
					else 
					{
					}
				}
</script>
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
							<th>STT</th>
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
					 	  $i=0;
					 	foreach ($list as $item)
					 	{ $i++;	?>
					 		<tr>  
					 			<td><?php echo $i;?></td> 
			    				<td><?php echo $item->hoten;?></td> 
			    				<td><?php echo $item->email;?></td>
			    				<td><?php echo $item->dienthoai;?></td>
			    				<td><?php echo $item->tieude;?></td> 
			    				<td><?php echo $item->noidung;?></td> 
			    				<td><?php echo $item->ngaythang;?></td> 
			    				<td>
			    					<a class="del_button" onclick="confirmDel(<?php echo $item->id?>)" title="Xóa"><img src="<?php echo base_url()?>assets/admin/images/icn_trash.png"></a>
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
			</footer>
		</div>
	</article>
</form>	
</section>

</body>