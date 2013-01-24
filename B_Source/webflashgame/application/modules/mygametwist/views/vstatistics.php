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
								<tr>
									<td>2012/11/01</td>
									<td>blue_rose123</td>
									<td>23434</td>
									<td>8+</td>
								</tr>
								<tr>
									<td>2012/11/01</td>
									<td>blue_rose123</td>
									<td>23434</td>
									<td>8+</td>
								</tr>
								<tr>
									<td>2012/11/01</td>
									<td>blue_rose123</td>
									<td>23434</td>
									<td>8+</td>
								</tr>
								<tr>
									<td>2012/11/01</td>
									<td>blue_rose123</td>
									<td>23434</td>
									<td>8+</td>
								</tr>
							</tbody>
						</table>
			
			
				</div>
<!---------------------------Left------------------------->
<?php $this->load->view('front/mygametwist_left')?>
<!-------------End container--------------->
</div>