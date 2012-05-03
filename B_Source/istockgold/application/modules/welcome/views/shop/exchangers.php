<!-- Author: tienlx -->
<div id="main-column">
<div id="au-title">
	<label>Buy/Sell LR</label>
</div>
<?php 
if (count($exchangers))
foreach ($exchangers as $key => $list)
	echo $list['content'];
?>
</div>
