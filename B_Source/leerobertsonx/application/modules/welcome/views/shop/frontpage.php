<script type="text/javascript">
	$(document).ready(function(){
		$('.content-container').hide();
		$('#home').addClass('current');

		$('.image-gallery-slider ul').css('height','120px');
	});
</script>

<section id="content" class="container clearfix">

	<h2 class="slogan align-center">We are a group of experienced designers and developers.<br />
	We set new standards in user experience &amp; make future happen.</h2>

	<section id="features-slider" class="ss-slider">
	
		<article class="slide">
		
			<img src="<?php echo base_url();?>assets/leerobertsonx/images/placeholders/slider-slide-1.jpg" alt="" class="slide-bg-image" />
			
			<div class="slide-button">
				<span class="dropcap">1</span>
				<h5>SEO</h5>
				<span class="description">Reach the top of Google</span>
			</div>	
			<div class="slide-content">
				<h2>SEO - Search engine optimization</h2>
				<p>L.R.X will help you understand the benefits of SEO- Search Engine Optimization and web marketing in general</p>
				<p><a class="button" href="<?php echo base_url();?>website/seo">Read More</a></p>
			</div>		
		</article><!-- end .slide (Responsive Layout) -->
	
		<article class="slide">
		
			<img src="<?php echo base_url();?>assets/leerobertsonx/images/placeholders/slider-slide-2.jpg" alt="" class="slide-bg-image" />
		
			<div class="slide-button">		
				<span class="dropcap">2</span>
				<h5>Design</h5>
				<span class="description">Unique Web 2.0 Design</span>
			</div>
			<div class="slide-content">
				<h2>Web Design</h2>
				<p>L.R.X will help you to make a strong impact on your partners and clients!</p>
				<p><a class="button" href="<?php echo base_url();?>website/webDesign">Read More</a></p>
			</div>
		</article><!-- end .slide (HTML5 / CSS3) -->
	
		<article class="slide">
			<img src="<?php echo base_url();?>assets/leerobertsonx/images/placeholders/slider-slide-4.jpg" alt="" class="slide-bg-image" />
			<div class="slide-button">
				<span class="dropcap">3</span>
				<h5>Developement</h5>
				<span class="description">100% money back guarantee</span>
			</div>
			<div class="slide-content">
				<h2>Web developement</h2>
				<p>Rich Internet Applications deliver an interface that is quicker and more responsive than classic applications.</p>
				<p><a class="button" href="<?php echo base_url();?>website/webDevelopement">Read More</a></p>
			</div>
		</article><!-- end .slide (Easily Customisable) -->
	
		<article class="slide">
		
			<img src="<?php echo base_url();?>assets/leerobertsonx/images/placeholders/slider-slide-3.jpg" alt="" class="slide-bg-image" />
		
			<div class="slide-button">
				<span class="dropcap">4</span>
				<h5>Money back</h5>
				<span class="description">100% money back guarantee</span>
			</div>
			<div class="slide-content">
				<h2>100% money back</h2>
				<p>We ensure that all clients are happy with our work. Should you for any reason not be completely satisfied with our work, and we cannot produce what you are seeking you can simply notify us and we will provide you with a refund less design fees.</p>
			</div>
		</article><!-- end .slide (Unique & Clean) -->
	</section><!-- end #features-slider -->
	<h6 class="section-title">Latest Projects</h6>
	<ul class="projects-carousel clearfix">

		<li>
			<a href="#">
				<img class="last-project-img" src="<?php echo base_url();?>assets/leerobertsonx/images/placeholders/portfolio-project-4th-1.jpg" alt="">
				<h5 class="title">Unix</h5>
			</a>
		</li>

		<li>
			<a href="http://istockgold.com/istockgold/">
				<img class="last-project-img" src="<?php echo base_url();?>assets/leerobertsonx/images/placeholders/portfolio-project-4th-2.jpg" alt="">
				<h5 class="title">Istockgold</h5>
			</a>
		</li>

		<li>
			<a href="http://monamimode.vn">
				<img class="last-project-img" src="<?php echo base_url();?>assets/leerobertsonx/images/placeholders/portfolio-project-4th-4.jpg" alt="">
				<h5 class="title">Monamimode</h5>
			</a>
		</li>
		<li> <a href="http://niw.com.vn"> <img class="last-project-img" src="<?php echo base_url();?>assets/leerobertsonx/images/placeholders/portfolio-project-4th-3.jpg" alt="">
		  <h5 class="title">NIW</h5>
		  </a>
		</li>
	</ul>
	<!-- end .projects-carousel -->
	
	<ul class="post-carousel">
		<li>
			<script type="text/javascript">
				$(document).ready(function(){
					$('.whyus-content').hide();
					$('#whyus-panel ul li').css('cursor','pointer');
					$('#whyus-panel ul li').mouseover(function(){
						$(this).children('span').css('color','#31b2d7');
					});
					$('#whyus-panel ul li').click(function(){
						$(this).children('.whyus-content').slideDown(400);
					});
					$('#whyus-panel ul li').mouseout(function(){
						$(this).children('.whyus-content').slideUp(400);
						$(this).children('span').css('color','#909090');
					});
				});
			</script>
		
			<div id="whyus-panel">
				<a href="#">
					<h5 class="title">Why Us</h5>
				</a>
				<ul>
					<li><span>100% unique custom design</span>
						<p class="whyus-content">All our designs are 100% unique , custom and template free.</p>
					</li>
					<li><span>Creative web 2.0 designs</span>
						<p class="whyus-content">we will bring you the latest web technologies that match your website.</p>
					</li>
					<li><span>CONTENT MANAGEMENT SYSTEM</span>
						<p class="whyus-content">
							CMS enables website owners to arrange, edit, publish, 
							delete their website content independently and without much technical knowledge. 
							CMS is the best tool for increasing website activity thus providing a better user experience.
						</p>
					</li>
					<li><span>ADMIN PANEL TRAINING</span>
						<p class="whyus-content">
							We will train you on the CMS admin panel, so you can easily use it.
						</p>
					</li>
					<li><span>WE DON'T OUTSOURCE</span></li>
					<li><span>WORK DIRECTLY WITH YOUR TEAM</span></li>
					<li><span>SEARCH ENGINE OPTIMIZATIONS</span></li>
				</ul>
			</div><!-- end .entry-body -->
		</li>
		<li>
			<div class="entry-meta">
				<a href="#">
					<span class="post-format quote">Permalink</span>
				</a>
				<span class="date">Sep 17 2011</span>
			</div><!-- end .entry-meta -->
			<div class="entry-body">
				<h5>Increse your sales!</h5>
				<blockquote class="simple">
					<p>We develop custom eCommerce websites and shopping carts. Our solutions can help you to keep your business up and running 24/7 and keep track of orders and inventory.</p>
				</blockquote>
			</div><!-- end .entry-body -->
		</li>
		<li>
			<div class="entry-meta">
				<a href="#">
					<span class="post-format aside">Permalink</span>
				</a>
				<span class="date">Sep 17 2011</span>
			</div><!-- end .entry-meta -->
			<div class="entry-body">
				<h5>Web marketing strtegy</h5>
				<p>A good marketing strategy will launch your business and help you to establish an online presence through which your business will generate revenue. 
				The Internet has introduced innovation in the field of marketing - Internet marketing opens doors to new ways of advertising.
				</p>
			</div><!-- end .entry-body -->
		</li>
		<li>
			<center><h5>Our clients</h5></center>
			<div id="clients-panel">
				<img alt="" src="<?php echo base_url();?>assets/leerobertsonx/images/dell.png"/>
				<img alt="" src="<?php echo base_url();?>assets/leerobertsonx/images/toyota.png"/>
				<img alt="" src="<?php echo base_url();?>assets/leerobertsonx/images/Scripps.png"/>
				<!-- img alt="" src="<?php echo base_url();?>assets/leerobertsonx/images/upper-deck.png"/ -->
				<img alt="" src="<?php echo base_url();?>assets/leerobertsonx/images/AramarkLogoColor.png"/>
				<!-- img alt="" src="<?php echo base_url();?>assets/leerobertsonx/images/Century21_logo.png"/ -->
			</div>
			
		</li>

		<li>
			<div class="entry-meta">
				<a href="#">
					<span class="post-format aside">Permalink</span>
				</a>
				<span class="date">Sep 17 2011</span>
			</div><!-- end .entry-meta -->
			<h5>We can help you to...</h5>
			<div class="entry-body">
			<p>We will develop custom website according to your specific needs. We will provide you with the best HTML and SEO solutions which will further position your website higher in the search engine directories.</p>
			</div><!-- end .entry-body -->

		</li>
		<li>
			<h5>Help you position your brand...</h5>
			<div>
				<p>Our Web design company is a leading company that provides innovative, cutting-edge solutions for companies/corporations/businesses/individuals.
				We provide custom made web development and design solutions and in that manner we enable you to convey your messages to your target audience expand your reach and generate revenue</p>
			</div>
		<li>
	</ul>
	<!-- end .post-carousel -->
	
</section><!-- end #content -->
