
<?php
$url ='http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];      
?>
<div class="box">
<div class="sitelink"><?=$link->ten?></div> 
    <div class="ctitle"><?=$rs->tieude?></div>
    <div class="cnoidung" style="padding-left: 5px;text-align: justify;"><?=$rs->noidung?></div>
    
    <div class="clearfix"></div>
    <?=$this->app_library->app($url,$rs->tieude)?>  
    <?if(count($moidang) >0){
    ?>
    <div class="tinmoidang">
        <?foreach($moidang as $md):?>
            <div class="cl_moidang"><a href="<?=base_url()?>tintuc/chi-tiet/<?=$md->idcat?>/<?=$md->id?>/<?=$md->alias.duoi()?>"><?=$md->tieude?></a></div>
        <?endforeach;?>
    </div>
        
    <?
    }?>
    <?if(count($cuhon) >0){
    ?>
    <div class="tincuhon">
        <?foreach($cuhon as $ch):?>
            <div class="cl_moidang"><a href="<?=base_url()?>tintuc/chi-tiet/<?=$ch->idcat?>/<?=$ch->id?>/<?=$ch->alias.duoi()?>"><?=$ch->tieude?></a></div>
        <?endforeach;?>
    </div>
        
    <?
    }?>
</div>

