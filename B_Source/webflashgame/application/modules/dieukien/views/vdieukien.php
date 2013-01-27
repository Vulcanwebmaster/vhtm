<style>
	#main{
/*		background: url(<?php echo base_url();?>assets/flash_game/images/backContentTop.jpg) no-repeat;*/
	_zoom: 1;
	overflow: hidden;
	padding: 54px 24px 0 24px;
	
	}
	
	#sideNav{
				float: left;
			    width: 294px;
			}
			 #container{
				float: right;
			   
			    width: 648px;
			}
		#container{
			float: left;
			width: 648px;
		}
			
</style>

<div id="nav" class="">
			<ul>
				<li class="btnPlay first active"><a href="<?php echo base_url();?>homepage" data-gtt="Home" title=""><span>Home</span></a></li>
				<li class="btnTourn"><a data-gtt="Tournaments" href="<?php echo base_url();?>giaidau" title=""><span>Tournaments</span></a></li>
				<li class="btnCommunity"><a data-gtt="My GameTwist" href="<?php echo base_url();?>dangky/dangnhap" title=""><span>My GameTwist</span></a></li>
				<li class="btnShop"><a data-gtt="Shop" href="<?php echo base_url();?>shop" title=""><span>Shop</span></a></li>
				<li class="btnRules"><a data-gtt="Help" href="<?php echo base_url();?>helps" title=""><span>Help</span></a></li>
			</ul>
			<a id="backToTop" href="#"></a>
		</div>
<div id="main">
			<?php foreach ($list_dieukien as $item) 
			{ ?>
				 <?php echo $item->title ?>
				 <?php echo $item->content ?>
			<?php } ?>
	<div id="sideNav"></div>
	<div id="sideBar"></div>
</div>