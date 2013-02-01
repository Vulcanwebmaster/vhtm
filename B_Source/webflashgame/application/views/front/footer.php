<div id="footer">
	<div id="footer123">
	<ul class="links">
		<li class="first"><span>© 2013 CARRESDAS</span></li>
		<li><a href="<?php echo base_url();?>gioithieu"><span>
			<?php if ($_SESSION['lang']=="fr") 
								{?>		
									À propos de nous
								<?php } else{ ?>
									About Us
								<?php } ?></span></a></li>
		<li><a href="<?php echo base_url();?>gioithieu/dieukien"><span>
			<?php if ($_SESSION['lang']=="fr") 
								{?>		
									Conditions générales de vente
								<?php } else{ ?>
									Terms &amp; Conditions
								<?php } ?></span></a></li>
		<li><a href="<?php echo base_url();?>gioithieu/baomat/4"><span>
			<?php if ($_SESSION['lang']=="fr") 
								{?>		
									Politique de confidentialité
								<?php } else{ ?>
									Privacy Policy
								<?php } ?></span></a></li>
		<li><a href="<?php echo base_url();?>gioithieu/chuongtrinh/3"><span>
			<?php if ($_SESSION['lang']=="fr") 
								{?>		
									Programme d'affiliation
								<?php } else{ ?>
									Affiliate Program
								<?php } ?></span></a></li>
	</ul>
	<img src="<?php echo base_url();?>/assets/flash_game/images/logo.png" height="50" style="position: absolute; top:50px;"/>
	<ul class="sitemap">
		<li class="game">
			<dl>
				<dt><a href="<?php echo base_url();?>games">Games</a></dt>
				<?php foreach ($list_category as $value) 
				 { ?>
				<dd><a href="<?php echo base_url()?>games/category/<?php echo $value->id."-".$value->alias?>"><span>
					<?php if ($_SESSION['lang']=="fr") 
								{?>		
									<?php echo $value->category_namefr ?>
								<?php } else{ ?>
									<?php echo $value->category_name ?>
								<?php } ?></span></a></dd>
				<?php } ?>
			</dl>
		</li>
		<li class="tournaments">
			<dl>
				<dt><a href="<?php echo base_url();?>giaidau">
					<?php if ($_SESSION['lang']=="fr") 
								{?>		
									Tournois
								<?php } else{ ?>
									Tournaments
								<?php } ?></a></dt>
			</dl>
		</li>
		<li>
			<dl><dt><a href="<?php echo base_url();?>shop">
				<?php if ($_SESSION['lang']=="fr") 
								{?>		
									Boutique
								<?php } else{ ?>
									Shop
								<?php } ?></a></dt></dl>
		</li>
		<li>
			<dl><dt><a href="<?php echo base_url();?>helps">
				<?php if ($_SESSION['lang']=="fr") 
								{?>		
									Aider
								<?php } else{ ?>
									Help
								<?php } ?></a></dt></dl>
		</li>
	</ul>

	<div class="siteInfo">
		<table class="phone" cellspacing="0">
			<tr><?php foreach ($list_hotro as $key)
			{?>	
				<td><?php echo $key->country ?><br><b><?php echo $key->sdt ?></b><br> <?php echo $key->title ?></td>
				<!-- <td>Germany:<br><b>0900 1 41 01 41</b><br>
(€1.80/min. from a landline)</td> -->
			</tr>
			<?php }?>
		</table>
		<p>
		</p>
		<div class="email">
			<p><?php foreach ($list_hotro as $key)
			{?>
				<i><?php if ($_SESSION['lang']=="fr") 
								{?>		
									Courriel de l'équipe support :
								<?php } else{ ?>
									E-mail Support:
								<?php } ?> </i>
				<a href="mailto:support@carresdas.com"><?php echo $key->email ?></a>
				<?php } ?>
			</p>
		</div>
			<div id="absalute" style="margin-left: 10px">
						<a href="https://twitter.com/"><img src="<?php echo base_url();?>assets/flash_game/images/titwer.gif"/></a>
						<a href="https://www.youtube.com/"><img src="<?php echo base_url();?>assets/flash_game/images/tube.gif" /></a>
						<a href="http://www.facebook.com/"><img src="<?php echo base_url();?>assets/flash_game/images/face.gif"/></a>
					</div>
		<a href="#" id="poweredBy" target="_blank">
					<?php if ($_SESSION['lang']=="fr") 
								{?>		
									Games powered by CARRESDAS
								<?php } else{ ?>
									Games powered by CARRESDAS
								<?php } ?> 
		</a>
	</div>
	</div>
</div>