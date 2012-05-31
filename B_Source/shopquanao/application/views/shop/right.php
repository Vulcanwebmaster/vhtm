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
    <div class="foxmenucontainer" id="col-right">
                <div id="menu">
                    <ul id="pagemenu">
                        <?php $list=$this->MKaimonokago->getMenuList();
                        	for($i=0;$i<count($list);$i++)
                        	{
                        		echo '<li><a href="'.base_url().'index.php/ao/get_list/'.$list[$i]->id.'">'.$list[$i]->name.'</a></li>';
                        	}
                        	echo '</ul>
		                </div>
		            </div> ';
                        ?>                          
</div>