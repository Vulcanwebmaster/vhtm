<article class="module width_full">
<?php foreach ($listuserid as $rowid)?>
			<header><h3><?php echo $rowid->name?>'s Message</h3></header>
				<div class="module_content">
				
					<h2><?php echo $rowid->subject?></h2>
					<h3>by <?php echo $rowid->name?></h3>
					<h4>from <?php echo $rowid->email?></h4>
					<h5>on <?php echo $rowid->date?></h5>
					<p><?php echo $rowid->yourmessage?></p>
				</div>
</article><!-- end of styles article -->

