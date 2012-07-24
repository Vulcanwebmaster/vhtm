<?php
	$query = $this->db->get('n_lee_contactus_info');
	$result = $query->result();
?>
<footer id="footer" class="clearfix">

	<div class="container">

		<div class="three-fourth">

			<nav id="footer-nav" class="clearfix">

				<ul>
					<li><a href="<?php echo base_url();?>">Home</a></li>
					<li><a href="<?php echo base_url();?>website">Website</a></li>
					<li><a href="<?php echo base_url();?>app">Applications</a></li>
					<li><a href="<?php echo base_url();?>aboutus">About Us</a></li>
					<li><a href="<?php echo base_url();?>contactus">Contact Us</a></li>
				</ul>
				
			</nav><!-- end #footer-nav -->
<?php foreach ($result as $rw):?>
			<ul class="contact-info">
				<li class="address"><?php echo $rw->address;?></li>
				<li class="phone"><?php echo $rw->phone;?></li>
				<li class="email"><a href="mailto:<?php echo $rw->email;?>"><?php echo $rw->email;?></a></li>
			</ul><!-- end .contact-info -->
<?php endforeach;?>			
		</div><!-- end .three-fourth -->

		<div class="one-fourth last">

			<span class="title">Stay connected</span>

			<ul class="social-links">
				<li class="twitter"><a href="#">Twitter</a></li>
				<li class="facebook"><a href="#">Facebook</a></li>
				<li class="digg"><a href="#">Digg</a></li>
				<li class="vimeo"><a href="#">Vimeo</a></li>
				<li class="youtube"><a href="#">YouTube</a></li>
				<li class="skype"><a href="#">Skype</a></li>
			</ul><!-- end .social-links -->

		</div><!-- end .one-fourth.last -->
		
	</div><!-- end .container -->

</footer><!-- end #footer -->

<footer id="footer-bottom" class="clearfix">

	<div class="container">

		<ul>
			<li>Robertsonx &copy; 2012</li>
			<li><a href="#">Legal Notice</a></li>
			<li><a href="#">Terms</a></li>
		</ul>

	</div><!-- end .container -->

</footer><!-- end #footer-bottom -->

<!--[if !lte IE 6]><!-->
	
	<script>window.jQuery || document.write('<script src="<?php echo base_url();?>assets/leerobertsonx/js/jquery-1.7.1.min.js"><\/script>')</script>
			<!--[if lt IE 9]> <script src="js/selectivizr-and-extra-selectors.min.js"></script> <![endif]-->
			<script src="<?php echo base_url();?>assets/leerobertsonx/js/respond.min.js"></script>
			<script src="<?php echo base_url();?>assets/leerobertsonx/js/jquery.easing-1.3.min.js"></script>
			<script src="<?php echo base_url();?>assets/leerobertsonx/js/jquery.fancybox-1.3.4.pack.js"></script>
			<script src="<?php echo base_url();?>assets/leerobertsonx/js/jquery.smartStartSlider.min.js"></script>
			<script src="<?php echo base_url();?>assets/leerobertsonx/js/jquery.jcarousel.min.js"></script>
			<script src="<?php echo base_url();?>assets/leerobertsonx/js/jquery.cycle.all.min.js"></script>
			<script src="<?php echo base_url();?>assets/leerobertsonx/js/jquery.isotope.min.js"></script>
			<script src="<?php echo base_url();?>assets/leerobertsonx/js/mediaelement-and-player.min.js"></script>
				<!-- script src="<?php echo base_url();?>assets/leerobertsonx/css/fontsgoogleapiscom.css"></script -->
			<script src="<?php echo base_url();?>assets/leerobertsonx/js/jquery.gmap.min.js"></script>
			<script src="<?php echo base_url();?>assets/leerobertsonx/js/jquery.touchSwipe-1.2.5.min.js"></script>
			<script src="<?php echo base_url();?>assets/leerobertsonx/js/custom.js"></script>
<!--<![endif]-->