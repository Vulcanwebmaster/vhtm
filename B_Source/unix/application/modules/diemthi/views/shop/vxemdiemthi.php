<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<div id="title-panel">
	<div id="title">
		<div id="title-left"></div>
		<div id="title-center">
			<h1>Xem điểm</h1>
		</div>
		<div id="title-right"></div>
	</div>
</div>
<div id="content-panel" style="padding-left:0px;">
<hr style="border:none">
	<div id="thuvien-content">
		<div id="col_left" style="margin-top:0px">
			<?php $this->load->view('shop/left');?>
		</div>
		<div id="" style=" margin-left:-35px;background:url('<?php echo base_url();?>assets/unix/images/gioithieu-bg.png') no-repeat; min-height:500px">

<!--content-->
		
		<div style="padding-left:27%">
		<form method="post" action="<?php echo base_url()?>index.php/diemthi/">
		<div style="padding:20px">
			<span>(*) Chọn ngày thi : </span>
			<select name="dot" class="ngaythi">
				<?php foreach($dotthi as $dot):?>
					<option value="<?php echo $dot->id;?>"><?php echo $dot->dotthi;?></option>
				<?php endforeach?>
			</select>
			<input type="submit" value="Hiển thị"/>
		</div>
		</form>
		
		<?php if(isset($diemthi))
		{
			?>
		<table border="1" id="tablesorter" class="tablesorter" width="100%">
			<caption class='table1' style="color:blue;padding-bottom:10px"><h2><?php echo $tendot;?></h2></caption>
			<tr>
				<th class='table1'><strong>STT</strong></th>
				<th class='table1'><strong>Học sinh</strong></th>
				<th class='table1'><strong>Phụ huynh</strong></th>
				<th class='table1'><strong>Lớp</strong></th>
				<th class='table1'><strong>Điểm thi</strong></th>
			</tr>
			<?php
				foreach ($diemthi as $diem){ ?>
						<tr>
							<td class='table1'><?php echo $diem->stt; ?></td>
							<td style="padding-left:20px"><?php echo $diem->hocsinh; ?></td>
							<td style="padding-left:20px"><?php echo $diem->phuhuynh; ?></td>
							<td class='table1'><?php echo $diem->lop; ?></td>
							<td class='table1'><?php echo $diem->diemthi; ?></td>
						</tr>
					<?php
					}
				}
					?>
		
		</table>
		<center style="padding-top: 10px;font-size: 15px;color:red">
				<?php echo $this->pagination->create_links();?>
		</center>
		</div>
		
<!--end content-->			
				
	         <hr style="border:none"/>			
			</div>
		</div>
</div>