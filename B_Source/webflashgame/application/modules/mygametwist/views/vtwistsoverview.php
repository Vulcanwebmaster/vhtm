	
<!-------------------Container------------>

<?php $this->load->view('front/menu')?> <!-- Menu -->
<div id="main">
		<div id="container" style="float:left;margin-left:294px;position:relative;width:648px;_display:inline">
			<div id="tipHolder"></div>
					<div class="contBox">
				<h3><span>Twists overview</span></h3>
			</div>
			<div id="accountDetailsTable" class="contBox">
				<form method="post" name="stats" action="/web/AccountDetails">
					<select name="month" id="month" onchange="document.stats.submit();" onclick="if(this.options.length==1)document.stats.submit();">
						<option value="1" selected="">January&nbsp;'13</option>
					</select>
					<select name="day" onchange="document.stats.submit();" onclick="if(this.options.length==1)document.stats.submit();">
						<option value="10">Thursday, 10</option>
						<option value="11" selected="">Friday, 11</option>
					</select>
				</form>
				<div class="container">
					<div class="contBox">
						<table class="listTable">
							<colgroup><col class="first"><col class="second"><col class="third"><col class="fourth"></colgroup>
							<thead>
								<tr>
									<th>Time</th>
									<th>Transaction ID</th>
									<th>Reason</th>
									<th class="listRight">Amount</th>
								</tr>
							</thead>
							<tfoot>
								<tr>
									<td></td>
									<td colspan="3"></td>
								</tr>
							</tfoot>
							<tbody>
								<tr class="lightpositiveAmount">
									<td>04:24</td>
									<td> #5827725676</td>
									<td class="transactionDescription">Activity on platform</td>
									<td class="listRight"><span class="funCurrencyContainer">1,000</span></td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
<!---------------------------Left------------------------->
<?php $this->load->view('front/mygametwist_left')?>
<!-------------End container--------------->
</div>
<!--
<script type="text/javascript">
    $(document).ready(function(){
    	$('body').removeClass('firefox games');
     $('body').addClass('friends hasSideNav chrome');
    })					
</script>-->