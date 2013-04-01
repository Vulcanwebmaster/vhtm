	<html>
	<head>
		<title>Auto News - Trang tu dong lay tin tuc - Hoc PHP & MySQL o Ha Noi</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	</head>
	<body>
	<?php 
	set_time_limit(0);  
	include ("laytin.php"); 
	$urlwebsite="http://dantri.com.vn/suc-manh-so.htm"; 
	$links=DanTri_TrangChu($urlwebsite);
	
	foreach ($links as $td => $url){
		
		//echo $url; 
		$tin=DanTri_Lay1Tin($urlwebsite,$url); 
		if ($this->session->userdata('result')!='')
		{
			echo '<p style="color:red; padding-left:30px">';
			echo $this->session->userdata('result');
			$this->session->unset_userdata('result');
			echo '</p>';
		}
		
		flush(); 
		LuuTinVaoDB($tin, $url,"http://dantri.com.vn/"); 
		next($links); 
	} 
	echo "<hr>"; 
	?>
	<br />
	<br />
	<br />
	
	
	</body>
	</html>