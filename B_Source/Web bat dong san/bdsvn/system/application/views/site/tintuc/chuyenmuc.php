<?if($top){?> 
<div class="box">
<div class="sitelink"><?=$link->ten?></div>   
<div class="bbox" style="margin-bottom: 20px;overflow: hidden;">
            <img src="<?=base_url().$top->hinhanh?>" alt="" style="width: 300px;float: left;padding-right: 10px;">
            <div style="font-size: 20px;line-height: 25px;"><?=anchor('tintuc/chi-tiet/'.$top->idcat.'/'.$top->id.'/'.$top->alias.duoi(),$top->tieude)?></div>
            <?=$top->noidungngan?>
</div>



        <div style="width: 100%;float: left;">
            <ul>
                <?php
                foreach($list as $rs):  
                ?>
                <li style="border-bottom: 1px dotted #e5e5e5; overflow: hidden;padding: 5px 0px;">

                        <div class="listtin">
                        
                        <span><img src="<?=base_url().$rs->hinhanh?>" alt=""></span>
                        <div class="tieude"><?=anchor('tintuc/chi-tiet/'.$rs->idcat.'/'.$rs->id.'/'.$rs->alias.duoi(),$rs->tieude)?> </div>
                        <?=$rs->noidungngan?>
                        </div>

                    
                </li> 
                <?endforeach;?>
            </ul>
     </div>
     <div class="pages"><?=$pagination?></div>   


 </div>
 

<?}else{
    echo 'Không tìm thấy bài viết trong chuyên mục này';
}?>
