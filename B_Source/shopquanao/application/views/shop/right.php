<script type="text/javascript">
	$(document).ready(function(){
		var price=document.getElementById('price-filter');
		var message="Nhập giá cao nhất...";
		price.value=message;
		$('#price-filter').focusin(function(){
			if (price.value==message)
				price.value="";
		});
		$('#price-filter').focusout(function(){
			if (price.value=="")
				price.value=message;
		});
	});
</script>

<div class="col-right sidebar">  
	<style type="text/css">
		.button{background:transparent; border-bottom:none; color:#585757}
	</style>
	<div style="margin-bottom:10px; border:solid 1px white; border-radius:5px; padding:10px">
		<form name="filter" method="post" action="<?php echo base_url();?>index.php/welcome/filter">
			<p style="margin:0; font-size:13px; text-shadow:0 1px 0 white">Lọc theo giá</p>
			<input type="text" name="price-filter" id="price-filter" style="width:95%; background-color:#f3f3f3"/>
			<center><input type="submit" name="submit" id="submit" value="Lọc"/></center>
		</form>
	</div>
	
<!-- Fileter By Kho -->              
	<div style="margin-bottom:10px; border:solid 1px white; border-radius:5px; padding:10px">
		<form name="filterByKho" method="post" action="<?php echo base_url();?>index.php/welcome/filterByKhoId">
			<p style="margin:0; font-size:13px; text-shadow:0 1px 0 white">Lọc theo kho</p>
			<select name="kho-filter" id="kho-filter" style="width:95%; background-color:#f3f3f3">
				<option value="0">Tất cả</option>
				<?php $list=$this->MKaimonokago->getListKho();
					foreach($list as $kho)
					{
						if ($this->session->userdata('kho'))
						{
							if ($kho->kho_id==$this->session->userdata('kho'))
								echo '<option value="'.$kho->kho_id.'" selected="selected">'.$kho->kho_name.'</option>';
							else echo '<option value="'.$kho->kho_id.'">'.$kho->kho_name.'</option>';
						}
						else echo '<option value="'.$kho->kho_id.'">'.$kho->kho_name.'</option>';
					}
				?>			
			</select>
			<center><input type="submit" name="submitKhoId" id="submitKhoId" value="Lọc"/></center>
		</form>
	</div>
<!--  -->
	
    <div class="foxmenucontainer" id="col-right">
    		<!-- script type="text/javascript">
				$(document).ready(function(){
					$('.menulevel1').children('ul').slideUp(1000);
					$('.menulevel1').mouseenter(function(){
						$(this).children('ul').slideDown(400);
					});
					$('.menulevel1').mouseleave(function(){
						$(this).children('ul').slideUp(400);
					});
				});
			</script -->
                <div id="menu">
                    <ul id="pagemenu">
                        <?php $list=$this->MKaimonokago->getMenuList();
                        	for($i=0;$i<count($list);$i++)
                        	{
                        		
                        		if ($this->MKaimonokago->isParent($list[$i]->id))
                        		{
                        			echo '<li class="menulevel1"><a href="'.base_url().'get-list/'.$list[$i]->id.'">'.$list[$i]->name.'</a>';
                        			echo '<ul class="menulevel2" style="padding-left:30px">';
                        			foreach ($this->MKaimonokago->getListChild($list[$i]->id) as $child)
                        			{
                        				if ($child->is_display_in_menu==1)
                        					echo '<li><a style="background-color:#929291" href="'.base_url().'get-list/'.$child->id.'">'.$child->name.'</a></li>';
                        			}
                        			echo '</ul>';
                        			echo '</li>';
                        		}
                        		else if ($list[$i]->parentid==0)
                        			echo '<li><a href="'.base_url().'get-list/'.$list[$i]->id.'">'.$list[$i]->name.'</a></li>';
                        	}
                        	echo '</ul>
		                </div>
		            </div> ';
                        ?>                          
</div>