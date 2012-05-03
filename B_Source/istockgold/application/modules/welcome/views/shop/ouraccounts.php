<!-- Author: tienlx -->
<div id="main-column">
<div id="au-title">
	<label>Our Accounts</label>
</div>
<?php 
if (count($ouraccounts))
foreach ($ouraccounts as $key => $list)
	echo $list['content'];
?>
</div>
