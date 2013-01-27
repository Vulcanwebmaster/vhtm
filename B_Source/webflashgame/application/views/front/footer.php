<div id="footer">
	<div id="footer123">
	<ul class="links">
		<li class="first"><span>© 2013 Funstage</span></li>
		<li><a href="<?php echo base_url();?>gioithieu"><span>About Us</span></a></li>
		<li><a href="<?php echo base_url();?>helps/dieukien"><span>Terms &amp; Conditions</span></a></li>
		<li><a href="<?php echo base_url();?>helps/dieukien"><span>Privacy Policy</span></a></li>
		<li><a href="<?php echo base_url();?>chuongtrinh"><span>Affiliate Program</span></a></li>
		<li><a href="http://m.gametwist.com/"><span>Mobile Version</span></a></li>
		<li><a href="<?php echo base_url();?>chuongtrinh"><span>Responsible gaming</span></a></li>
	</ul>
	<img src="<?php echo base_url();?>/assets/flash_game/images/logo.png" height="50" style="position: absolute; top:50px;"/>
	<ul class="sitemap">
		<li class="game">
			<dl>
				<dt><a href="<?php echo base_url();?>games">Games</a></dt>
				<?php foreach ($list_category as $value) 
				 { ?>
				<dd><a href="<?php echo base_url()?>games/category/<?php echo $value->id."-".$value->alias?>"><span><?php echo $value->category_name ?></span></a></dd>
				<?php } ?>
			</dl>
		</li>
		<li class="tournaments">
			<dl>
				<dt><a href="<?php echo base_url();?>giaidau">Tournaments</a></dt>
			</dl>
		</li>
		<li>
			<dl><dt><a href="<?php echo base_url();?>shop">Shop</a></dt></dl>
		</li>
		<li>
			<dl><dt><a href="<?php echo base_url();?>helps">Help</a></dt></dl>
		</li>
	</ul>
	<div class="siteInfo">
		<table class="phone" cellspacing="0">
			<tr>
				<td>Austria:<br><b>0900 49 99 44</b><br> (€1.80/min. from a landline)</td>
				<td>Germany:<br><b>0900 1 41 01 41</b><br>
(€1.80/min. from a landline)</td>
			</tr>
		</table>
		<p>Hotline: 7 days a week (excl. public holidays), 8am - 10pm CET
		</p>
		<div class="email">
			<p>
				<i>E-mail Support: </i>
				<a href="mailto:support@gametwist.com">support@gametwist.com</a>
			</p>
		</div>
		<a href="#" id="poweredBy" target="_blank">
					Games powered by GREENTUBE
		</a>
	</div>
	</div>
</div>