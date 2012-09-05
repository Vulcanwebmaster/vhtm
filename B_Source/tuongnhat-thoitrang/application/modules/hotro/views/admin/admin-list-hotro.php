<?php if ($this->session->userdata('backend_hotro_result')!='')
{
	echo '<p style="color:red; padding-left:30px">';
	echo $this->session->userdata('backend_hotro_result');
	$this->session->unset_userdata('backend_hotro_result');
	echo '</p>';
}?>

<article class="module width_3_quarter" style="width: 95%;">
<header>
	<h3 class="tabs_involved"><?php if (isset($bcCurrent)) echo $bcCurrent;?></h3>
	<ul class="tabs"></ul>
</header>

<div class="tab_container">
	<div id="tab1" class="tab_content" style="overflow:auto">
		<table class="tablesorter" cellspacing="0" style="font-size:12px"> 
			<thead> 
				<tr>
					<th>Chức năng</th> 
					<th>ID</th>
		    		<th>Mail</th>
				</tr> 
			</thead> 
			<tbody> 
				<?php foreach ($list as $item)
				{?>
					<tr> 
						<td><a href="<?php echo base_url();?>hotro/admin/deleteById/<?php echo $item->id;?>" title="Del"><img src="<?php echo base_url();?>assets/admin/images/icn_trash.png"></a></td>
			    		<td><?php echo $item->id;?></td> 
			    		<td><?php echo $item->email;?></td> 
					</tr>
				<?php }?>
			</tbody> 
		</table>
	</div><!-- end of #tab1 -->
			
<footer>
	</footer>
			
</div><!-- end of .tab_container -->
		
</article>
