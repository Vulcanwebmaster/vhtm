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
					var r=confirm("Bạn muốn xóa games này?");
					if (r==true)
					{
						var uri="<?php echo base_url()?>games/admin/delete/"+value;
						window.location=uri;
					}
					else 
					{
					}
				}
</script>
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
<form action="<?php echo base_url()?>games/admin/saveColumn1" method="post">    
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
		    				<th>Name game</th>
		    				<th>Danh mục games</th>
		    				<th>Image</th>
		    				<th>Sửa | Xóa</th>
		    				
						</tr> 
					</thead> 
					<tbody>
					 	<?php $i=0; $count=0; foreach ($list as $item)
					 	{ $i++; ?>
					 		<tr><td><?php echo $i;?></td>
			    				<td><?php echo $item->name;?></td>
			    				<td><?php echo $item->category_name;?></td>
			    				<td><?php echo $item->image;?></td>
			    				<td>
			    					<a href="<?php echo base_url()?>games/admin/edit/<?php echo $item->game_id?>" title="Sửa"><img src="<?php echo base_url()?>assets/admin/images/icn_edit.png"></a>
			    					<a class="del_button" onclick="confirmDel(<?php echo $item->game_id;?>)" title="Xóa"><img src="<?php echo base_url()?>assets/admin/images/icn_trash.png"></a>
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
					<a class="alt_btn" href="<?php echo base_url();?>games/admin/insert">Thêm mới</a>
				</div>
			</footer>		
		</div>
	</article>
</form>	
</section>

</body>