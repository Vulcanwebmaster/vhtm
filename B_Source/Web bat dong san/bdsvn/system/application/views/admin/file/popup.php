  <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd"> 
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title><?=$title?></title>
<link rel="stylesheet" type="text/css" href="<?=base_url()?>system/application/views/theme/admin/vnit/css/menu.css">
<link rel="stylesheet" type="text/css" href="<?=base_url()?>system/application/views/theme/admin/vnit/css/style.css">
<link rel="stylesheet" type="text/css" href="<?=base_url()?>system/application/views/theme/admin/vnit/css/icon.css">
<link rel="stylesheet" type="text/css" href="<?=base_url()?>system/application/views/theme/system/css/system.css">
<script type="text/javascript" src="<?=base_url()?>system/application/views/theme/system/js/jquery-core.js"></script>

</head>
<body>
<? $name = $this->uri->segment('3');?>   
<script type="text/javascript">
function insertToPartent(text){
opener.document.adminform.<?=$name?>.value  = text;
window.close();
}
</script>
<div style="width: 500px;float: left;">
<?=form_open_multipart('quanlyfile/uploadpop/'.$this->uri->segment(3),array('name'=>'up'))?> 
 <fieldset>
    <legend>Upload File</legend>
    <table>
        <tr>
            <td>File <input type="file" name="file"><input type="submit" name="submit" value="Upload"></td>
        </tr>
        
    </table>
 </fieldset>
 <?=form_close()?>
     <fieldset>
        <legend>Quản lý File</legend>
        <div class="list">
        <table class="adminlist">
            <thead>
                <tr>
                    <th  width="20">ID</th>
                    <th width="50">Hình ảnh</th>
                    <th>Tên File</th>


                    <th  width="40">Xóa</th>
                </tr>
            </thead>
           <?$k=1;
           foreach($list as $rs):
           ?>
           <tr  class="row<?=$k?> record">
                <td><?=$rs->id?></td>
                <td><img src="<?=base_url().$rs->duongdan?>" alt="" style="width: 50px; height: 50px;"></td>
                <td><a href="javascript:insertToPartent('<?=$rs->duongdan?>');"><?=$rs->tenfile?></a></td>

                <td align="center">


                <?=$this->icon_library->del($rs->id)?>
                </td>
           </tr>
           <?
           $k = 1-$k;
           endforeach;?>
           
        </table>
        <div class="pages"><?=$pagination?></div>
        </div>  
     </fieldset>
 </div>

 
<script type="text/javascript">
$(function() {
$(".delbutton").click(function(){
var element = $(this);
var del_id = element.attr("id");
var info =del_id;
    if(confirm("Bạn có chắc chắn muốn xóa File này?"))
    {
        $.ajax({
        type: "POST",
        url: "<?=base_url()?>quanlyfile/delfile/"+info,
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
</body>
</html>