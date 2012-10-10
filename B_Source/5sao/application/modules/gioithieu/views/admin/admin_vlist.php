<?php if ($this->session->userdata('result')!='')
{
	echo '<p style="color:red; padding-left:30px">';
	echo $this->session->userdata('result');
	$this->session->unset_userdata('result');
	echo '</p>';
}?>
<section id="main" class="column" style="width:100%;">	
	
<form action="<?php echo base_url()?>gioithieu/admin/saveColumn1" method="post">    
	<article class="module width_full" style="width:95%;">
		<header>
			<h3><?php echo $this->lang->line('gioithieu-admin-column1'); ?></h3>			
		</header>
		<div class="tab_container">
			<div id="tab1" class="tab_content">
				<table class="tablesorter" cellspacing="0"> 
					<thead> 
						<tr> 
		    				<th>Tiêu đề (Việt)</th> 
		    				<th>Tiêu đề (Anh)</th> 
		    				<th>Sửa</th>
		    				<th>Xóa</th>
						</tr> 
					</thead> 
					<tbody>
					 	<?php foreach ($list as $item)
					 	{?>
					 		<tr>  
			    				<td><?php echo $item->tieude_v;?></td> 
			    				<td><?php echo $item->tieude_e;?></td> 
			    				<td>
			    					<a href="<?php echo base_url()?>gioithieu/admin/edit/<?php echo $item->id?>" title="Edit"><img src="<?php echo base_url()?>assets/admin/images/icn_edit.png"></a>
			    				</td>
			    				<td>
			    					<a href="<?php echo base_url()?>gioithieu/admin/delete/<?php echo $item->id?>" title="Del"><img src="<?php echo base_url()?>assets/admin/images/icn_trash.png"></a>
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
							<a class="alt_btn" href="<?php echo base_url();?>gioithieu/admin/insert">Thêm mới</a>
						</div>
				</footer>
						
		</div>
	</article>
</form>	
</section>

</body>