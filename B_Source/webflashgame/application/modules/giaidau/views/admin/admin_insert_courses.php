	
		<?php 
			echo validation_errors('<div class="error">','</div>');
		?>	
		
<script type="text/javascript">
	$(function() {
		$( "#ngaythang" ).datepicker();
	});
</script>
		
<form method="post" action="<?php echo base_url();?>giaidau/admin/insert">	
	<article class="module width_3_quarter" style="width:95%;">
		<header><h3 class="tabs_involved"><?php echo $title;?></h3>
		
		</header>
		<div class="tab_container">
			
			<div id="tab1" class="tab_content">
				<fieldset>
					<label>NOM DU TOURNOI (en)</label>
					<input type="text" name="name_tour" style="width:92%"/>
				</fieldset>
				<fieldset>
					<label>NOM DU TOURNOI (fr)</label>
					<input type="text" name="name_tourfr" style="width:92%"/>
				</fieldset>
				<fieldset>
					<label>Joueur</label>
					<input type="text" name="players" style="width:92%"/>
				</fieldset>
				<fieldset>
					<label>GAINS</label>
					<input type="text" name="tienthuong" style="width:92%"/>
				</fieldset>
				<fieldset>
					<label>Règles (en)</label>
					<?php echo $this->ckeditor->editor('rules','',$config);?>
				</fieldset>
				<fieldset>
					<label>Règles (fr)</label>
					<?php echo $this->ckeditor->editor('rulesfr','',$config);?>
				</fieldset>
				
				<fieldset>
					<label>Date de début</label>
					<input type="text" name="start_date" id="datetimepicker1" value="<?php echo date('Y/m/d', time()+7*3600);?>"/>
				</fieldset>
				<fieldset>
					<label>Date de fin</label>
					<input type="text" name="end_date" id="datetimepicker2" value="<?php echo date('Y/m/d', time()+7*3600);?>"/>
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
<style type="text/css">
					.tuyet{
						width: 100px;
						height: 50px;
						
					}
					.ui-timepicker-div .ui-widget-header { margin-bottom: 8px; }
					.ui-timepicker-div dl { text-align: left; }
					.ui-timepicker-div dl dt { height: 25px; margin-bottom: -25px; }
					.ui-timepicker-div dl dd { margin: 0 10px 10px 65px; }
					.ui-timepicker-div td { font-size: 90%; }
					.ui-tpicker-grid-label { background: none; border: none; margin: 0; padding: 0; }
					
					.ui-timepicker-rtl{ direction: rtl; }
					.ui-timepicker-rtl dl { text-align: right; }
					.ui-timepicker-rtl dl dd { margin: 0 65px 10px 10px; }
				</style>
<link rel="stylesheet" media="all" type="text/css" href="http://code.jquery.com/ui/1.10.0/themes/smoothness/jquery-ui.css" />
		<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.0.min.js"></script>
		<script type="text/javascript" src="http://code.jquery.com/ui/1.10.0/jquery-ui.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>assets/flash_game/js/jquery-ui-timepicker-addon.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>assets/flash_game/js/jquery-ui-sliderAccess.js"></script>
		<script>
		$('#datetimepicker1').datetimepicker();
		</script>
		<script>
		$('#datetimepicker2').datetimepicker();	
		</script>
		