                <div id="comment-header">
                    <img src="<?php echo base_url()?>assets/images/comment-icon.jpg" alt="" />
                    <a>See What Our Customers say about our service ! </a>
                </div>
                
                <div id="news-control-panel">
                    <span style="font-size:12px; font-weight:bold">Show</span>
                    <select id="show_id" name = "show_id">
                            <option <?php if (isset($_SESSION['show'])) if ($_SESSION['show'] == 5) echo 'selected = "selected"'?> id = "option5" value = "5" >5</option>
                            <option <?php if (isset($_SESSION['show'])) if ($_SESSION['show'] == 10) echo 'selected = "selected"'?> id ="option10" value="10">10</option>
                            <option <?php if (isset($_SESSION['show'])) if ($_SESSION['show'] == 20) echo 'selected = "selected"'?> id ="option20" value="20">20</option>
                            <option <?php if (isset($_SESSION['show'])) if ($_SESSION['show'] == 40) echo 'selected = "selected"'?> id ="option40" value="40">40</option>
                    </select>
                    <script type="text/javascript">
                    $('#show_id').change(function(){
                    	var value = "hu";
                    	var select = document.getElementById('show_id');
                    	if (select)
                    	{
                    	   if (select.selectedIndex == 0)
                    	   {
                    		   $.post('<?php echo base_url()?>index.php/welcome/ajax_review_show/5', {'t' : 't'}, 
                                   	function(data){$('#content3').html(data);; });
                    	   } else 
                    		   if (select.selectedIndex == 1)
                        	   {
                    			   $.post('<?php echo base_url()?>index.php/welcome/ajax_review_show/10', {'t' : 't'}, 
                                          	function(data){$('#content3').html(data);; });
                        	   } else
                        		   if (select.selectedIndex == 2)
                            	   {
                        			   $.post('<?php echo base_url()?>index.php/welcome/ajax_review_show/20', {'t' : 't'}, 
                                              	function(data){$('#content3').html(data);; });
                            	   } else
                            		   if (select.selectedIndex == 3)
                                	   {
                            			   $.post('<?php echo base_url()?>index.php/welcome/ajax_review_show/40', {'t' : 't'}, 
                                                  	function(data){$('#content3').html(data);; });
                                	   }    
                    	}
                    });
                    </script>
                    <script type="text/javascript">
                    	$(document).ready(function(){
							$('.bt').mouseenter(function(){								
								$(this).css('background-color','#C1E0FF');
								});
							$('.bt').mouseleave(function(){								
								$(this).css('background-color','silver');
								});
                        	});
                    </script>
                    <div style="float:right">
						<?php echo $pagination;?>                   
                    </div>
                    
                </div>
                
                <br />
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
                        for ($i=1; $i<=$list['rating']; $i++)
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
         