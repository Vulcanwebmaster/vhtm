<div id="navigation">
	<div id="outer_wrapper">
  		<div id="wrapper">
			<div id="container_2cl">
			    <?php print $this->load->view($this->config->item('backendpro_template_admin') . 'menu');?>
			    <?php print displayStatus();?>
			    <?php print (isset($content)) ? $content : NULL; ?>
			    <?php
			    if( isset($page)){
			    if( isset($module)){
			            $this->load->view($module."/".$page);
			        } else {
			            $this->load->view($page);
			        }}
			    ?>
			</div>
		<div class="clearing">&nbsp;</div>
   	</div>
</div>
</div>