<div class="box">
    <div class="title">KẾT QUẢ TÌM KIẾM</div>
    <?if(count($list) >0){?>
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
                <img src="<?=base_url()?>skins/vip.gif" alt="">
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
    <?}else{?>
        <div style="text-align: center;">Không tìm thấy kết quả tìm kiếm</div>
    <?}?>
</div>
<script>
function GoToPage(page_no)      
 {     
    var nhucau='<?=$nhucau?>';
    var sectionid='<?=$sectionid?>';
    var giatu='<?=$giatu?>';
    var giaden='<?=$giaden?>';
    var id_thanhpho='<?=$id_thanhpho?>';
    var idhuong='<?=$idhuong?>';
    var item_per_page='<?=$limit?>';
        $("#nhadat").html('<div align="center"><image src="<?=base_url()?>skins/loading.gif"></div>');

        $.post("<?=base_url()?>nhadat/timkiem/",{'page_no':page_no,'item_per_page':item_per_page,'nhucau':nhucau,'sectionid':sectionid,'giatu':giatu,'giaden':giaden,'id_thanhpho':id_thanhpho,'idhuong':idhuong},function(data)
            {
                
                $("#nhadat").html(data);
            });
}

</script>