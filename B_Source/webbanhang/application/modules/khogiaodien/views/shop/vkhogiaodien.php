<script type="text/javascript">
	$(document).ready(function() {
		//current menu item
		$('#khogiaodien').addClass('current');
		//=========================================
		$('.TemplateBox').fadeTo(1000,0.7);
		$('.TemplateBox').mouseenter(function(){
			$(this).fadeTo(400,1);
		});
		$('.TemplateBox').mouseleave(function(){
			$(this).fadeTo(400,0.7);
		});

		//preview.............
		$('#preview-panel').hide();
		$('.apply').click(function(){
			$('#preview-panel').fadeIn(400);
			$('#image-preview').children('img').attr('src',$(this).children('input').val());//='abc';//$(this).children('input').val();
		});

		$('.TplPreviewImage').click(function(){
			$('#preview-panel').fadeIn(400);
			$('#image-preview').children('img').attr('src',$(this).parent('.TemplateBox').children('.apply').children('input').val());//='abc';//$(this).children('input').val();
		});
		
		$('#close').click(function(){
			$('#preview-panel').fadeOut(400);
			
		});
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

<div id="preview-panel">
	<div id="close" align="right">X</div>
	<div id="image-preview">
		<img src=""/>
	</div>
</div>
<div id="templatePage">
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
				<a class="apply" style="color:#58a4f9; font-size:12px">
					<input type="hidden" value="<?php echo base_url();?>shopping/templates/<?php echo $template->url;?>"/>
					</a>
			</div>
		<?php }?>
	</div>
	<br style="clear:both"/>
</div>