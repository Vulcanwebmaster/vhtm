<script type="text/javascript" src="<?php echo base_url();?>assets/js/js-list.js"></script>
<form method="post" action="<?php echo base_url() ?>index.php/m_references/addCategory/<?php echo $craftsmanId ?>">
	<div id="vaddCategory" class="mask2" style="left: 566.5px; top: 213px; display: block;">
		<p class="exit">X</p>
	    <div>Category title:</div>
	    <div id="input1"><input type="text" name="category_title"/></div>
	    <div id="input2"><input type="submit" name="submit" value="Add category"/></div>
	</div>
</form>