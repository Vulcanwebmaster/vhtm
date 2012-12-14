<?php if ($this->session->userdata('result')!='')
{
	echo '<p style="color:red; padding-left:30px">';
	echo $this->session->userdata('result');
	$this->session->unset_userdata('result');
	echo '</p>';
}?>
<section id="main" class="column" style="width:100%;">	
	
<form action="<?php echo base_url()?>hotroonline/admin/save" method="post">    
	<article class="module width_full" style="width:95%;">
		<header>
			<h3><?php echo $title; ?></h3>			
		</header>
		<div class="tab_container">
			<div id="tab1" class="tab_content">
				<table class="tablesorter" cellspacing="0"> 
					<thead> 
						<tr> 
		    				<th>ID</th> 
		    				<th>Tên</th>
		    				<th>Số điện thoại</th>
		    				<th>Skype</th>
		    				<th>Yahoo</th>
		    				<th>Sửa|Xóa</th>
						</tr> 
					</thead> 
					<tbody>
					 	<?php 
					 	$count=0;
					 	foreach ($list as $item)
					 	{?>
					 		<tr>  
			    				<td><?php echo $item->id;?></td> 
			    				<td><?php echo $item->name;?></td>
			    				<td><?php echo $item->sdt;?></td>
			    				<td><?php echo $item->skype;?></td>
			    				<td><?php echo $item->yahoo;?></td>
			    				<td>
			    					<a href="<?php echo base_url()?>hotroonline/admin/edit/<?php echo $item->id?>" title="Edit"><img src="<?php echo base_url()?>assets/admin/images/icn_edit.png"></a>
			    					<a href="<?php echo base_url()?>hotroonline/admin/delete/<?php echo $item->id?>" title="Del"><img src="<?php echo base_url()?>assets/admin/images/icn_trash.png"></a>
			    				</td>
							</tr>
					 	<?php $count++;}?>
					</tbody> 
				</table>
			</div><!-- end of #tab1 -->
			<center style="font-size: 15px;color:red">
				<?php echo $this->pagination->create_links();?>
			</center>
				<footer>
						
						<div class="submit_link">
							<a class="alt_btn" href="<?php echo base_url();?>hotroonline/admin/insert">Thêm mới</a>
						</div>
				</footer>
						
		</div>
	</article>
</form>	
</section>

</body>