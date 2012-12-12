<?php
if($this->session->userdata('session'))
{
	echo '<p class="message">';
	echo $this->session->userdata('session');
	echo '</p>';
	$this->session->unset_userdata('session');
}
?>
	<article id="content" class="module width_3_quarter" style="width:95%;">
		<header><h3 class="tabs_involved">Danh sách tài khoản</h3>
			<ul class="tabs">
			<div id="ajax_paging">
   				<?php echo $this->pagination->create_links()?>
   			</div>
			</ul>
		</header>
		<div class="tab_container">
			<div id="tab1" class="tab_content">
   		

			<table class="tablesorter" cellspacing="0"> 
			<thead> 
				<tr>
					<th align="center">STT</th> 
    				<th align="center">Email</th> 
    				<th align="center">Mật khẩu</th>
    				<th align="center">Actions</th> 
				</tr> 
			</thead> 
			<tbody> 
			<?php 
			$count = 0;
			foreach ($listpaging as $row)
			{
			?>
				<tr>
					<td align="center"><?php echo $count+1; ?></td>
    				<td align="center" style="padding: 0px;"><?php echo $row->email ?></td> 
    				<td align="center" style="padding: 0px;"><?php echo $row->password ?></td>
    				<td align="center">
    					<a href="<?php echo base_url()?>taikhoan/admin/edit/<?php echo $row->id?>" title="View"><img src="<?php echo base_url()?>assets/admin/images/icn_view.png"></a>
    					<a href="<?php echo base_url()?>taikhoan/admin/del/<?php echo $row->id?>" title="Del"><img src="<?php echo base_url()?>assets/admin/images/icn_trash.png"></a>
    				</td>
    			</tr> 
			<?php
			$count++;
			}
			?>				
			</tbody> 
			</table>
			</div>
			<footer>
		<form method="post" action="<?php echo base_url(); ?>taikhoan/admin/insert">
				<div class="submit_link">
				</div>
			</form>
		</footer>
			
		</div><!-- end of .tab_container -->
				</article><!-- end of content manager article -->	
		
		