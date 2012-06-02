<!-- Author: tienlx -->
<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/tintuc.css">
<div id="main-column">
	<ul id="mapsite">
		<li><a href="<?php echo base_url();?>">Home</a></li>
		<li>></li>
		<li><a>News</a></li>
	</ul>
<div id="au-title" style="clear:both">
	<label>All News</label>
</div>
<div class="box">
<?php foreach ($allnews as $rs):?> 
	<div class="ctitle"><a href="<?php echo base_url();?>detailnews/<?php echo $rs->id;?>"><img style="border-style:none; margin-right:7px" alt="" src="<?php echo base_url();?>assets/images/ico_n.gif"/><?php echo $rs->title?></a></div>
    <br/>
<?php endforeach;?>
</div>
</div>
