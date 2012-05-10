                <div id="comment-header">
                    <img src="<?php echo base_url()?>assets/images/comment-icon.jpg" alt="" />
                    <a>REVIEWS | Customers Feedback </a>
                </div>
                
                <div id="news-control-panel">
                
                    <span style="font-size:12px; font-weight:bold">Show</span> 
                    <form name="your_form_name" method="post" action="<?php echo base_url();?>">
                        <select id="show_id" name = "show_id" onchange="document.your_form_name.submit()">
                        	<option value="1">1</option>
                            <option value="5">5</option>
                            <option value="10">10</option>
                            <option value="15">15</option>
                            <option value="20">20</option>
                        </select>
                    </form>
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
                    <script type="text/javascript"
                    src="<?php echo base_url()?>assets/js/jquery-1.6.2.min.js">
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
         