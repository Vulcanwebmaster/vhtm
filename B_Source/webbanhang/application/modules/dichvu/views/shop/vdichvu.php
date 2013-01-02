<script type="text/javascript">
	$(document).ready(function(){
		$('#dichvu').addClass('current');
		
		$('#dichvu1').click(function(){
			$('.dichvu-current-menu').removeClass('dichvu-current-menu');
			$('#dichvu-content').fadeOut(200).fadeIn(400);
			$('#dichvu-content').load('<?php echo base_url()?>dichvu/dangkytenmien', function(){
				$height=$('#dichvu-content').css('height');
				$('#dichvu-menu').css('height',$height);

				$('#dichvu1').parent('li').addClass('dichvu-current-menu');
			});
		});
		$('#dichvu2').click(function(){
			$('.dichvu-current-menu').removeClass('dichvu-current-menu');
			$('#dichvu-content').fadeOut(200).fadeIn(400);
			$('#dichvu-content').load('<?php echo base_url()?>dichvu/quangcao', function(){
				$height=$('#dichvu-content').css('height');
				$('#dichvu-menu').css('height',$height);

				$('#dichvu2').parent('li').addClass('dichvu-current-menu');
			});
		});
		$('#dichvu3').click(function(){
			$('.dichvu-current-menu').removeClass('dichvu-current-menu');
			$('#dichvu-content').fadeOut(200).fadeIn(200);
			$('#dichvu-content').load('<?php echo base_url()?>dichvu/thietkedohoa', function(){
				$height=$('#dichvu-content').css('height');
				$('#dichvu-menu').css('height',$height);

				$('#dichvu3').parent('li').addClass('dichvu-current-menu');
			});
		});
		$('#dichvu4').click(function(){
			$('.dichvu-current-menu').removeClass('dichvu-current-menu');
			$('#dichvu-content').fadeOut(200).fadeIn(200);
			$('#dichvu-content').load('<?php echo base_url()?>dichvu/chuongtrinhdaily', function(){
				$height=$('#dichvu-content').css('height');
				$('#dichvu-menu').css('height',$height);

				$('#dichvu4').parent('li').addClass('dichvu-current-menu');
			});
		});
		$('#dichvu5').click(function(){
			$('.dichvu-current-menu').removeClass('dichvu-current-menu');
			$('#dichvu-content').fadeOut(200).fadeIn(200);
			$('#dichvu-content').load('<?php echo base_url()?>dichvu/chuongtrinhlienket', function(){
				$height=$('#dichvu-content').css('height');
				$('#dichvu-menu').css('height',$height);

				$('#dichvu5').parent('li').addClass('dichvu-current-menu');
			});
		});
		$('#dichvu6').click(function(){
			$('.dichvu-current-menu').removeClass('dichvu-current-menu');
			$('#dichvu-content').fadeOut(200).fadeIn(200);
			$('#dichvu-content').load('<?php echo base_url()?>dichvu/banggia', function(){
				$height=$('#dichvu-content').css('height');
				$('#dichvu-menu').css('height',$height);

				$('#dichvu6').parent('li').addClass('dichvu-current-menu');
			});
		});
		$('#dichvu2').click();
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

<div id="dichvu-panel">
	<div id="dichvu-content">
	</div>
	<div id="dichvu-menu">
		<ul>
			<!-- li>
				<a id="dichvu1">Đăng ký tên miền</a>
			</li -->
			<li>
				<a id="dichvu2">Quảng cáo Google Awords</a>
			</li>
			<li>
				<a id="dichvu3">Thiết kế đồ họa</a>
			</li>
			<li>
				<a id="dichvu4">Chương trình đại lý</a>
			</li>
			<li>
				<a id="dichvu5">Chương trình liên hết</a>
			</li>
			<li>
				<a id="dichvu6">Bảng giá domain</a>
			</li>
		</ul>
	</div>
</div>