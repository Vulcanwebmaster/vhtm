<!-------------------Container------------>

<?php $this->load->view('front/menu')?> <!-- Menu -->
<div id="main">
	<div id="container" style="float:left;margin-left:294px;position:relative;width:648px;_display:inline">
						<div id="tipHolder"></div>
				<div id="friendsContent">
					<div class="contBox" id="friendsList">
						<h3><span>Friends List</span></h3>
						<div class="container">
							<table class="listTable">
								<colgroup><col class="first"><col class="second"><col class="third"></colgroup>
								<thead>
									<tr>
										<td colspan="2">Nickname</td>
										<td></td>
									</tr>
								</thead>
								<tfoot>
									<tr>
										<td></td>
										<td></td>
										<td></td>
									</tr>
								</tfoot>
								<tbody>
									<?php if(isset($list_friends)){
									 foreach ($list_friends as $friends) {  ?>
										<tr class="light">
										<td><a class="profile " href="#" target="profile"><span><?php echo $friends->username ?></span></a></td>
										<td class="status"><span class="offline"></span></td>
										<td class="action">
										<script type="text/javascript">
	                                    var messages_view_delete = "Remove player from list";
	                                 	</script>
												<a onclick="return confirm(messages_view_delete);" class="delete" href="#" data-gtt="Remove player from list" title="">
												<span>Remove player from list</span></a>
											</td>
										</tr>
									<?php } } ?>
									
									
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