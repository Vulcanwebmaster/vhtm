	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/style.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/css.css"/>
	
	<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ?>assets/js/js-list.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery-1.7.2.min.js"></script>
	
	<script type="text/javascript">
		//AJAX:
		$(document).ready(function(){
			$('.category1').click(function(){
				$categoryId=$(this).children('input').val();
				$('.div-list').load("<?php echo base_url();?>index.php/tiennd/showListCategoried/"+<?php echo $craftsmanId;?>+"/"+$categoryId);
			});
		});
	</script>

	<script type="text/javascript">
		$(document).ready(function(){
				$('#form').hide();
				$('#add_reference').click(function(){
					$('#form').slideDown();
					});
				$('.exit').click(function(){
					$('#form').slideUp();
					});
					
				$('#vaddCategory').hide();
				$('#add_category').click(function(){
					$('#vaddCategory').slideDown();
					});
				$('.exit').click(function(){
					$('#vaddCategory').slideUp();
					});			
		});

	</script>
<?php
	$data['listCategories'] = $listCategories;
	$data['craftsmanId'] = $craftsmanId;
	$this->load->view('RefAddReference-tiennd',$data);
	$this->load->view('RefAddCategory-tiennd',$data);
?>

<div id="body">
    	<!------------begin add catagory---------->
        <div id="div-table">
        	<table id="table" cellpadding="0" border="0">
          		<?php 
          			$count=count($listCategories);
          			for ($i=0; $i<$count; $i+=5)
          			{?>
          				<tr>
          					<?php 
          						if ($i==0)
          							echo '<td style=" padding-left:10px; width:150px "><a id="add_category">Add category</a></td>';
          						else echo '<td></td>';
          						for ($j=0; $j<5; $j++)
          							if ($i+$j<$count)
          								echo '<td class="category1"><input type="hidden" value="'.$listCategories[$i+$j]->id.'"/>'.$listCategories[$i+$j]->category.'</td>';
          					?>
          				</tr>
          			<?php }?>
            </table>
        </div>
        <!-----------end add catagory-------->
        <!---------begin Category------->
        <div>
        	<div id="cat">
            	<div class="category" style="font-size:14px">Category</div><div class="category">contents</div>
                <div id="category" style="font-size:14px; text-align:right;"><a id="add_reference">Add reference</a></div>
            </div>
      		<div class="div-list">
      			
			</div>
				
        </div>
        <!-----------end category------------->
    </div
    
