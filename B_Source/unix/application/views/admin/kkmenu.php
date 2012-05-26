<?php     // adding centres for menu on the left
          // Load modules/centres/models/MCentres
          // Loading it in Admin_controller
          // $this->load->model('centres/MCentres');
          $parentid_other_work = $this->preference->item('lilly_fairies_submenu_id');
          $otherwork_categories = $this->MCats->getCategoriesDropDown($parentid_other_work);
          $parentid_other_illust = $this->preference->item('parentid_other_illust');
          //$parentid_other_illust = 27;
          $otherillust_categories = $this->MCats->getCategoriesDropDown($parentid_other_illust);
?>

<li id="menu_bep_general"><span class="icon_general"><?php print $this->lang->line('backendpro_management')?></span>
    <ul>
        <?php if($this->preference->item('gioithieu')):?><li><?php print anchor('gioithieu/admin',$this->lang->line('backendpro_gioithieu'),array('class'=>'icon_color_swatch'))?></li><?php echo "\n"; endif;?>
        <?php if($this->preference->item('hoithao')):?><li><?php print anchor('hoithao/admin',$this->lang->line('backendpro_hoithao'),array('class'=>'icon_calendar'))?></li><?php echo "\n"; endif;?>
        <?php if($this->preference->item('khoahoc')):?><li><?php print anchor('khoahoc/admin',$this->lang->line('backendpro_khoahoc'),array('class'=>'icon_television'))?></li><?php echo "\n"; endif;?>
        <?php if($this->preference->item('loaisach')):?><li><?php print anchor('loaisach/admin',$this->lang->line('backendpro_loaisach'),array('class'=>'icon_folder'))?></li><?php echo "\n"; endif;?>
        <?php if($this->preference->item('sach')):?><li><?php print anchor('sach/admin',$this->lang->line('backendpro_sach'),array('class'=>'icon_page'))?></li><?php echo "\n"; endif;?>
        <?php if($this->preference->item('camnhan')):?><li><?php print anchor('camnhan/admin',$this->lang->line('backendpro_camnhan'),array('class'=>'icon_comment'))?></li><?php echo "\n"; endif;?>
    </ul>
</li>

