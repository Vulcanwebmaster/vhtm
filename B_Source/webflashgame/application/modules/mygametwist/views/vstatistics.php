<!-------------------Container------------>
<!-------------Check Password------------>
	<script>
		jQuery(document).ready(function(){
			// binds form submission and fields to the validation engine
			jQuery("#checkconfpass").validationEngine();
		});
	</script>
<!-------------End Check Password------------>

<?php $this->load->view('front/menu')?> <!-- Menu -->
<div id="main">
			<div id="container" style="float:left;margin-left:294px;position:relative;width:648px;_display:inline">
				<table class="listTable">
							<colgroup><col class="first"><col class="second"><col class="third"><col class="fourth"></colgroup>
							<thead>
								<tr>
									<th>Time</th>
									<th>Players</th>
									<th>Points</th>
									<th>Skill level +/-</th>
								</tr>
							</thead>
							<tfoot>
								<tr>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
								</tr>
							</tfoot>
							<tbody>
								<?php foreach ($list_statistics as $statistics) { ?>
								<tr>
									<td><?php echo $statistics->time_statistics ?></td>
									<td><?php echo $account->username ?></td>
									<td><?php echo $statistics->points ?></td>
									<td><?php echo $statistics->skill ?></td>
								</tr>
								<?php } ?>
							</tbody>
						</table>
				</div>
<!---------------------------Left------------------------->
<?php $this->load->view('front/mygametwist_left')?>
<!-------------End container--------------->
</div>