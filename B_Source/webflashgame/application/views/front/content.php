
	<?php 
		//   print displayStatus();
		print (isset($content)) ? $content : NULL; 
		if(isset($page))
		{
			if( isset($module))
			{
				$this->load->view($module.'/'.$page);
			} 
			else 
			{
				$this->load->view($page);
			}
		}
	?>
