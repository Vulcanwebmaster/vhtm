<!-- Author: tienlx -->
<div id="main-column">
<ul id="mapsite">
		<li><a href="<?php echo base_url();?>">Home page</a></li>
		<li><a>:</a></li>
		<li><a>About Our Company</a></li>
	</ul>
<div id="au-title">
	<label>About Our Company</label>
</div>
<?php 
if (count($ourcompany))
foreach ($ourcompany as $key => $list)
	echo $list['content'];
?>
</div>
