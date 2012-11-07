<script type="text/javascript">
	$(document).ready(function(){
			var count=<?php echo count($list_doitac);?>+1;
			$('#doitac_table').css('width',count*215+'px');
		});
</script>

<marquee style="margin-top:20px" direction="left" width="950" onmouseover="this.stop()" scrollamount="2" onmouseout="this.start()" height="100"> 
	<table id="doitac_table" style="width:auto" cellspacing="0" cellpadding="0" border="0">
		<tbody>
			<tr>
				<td> 
					<style>
						.doitac img{height:98px !important; width:215px !important; border:1px solid #ddd; text-align:center}
					</style>
					<?php foreach ($list_doitac as $doitac)
					{ ?>
						<div style=" float:left; padding:0px 10px;">
							<a class="doitac" href="<?php echo $doitac->link;?>">
								<?php echo $doitac->logo;?>
							</a>
			             </div>
					<?php }?>
				</td>
			</tr>
		</tbody>
	</table>
</marquee>
<!--<p style="text-align:center; margin-top:15px; font-size:12px"><?php echo $this->lang->line('dsdoitac');?></p>-->