<!-- Author: tienlx -->
<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/tintuc.css">
<div id="main-column">
<?php 
if (count($detailnews))
foreach ($detailnews as $key => $list)
?>
<div id="au-title">
	<label><?php echo $list['title'];?></label>
</div>
<div class="box">
    <div class="cnoidung" style="padding-left: 5px;text-align: justify;"><?php echo $list['content'];?></div>
    
    <div class="clearfix"></div>
</div>
</div>
