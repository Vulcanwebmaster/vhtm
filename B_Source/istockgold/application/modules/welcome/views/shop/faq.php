<!-- Author: tienlx -->
<div id="main-column">
<ul id="mapsite">
		<li><a href="<?php echo base_url();?>">Home</a></li>
		<li>></li>
		<li><a>Hows</a></li>
	</ul>
<div id="au-title">
	<label>FAQ</label>
</div>
<?php 
if (count($faq))
foreach ($faq as $key => $list)
	echo $list['content'];
?>
</div>
