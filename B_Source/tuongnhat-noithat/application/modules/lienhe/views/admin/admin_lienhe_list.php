<?php 
$this->load->helper('text');
if($this->session->userdata('session'))
{
	echo '<p class="message">';
	echo $this->session->userdata('session');
	echo '</p>';
	$this->session->unset_userdata('session');
}
?>
	<article id="content" class="module width_3_quarter" style="width:95%;">
		<header><h3 class="tabs_involved">Danh sách liên hệ</h3>
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
    				<th align="center">Tên người gửi</th> 
    				<th align="center">Địa chỉ email</th>
    				<th align="center">Tiêu đề</th>
    				<th align="center">Nội dung</th>
    				<th align="center">Ngày gửi</th>
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
    				<td align="center" style="padding: 0px;"><?php echo $row->contact_name ?></td> 
    				<td align="center" style="padding: 0px;"><?php echo $row->contact_email ?></td>
    				<td align="center" style="padding: 0px;"><?php echo $row->contact_subject ?></td> 
    				<td align="center" style="padding: 0px;"><?php echo word_limiter($row->contact_message); ?></td> 
    				<td align="center" style="padding: 0px;"><?php echo $row->contact_date_create ?></td>
    				<td align="center">
    					<a href="<?php echo base_url()?>lienhe/admin/del/<?php echo $row->contact_id?>" title="Del"><img src="<?php echo base_url()?>assets/admin/images/icn_trash.png"></a>
    				</td>
    			</tr> 
			<?php
			$count++;
			}
			?>				
			</tbody> 
			</table>
			</div>
			
		</div><!-- end of .tab_container -->
				</article><!-- end of content manager article -->	
		
		