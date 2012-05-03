<!-- Author: tienlx -->
<div id="main-column">
<div id="au-title">
	<label>Service Fees</label>
</div>
<?php 
if (count($servicefees))
foreach ($servicefees as $key => $list)
	echo $list['content'];
?>
</div>
