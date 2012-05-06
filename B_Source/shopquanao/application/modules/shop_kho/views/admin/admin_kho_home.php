<h2><?php echo $title;?></h2>

<div class="buttons">
	<a href="<?php print  site_url('shop_kho/admin/create')?>">
    <?php print $this->bep_assets->icon('add');?>
    <?php print $this->lang->line('kago_create')." ".$this->lang->line('kago_kho'); ?>
    </a>
</div>
<div class="clearboth">&nbsp;</div>

<?php

if (count($kho)){
    echo "<table id='tablesorter' class='tablesorter' border='1' cellspacing='0' cellpadding='3' width='100%'>\n";
    echo "<thead>\n<tr valign='top'>\n";
    echo "<th>Kho ID</th>\n<th>Ma so Kho</th><th>Ten Kho</th><th>Actions</th>\n";
    echo "</tr>\n</thead>\n<tbody>\n";
    foreach ($kho as $key => $list){
        echo "<tr valign='top'>\n";
        echo "<td align='center'>".$list['kho_id']."</td>\n";
        echo "<td align='center'>".$list['kho_code']."</td>\n";
        echo "<td align='center'>".$list['kho_name']."</td>\n";
        echo "<td align='center'>";
        echo anchor('shop_kho/admin/edit/'.$list['kho_id'],$this->bep_assets->icon('pencil'));
        //echo " | ";
        // can't use kaimonokago/admin/delete, at the moment have to use customer/admin/delete
        // this must check orphans, kaimonokago/models/delete is used after checking it
        echo anchor('shop_kho/admin/delete/'.$list['kho_id'],$this->bep_assets->icon('delete'),array("onclick"=>"return confirmSubmit('".$list['kho_name']."')"));
        echo "</td>\n";
        echo "</tr>\n";
    }
    echo "</tbody>\n</table>";
}
?>