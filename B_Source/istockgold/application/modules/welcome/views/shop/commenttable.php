
<table id="comment-table">
	                <?php 
	                if(count($reviews))
						{						
							foreach ($reviews as $key => $list)
							{						
	
	                ?>
	                    <tr> 
	                    <td class="comment-col1">                     
	                        <?php 
	                        for ($i=1;$i<=$list['rating'];$i++)
								{
	                        ?>
	                        
	                            <img src="<?php echo base_url()?>assets/images/star.png" alt="" />   
	                        <?php 
								}
	                        ?>
	                          
	                        </td>
	                       
	                        <td>
	                            <button><?php echo $list['rating'];?>.0</button>
	                            <span style="margin-left:10px;font-size:12px;line-height:20px"><?php echo $list['title'];?></span>
	                        </td>
	                    </tr>
	                    <tr>
	                        <td class="comment-col1" style="width: 25%">
	                            <label class="frostwrath"><?php echo $list['name'];?></label>
	                            <label class="from-UK">from <?php echo $list['location'];?></label>
	                        </td>
	
	                        <td>
	                            <label class="comment-date">Date : <?php echo $list['date'];?></label>
	                        </td>
	                    </tr>
	                    <tr>
	                        <td colspan="2">
	                            <label class="comment-content"><?php echo $list['comment'];?></label>
	                        </td>
	                    </tr>
	                    <tr>
	                        <td colspan="2">
	                            <hr />
	                        </td>
	                    </tr>
	                    
	                    <?php 
							}
						}
	                    
	                    ?>
	                      
	                </table>