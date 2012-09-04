<?php $luot=$this->MKaimonokago->getLuot($info->id_hoidap);?>
<div id="title-panel">
	<div id="title">
		<div id="title-left"></div>
		<div id="title-center">
			<h1>HỎI ĐÁP</h1>
		</div>
		<div id="title-right"></div>
	</div>
</div>

<div id="content-panel">
	<hr style="border:none">
	<div id="hoithao-content">
		<div id="col_left">
			<?php $this->load->view('shop/left');?>
		</div>
		
		<div id="col_right">
			<div id="content" style="border-width:1px; padding:20px; width:720px; text-align:justify">
				<p style="color:#035a77; text-transform:uppercase">Ngày đăng: <?php echo $info->ngaygui;?> | Lượt xem: <?php echo $luot->luotxem; ?> | Lượt trả lời : <?php echo $luot->luottraloi; ?></p>
				<label><strong><i>Câu hỏi : </i></strong></label>
				<?php echo $info->noidung;?>
				<br/>
				<label><strong><i>Trả lời : </i></strong></label>
				<?php if($info->traloi!=null) echo $info->traloi; else echo '<i style="color:blue">Unix chưa trả lời câu hỏi này</i>';?>
				
				
			</div>
			<div id="newest">
				<h3>Câu hỏi mới nhất</h3>
				<ul>
					<?php foreach($newest as $news)
					{?>
					<li>
						<a href="<?php echo base_url();?>index.php/hoidap/detail/<?php if (isset($news)) echo $news->id_hoidap;?>"><?php if (isset($news)) echo $news->noidung;?></a>
					</li>
					<?php }?>
				</ul>
			</div>
			<form action="<?php echo base_url();?>index.php/hoidap">
			<input type="submit" value="Đăng câu hỏi">
			</form>
			
		</div>
	</div>
	
</div>
