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
    	<?php if($this->preference->item('homepage')):?><li><?php print anchor('homepage/admin',$this->lang->line('backendpro_homepage'),array('class'=>'icon_page'))?></li><?php echo "\n"; endif;?>
        <?php print anchor('gioithieu/admin',$this->lang->line('backendpro_gioithieu'),array('class'=>'icon_television'))?></li><?php echo "\n";?><br/>
    <!--	<?php if($this->preference->item('gioithieu')):?><li><?php print anchor('gioithieu/admin',$this->lang->line('backendpro_gioithieu'),array('class'=>'icon_color_swatch'))?></li><?php echo "\n"; endif;?> -->
        <?php if($this->preference->item('hoithao')):?><li><?php print anchor('hoithao/admin',$this->lang->line('backendpro_hoithao'),array('class'=>'icon_calendar'))?></li><?php echo "\n"; endif;?>
        <?php print anchor('loaikhoahoc/admin',"Loại khóa học",array('class'=>'icon_folder'))?></li><?php echo "\n";?>
        <?php if($this->preference->item('khoahoc')):?><li><?php print anchor('khoahoc/admin',$this->lang->line('backendpro_khoahoc'),array('class'=>'icon_television'))?></li><?php echo "\n"; endif;?>
        <li><a href="<?php echo base_url();?>index.php/tintuc/admin" class="icon_comment">Tin tức</a></li>
        <?php if($this->preference->item('loaisach')):?><li><?php print anchor('loaisach/admin',$this->lang->line('backendpro_loaisach'),array('class'=>'icon_folder'))?></li><?php echo "\n"; endif;?>
        <?php if($this->preference->item('sach')):?><li><?php print anchor('sach/admin',$this->lang->line('backendpro_sach'),array('class'=>'icon_page'))?></li><?php echo "\n"; endif;?>
        <?php if($this->preference->item('camnhan')):?><li><?php print anchor('camnhan/admin',$this->lang->line('backendpro_camnhan'),array('class'=>'icon_comment'))?></li><?php echo "\n"; endif;?>
        <li><a href="<?php echo base_url();?>index.php/dangky/admin" class="icon_comment">Đăng ký</a></li>
        <li><a href="<?php echo base_url();?>index.php/lienhe/admin" class="icon_television">Liên hệ</a></li>
        <?php print anchor('khoahoc/admin/home',$this->lang->line('backendpro_ql_khoahoc_default'),array('class'=>'icon_television'))?></li><?php echo "\n";?><br/>
        <?php print anchor('hoithao/admin/home',$this->lang->line('backendpro_ql_hoithao_default'),array('class'=>'icon_television'))?></li><?php echo "\n";?><br/>
        <?php print anchor('danhmuc/admin',$this->lang->line('backendpro_ql_danhmuc'),array('class'=>'icon_television'))?></li><?php echo "\n";?><br/>
        <?php print anchor('contact/admin',$this->lang->line('backendpro_ql_contact'),array('class'=>'icon_television'))?></li><?php echo "\n";?><br/>
        <?php print anchor('lichhoithao/admin',$this->lang->line('backendpro_ql_lichhoithao'),array('class'=>'icon_television'))?></li><?php echo "\n";?><br/>
        <?php print anchor('lichtest/admin',$this->lang->line('backendpro_ql_lichtest'),array('class'=>'icon_television'))?></li><?php echo "\n";?><br/>
        <?php print anchor('lichhoc/admin',$this->lang->line('backendpro_ql_lichhoc'),array('class'=>'icon_television'))?></li><?php echo "\n";?><br/>
        <?php print anchor('hoidap/admin',$this->lang->line('backendpro_ql_hoidap'),array('class'=>'icon_television'))?></li><?php echo "\n";?><br/>
        <?php print anchor('sukien/admin',$this->lang->line('backendpro_ql_sukien'),array('class'=>'icon_television'))?></li><?php echo "\n";?><br/>
		<?php print anchor('diemthi/admin',$this->lang->line('backendpro_ql_diemthi'),array('class'=>'icon_television'))?></li><?php echo "\n";?><br/>
		<?php print anchor('slide/admin',$this->lang->line('backendpro_ql_slide'),array('class'=>'icon_television'))?></li><?php echo "\n";?><br/>

    </ul>
</li>

