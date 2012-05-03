<!-- Author: tienlx -->
<div id="main-column">
<div id="au-title">
	<label>Consummer Alert</label>
</div>
<?php 
if (count($consummeralert))
foreach ($consummeralert as $key => $list)
	echo $list['content'];
?>
</div>
