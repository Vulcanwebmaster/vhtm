<script type="text/javascript">
	$(document).ready(function(){
		$('#merchangers').removeClass('menu-text');
		$('#merchangers').css('color','#ce0701');
	});
</script>

<!-- Author: tienlx -->
<div id="main-column">
<ul id="mapsite">
		<li><a href="<?php echo base_url();?>">Home</a></li>
		<li>></li>
		<li><a>Merchants</a></li>
	</ul>
<div id="au-title">
	<label>Merchants</label>
</div>
<?php 
if (count($merchants))
foreach ($merchants as $key => $list)
	echo $list['content'];
?>
</div>
