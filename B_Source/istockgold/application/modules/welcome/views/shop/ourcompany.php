<!-- Author: tienlx -->
<div id="main-column">
<div id="au-title">
	<label>About Our Company</label>
</div>
<?php 
if (count($ourcompany))
foreach ($ourcompany as $key => $list)
	echo $list['content'];
?>
</div>
