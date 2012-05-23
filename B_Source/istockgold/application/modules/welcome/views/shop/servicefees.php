<!-- Author: tienlx -->
<div id="main-column">

	<ul id="mapsite">
		<li><a href="<?php echo base_url();?>">Home page</a></li>
		<li><a>:</a></li>
		<li><a>Service fees</a></li>
	</ul>
	<!-- hr style="clear:both; border:solid 1px silver; border-style:solid none none none"/ -->

<div id="au-title">
	<label>Service Fees</label>
</div>
<?php 
if (count($servicefees))
foreach ($servicefees as $key => $list)
	echo $list['content'];
?>
</div>
