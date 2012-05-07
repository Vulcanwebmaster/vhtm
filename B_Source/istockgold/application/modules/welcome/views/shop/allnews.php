<!-- Author: tienlx -->
<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/tintuc.css">
<div id="main-column">
<div id="au-title">
	<label>All News</label>
</div>
<div class="box">
<?php foreach ($allnews as $rs):?> 
	<div class="ctitle"><a href="<?php echo base_url();?>index.php/welcome/detailnews/<?php echo $rs->id;?>"><img alt="" src="<?php echo base_url();?>assets/images/checked.png"/><?php echo $rs->title?></a></div>
    <br/>
<?php endforeach;?>
</div>
</div>
