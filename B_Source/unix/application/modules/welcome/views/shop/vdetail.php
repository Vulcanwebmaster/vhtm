<div id="main">
	<h1 style="text-align:center;color:#4f4e4e"><?php echo $maintitle;?></h1>
	<center>
		<fieldset style="border:solid 1px silver; border-radius:5px; padding:15px; text-align:justify; width:70%; margin-bottom:15px">
			<?php
				if (isset($dulieu))
				{
					echo $dulieu->dulieu;
				}
			?>
		</fieldset>
	</center>
</div>