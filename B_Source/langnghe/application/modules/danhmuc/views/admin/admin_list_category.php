<?php if ($this->session->userdata('result')!='')
{
	echo '<p style="color:red; padding-left:30px">';
	echo $this->session->userdata('result');
	$this->session->unset_userdata('result');
	echo '</p>';
}?>

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
		    				<th>Tên danh mục</th>
		    				<th>Action</th>
						</tr> 
					</thead> 
					<tbody>
					 	<?php foreach ($list as $item)
					 	{?>
					 		<tr>  
			    				<td><?php echo $item->category_id;?></td> 
			    				<td><?php echo $item->category_name;?></td> 
			    				<td>
			    					<a href="<?php echo base_url()?>danhmuc/admin/edit/<?php echo $item->category_id?>" title="Edit"><img src="<?php echo base_url()?>assets/admin/images/icn_edit.png"></a>
				    				<a href="<?php echo base_url()?>danhmuc/admin/delete/<?php echo $item->category_id?>" title="Del"><img src="<?php echo base_url()?>assets/admin/images/icn_trash.png"></a>
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
							<a class="alt_btn" href="<?php echo base_url();?>danhmuc/admin/insert">Thêm</a>
						</div>
				</footer>
						
		</div><!-- end of .tab_container -->
		
</article>
</form>