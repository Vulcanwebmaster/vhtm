<div class="box">
    <div class="title"><?=$link->ten?></div>
    <table cellpadding="0" cellspacing="0" style="width: 100%;">
    <?
    $k=0;
    foreach($list as $rs):
    $tp = $this->load_library->loadcity($rs->id_thanhpho);
    $quan = $this->load_library->loadcity($rs->id_quan);
    ?>
        <tr class="row0">
            <td class="ctheloai" style="padding: 3px;">
                <div style="background: url(<?if($this->load_library->loadimg($rs->idtin)){echo base_url().$this->load_library->loadimg($rs->idtin)->normal;}?>) no-repeat;border: 1px solid #e5e5e5;padding: 0px;width: 60px;height: 40px;">
                    <img src="<?=base_url()?>uploads/spacer.gif" alt="">
                 </div>
            </td>  
            <td class="ctieude">
                <div>
                    <a title="<?=$rs->tieude?>" href="<?=base_url()?>chi-tiet/<?=$this->string_library->stringchange($this->load_library->loadnhucau($rs->nhucau))?>/<?=$rs->idtin?>/<?=$rs->url_tieude.duoi()?>">
                        <?=$this->string_library->catchu($rs->tieude,60)?>
                    </a>
                </div>
                <div class="dt"><?if($rs->dai==0){echo stripos($rs->dientich, 'ha') ? 'Diện tích: '.$rs->dientich : 'Diện tích: '.$rs->dientich.' m<sup>2</sup>';}else{ echo 'Rộng x Dài: '.$rs->rong; echo ' x '.$rs->dai.' m';}?></div>
                <div class="gia">Giá: <?php echo $rs->giathue ? number_format($rs->giathue, 0, ',',',')." VNĐ / ".(($rs->matbang=='m2') ? " m<sup>2</sup>": $rs->matbang ): "Thương lượng";?></div>
            </td>
            <td class="cdate">
                <?=$this->string_library->format_date($rs->batdau,'d-m')?><br>
                <?if($rs->vip==1){?>
                <img src="<?=base_url()?>skins/vip.gif" alt="">    
                <?}?>
            </td>
            <td class="cthanhpho">
                <a href="<?=base_url()?>khuvuc/<?=$tp->idthanhpho?>/index.html"><?=$tp->ten?></a>
                <br>
                <?if($quan){?>
                <a href="<?=base_url()?>khuvuc/<?=$quan->idthanhpho?>/index.html"><?=$quan->ten?></a>
                <?}?>
            </td>
        </tr>

    <?$k=1-$k;
    endforeach;?>           
    </table>
<div class="pages"><?=$pagination?></div>
</div>