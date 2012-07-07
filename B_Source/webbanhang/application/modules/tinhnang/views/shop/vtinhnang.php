<script type="text/javascript">
	$(document).ready(function() {
		//current menu item
		$('#tinhnang').addClass('current');
	});
</script>

<div id="mash">
	<?php $this->load->view('shop/dangky');?>
</div>

<div id="slogan-panel">
	<div id="slogan-left">
		<p style="margin:10px">Với NIW Shopping Cart, bán hàng online trở nên dễ dàng hơn bao giờ hết.<span id="demo-command" style="color:#3c3c3c; padding-left:80px;">Hãy dùng thử ngay và cảm nhận <span>&#8594</span></span></p>
	</div>
	<div id="slogan-right" style="float:right">
		<fieldset style="padding:10px;width:100px;text-align:center; background:url('<?php echo base_url();?>assets/webbanhang/images/demo-bg.png') no-repeat">
			<h4><a id="dungthu" style="color:white">Dùng thử</a></h4>
		</fieldset>
	</div>
</div>
<hr id="line1"/>

<div id="tinhnang-panel">
	<div class="tinhnang-item">
		<h3>Kho giao diện đẹp, miễn phí, phong phú</h3>
		<div class="tinhnang-content">
			Với kho giao diện 60 mẫu được thiết kế đẹp và chuyên nghiệp, bạn có thể lựa chọn, sử dụng và thay đổi theo nhu cầu sử dụng. Công cụ quản trị nội dung trực quan giúp bạn quản trị và thay đổi bố cục website dễ dàng.
			<div id="TemplateList">
			<?php foreach ($listTemplate as $template)
			{?>
				<div class="TemplateBox   TemplateId_Adventure">
					<div class="TemplateHeading">
							<span class="TemplateName"><?php echo $template->name;?></span>
					</div>
					<a class="TplPreviewImage" title="Click here to see a preview of this template">
						<img class="TemplatePreviewThumb" src="<?php echo base_url();?>shopping/admin/<?php echo $template->image;?>" alt="Adventure - Magenta">
					</a>
					<br/>
				</div>
			<?php }?>
			</div>
			<a href="<?php echo base_url();?>khogiaodien" style="float:left; clear:both; color:#ffdd77">Xem thêm...</a>
			<br style="clear:both"/>
		</div>
	</div>
	<div class="tinhnang-item">
		<h3>Tối ưu cho các máy tìm kiếm đặc biệt là Google</h3>
		<div class="tinhnang-content">
			Với kinh nghiệm của những chuyên gia SEO hàng đầu, NIW Shopping Cart được thiết kế tối ưu về kiến trúc và liên kết cho các máy tìm kiếm ngay từ khi phát triển. Nhiều website sau 3 tháng hoạt động đã có những từ khóa giá trị lọt vào top 3 của kết quả tìm kiếm trên Google.
		</div>
	</div>
	<div class="tinhnang-item">
		<h3>Dữ liệu của bạn luôn an toàn và bảo mật</h3>
		<div class="tinhnang-content">
			Tính ổn định của hệ thống và bảo mật dữ liệu luôn là ưu tiên hàng đầu của NIW Shopping Cart. Hệ thống được sao lưu định kỳ, dữ liệu quan trọng được mã hóa, khả năng hoạt động liên tục 99,99% thời gian.
		</div>
	</div>
</div>