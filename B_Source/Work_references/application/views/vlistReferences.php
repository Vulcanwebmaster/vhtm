 <?php
	include("mojmojster_database.php");
	include("mojmojster_session.php");
	$CraftsmanReferences->returnAllCategories();
?>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="/Work_references/assets/css/css.css"/>
	<link rel="stylesheet" type="text/css" href="/Work_references/assets/css/style.css"/>	
	<script type="text/javascript" src="/Work_references/assets/js/myjs.js"></script>
	<script type="text/javascript" src="/Work_references/assets/js/ajax-base.js"></script>
	<script type="text/javascript" src="/Work_references/assets/js/jquery-1.7.2.min.js"></script>	
	<script type="text/javascript">
		$(document).ready(function(){
				$('#body').hide();
				$('#category').click(function(){
					$('#body').slideDown();
					});
				$('#Close').click(function(){
					$('#body').slideUp();
					});
		});
	</script>	
	<div id="body">
    	<!------------begin add catagory---------->
        <div id="div-table">
        	<table id="table" cellpadding="0" border="0">
        		<?php
        			$i=0;
					$count=count($categories);
					for($i;$i<$count;$i+=5)
					{
        		?>
        		<tr id="tr1">
        			<?php
        				if($i==0)
						{
        			?>
                	<td style="padding-left:25px; width:150px "><a href="#">Add category</a></td>
                	<?php
						}
						else 
						{
							?>
								<td></td>
							<?php
						}
                	?>
                    <td><?php if(isset($categories[$i]->category) && $i<$count) echo $categories[$i]->category; ?></td>
                    <td><?php if(isset($categories[$i+1]->category) && $i+1<$count) echo $categories[$i+1]->category; ?></td>
                    <td><?php if(isset($categories[$i+2]->category) && $i+2<$count) echo $categories[$i+2]->category; ?></td>
                    <td><?php if(isset($categories[$i+3]->category) && $i+3<$count) echo $categories[$i+3]->category; ?></td>
                    <td><?php if(isset($categories[$i+4]->category) && $i+4<$count) echo $categories[$i+4]->category; ?></td>
                </tr>
				<?php
					}
				?>

            </table>
            
        </div>
        <!-----------end add catagory-------->
        <!---------begin Category------->
        <div>
        	<div id="cat">
            	<div class="category" style="font-size:14px">Category</div>
            	<div class="category">contents</div>
                <div id="category" style="font-size:14px; text-align:right;">
                	<a style="cursor:pointer">Add reference</a>
                </div>
            </div>
      		<div class="div-list">
      		<?php 
      			foreach($references as $reference)
      			{
      				$file = $CraftsmanReferences->returnFile($reference->file_id);
      		?>
               <div id="list">
               		<div style="border-bottom:1px solid #666;">
	               		<a href="/Work_references/index.php/tiennd/deleteRef/<?php echo $reference->id;?>" id="del">Delete reference</a>
	                    <img src="/Work_references/assets/images/references/<?php echo $file->filename.$file->filetype; ?>"/>
                	</div>
               	 	<div>
	                 	<span id="title" style="font-size:12px;"><?php echo $reference->title; ?></span><br/>
	                    <span id="title">Description</span>
                	</div>   
               </div>
            <?php 
				}
			?>
			</div>
	<!------------- show more------------->
			<div align="center">
			<a id="status" style="padding-bottom:60px; font-size:13px" href="javascript:showMore();">Show more references</a>
			</div>
			<div id="loadmore" class="see" style="margin-top: 15px; display: none; width:200px ">Loading more references ...</div>	
    <!------------- show more------------->    
        </div>
        <!-----------end category------------->
    </div>
    
<div id="body" style="background-color:blue;margin-left: 34%;margin-top: 26%;display:none;width:375px;height:auto;position:fixed;">
	   <a id="Close" style="margin:10px;cursor:pointer;float:right">Thoát</a>
	   <br/>
	   	<?php echo form_open_multipart('/tiennd/upload/');?>
		   <table id="form" style="float:left">
		       <tr>
		           <td>Title:</td>
		           <td><input type="text" name="title" /></td>
		       <tr>
		           <td>Upload Picture</td>
		           <td><input type="file" name="userfile"/></td>
		       </tr>
		       <tr>
		           <td>Description</td>
		           <td><input type="text" name="text" style="height:100px"/></td>
		       </tr>
		       <tr>
		           <td></td>
		           <td><input type="submit" name="Addreference" value="Add reference"/></td>
		       </tr>
		   </table>
	   </form>
</div>      

	