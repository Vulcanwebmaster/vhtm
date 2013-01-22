<!-------------------------Main----------------------->
<?php $this->load->view('front/menu')?>
<div id="main">
			<div id="container">
				<div id="tipHolder"></div>
				<div id="communityMarketing" class="contBox">
					<?php if ($this->session->userdata('result')!='')
						{
						echo '<p style="color:red; padding-left:30px">';
						echo $this->session->userdata('result');
						$this->session->unset_userdata('result');
						echo '</p>';
						}?>
					<h3><span>Welcome to the GameTwist community!</span></h3>
					<div class="container">Meet up with your friends, find out about the latest news and play your favourite games.</div>
				</div>
				<div id="newMessages" class="contBox">
					<h3><span>Write message</span></h3>
					<div class="container">
						<table class="listTable">
							<colgroup><col class="first"><col class="second"><col class="third"><col class="fourth"></colgroup>
							<thead>
								<tr><td></td><td></td><td></td><td></td></tr>
							</thead>
							<tfoot>
								<tr><td></td><td></td><td></td><td></td></tr>
							</tfoot>
							<tbody>
								<tr><td colspan="4">No new messages. Go to your <a href="/messages.asp?box=in&amp;pagesize=25">inbox</a></td></tr>
							</tbody>
						</table>
						<p class="continueLink">
							<a href="#">Messages</a>
						</p>
					</div>
				</div>
				<div class="contBox" id="friendsOnline">
					<h3><span>Friends online</span></h3>
					<div class="container">
						<table class="listTable">
							<colgroup><col class="first"><col class="second"><col class="third"></colgroup>
							<thead>
								<tr><td></td><td></td><td></td></tr>
							</thead>
							<tfoot>
								<tr><td></td><td></td><td></td></tr>
							</tfoot>
							<tbody>
								<tr><td colspan="3">No friends online. To <a href="friendslist.htm">Friends List</a></td></tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
<!---------------------------Left------------------------->
<?php $this->load->view('front/mygametwist_left')?>
<!---------------------------End right-------------------->
</div>