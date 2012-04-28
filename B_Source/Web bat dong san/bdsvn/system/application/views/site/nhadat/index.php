<?php
?>

<div class="box">
<!--*************** DISPLAY EACH ITEM IN LIST *****************-->
    <?
    $k=0;
    foreach($nhadat as $rs):
    $tp = $this->load_library->loadcity($rs->id_thanhpho);
    $quan = $this->load_library->loadcity($rs->id_quan);
    ?>
    <!-- Neu la tin vip thi mau do -->
    <?php if ($rs->vip == 1) {?>
	 <div class="prd-content"  style="border-top: 2px solid red; margin-top: -2px;">
        <ul>
            <li class="vip1" style="margin-top: -2px; padding: 10px 1px 0 1px; border-top: none;">
        <div class="ct-content">
        	<div class="ct-home">    
				<h3>
                    <a title="<?=$rs->tieude?>"href="<?=base_url()?>chi-tiet/<?=$this->string_library->stringchange($this->load_library->loadnhucau($rs->nhucau))?>/<?=$rs->idtin?>/<?=$rs->url_tieude.duoi()?>"><?=$this->string_library->catchu($rs->tieude,60)?></a>
                    <img src="<?=base_url()?>skins/vip.gif" alt="">
				</h3>       
			<div>
				<div class="photo">
					<div >
						<img src="<?if($this->load_library->loadimg($rs->idtin)){echo base_url().$this->load_library->loadimg($rs->idtin)->normal;}?>" alt="">
					</div>
				</div>                
				<div class="pcontent">                          
					<?=$this->string_library->catchu($rs->noidung,60)?> 
				</div>
			</div>
                <div>
                    <div class="info">
                        <div style="float:left">
                            Giá: <span>
                            <?php echo $rs->giathue ? number_format($rs->giathue, 0, ',',',')." VNĐ / ".(($rs->matbang=='m2') ? " m<sup>2</sup>": $rs->matbang ): "Thương lượng";?></span>
                             
                            Diện tích: <span>
                            <?if($rs->dai==0){echo stripos($rs->dientich, 'ha') ? 'Diện tích: '.$rs->dientich : 'Diện tích: '.$rs->dientich.' m<sup>2</sup>';}else{ echo 'Rộng x Dài: '.$rs->rong; echo ' x '.$rs->dai.' m';}?> </span>   
                            Quận/huyện: 
                            
                            <span>
							<?if($quan){?>
                			<?=$quan->ten?>
                			<?}?>
                			<?php echo " , "?> 
							<?=$tp->ten?>
                            </span>
                        </div>
                         
                    </div>
                </div>                

        </div>
    </div>
            </li> 
        </ul>
    </div> 
    <?php }?>
    
    
    
	<?php if ($rs->vip == 0) {?>
	<div class="prd-content"  style="border-top: 2px solid #009AD2; margin-top: -2px;">

        <ul>
            
            <li  style="margin-top: -1px; padding: 0px 1px; border: 2px solid #009AD2; border-top:none; border-top: none;">
        <div class="ct-content">
        
		<div class="ct-home">    
                	<h3>
					<a title="<?=$rs->tieude?>" href="<?=base_url()?>chi-tiet/<?=$this->string_library->stringchange($this->load_library->loadnhucau($rs->nhucau))?>/<?=$rs->idtin?>/<?=$rs->url_tieude.duoi()?>">
<?=$this->string_library->catchu($rs->tieude,60)?></a>
                	</h3>       
                <div>
                    <div class="photo">
                           <div >
                    <img src="<?if($this->load_library->loadimg($rs->idtin)){echo base_url().$this->load_library->loadimg($rs->idtin)->normal;}?>" alt="">
                 </div>
                         
                    </div>                
                    <div class="pcontent">                          
                       <?=$this->string_library->catchu($rs->noidung,60)?>
                    </div>
                </div>
                <div>
                    <div class="info">
                        <div style="float:left">
                            Giá: <span>
                            <?php echo $rs->giathue ? number_format($rs->giathue, 0, ',',',')." VNĐ / ".(($rs->matbang=='m2') ? " m<sup>2</sup>": $rs->matbang ): "Thương lượng";?></span>
                             
                            Diện tích: <span>
                            <?if($rs->dai==0){echo stripos($rs->dientich, 'ha') ? 'Diện tích: '.$rs->dientich : 'Diện tích: '.$rs->dientich.' m<sup>2</sup>';}else{ echo 'Rộng x Dài: '.$rs->rong; echo ' x '.$rs->dai.' m';}?> </span>   
                            Quận/huyện: 
                            
                            <span>
							<?=$tp->ten?>
                			<?if($quan){?>
                			<?=$quan->ten?>
                			<?}?> 
                            </span>
                        </div>
                         
                    </div>
                </div>                

        </div>
    </div>
    
    
<script type="text/javascript">
    function togvideo(id) {
        $("#togvideo_" + id).slideToggle(0);
    };
</script>

            </li> 
        </ul>

    </div>
    <?php }?>


    <?$k=1-$k;
    endforeach;?>
    <div class="pages"><?=$pagination?></div>
</div>
