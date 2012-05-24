<!-- Author: tienlx -->
<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/tintuc.css">
<div id="main-column">
	<ul id="mapsite">
		<li><a href="<?php echo base_url();?>">Home page</a></li>
		<li><a>:</a></li>
		<li><a>All news</a></li>
	</ul>
<div id="au-title" style="clear:both">
	<label>All News</label>
</div>
<div class="box">
<?php foreach ($allnews as $rs):?> 
	<div class="ctitle"><a href="<?php echo base_url();?>index.php/welcome/detailnews/<?php echo $rs->id;?>"><img style="border-style:none" alt="" src="<?php echo base_url();?>assets/images/ico_n.gif"/><?php echo $rs->title?></a></div>
    <br/>
<?php endforeach;?>
</div>
</div>
