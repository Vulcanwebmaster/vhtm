<script type="text/javascript">
	$(document).ready(function(){
        var price_min = new LiveValidation('price_min',{validMessage:"Hợp lệ"});
        price_min.add( Validate.Numericality, { failureMessage: "Chỉ chấp nhận các ký tự số"} );

        var price_max = new LiveValidation('price_max',{validMessage:"Hợp lệ"});
        price_max.add( Validate.Numericality, { failureMessage: "Chỉ chấp nhận các ký tự số"} );
	});
</script>	
		<?php 
			echo validation_errors('<div class="error">','</div>');
		?>	
<form method="post" action="<?php echo base_url();?>khoanggia/admin/insert">	
	<article class="module width_3_quarter" style="width:95%;">
		<header><h3 class="tabs_involved"><?php echo $title;?></h3>
		
		</header>
		<div class="tab_container">
			
			<div id="tab1" class="tab_content">
				<fieldset>
					<label>Giá thấp nhất</label>
					<input type="text" name="price_min" id="price_min" />
				</fieldset>
				<fieldset>
					<label>Giá cao nhất</label>
					<input type="text" name="price_max" id="price_max" />
				</fieldset>
				<fieldset>
					<label>Kích hoạt</label>
					<select name="is_active" id="is_active">
						<option value="0">Không</option>
						<option value="1">Có</option>
					</select>
				</fieldset>
			</div>
			
			<footer style="float:left">
					<div class="submit_link">
						<input type="submit" name="submit" value="Thêm" class="alt_btn">
					</div>
			</footer>
		</div><!-- end of .tab_container -->
				</article><!-- end of content manager article -->	
</form>
		