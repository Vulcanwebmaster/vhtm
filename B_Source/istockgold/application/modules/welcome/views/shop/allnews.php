<!-- Author: tienlx -->
<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/tintuc.css">
<div id="main-column">
<div id="au-title">
	<label>All News</label>
</div>
<div class="box">
<?foreach ($allnews as $rs):?> 
	<div class="ctitle"><a href="<?php echo base_url()?>index.php/welcome/detailnews/<?=$rs->id;?>"><img alt="" src="<?php echo base_url()?>assets/images/checked.png"/><?=$rs->title?></a></div>
    <br/>
<?endforeach;?>
</div>
</div>
