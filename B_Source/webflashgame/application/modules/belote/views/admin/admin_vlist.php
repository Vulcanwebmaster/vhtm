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
					var r=confirm("Êtes-vous supprimer cette belote?");
					if (r==true)
					{
						var uri="<?php echo base_url()?>belote/admin/delete/"+value;
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

<style type="text/css">
	.ed123{
		width:100px;
	}
</style>
<form action="<?php echo base_url()?>belote/admin/saveColumn1" method="post">    
	<article class="module width_full" style="width:95%;">
		<header>
			<h3><?php echo $title; ?></h3>			
		</header>
		<div class="tab_container">
			<div id="tab1" class="tab_content">
				<table class="tablesorter" cellspacing="0"> 
					<thead> 
						<tr> 
							<th>Nombre</th>
		    				<th>description (en)</th>
		    				<th>description (fr)</th>
		    				<th>content (en)</th>
		    				<th>content (fr)</th>
		    				<th>Éditer|Effacer</th>
<!-- 		    				<th style="width: 100px;">Edit | Del</th> -->
						</tr> 
					</thead> 
					<tbody>
					 	<?php $i=0; $count=0; foreach ($list as $item)
					 	{ $i++; ?>
					 		<tr><td><?php echo $i;?></td>
			    				<td><?php echo $item->description;?></td>
			    				<td><?php echo $item->descriptionfr;?></td>
			    				<td><?php echo $item->content;?></td>
			    				<td><?php echo $item->contentfr;?></td>
			    				<td>
			    					<a href="<?php echo base_url()?>belote/admin/edit/<?php echo $item->id?>" title="Éditer"><img src="<?php echo base_url()?>assets/admin/images/icn_edit.png"></a>
			    					<a class="del_button" onclick="confirmDel(<?php echo $item->id;?>)" title="Effacer"><img src="<?php echo base_url()?>assets/admin/images/icn_trash.png"></a>
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
					<a class="alt_btn" href="<?php echo base_url();?>belote/admin/insert">Plus</a>
				</div>
			</footer>		
		</div>
	</article>
</form>	
</section>

</body>