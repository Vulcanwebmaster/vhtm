<style type="text/css">
	td, th{text-align:center; padding:5px 15px; border-bottom:solid 1px silver}
	form{margin-left:20px}
</style>

<h2><?php print $header?></h2>

<?php print form_open('auth/admin/members/delete')?>
<table class="data_grid" cellspacing="0">
    <thead>
        <tr>
            <th width=5%>ID</th>
            <th><?php print $this->lang->line('userlib_username')?></th>
            <th><?php print $this->lang->line('userlib_email')?></th>
            <th><?php print $this->lang->line('userlib_group')?></th>
            <th><?php print $this->lang->line('userlib_last_visit')?></th>
            <th width=5% class="middle"><?php print $this->lang->line('userlib_active')?></th> 
            <th width=5% class="middle">Modify</th>
            <th width=10%><?php print form_checkbox('all','select',FALSE)?>Delete</th>        
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
            <td><?php print $row['id']?></td>
            <td><?php print $row['username']?></td>
            <td><?php print $row['email']?></td>
            <td><?php print $row['group']?></td>
            <td><?php print $row['last_visit']?></td>
            <td class="middle"><img src="<?php echo base_url();?>assets/leerobertsonx_admin/images/tick.png"/></td>
            <td class="middle"><a href="<?php print site_url('auth/admin/members/form/'.$row['id'])?>"><img src="<?php echo base_url();?>assets/leerobertsonx_admin/images/pencil.png"/></a></td>
            <td><input type="submit" name="delete" value="Delete" onclick="return confirm('Are you SURE you want to delete these members? Doing so could loose system data!');"></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<?php print form_close()?>