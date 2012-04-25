
<div id="wrap_left" style="width: 500px;" class="fl">  
<div id="homechuyenmuc">
    <ul>
    <?foreach($chuyenmuc as $cm):
    $top = $this->tintuc->getTinDanhmuc($cm->id);
    $listsub = $this->tintuc->getSubCat($cm->id);
    ?>
        <li class="box">
        <div class="head-nuocbien">
            <div class="head-right"></div>
            <div style="width: 97%;overflow: hidden;">
                <div class="t15 fl"><?=anchor('tintuc/chuyen-muc/'.$cm->id.'/'.$cm->alias.duoi(),$cm->ten)?></div>
                <div class="item10x6 fr">
                    <ul>
                     <?foreach($listsub as $sub):?>
                        <li><?=anchor('tintuc/chuyen-muc/'.$sub->id.'/'.$sub->alias.duoi(),$sub->ten)?></li>
                     <?endforeach;?>   
                    </ul>
                </div>
                <div style="width: 10%;float: left;">
                    <a href="<?=base_url()?>rss/tintuc/<?=$cm->id?>/<?=$cm->alias.duoi()?>">
                        <img src="<?=base_url()?>system/application/views/theme/site/vnit/images/rss.png" alt="">
                    </a>
                </div>
            </div> 

        </div>
        <div class="boder-cam">
            
            <?if($top){
             $sec = $this->tintuc->getTinDanhmucListHome($cm->id,$top->id);
                ?>
            <div class="toptin_cat fl">
                <div class="hinhanh">
                    <img src="<?=base_url().$top->hinhanh?>" alt="<?=$top->tieude?>">
                </div>
                <div class="noidung">
                    <div class="t14"><?=anchor('tintuc/chi-tiet/'.$top->idcat.'/'.$top->id.'/'.$top->alias.duoi(),$top->tieude)?></div>
                    <div><?=$this->string_library->catchu($top->noidungngan,220)?></div>
                </div>
            </div>
            <div class="toptin_cat_list fl" style="width:100%">
                <ul>
                <?foreach($sec as $sc):?>
                    <li><a href="<?=base_url()?>tintuc/chi-tiet/<?=$sc->idcat?>/<?=$sc->id?>/<?=$sc->alias.duoi()?>"><?=$sc->tieude?></a></li>
                <?endforeach;?>
                </ul>
            </div>
        </div>
        <div class="bottom-cam">
            <div class="bottom-right"></div>
        </div>
            <?}?>
        </li>
    <?endforeach;?>
    </ul>
</div>
</div>
