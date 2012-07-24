<script type="text/javascript">
	$(document).ready(function(){
		$('#contact-us').addClass('current');
	});
</script>
<section id="content" class="container clearfix">
<?php foreach ($contact_info as $row):?>
	<header class="page-header">
		<h1 class="page-title"><?php echo $row->slogan;?></h1>
	</header><!-- end .page-header -->
	<div style="margin-left:">
		<iframe width="940" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=+Missouri,+STL,+63109.+USA&amp;aq=&amp;sll=38.341656,-95.712891&amp;sspn=34.717681,86.572266&amp;ie=UTF8&amp;hq=&amp;hnear=St+Louis,+Missouri+63109&amp;t=m&amp;ll=38.584405,-90.294914&amp;spn=0.053674,0.231571&amp;z=13&amp;iwloc=A&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=+Missouri,+STL,+63109.+USA&amp;aq=&amp;sll=38.341656,-95.712891&amp;sspn=34.717681,86.572266&amp;ie=UTF8&amp;hq=&amp;hnear=St+Louis,+Missouri+63109&amp;t=m&amp;ll=38.584405,-90.294914&amp;spn=0.053674,0.231571&amp;z=13&amp;iwloc=A" style="color:#0000FF;text-align:left">View Larger Map</a></small>
	</div>
	<div class="container clearfix">
		
		<div class="one-fourth">

			<h3>Contact Info</h3>

			<p><?php echo $row->address;?></p>

				<p>Phone: <?php echo $row->phone;?><br/>
				Fax: <?php echo $row->fax;?><br/>
				Email: <?php echo $row->email;?><br/>
				Web: <?php echo $row->website;?></p>
			
		</div><!-- end .one-fourth -->
<?php endforeach;?>	

	
		<div class="three-fourth last">
			<h3>Let's keep in touch</h3>
		<form action="contactus/postMessage" method="post" >
				<p class="input-block" style="float:left;margin-right: 5px;">
					<label for="contact-name"><strong>Name</strong> (required)</label>
					<input type="text" name="name" value="" id="contact-name" required>
				</p>

				<p class="input-block" style="float:left;margin-right: 5px;">
					<label for="contact-email"><strong>Email</strong> (required)</label>
					<input type="email" name="email" value="" id="contact-email" required>
				</p>
				
				<p class="input-block" style="float:left;margin-right: 5px;">
					<label for="contact-subject"><strong>Subject</strong></label>
					<input type="text" name="subject" value="" id="contact-subject">
				</p>

				<p class="textarea-block" style="float:left;margin-right: 5px;">
					<label for="contact-message"><strong>Your Message</strong> (required)</label>
					<textarea name="message" id="contact-message" cols="106" rows="6" required></textarea>
				</p>
			
				<div class="hidden">
					<label for="contact-spam-check">Do not fill out this field:</label>
					<input name="spam-check" type="text" value="" id="contact-spam-check" />
				</div>
				<div align="right" style="margin-right: 25px">
				<input type="submit" value="Submit">
				</div>
				<div class="clear"></div>

			</form>

		</div><!-- end .three-fourth.last -->

	</div><!-- end .container -->
		
</section>