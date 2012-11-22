<section id="main" class="column">
    <?php print (isset($content)) ? $content : NULL; ?>
    <?php
    if( isset($page)){
    if( isset($module)){
            $this->load->view($module."/".$page);
        } else {
            $this->load->view($page);
        }}
    ?>
<div class="spacer"></div>
</section>