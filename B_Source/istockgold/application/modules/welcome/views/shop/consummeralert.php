<!-- Author: tienlx -->
<div id="main-column">
<ul id="mapsite">
		<li><a href="<?php echo base_url();?>">Home page</a></li>
		<li><a>:</a></li>
		<li><a>Consummer Alert</a></li>
	</ul>
<div id="au-title">
	<label>Consummer Alert</label>
</div>
<?php 
if (count($consummeralert))
foreach ($consummeralert as $key => $list)
	echo $list['content'];
?>
</div>
