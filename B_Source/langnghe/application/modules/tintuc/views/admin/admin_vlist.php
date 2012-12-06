<?php if ($this->session->userdata('result')!='')
{
	echo '<p style="color:red; padding-left:30px">';
	echo $this->session->userdata('result');
	$this->session->unset_userdata('result');
	echo '</p>';
}?>
<section id="main" class="column" style="width:100%;">	
	
<form action="<?php echo base_url()?>tintuc/admin/saveColumn1" method="post">    
	<article class="module width_full" style="width:95%;">
		<header>
			<h3><?php echo $title; ?></h3>			
		</header>
		<div class="tab_container">
			<div id="tab1" class="tab_content">
				<table class="tablesorter" cellspacing="0"> 
					<thead> 
						<tr> 
							<th>STT</th>
		    				<th>Tiêu đề</th> 
		    				<th>Tóm tắt</th>
		    				<th>Nội dung</th>
		    				<th>Ngày tháng</th>
		    				<th>Sửa</th>
		    				<th>Xóa</th>
						</tr> 
					</thead> 
					<tbody>
					 	<?php $i=0; $count=0; foreach ($list as $item)
					 	{ $i++; ?>
					 		<tr><td><?php echo $i;?></td>
			    				<td><?php echo $item->news_title;?></td> 
			    				<td><?php echo $item->news_summary;?></td> 
			    				<td><?php echo $item->news_content;?></td> 
			    				<td><?php echo $item->news_post_date;?></td>
			    				<td>
			    					<a href="<?php echo base_url()?>tintuc/admin/edit/<?php echo $item->news_id?>" title="Edit"><img src="<?php echo base_url()?>assets/admin/images/icn_edit.png"></a>
			    				</td>
			    				<td>
			    					<a href="<?php echo base_url()?>tintuc/admin/delete/<?php echo $item->news_id?>" title="Del"><img src="<?php echo base_url()?>assets/admin/images/icn_trash.png"></a>
			    				</td>
							</tr>
					 	<?php $count++; }  ?>
					</tbody> 
				</table>
			</div><!-- end of #tab1 -->
			<center style="font-size: 15px;color:red">
				<?php echo $this->pagination->create_links();?>
			</center>
				<footer>
						
						<div class="submit_link">
							<a class="alt_btn" href="<?php echo base_url();?>tintuc/admin/insert">Thêm mới</a>
						</div>
				</footer>
						
		</div>
	</article>
</form>	
</section>

</body>