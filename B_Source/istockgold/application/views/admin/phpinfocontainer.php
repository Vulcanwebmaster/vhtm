<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php print $this->bep_site->get_metatags();?>
	<title><?php print $header.' | '.$this->preference->item('site_name');?></title>
	<?php print $this->bep_site->get_variables();?>
	<?php print $this->bep_assets->get_header_assets();?>
	<?php print $this->bep_site->get_js_blocks();?>
</head>
<body>
<div id="content">
    <a name="top"></a>
    <?php print displayStatus();?>
    
    <?php
    if( isset($page))
    {
	    if( isset($module))
	    {
            $this->load->view($module."/".$page);
        }	 
        else 
        {
            $this->load->view($page);
        }
    }
    ?>
    <br style="clear: both" />
</div>
    <div id="footer">
    </div>
</div>
<?php print $this->bep_assets->get_footer_assets();?>
</body>
</html>

