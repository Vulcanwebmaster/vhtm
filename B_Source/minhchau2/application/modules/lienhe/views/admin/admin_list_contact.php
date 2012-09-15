<?php $this->load->helper('text');?>
<form method="post" action="<?php echo base_url();?>danhmuc/admin">
<article class="module width_3_quarter" style="width:95%;">
		<header><h3 class="tabs_involved"><?php echo $title;?></h3>
		<ul class="tabs">
		</ul>
		</header>

		<div class="tab_container">
			<div id="tab1" class="tab_content">
				<table class="tablesorter" cellspacing="0"> 
					<thead> 
						<tr>
							<th>ID</th> 
		    				<th>Tên</th>
		    				<th>Email</th> 
		    				<th>Điện thoại</th> 
		    				<th>Mã đơn hàng</th>
		    				<th>Mã RMA</th>
		    				<th>Chi tiết</th>
		    				<th>Action</th>
						</tr> 
					</thead> 
					<tbody>
					 	<?php foreach ($list as $item)
					 	{?>
					 		<tr>  
			    				<td><?php echo $item->id;?></td> 
			    				<td><?php echo $item->name;?></td> 
			    				<td><?php echo $item->email;?></td> 
			    				<td><?php echo $item->phone;?></td>
			    				<td><?php echo $item->ordercode;?></td>
			    				<td><?php echo $item->rmacode;?></td>
			    				<td><?php echo $item->detail;?></td> 
			    				<td>
				    				<a href="<?php echo base_url()?>lienhe/admin/delete/<?php echo $item->id?>" title="Del"><img src="<?php echo base_url()?>assets/admin/images/icn_trash.png"></a>
			    				</td>
							</tr>
					 	<?php }?>
					</tbody> 
				</table>
			</div><!-- end of #tab1 -->
			<center style="font-size: 15px;color:red">
				<?php echo $this->pagination->create_links();?>
			</center>
		</div><!-- end of .tab_container -->
		
</article>
</form>