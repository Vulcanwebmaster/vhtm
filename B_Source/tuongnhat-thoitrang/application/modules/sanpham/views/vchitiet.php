<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/thoitrang/css/item.css"/>
<div id="wrapper" style="margin-top:15px">
      <div id="content" class="cols"><!----></div>
      
      <script type="text/javascript">
      	$(document).ready(function(){
			$('.thumbElement img').addClass('thumb');
          	
			$('.thumb').click(function(){
				$('.thumb').removeClass('sel');
				$(this).addClass('sel');
				});
          	});
      </script>
      <div id="wrapColumns">
      	<div id="col1" class="cols">
        	<div class="innerCol">
            	<div id="images">
                	<div id="thumbs">
                    	<div id="innerThumbs">
                        	<div class="thumbElement" id="img-small-1"><?php echo $info->hinhchitiet1;?></div>
                            <div class="thumbElement" id="img-small-2"><?php echo $info->hinhchitiet2;?></div>
                            <div class="thumbElement" id="img-small-3"><?php echo $info->hinhchitiet3;?></div>
                            <div class="thumbElement" id="img-small-4"><?php echo $info->hinhchitiet4;?></div>
                         </div>
                      </div>
               <!---------------------load images-------------------------------->
               <script type="text/javascript" language="javascript">
			   	$(document).ready(function(){
					$('.img-big-2,.img-big-3,.img-big-4').hide();
					$('#img-small-1').click(function(){
						$('.img-big-1').show();
						$('.img-big-2,.img-big-3,.img-big-4').hide();
						});
					$('#img-small-2').click(function(){
						$('.img-big-2').show();
						$('.img-big-1,.img-big-3,.img-big-4').hide();
						});
					$('#img-small-3').click(function(){
						$('.img-big-3').show();
						$('.img-big-1,.img-big-2,.img-big-4').hide();
						});
					$('#img-small-4').click(function(){
						$('.img-big-4').show();
						$('.img-big-2,.img-big-3,.img-big-1').hide();
						});
					});
               </script>
                   <div id="mainImg" class="mainImg img-big-1">
                      	<div id="mainImageLink" href="">
                        	<div id="mainImageContainer"><?php echo $info->hinhchitiet1;?></div>
                        </div>
                      <div id="zoomDesc" class="fontStyle"></div>
                   </div>
                   <div id="mainImg" class="mainImg img-big-2">
                      	<div id="mainImageLink" href="">
                        	<div id="mainImageContainer"><?php echo $info->hinhchitiet2;?></div>
                        </div>
                      <div id="zoomDesc" class="fontStyle"></div>
                   </div>
                   <div id="mainImg" class="mainImg img-big-3">
                      	<div id="mainImageLink" href="">
                        	<div id="mainImageContainer"><?php echo $info->hinhchitiet3;?></div>
                        </div>
                      <div id="zoomDesc" class="fontStyle"></div>
                   </div>
                   <div id="mainImg" class="mainImg img-big-4">
                      	<div id="mainImageLink" href="">
                        	<div id="mainImageContainer"><?php echo $info->hinhchitiet4;?></div>
                        </div>
                      <div id="zoomDesc" class="fontStyle"></div>
                   </div>
                 
                 </div>
                   <!--------------------------------------==-------------------------------------->
                   <style>
				   		.list{ color:#F00;}
				   		.mainImg img{width:387px; height:490px}
				   		.thumbElement img{width:90px !important; height:115px !important}
                   </style>
                   <script language="javascript">
				   		$(document).ready(function(){
							$('#chitiet').hide();
							$('#list-mota').addClass('list');
							$('#descriptionList').click(function(){
								$('#mota').show();
								$('#chitiet').hide();
							
								});
							$('#detailsList').click(function(){
								$('#list-chitiet').addClass('list');
								$('#descriptionList').removeClass('list');
								$('#chitiet').show();
								$('#mota').hide();
							
								});
							});
                   </script>
              </div>
            </div>
            <div id="col2" class="cols">
            	<div class="innerCol">
                	<ul id="tabs">
                    	<li id="descriptionList" ><a rel="descr" id="list-mota">Mô tả</a></li>
                        <li id="detailsList"><a rel="details" class="last-tab" id="list-chitiet">Chi tiết</a></li>
                     </ul>
              
                	<div id="mota"><?php echo $info->mota;?></div>
                    <div id="chitiet"><?php echo $info->chitiet;?></div>
           
				<div id="details" class="tab"><span>100% Lambskin</span></div>
                <div id="productInfo"><span id="cp"></span>
                	<div id="sizeWrapper">
                    	<div class="sizeWrap">
                        	<div id="wrapInputField"><input type="text" id="sizeChoose" readonly="readonly" value="Choose size"><span class="backImage" id="backImage"><!----></span></div>
                            <div id="sizeChooseWrap" style="display:none">
                            	<ul id="listOfSz">
                                	<li class="sizeBox" id="parent_3">
                                    	<div id="child_3" class="sizeBox" title="40 (Italian Size)">40</div>
                                     </li>
                                     <li class="sizeBox" id="parent_4">
                                     	<div id="child_4" class="sizeBox" title="42 (Italian Size)">42</div>
                                     </li>
                               </ul>
                            </div>
                         </div>
                      </div>
                      <div id="colorsContainer" style="visibility:hidden">
                      	<div class="colorBoxSelected" title="Khaki" id="parent_WI">
                        	<div class="colorBoxIn" title="Khaki" style="float:left;background-color:#BDB498;" id="child_WI"><!----></div>
                         </div>
                     </div>
                     <div class="itemBoxPrice">
                     	<span>
		                     <?php if ($info->giakhuyenmai!='')
		                     {?>
		                     	<div class="oldprice">€&nbsp;<?php echo $info->gia;?></div>
			                     <div class="newprice">€&nbsp;<?php echo $info->giakhuyenmai;?></div>
		                     <?php }
		                     else {?>
		                     	<div class="newprice">€&nbsp;<?php echo $info->gia;?></div>
		                     <?php }?>
		                 </span>
		              </div>
                  </div>
               </div>
               <div id="cartBox">
                <div id="wishAndAddButton">
                   	 <div id="addToShare"><span id="shareLabel">Share: </span>
                     	<div class="snWrapper">
                        	<div class="bookmarks"><span class="list"><a href="" id="facebook" class="social" onclick="shareObj.addTo('share_35170264WI','facebook');"></a><a href="" id="twitter" class="social" onclick="shareObj.addTo('share_35170264WI','twitter');"></a><a href="" id="myspace" class="social" onclick="shareObj.addTo('share_35170264WI','myspace');"></a><a href="" id="delicious" class="social" onclick="shareObj.addTo('share_35170264WI','delicious');"></a><a href="" id="friendfeed" class="social" onclick="shareObj.addTo('share_35170264WI','friendfeed');"></a></span></div>
                            </div>
                         </div><br>
                      </div>
                  </div>
                  <div id="relatedBox"><!---->
                  	<div id="relatedTitle" style="display:none">Complete your look with:</div>
                    <div id="related"><!----><!----></div><!---->
                 </div>
              </div>
            </div>
          </div>
          <div id="productAddedToSb" style="display:none;">
          	<div class="msg">&nbsp;</div>
            <div class="item"><img id="addedToSBImg" src=""><span class="desc">LEATHER SHORTS</span><br><span class="size">&nbsp;</span><br><span class="color">&nbsp;</span><br><span class="price">€&nbsp;1.850,00</span><a href="" class="goToSB"><span><br><br><br></span></a><a href=""><b>Proceed to purchase</b></a></div>
       </div>
  </div>