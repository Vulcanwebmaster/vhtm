<!-- Author: tienlx -->
<div id="main-column">
<ul id="mapsite">
		<li><a href="<?php echo base_url();?>">Home</a></li>
		<li>></li>
		<li><a>Download</a></li>
	</ul>
<div id="au-title">
	<label>Download</label>
</div>
<?php 
if (count($download))
foreach ($download as $key => $list)
	echo $list['content'];
?>
</div>
