<?php
//
	$this->db->order_by("order", "asc");
	$query = $this->db->get('lee_application');
	$app = $query->result();
//
?>
<header id="header" class="container clearfix">

	<a href="<?php echo base_url();?>" id="logo">
		<img src="<?php echo base_url();?>assets/leerobertsonx/images/logo.png" alt="SmartStart" width="139" height="86">
	</a>

	<nav id="main-nav">
		
		<ul>
			<li class="menuitem" id="home">
				<a href="<?php echo base_url();?>" data-description="">
					<img alt="" src="<?php echo base_url();?>assets/leerobertsonx/images/home.png"/><br/>
					Home
				</a>
			</li>
			<li class="menuitem" id="website">
				<a href="<?php echo base_url();?>website" data-description="">
					<img alt="" src="<?php echo base_url();?>assets/leerobertsonx/images/Website.png"/><br/>
					Website
				</a>
				<ul>
					<li><a href="<?php echo base_url();?>website/webDesign">Web Design</a></li>
					<li><a href="<?php echo base_url();?>website/webDevelopement">Web Developement</a></li>
					<li><a href="<?php echo base_url();?>website/seo">SEO</a></li>
					<li><a href="<?php echo base_url();?>website/pricingTable">Pricing Tables</a></li>
				</ul>
			</li>
			<li class="menuitem" id="application">
				<a href="<?php echo base_url();?>app" data-description="">
					<img alt="" src="<?php echo base_url();?>assets/leerobertsonx/images/application.png"/><br/>
					Applications
				</a>
				<ul>
				<?php foreach ($app as $row):?>
					<li><a href="<?php echo base_url();?>app/detail/<?php echo $row->id.'/'.$row->alias?>"><?php echo $row->title?></a></li>
					<?php endforeach;?>
				</ul>
			</li>
			<li class="menuitem" id="portfolio">
				<a href="<?php echo base_url();?>portfolio" data-description="">
					<img alt="" src="<?php echo base_url();?>assets/leerobertsonx/images/application.png"/><br/>
					Portfolio
				</a>
			</li>
			<li class="menuitem" id="about-us">
				<a href="<?php echo base_url();?>aboutus" data-description="">
					<img alt="" src="<?php echo base_url();?>assets/leerobertsonx/images/about-us.png"/><br/>
					About Us
				</a>
			</li>
			<li class="menuitem" id="contact-us">
				<a href="<?php echo base_url();?>contactus" data-description="">
					<img alt="" src="<?php echo base_url();?>assets/leerobertsonx/images/contact-us.png"/><br/>
					Contact Us
				</a>
			</li>
		</ul>

	</nav><!-- end #main-nav -->
	
</header><!-- end #header -->