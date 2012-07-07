<script type="text/javascript">
	$(document).ready(function(){
		$('#trangchu').addClass('current');
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

<div id="content">
	<div class="ic">More Website Templates @ TemplateMonster.com. April 09, 2012! </div>
    <div class="container_12">	
      <div class="grid_8">
        <!-- h2 class="p4" style="margin-top:20px">Tính năng nổi bật</h2 -->
        <div class="wrap block-1" style="margin-top:20px">
            <div>
                <img src="<?php echo base_url();?>assets/webbanhang/images/page1-img1.jpg" alt="" class="img-border">
                <h3>Giao diện</h3>
                <p style="text-align:justify">Với kho giao diện 60 mẫu được thiết kế đẹp và chuyên nghiệp, bạn có thể lựa chọn, sử dụng và thay đổi theo nhu cầu sử dụng.</p>
                <a href="#" class="button">More</a>
            </div>
            <div>
                <img src="<?php echo base_url();?>assets/webbanhang/images/page1-img2.jpg" alt="" class="img-border">
                <h3>SEO</h3>
                <p style="text-align:justify">Các sản phẩm của chúng tôi được thiết kế tối ưu về kiến trúc và liên kết cho các máy tìm kiếm ngay từ khi phát triển.</p>
                <a href="#" class="button">More</a>
            </div>
            <div class="last">
                <img src="<?php echo base_url();?>assets/webbanhang/images/page1-img3.jpg" alt="" class="img-border">
                <h3>Bảo mật</h3>
                <p style="text-align:justify">Hiểu được mong muốn của khách hàng, tính ổn định của hệ thống và bảo mật dữ liệu luôn là ưu tiên hàng đầu của chúng tôi.</p>
                <a href="#" class="button">More</a>
            </div>
        </div>
      </div>
      
      <?php $this->load->view('shop/right');?>
      <div class="clear"></div>
    </div>  
</div> 
