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
				<div id="tipHolder"></div>
				<div class="contBox">
					<h3><span>My subscriptions</span></h3>
				</div>
				<div class="contBox">
					<p>You currently do not have a subscription. Would you like to get one? Subscription users receive thousands of twists at the time of subscription, can set up their own tournaments and much more!<br><br><strong>So grab a subscription in our shop now!</strong></p>
					<form id="frm_b" method="post" action="<?php echo base_url();?>shop">
						<button type="submit" class="formButton"><span>Buy subscription</span></button>
					</form>
				</div>
				
				</div>
<!---------------------------Left------------------------->
<?php $this->load->view('front/mygametwist_left')?>
<!-------------End container--------------->
</div>