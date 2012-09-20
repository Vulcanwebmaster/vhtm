	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/style.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/css.css"/>
	
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-1.7.2.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/js-list.js"></script>
	
	<script type="text/javascript">
		//AJAX:
		$(document).ready(function(){
			$('.category').click(function(){
				$categoryId=$(this).children('input').val();
				$('.div-list').load("<?php echo base_url();?>index.php/m_references/showListCategoriedWithoutEdit/"+<?php echo $craftsmanId;?>+"/"+$categoryId);
			});
		});
	</script>
	
	<?php $this->load->view('RefAddCategory');
		$this->load->view('RefAddReference');
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
          						for ($j=0; $j<5; $j++)
          							if ($i+$j<$count)
          								echo '<td class="category"><input type="hidden" value="'.$listCategories[$i+$j]->id.'"/>'.$listCategories[$i+$j]->category.'</td>';
          					?>
          				</tr>
          			<?php }?>
            </table>
        </div>
        <!-----------end add catagory-------->
        <!---------begin Category------->
        <div>
        	<div id="cat">
            	<div id="category" style="font-size:14px">Category</div><div id="category">contents</div>
            </div>
      		<div class="div-list">
      			
			</div>
				
        </div>
        <!-----------end category------------->
    </div>

