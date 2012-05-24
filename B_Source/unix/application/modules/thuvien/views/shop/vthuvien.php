<div id="title-panel">
	<div id="title">
		<div id="title-left"></div>
		<div id="title-center">
			<h1>Thư viện</h1>
		</div>
		<div id="title-right"></div>
	</div>
</div>
<div id="content-panel">
	<div id="current-map">
		<a href="<?php echo base_url();?>">Trang chủ</a>
		<a>:</a>
		<a>Thư viện</a>
	</div>
	<hr/>
	<div id="thuvien-content">
		<div id="col_left">
			<?php $this->load->view('shop/left');?>
		</div>
		<div id="col_right">
			<div id="menu-panel">
				<div id="menu-book">
					<p>
						<span style="color:white; font-size:12px">Chọn loại sách: </span>
						<select id="list-book">
							<option value="">Toán</option>
							<option value="">Văn</option>
							<option value="">Sinh</option>
							<option value="">Tin học</option>
						</select>
					</p>
				</div>
				<div id="quangcao">
					<marquee>
						<p> Hệ thống thư viện phong phú của Unix là một kho tri thức khổng lồ chờ bạn khám phá</p>
					</marquee>
				</div>
			</div>
		</div>
	</div>
</div>