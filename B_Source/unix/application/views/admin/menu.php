<!--
When creating a new menu item on the top-most level
Please ensure that you assign the LI a unique ID

Examples can be seen below for menu_bep_system
-->

<ul id="menu">
    <li id="menu_bep_home"><?php print anchor('admin',$this->lang->line('backendpro_dashboard'),array('class'=>'icon_house'))?></li>
    <?php if(check('System',NULL,FALSE)):?>
    <li id="menu_bep_system"><span class="icon_computer"><?php print $this->lang->line('backendpro_system')?></span>
        <ul>
            <?php if(check('Members',NULL,FALSE)):?><li><?php print anchor('auth/admin/members',$this->lang->line('backendpro_members'),array('class'=>'icon_group'))?></li><?php endif;?>
            <?php if(check('Phpinfo',NULL,FALSE)):?><li><?php print anchor('auth/admin/phpinfo',$this->lang->line('backendpro_phpinfo'),array('class'=>'icon_information'))?></li><?php endif;?>
        </ul>
    </li>
    <?php endif;?>
    <?php 
     $this->load->view($this->config->item('backendpro_template_admin') . 'kkmenu');
    ?>
   
    
</ul>