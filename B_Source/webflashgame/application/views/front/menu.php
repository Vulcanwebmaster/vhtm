<div id="nav" class="">
	<ul>
		<li class="btnPlay first active"><a href="<?php echo base_url();?>homepage" data-gtt="Home" title=""><span>Home</span></a></li>
		<li class="btnTourn"><a data-gtt="Tournaments" href="<?php echo base_url();?>giaidau" title=""><span>Tournaments</span></a></li>
		<?php if(isset($_SESSION['front_user_fullname'])){ ?>
			<li class="btnCommunity"><a data-gtt="My GameTwist" href="<?php echo base_url();?>mygametwist"><span>My GameTwist</span></a></li>
		<?php }else{ ?>
			<li class="btnCommunity"><a data-gtt="My GameTwist" href="<?php echo base_url();?>dangky/dangnhap"><span>My GameTwist</span></a></li>
		<?php } ?>
		<li class="btnShop"><a data-gtt="Shop" href="<?php echo base_url();?>shop" title=""><span>Shop</span></a></li>
		<li class="btnRules"><a data-gtt="Help" href="<?php echo base_url();?>helps" title=""><span>Help</span></a></li>
	</ul>
	<a id="backToTop" href="#"></a>
</div>
