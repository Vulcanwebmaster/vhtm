<?php
echo $_REQUEST['val1'];
echo "<br />";
echo $_REQUEST['val2'];
?>
<form>
<input type="text" id="val1" value="">
<input type="text" id="val2" value="">
<input type="button" value="submit" onclick="javascript:updateContentsPostForm('box1','TEMP_form.php',new Array('val1','val2'))">
</form>