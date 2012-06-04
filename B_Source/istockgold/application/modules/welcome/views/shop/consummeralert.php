<script type="text/javascript">
	$(document).ready(function(){
		$('#consummeralert').removeClass('menu-text');
		$('#consummeralert').css('color','#ce0701');
	});
</script>

<!-- Author: tienlx -->
<div id="main-column">
<ul id="mapsite">
		<li><a href="<?php echo base_url();?>">Home</a></li>
		<li>></li>
		<li><a>Consummer-Alert</a></li>
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
