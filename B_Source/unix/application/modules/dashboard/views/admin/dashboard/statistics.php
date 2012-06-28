<table width="100%" cellspacing="0">
	<thead>
		<tr><th width="50%"><?php print $this->lang->line('dashboard_statistics_name') ?></th><th><?php print $this->lang->line('dashboard_statistics_value') ?></th></tr>
	</thead>

	<tbody>
		<tr><td><?php print $this->lang->line('dashboard_statistics_total_members') ?></td><td><?php print $total_members ?></td></tr>
		<tr><td><?php print $this->lang->line('dashboard_statistics_total_unactivated_members') ?></td><td><?php print $total_unactivated_members ?></td></tr>
		<tr><td><?php print $this->lang->line('dashboard_statistics_user_registration') ?></td><td><?php print $user_registration ?></td></tr>
	</tbody>
</table>