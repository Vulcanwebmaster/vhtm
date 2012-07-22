<script type="text/javascript">
	$(document).ready(function(){
		$('.content-container').hide();
		$('#home').addClass('current');

		$('.image-gallery-slider ul').css('height','120px');
	});
</script>
<?php
	
	$result= $this->db->get('lee_categories_whyus')->result();
	
	$result2=$this->db->get('lee_categories_help')->result();
	$this->load->model('Mfrontpage');
	$result3=$this->db->get('lee_categories_outline')->result();
	$query=$this->db->get('lee_homepage_slide');
	$logo=$this->db->get('lee_homepage_logo')->result();
?>

<section id="content" class="container clearfix">

	<h2 class="slogan align-center">We are a group of experienced designers and developers.<br />
	We set new standards in user experience &amp; make future happen.</h2>

	<section id="features-slider" class="ss-slider">
	
	<?php if($query->num_rows()>0):?>
	
	<?php foreach ($query->result() as $rwsl):?>
		<article class="slide">
		
			<img alt="" src="<?php echo base_url().$this->Mfrontpage->fixImageLink_ToView($rwsl->linkimage)?>" class="slide-bg-image" />
			
			<div class="slide-button">
				<span class="dropcap"><?php echo $rwsl->order;?></span>
				<h5><?php echo $rwsl->title?></h5>
				<span class="description"><?php echo $rwsl->descriptiontitle?></span>
			</div>	
			<div class="slide-content">
				<h2><?php echo $rwsl->detailtitle?></h2>
				<p><?php echo $rwsl->detaildescription?></p>
				<?php if($rwsl->link!=""):?>
				<p><a class="button" href="<?php echo $rwsl->link?>">Read More</a></p>
				<?php endif;?>
			</div>		
		</article><!-- end .slide (Responsive Layout) -->
		<?php endforeach;?>
		<?php endif;?>
		
	</section><!-- end #features-slider -->
	<h6 class="section-title">Latest Projects</h6>
	
	<ul class="projects-carousel clearfix">
		<?php foreach ($logo as $rwlg):?>
		<li>
			<a href="<?php echo $rwlg->link?>">
				<img class="last-project-img" src="<?php echo base_url().$this->Mfrontpage->fixImageLink_ToView($rwlg->logo)?>" alt="">
				<h5 class="title"><?php echo $rwlg->title?></h5>
			</a>
		</li>
		<?php endforeach;?>
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
				<?php foreach ($result as $row):?>
					<li><span><?php echo $row->title?></span>
						<p class="whyus-content"><?php echo $row->detail?></p>
					</li>
					<?php endforeach;?>
				</ul>
			</div><!-- end .entry-body -->
		</li>
		<li>
			<center><h5>Our clients</h5></center>
			<div id="clients-panel">
			<?php foreach ($result3 as $rws):?>
				
				<img alt="" src="<?php echo $this->Mfrontpage->fixImageLink_ToView($rws->image)?>"/>
				
				<?php endforeach;?>
			</div>
			
		</li>
		<?php foreach ($result2 as $rw):?>
		<li>
		
			<div class="entry-meta">
				<a href="#">
					<span class="post-format aside">Permalink</span>
				</a>
				<span class="date"></span>
			</div><!-- end .entry-meta -->
			<div class="entry-body">
				<h5><?php echo $rw->title?></h5>
				<blockquote class="simple">
					<p><?php echo $rw->content?></p>
				</blockquote>
			</div><!-- end .entry-body -->
			
		</li>
		<?php endforeach;?>
	</ul>
	<!-- end .post-carousel -->
	
</section><!-- end #content -->
