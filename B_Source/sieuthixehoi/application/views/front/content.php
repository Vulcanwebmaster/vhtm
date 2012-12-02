<!-- BEGIN .content-wrapper -->
<div class="content-wrapper">
		<!-- BEGIN .content -->
	<div class="content">
	

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
	</div>
</div>