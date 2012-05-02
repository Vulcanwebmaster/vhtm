 <div style="width: 78%;float: left;">
     <fieldset>
        <legend>Quản lý quảng cáo</legend>
        <table class="adminlist">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tên quảng cáo</th>
                    <th>Vị trí</th>
                    <th>Chức năng</th>
                </tr>
            </thead>
            <?$k=1;
            foreach($list as $rs):
            
            ?>
            <tr class="row<?=$k?> record">
                <td width="30"><?=$rs->id?></td>
                <td><?=$rs->name?></td>
                <td>
                <?=$this->quangcao->getItemDanhmuc($rs->id_dm)->name?>
                </td>

                <td align="center">

                <?=$this->icon_library->edit('quangcao/capnhat/'.$rs->id)?>
                <!-- <?=$this->icon_library->publish('quangcao/bat/'.$rs->id.'/'.$rs->bat,$rs->bat)?> -->
                <?=$this->icon_library->del($rs->id)?>
                </td>
            </tr>
            <?
            $k=1-$k;
            endforeach;?>
           
        </table>
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
                    <?=$this->icon_library->add('quangcao/themmoi')?>
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
    if(confirm("Bạn có chắc chắn muốn xóa quảng cáo này?"))
    {
        $.ajax({
        type: "POST",
        url: "<?=base_url()?>quangcao/xoaquangcao/"+info,
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