<html>
<head>
<title>test view</title>
<script type="text/javascript" src="../jsframework/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="../jsframework/ajax-base.js"></script>
<link rel="stylesheet" type="text/css" href="../cssmodules/style.css" />
</head>
<body>
Got variable: <?php echo $passedVariable; ?>
<br />
Craftsman name: <?php echo $craftsmanName; ?>
<br />
<table>
 <tr>
  <td>
   <div class="unselected">unselected</div>
  </td>
 </tr>
 <tr>
  <td>
   <div class="hoovered">hoovered</div>
  </td>
 </tr>
 <tr>
  <td>
   <div class="selected">selected</div>
  </td>
 </tr>
</table>
<?php
$CI =& get_instance();
$BASE_URL = $CI->config->item('base_url');
?>
<form action="<?php echo $BASE_URL; ?>index.php/m_example?variable=3" method="post" enctype="multipart/form-data">
	<input type="file" name="fileupload" />
	<input type="submit" value="Upload" />
</form>
<img src="<?php echo $BASE_URL; ?>showfile.php?id=21">
</body>