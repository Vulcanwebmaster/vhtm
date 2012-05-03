<!-- Author: tienlx -->
<div id="main-column">
<div id="au-title">
	<label>Merchants</label>
</div>
<?php 
if (count($merchants))
foreach ($merchants as $key => $list)
	echo $list['content'];
?>
</div>
