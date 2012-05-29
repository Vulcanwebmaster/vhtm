
<?php
$url ='http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];      
?>
<div class="box">
<div class="sitelink"><?=$link->ten?></div> 
    <div class="ctitle"><?php
     if($language == 1)
    	echo $rs->tieude;
	if($language == 2)
		echo $rs->tieude_eng;
	else
		echo $rs->tieude;
	?>
    	</div>
    <div class="cnoidung" style="padding-left: 5px;text-align: justify;"><?php
			if($language == 1)
				echo $rs->noidung;
			if($language == 2)
				if ($rs->noidung_eng != "")
					echo $rs->noidung_eng;
				else {
					echo $this->lang->line('ko_co_nd');
				} 
    ?></div>
    
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

