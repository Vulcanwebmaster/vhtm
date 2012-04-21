   <div style="width: 78%;float: left;">
     <fieldset>
        <legend>Quản lý bài viết</legend>
        <table class="adminlist">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tiêu đề</th>
                    <th width="150">Thể loại</th>
                    <th width="30">VIP</th> 
                    <th width="70">Chức năng</th>
                    
                </tr>
            </thead>
            <?$k=1;
            foreach($list as $rs):
            
            ?>
            <tr class="row<?=$k?> record">
                <td width="30"><?=$rs->idtin?></td>
                <td><?=$rs->tieude?></td>
                <td>
                <?=$this->nhadats->loaddanhmuc($rs->sectionid)->danhmuc?>
                </td>
                <td>
                    <?if($rs->vip==1){?>
                        <img src="<?=base_url()?>skins/vip.gif" alt="">
                    <?}?>
                </td>
                <td align="center">

                <?=$this->icon_library->edit('nhadats/capnhattin/1/'.$rs->idtin.'/'.$this->uri->segment(3))?>
                <?=$this->icon_library->publish('nhadats/battin/'.$rs->idtin.'/'.$rs->bat,$rs->bat)?>
                <?=$this->icon_library->del($rs->idtin)?>
                </td>
            </tr>
            <?
            $k=1-$k;
            endforeach;?>
           
        </table>
        <div class="pages"><?=$pagination?></div>
     </fieldset>
 </div>
 
 <div style="width: 21%;float: right;">
 <div class="toolbar_box">
    <div class="t">
        <div class="t">
            <div class="t"></div>
        </div>
    </div>
    <div class="m">
        <div class="toolbar-list">
            <ul>
                <li>
                    <?=$this->icon_library->add('nhadats/themmoi/1')?>
                </li>
                <li>
                    <a class="toolbar"><span class="icon-32-save"></span>Lưu</a>
                </li>
                <li>
                    <a class="toolbar"><span class="icon-32-trash"></span>Xóa</a>
                </li>                 
                <li class="divider"></li>                
                <li>
                    <?=$this->icon_library->cancel('admin/quantri')?> 
                </li>
                
            </ul>
        </div>
    </div>
   
 </div>
 </div>
<script type="text/javascript">
$(function() {
$(".delbutton").click(function(){
var element = $(this);
var del_id = element.attr("id");
var info =del_id;
    if(confirm("Bạn có chắc chắn muốn xóa thể loại này?"))
    {
        $.ajax({
        type: "POST",
        url: "<?=base_url()?>nhadats/xoatin/"+info,
        data: info,
        success: function(){
        }
        });    
        $(this).parents(".record").animate({ backgroundColor: "#fbc7c7" }, "fast")
        .animate({ opacity: "hide" }, "slow");

     }
    return false;
});
});
</script>
