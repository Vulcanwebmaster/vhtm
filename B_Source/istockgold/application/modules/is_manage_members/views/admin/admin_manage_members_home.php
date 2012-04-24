<div id="main">
	<div id="page_title">
		<h1>
			Members management</h1>
	</div>
	<div id="status_box">
		<div id="head">
			<form name="lines" id="lines" action=""
			method="post">
			<input name="fld_search" type="text" id="fld_search" value="">
			<input id="button" class="btn" type="submit" value="Search" name="button">
			<input type="hidden" name="n" id="n" value="">
			<input type="hidden" name="key" value="">
			</form>
		</div>
		<table cellspacing="0" cellpadding="2" border="0" width="100%" class="maintable">
			<tbody>
				<tr height="22" class="tablefirstrow">
					<td>ID</td>
					<td>Fullname</td>
					<td>Ip</td>
					<td>Country</td>
					<td width="3%" align="right">Mail</td>
				</tr>
				<?php 
				if (count($users))
				{
					$i = 0;
					foreach ($users as $key => $list)
					{
						if($i % 2 == 0)
							echo "<tr height=\"20\" class=\"col0\">";
						else
							echo "<tr height=\"20\" class=\"col1\">";
						
						echo "<td>".$list['user_id']."</td>";
						echo "<td>".$list['full_name']."</td>";
						echo "<td>".$list['ip']."</td>";
						echo "<td>".$list['country']."</td>";
						echo "<td>".$list['email']."</td>";
						echo "</tr>";
						
						$i = $i +1;
					}
				}
				?>
				<tr>
					<td colspan="10">
						<div style="text-align: center">
							<ul id="wp-pagenavi">
							</ul>
						</div>
					</td>
				</tr>
			</tbody>
		</table>
		<span class="italic">Total members: <?php echo count($users);?></span>
	</div>
	<br>
	<div id="page_guide">
		<h2>
			HELP:</h2>
		To change user access level or view/edit infromations click on username.
	</div>
</div>