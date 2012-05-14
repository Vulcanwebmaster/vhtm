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

<li id="menu_bep_general"><span class="icon_general"><?php print $this->lang->line('backendpro_general')?></span>
    <ul>
        
        <?php if(check('Category',NULL,FALSE) && $this->preference->item('category')):?><li><?php print anchor('category/admin',$this->lang->line('backendpro_category'),array('class'=>'icon_category'))?></li><?php echo "\n"; endif;?>
        <?php if(check('Customers',NULL,FALSE) && $this->preference->item('customers')):?><li><?php print anchor('customer/admin',$this->lang->line('backendpro_customers'),array('class'=>'icon_user_suit'))?></li><?php echo "\n"; endif;?>
        <?php if(check('Orders',NULL,FALSE) && $this->preference->item('orders')):?><li><?php print anchor('orders/admin',$this->lang->line('backendpro_orders'),array('class'=>'icon_cake'))?></li><?php echo "\n"; endif;?>
        <?php if(check('Slideshow',NULL,FALSE) && $this->preference->item('slideshow')):?><li><?php print anchor('slideshow/admin',$this->lang->line('backendpro_slideshow'),array('class'=>'icon_television'))?></li><?php echo "\n"; endif;?>
        <?php if(check('Products',NULL,FALSE) && $this->preference->item('products')):?><li><?php print anchor('products/admin',$this->lang->line('backendpro_products'),array('class'=>'icon_color_swatch'))?></li><?php echo "\n"; endif;?>
        <li><?php print anchor('shop_kho/admin',$this->lang->line('backendpro_kho'),array('class'=>'icon_kho'))?></li><?php echo "\n";?>
        <li><?php print anchor('shop_search/admin',$this->lang->line('backendpro_search'),array('class'=>'icon_search'))?></li><?php echo "\n";?>
        
    </ul>
</li>

