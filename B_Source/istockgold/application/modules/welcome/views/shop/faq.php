<!-- Author: tienlx -->
<div id="main-column">
<div id="au-title">
	<label>FAQ</label>
</div>
<?php 
if (count($faq))
foreach ($faq as $key => $list)
	echo $list['title'];
	echo $list['content'];
?>
</div>
