<div id="dangcauhoi" style="display:none;text-align:center;padding: 20px; text-shadow: black 0px -1px 0px; color: white; position: fixed; width: 500px; height: auto; margin-top: 0; margin-left:35%; background-color: rgb(90, 90, 90); border-top-left-radius: 10px; border-top-right-radius: 10px; border-bottom-right-radius: 10px; border-bottom-left-radius: 10px; z-index: 9; border: 4px solid rgb(182, 182, 181); display: block; ">
	<div style="width:30px; cursor:pointer; border-radius:10px; background-color:white; padding:5px; color:black; float:right" align="right"><span id="dangcauhoiClose">Thoát</span></div>
	<div style="padding-left:10px">
	<form method="post" name="lienhe-form"  action="<?php echo base_url();?>index.php/hoidap/submit">
		<table style="font-size:12px;">
			<tr>
				<td><span>* </span>Họ tên :</td>	
				<td><input style="width:254px" type="text" name="hoten"/></td>	
			</tr>
			<tr>
				<td><span>* </span>Số điện thoại :</td>
				<td><input style="width:254px" type="text" name="dienthoai"/></td>
			</tr>
			<tr>
				<td style="vertical-align:5px"><span>* </span>Nội dung :</td>
				<td>
					<textarea name="noidung" style="width:254px" rows="7" cols="20"></textarea>
				</td>
			</tr>					
			<tr>
				<td colspan="2" align="center">
					<center style="color:black;margin-right: -95px;"><input id="submit" name="submit" type="submit" value="Đăng câu hỏi" style="width:100px;color:blue"/></center></td>
			</tr>
		</table>
	</form>
	</div>
</div>

<?php $this->load->helper('text');?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<div id="title-panel">
	<div id="title">
		<div id="title-left"></div>
		<div id="title-center">
			<h1>Hỏi đáp</h1>
		</div>
		<div id="title-right"></div>
	</div>
</div>
<div id="content-panel" style="padding-left:0px;">
<hr style="border:none">
	<div id="hoidap-content">
		<div id="col_left" style="margin-top:0px">
			<?php $this->load->view('shop/left');?>
		</div>
		<div id="" style=" margin-left:-35px;background:url('<?php echo base_url();?>assets/unix/images/gioithieu-bg.png') no-repeat; min-height:500px">
			<style type="text/css">
				td{padding:5px 10px}
				.input-lienhe{width:250px}
			</style>
			
	<div style="width:100%;">
	     <div id="content" style="float:left;width:70%;margin: 10px;" >
	     <div style="text-align: center">										
         <B style="color:blue;font-size:20px;font-family:time new roman;margin-bottom:10px;margin-left:10px;  ">DANH SÁCH HỎI ĐÁP</B>
		</div>
	 			<?php 
					{
						foreach($list as $item)
						{
							?>
				    <div style="margin-top: 10px;">
						
									
						<div style="padding-left: 10px">
								<div style="float:left;padding-right:10px">	
								<img alt="" src="<?php echo base_url() ?>assets/icons/r.jpg" width="12" height="12">
								<b style="margin:0;color:#0158a1"><?php echo $item->ten." :"?></b>
								</div>
								<div>
									<?php 
										$content=$item->noidung;
										echo word_limiter($content,150);
									?>
									<a href="<?php echo base_url();?>index.php/hoidap/detail/<?php echo $item->id_hoidap;?>" style="font-style:italic;font-size:12px;">Xem thêm</a>	
								</div>	
									<i style="padding-right:10px;float:right;color:blue;font-size:11px"> 
										<?php 
											$luot=$this->MKaimonokago->getLuot($item->id_hoidap);
											echo $luot->luotxem;
										?>  Lượt xem |
										<?php
											echo $luot->luottraloi;
										?>  Lượt trả lời
									</i>
									<br/>
							</div>	
							
							
						
					</div>
					
					<?php 	}
					}?>
	   </div>
	   <center algin="center"><?php echo $this->pagination->create_links();?></center>
	   <center style="padding-top:10px">
		   <span id="viewdangcauhoi">
		   		<input type="button" name="submit" value="Đăng câu hỏi"/>
		   </span>
	   </center>
	   
	   		
	    </div>
				
				
				
	         <hr style="border:none"/>			
			</div>
		</div>
	</div>
</div>

