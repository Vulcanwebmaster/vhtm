<?php print form_open('auth/admin/members/delete')?>
<article class="module width_3_quarter" style="width:95%;">
		<header><h3 class="tabs_involved">Users Manager</h3>
		<ul class="tabs">
		</ul>
		</header>
		<div class="tab_container">
			<div id="tab1" class="tab_content">
			<table class="tablesorter" cellspacing="0"> 
			<thead> 
				<tr>
					<th></th> 
    				<th>User ID</th> 
    				<th>User Name</th> 
    				<th>Email</th>
    				<th>Group</th>
    				<th>Last visit</th>
    				<th>Actions</th>
				</tr> 
			</thead> 
			<tbody>
			 <?php foreach($members->result_array() as $row):
            // Check if this user account belongs to the person logged in
            // if so don't allow them to delete it, also if it belongs to the main
            // admin user don't allow them to delete it
            $delete  = ($row['id'] == $this->session->userdata('id') || $row['id'] == 1) ? '&nbsp;' : form_checkbox('select[]',$row['id'],FALSE);  
			
			$active =  ($row['active']?'tick':'cross');   
        	?>
				<tr>
					<td><?php print $delete?></td>  
		            <td><?php print $row['id']?></td>
		            <td><?php print $row['username']?></td>
		            <td><?php print $row['email']?></td>
		            <td><?php print $row['group']?></td>
		            <td><?php print $row['last_visit']?></td>
		            <td><a href="<?php print site_url('auth/admin/members/form/'.$row['id'])?>" title="Edit"><img src="<?php echo base_url()?>assets/leerobertsonx_admin/images/icn_edit.png">
    				</td>
				</tr>
			<?php endforeach;?>
			</tbody> 
			</table>
			</div><!-- end of #tab1 -->
		</div><!-- end of .tab_container -->

		<footer>

			<div class="submit_link">
				<input type="submit" value="Delete" class="alt_btn">
			</div>
<?php print form_close()?>
<?php print form_open('auth/admin/members/form')?>	
			<div class="submit_link">
				<input type="submit" value="Add New User" class="alt_btn">
			</div>
		</footer>
<?php print form_close()?>
</article><!-- end of content manager article -->
	