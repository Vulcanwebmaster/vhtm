<section id="main" class="column" style="width:100%;">
<form action="<? echo base_url()?>example/admin/savecontact" method="post">
	  	<fieldset>
     <label>Short content</label>
     <textarea name="short_content" id="content_1" ></textarea>
     <?php echo display_ckeditor($ckeditor_1); ?>
    </fieldset><div class="clear"></div>
      
    <fieldset> 
     <label>Main content</label>
     <textarea name="main_content" id="content_2" ></textarea>
     <?php echo display_ckeditor($ckeditor_2); ?>
    </fieldset><div class="clear"></div>
    
	<article class="module width_full" style="width:95%;">
		<header><h3>Contact Infomation</h3></header>
			<div class="module_content">
				<fieldset>
					<label>Slogan</label>
						<?php foreach ($list as $row)?>
					<input type="text" name="slogan" value="<?php echo $row->slogan?>">
				</fieldset>
				<fieldset>
					<label>Address</label>
						<input type="text" name="address" value="<?php echo $row->address?>">
					</fieldset>
						<fieldset style="width:48%; float:left;">
							<label>Phone</label>
							<input type="text" style="width:92%;" name="phone" value="<?php echo $row->phone?>">
						</fieldset><div class="clear"></div>
						<fieldset style="width:48%; float:right;margin-top:-75px;"> <!-- to make two field float next to one another, adjust values accordingly -->
							<label>Email</label>
							<input type="text" style="width:92%;" name="email" value="<?php echo $row->email?>">
						</fieldset><div class="clear"></div>
						<fieldset style="width:48%; float:left;"> <!-- to make two field float next to one another, adjust values accordingly -->
							<label>Fax</label>
							<input type="text" style="width:92%;" name="fax" value="<?php echo $row->fax?>">
						</fieldset><div class="clear"></div>
						<fieldset style="width:48%; float:right;margin-top:-75px";> <!-- to make two field float next to one another, adjust values accordingly -->
							<label>Website</label>
							<input type="text" style="width:92%;" name="website" value="<?php echo $row->website?>">
						</fieldset><div class="clear"></div>
				</div>
				<footer>
					<div class="submit_link">
						<input type="submit" value="Update" class="alt_btn">
					</div>
				</footer>

		</article><!-- end of post new article -->
</form>	
<!-- End Contact Info -->

		<?php
      $this->load->view("admin/admin_example_listmessage"); ?>

		<div class="clear"></div>

</section>

</body>