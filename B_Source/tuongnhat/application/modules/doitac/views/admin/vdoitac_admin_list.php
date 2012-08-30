<form method="post" action="<?php echo base_url();?>doitac/admin">
<article class="module width_3_quarter" style="width:95%;">
		<header><h3 class="tabs_involved">Partners Manager</h3>
		<ul class="tabs">
		</ul>
		</header>

		<div class="tab_container">
			<div id="tab1" class="tab_content">
				<table class="tablesorter" cellspacing="0"> 
					<thead> 
						<tr> 
		    				<th>ID</th> 
		    				<th>Tên công ty</th> 
		    				<th>Website</th> 
		    				<th>Địa chỉ</th>
		    				<th>Điện thoại</th>
		    				<th>Fax</th>
		    				<th>Email</th>
		    				<th>Action</th>
						</tr> 
					</thead> 
					<tbody>
					 	<?php foreach ($list as $item)
					 	{?>
					 		<tr>  
			    				<td><?php echo $item->id;?></td> 
			    				<td><?php echo $item->ten;?></td> 
			    				<td><a href="<?php echo $item->website;?>"><?php echo $item->website;?></a></td> 
			    				<td><?php echo $item->diachi;?></td> 
			    				<td><?php echo $item->dienthoai;?></td>
			    				<td><?php echo $item->fax;?></td>
			    				<td><a href="mailto:<?php echo $item->email;?>"><?php echo $item->email;?></a></td>
			    				<td>
			    					<a href="<?php echo base_url()?>doitac/admin/edit/<?php echo $item->id?>" title="Edit"><img src="<?php echo base_url()?>assets/admin/images/icn_edit.png"></a>
				    				<a href="<?php echo base_url()?>doitac/admin/delete/<?php echo $item->id?>" title="Del"><img src="<?php echo base_url()?>assets/admin/images/icn_trash.png"></a>
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
							<input type="submit" name="submit" value="Add new" class="alt_btn">
						</div>
				</footer>
						
		</div><!-- end of .tab_container -->
		
</article>
</form>