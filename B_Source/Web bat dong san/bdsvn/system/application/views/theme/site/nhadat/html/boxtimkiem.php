<script>
    var sectionid = 0;
    var parentid = 0;
    var id_thanhpho = 0;
    var id_quan = 0;

    LoadDanhmuc(sectionid);
    LoadThanhpho(id_thanhpho); 
     function LoadDanhmuc(value,subvalue){    
        if(value!=0)
        {
            $.post("<?=base_url()?>nhadat/loadloaithanh/",
                {
                    //path     : "member",
                    sectionid  : value},
                    function (data) {
                    //alert(data);
                    $("#subcon").html(data);
                }
            );                       
        }else{
            if(subvalue)
            document.getElementById("subcon").innerHTML="<select name='parentid' style='width:200px;'><option value='0' >Chọn Danh mục con</option></select>";
        }
        
    }
    
    
     function LoadThanhpho(value,subvalue){    
        if(value!=0)
        {
            $.post("<?=base_url()?>nhadat/loadquan/",
                {
                    //path     : "member",
                    id_thanhpho  : value},
                    function (data) {
                    //alert(data);
                    $("#subzone").html(data);
                }
            );                       
        }else{
            document.getElementById("subzone").innerHTML="<select name='id_quan' style='width:200px;'><option value='0' >Chọn Quận | Huyện</option></select>";
        }
        
    }    
</script>
<?php
  $this->CI = get_instance();
  $this->CI->db->where('bat',1);
  $this->CI->db->where('parentid',2);
  $this->CI->db->order_by('sapxep','ASC');
  $query = $this->CI->db->get('nhadat_dm');
  $listnha = $query->result();
 
  $this->CI->db->where('bat',1);
  $this->CI->db->where('parentid',3);
  $this->CI->db->order_by('sapxep','ASC');
  $query = $this->CI->db->get('nhadat_dm');
  $listdat = $query->result();

  $this->CI->db->where('bat',1);
  $this->CI->db->where('parentid',1);
  $this->CI->db->order_by('sapxep','ASC');
  $query = $this->CI->db->get('nhadat_dm');
  $listbt = $query->result();
     
  $this->db->where('idquan',5);
  $query = $this->db->get('thanhpho');
  $thanhpho = $query->result();
  
  $query = $this->db->get('vitri');
  $listvitri = $query->result();
?>
<?
//$this->CI->db->where('parentid',0);
$this->CI->db->order_by('danhmuc','ASC');
$query = $this->CI->db->get('nhadat_dm');
$listdm = $query->result();

$query = $this->CI->db->get('huong');
$listhuong = $query->result();

$this->CI->db->where('idquan',0);
$query = $this->CI->db->get('thanhpho');
$listtp = $query->result();
?>
<?=form_open(base_url().'nhadat/timkiem')?> 
<div id="divSearchRe">

		<div class="title"><h1>Công cụ tìm kiếm</h1></div>
		<div class="content">
    <div style="clear:both;">
        <div id="divOfSeach">
            <div id="searchArea">
                <ul>
                    <li>
                        <span id="listNhuCau">
                            <select class="inputbox-blue" name="nhucau" id="nhucau">
                            <option value="0">---Chọn nhu cầu---</option>
                            <option value="1">Cần bán</option>
                            <option value="2">Cần mua</option>
                            <option value="3">Cần thuê</option>
                            <option value="4">Cho thuê</option>
                            <option value="5">Hợp tác kinh doanh</option>
							</select>
                        </span>
                    </li>
					<li>
                        <span id="listChuyenMuc">
                            <select class="inputbox-blue" name="chuyenmuc" id="chuyenmuc">
                            <option value="0">---Chọn chuyên mục---</option>
							<?foreach($listdm as $rs):?>
							<?php if ($rs->parentid == 0){
							?>								
							<?php } else {
							?>
								<option value="<?php echo $rs->iddm?>"><?php echo $rs->danhmuc?></option>
							<?php }?>
							                            		
                            <?php 
                            endforeach;
                            ?>
							</select>
                        </span>
                    </li>
					<li>
                        <span id="listViTri">
                            <select class="inputbox-blue" name="vitri" id="vitri">
                            <option value="0">---Chọn vị trí---</option>
								<?foreach($listvitri as $rs):?>
                            		<option value="<?=$rs->idvitri?>"><?=$rs->tenvitri?></option>
                            	<?endforeach;?> 
							</select>
                        </span>
                    </li>
                    <li>
                        <span id="listCity">
                            <select class="inputbox-blue" name="id_thanhpho" id="id_thanhpho">
                            	<option value="0">---Chọn Tỉnh-Thành phố---</option>
								<?foreach($listtp as $rs):?>
                            		<option value="<?=$rs->idthanhpho?>"><?=$rs->ten?></option>
                            	<?endforeach;?> 
							</select>
                        </span>
                    </li>
                    <li>
                        <span id="divPrice">
                            <select class="inputbox-blue" name="idhuong" id="idhuong">
                            	<option value="0">---Chọn hướng nhà---</option>
								<?foreach($listhuong as $rs):?>
									<option value="<?=$rs->idhuong?>"><?=$rs->tenhuong?></option>
								<?endforeach;?>
							</select>
                        </span>
                    </li>                   
                    <li class="adv-search" style="display:none">
                        <span> 
                        <select class="inputbox-blue" id="cboBedRoom" name="cboBedRoom" onchange="SearchCount();">
						</select> 
						</span>
                    </li>
                    <li class="adv-search" style="display:none">
                        <span>
                        <select class="inputbox-blue" id="cboHomeDirection" name="cboHomeDirection" onchange="SearchCount();">
	                        <option value="0">---Chọn hướng nhà---</option>

						</select>
						</span>
                    </li>
                    <li class="adv-search" style="display:none">
                        <span id="listProj"><select class="inputbox-blue" id="cboListProj" name="cboListProj" onchange="SearchCount();"><option value="">---Chọn dự án bất động sản---</option>
</select></span>
                    </li>
                    </ul>	                   
                      </div>                                           
                      <div class="btn"><input type="image" src="<?php echo base_url();?>images/bdscomvn/before.png" onmouseover="this.src='<?php echo base_url();?>images/bdscomvn/after.png'" 
						onmouseout="this.src='<?php echo base_url();?>images/bdscomvn/before.png'/*tpa=http://media.batdongsan.com.vn/images/tab/before.png*/" onclick="this.frmSearchProduct.submit();" /></div>
                   <div class="text">
               </div> 
           
        </div>
        </div>
    </div>
    </div>
<?=form_close();?>
<script type="text/javascript">
function timkiem()
{ 
    var nhucau=$("#nhucau").val();
    var sectionid=$("#sectionid").val();
    var giatu=$("#giatu").val();
    var giaden=$("#giaden").val();
    var id_thanhpho=$("#id_thanhpho").val();
    var idhuong=$("#idhuong").val();
    var page_no ='0';
    $.post("<?=base_url()?>nhadat/timkiem/",{'nhucau':nhucau,'sectionid':sectionid,'giatu':giatu,'giaden':giaden,'id_thanhpho':id_thanhpho,'idhuong':idhuong},function(data)
            {
                //if (data!='')
                $("#nhadat").html(data);
            }); 
}

</script>