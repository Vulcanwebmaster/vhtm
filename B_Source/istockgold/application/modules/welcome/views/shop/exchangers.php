<!-- Author: tienlx -->
<div id="main-column">
<ul id="mapsite">
		<li><a href="<?php echo base_url();?>">Home</a></li>
		<li>></li>
		<li><a>Buy/sell-LR</a></li>
	</ul>
<div id="au-title">
	<label>Buy/Sell LR</label>
</div>
<?php 
if (count($exchangers))
foreach ($exchangers as $key => $list)
	echo $list['content'];
?>
</div>
