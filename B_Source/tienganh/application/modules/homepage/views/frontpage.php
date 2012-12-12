<div id="content">
<div class="slider-wrapper theme-default">
		            <div id="slider" class="nivoSlider">
		                <img src="<?php echo base_url();?>assets/trungtam-tienganh/images/slide1.jpg" data-thumb="<?php echo base_url();?>assets/trungtam-tienganh/images/slide1.jpg" alt="" />		                
		                <img src="<?php echo base_url();?>assets/trungtam-tienganh/images/slide2.jpg" data-thumb="<?php echo base_url();?>assets/trungtam-tienganh/images/slide2.jpg" alt=""  />
		                <img src="<?php echo base_url();?>assets/trungtam-tienganh/images/slide31.jpg" data-thumb="<?php echo base_url();?>assets/trungtam-tienganh/images/slide31.jpg" alt="" />
		                <img src="<?php echo base_url();?>assets/trungtam-tienganh/images/slide4.jpg" data-thumb="<?php echo base_url();?>assets/trungtam-tienganh/images/slide4.jpg" alt=""  />
		            </div>		           
		        </div>
		        <div id="manincontent">
		        	<div class="contenttext">
			        	<div class="textmaincontent">
			        		<div class="bgtitlemain"><p class="titlemain">Tin tức</p></div>
			        		
			        		<?php foreach ($list_tintuc as $item) 
									{ ?>
			        		<div class="idmain">
			        			<div class="img_main">
			        				<?php echo $item->news_image ?>
			        			</div>
			        			<div class="text_main">
			        				<p class="title"><a href="<?php echo base_url() ?>tintuc/detail/<?php echo $item->news_id;?>">
															<?php echo $item->news_title ?>
														  </a></p>
			        				<p><?php echo $item->news_summary ?><img src="<?php echo base_url() ?>tintuc/detail/<? echo $item->news_id;?><?php echo base_url();?><img src="assets/trungtam-tienganh/images/icon19.png"/></a></p>
									
			        			</div>
			        		</div>
			        		<?php } ?>
			        		<div class="readmore1"><a href="#">Xem thêm</a></div>
			        	</div>
			        	
			        	<div class="textmaincontent" style="margin-left:2%;">
		        		<div class="bgtitlemain"><p class="titlemain">Khóa học</p></div>
		        		<?php foreach ($list_khoahoc as $item) 
									{ ?>
		        		<div class="idmain">
		        			<div class="img_main2">
		        				<p><?php echo $item->courses_date ?></p>
		        			</div>
		        			<div class="text_main2">
		        				<p class="title"><?php echo $item->courses_name ?></p>
		        				<p><?php echo $item->courses_summary ?><img src="assets/trungtam-tienganh/images/icon19.png"/></a></p>
		        			</div>
		        		</div>
		        		<?php } ?>
		        		<div class="readmore"><a href="#">Xem thêm</a></div>
		        	</div>
		        	</div>
		        	<script type="text/javascript">
		        		$(document).ready(function(){		        			
		        			$('#id2, #id3, #id4, #id5, #id6,#id7').hide();	
		        			$('#vd1').addClass('iconbg');	
		        			$('#vd2, #vd3, #vd4, #vd5, #vd6, #vd7').addClass('iconbg2');        			
		        			$('#vd1').click(function(){
		        				$('#id1').show();
		        				$(this).addClass('iconbg');
		        				$(this).removeClass('iconbg2');
		        				$(this).parent().children('#vd2, #vd3, #vd4, #vd5, #vd6, #vd7').removeClass('iconbg'); 
		        				$(this).parent().children('#vd2, #vd3, #vd4, #vd5, #vd6, #vd7').addClass('iconbg2');
		        				$(this).parent().parent().children('#id2,#id3, #id4, #id5, #id6,#id7').hide();
		        				
		        			});
		        			$('#vd2').click(function(){
		        				$('#id2').show();
		        				$(this).addClass('iconbg');
		        				$(this).removeClass('iconbg2');
		        				$(this).parent().children('#vd1, #vd3, #vd4, #vd5, #vd6, #vd7').removeClass('iconbg'); 
		        				$(this).parent().children('#vd1, #vd3, #vd4, #vd5, #vd6, #vd7').addClass('iconbg2');
		        				$(this).parent().parent().children('#id1,#id3, #id4, #id5, #id6,#id7').hide();
		        			});
		        			$('#vd3').click(function(){
		        				$('#id3').show();
		        				$(this).addClass('iconbg');
		        				$(this).removeClass('iconbg2');
		        				$('#vd2, #vd1, #vd4, #vd5, #vd6, #vd7').removeClass('iconbg'); 
		        				$('#vd2, #vd1, #vd4, #vd5, #vd6, #vd7').addClass('iconbg2');
		        				$(this).parent().parent().children('#id1,#id2, #id4, #id5, #id6,#id7').hide();
		        			});
		        			$('#vd4').click(function(){
		        				$('#id4').show();
		        				$(this).addClass('iconbg');
		        				$(this).removeClass('iconbg2');
		        				$('#vd2, #vd3, #vd1, #vd5, #vd6, #vd7').removeClass('iconbg'); 
		        				$('#vd2, #vd3, #vd1, #vd5, #vd6, #vd7').addClass('iconbg2');
		        				$(this).parent().parent().children('#id1,#id3, #id2, #id5, #id6,#id7').hide();
		        			});
		        			$('#vd5').click(function(){
		        				$('#id5').show();
		        				$(this).addClass('iconbg');
		        				$(this).removeClass('iconbg2');
		        				$('#vd2, #vd3, #vd4, #vd1, #vd6, #vd7').removeClass('iconbg'); 
		        				$('#vd2, #vd3, #vd4, #vd1, #vd6, #vd7').addClass('iconbg2');
		        				$(this).parent().parent().children('#id1,#id3, #id2, #id4, #id6,#id7').hide();
		        			});
		        			$('#vd6').click(function(){
		        				$('#id6').show();
		        				$(this).removeClass('iconbg2');
		        				$(this).addClass('iconbg');
		        				$('#vd2, #vd3, #vd4, #vd5, #vd1, #vd7').removeClass('iconbg'); 
		        				$('#vd2, #vd3, #vd4, #vd5, #vd1, #vd7').addClass('iconbg2');
		        				$(this).parent().parent().children('#id1,#id3, #id2, #id5, #id4,#id7').hide();
		        			});
		        			$('#vd7').click(function(){
		        				$('#id7').show();
		        				$(this).addClass('iconbg');
		        				$(this).removeClass('iconbg2');
		        				$('#vd2, #vd3, #vd4, #vd5, #vd6, #vd1').removeClass('iconbg'); 
		        				$('#vd2, #vd3, #vd4, #vd5, #vd6, #vd1').addClass('iconbg2');
		        				$(this).parent().parent().children('#id1,#id3, #id2, #id5, #id6,#id4').hide();
		        			});
		        		});
		        		
		        	</script>
		        	
		        	<div class="video">		        		
		            		<div class="contentvideo">	
		            			<div style="height:280px;" id="id1"><iframe width="560" height="315" src="http://www.youtube.com/embed/ALdPR6HjyI8" frameborder="0" allowfullscreen></iframe></div>
		            			<div style="height:280px;" id="id2">
            						<iframe width="560" height="315" src="http://www.youtube.com/embed/lbw6_VdVWH8" frameborder="0" allowfullscreen></iframe>
            					</div>	  
            					<div style="height:280px;" id="id3">
            						<iframe width="560" height="315" src="http://www.youtube.com/embed/bxfHVx7Vr8c" frameborder="0" allowfullscreen></iframe>
            					</div>
		            			<div style="height:280px;" id="id4">
            						<iframe width="560" height="315" src="http://www.youtube.com/embed/bxfHVx7Vr8c" frameborder="0" allowfullscreen></iframe>
            					</div>	
            					<div style="height:280px;" id="id5"><iframe width="560" height="315" src="http://www.youtube.com/embed/ALdPR6HjyI8" frameborder="0" allowfullscreen></iframe></div>
		            			<div style="height:280px;" id="id6">
            						<iframe width="560" height="315" src="http://www.youtube.com/embed/bxfHVx7Vr8c" frameborder="0" allowfullscreen></iframe>
            					</div>	                    			
            					<div style="height:280px;" id="id7"><iframe width="560" height="315" src="http://www.youtube.com/embed/ALdPR6HjyI8" frameborder="0" allowfullscreen></iframe></div>
		            			<ul id="ul_video">
		            				<li id="vd1">		            					
		            						            					
		            				</li> 
		            				<li id="vd2">		            					
		            					
		            				</li>
		            				<li id="vd3">
		            					
		            				</li>
		            				<li id="vd4"></li>
		            				<li id="vd5"></li>
		            				<li id="vd6"></li>
		            				<li id="vd7"></li>
		            			</ul>
		            		</div>				       
		        	</div>
		        	<script type="text/javascript">
		        		$(document).ready(function(){
		        			$('.show2').hide();		
		        			$('#li1').addClass('addli');   
		        			$('#li2, #li3, #li4, #li5').children('.children').hide();         			
		        			$('#li1').click(function(){		
		        				$(this).addClass('addli');        				
		        				$(this).children().children('.show1').show();
		        				$(this).children().children('.show2').hide();	
		        				$(this).children('.children').show();			        				
		        				$('#li2, #li3, #li4, #li5').children().children('.show2').hide();
		        				$('#li2, #li3, #li4, #li5').children().children('.show1').show();
		        				$('#li2, #li3, #li4, #li5').children('.children').hide();
		        				$('#li2, #li3, #li4, #li5').removeClass('addli');
		        			});
		        			$('#li2').click(function(){	
		        				$(this).addClass('addli');	        				
		        				$(this).children().children('.show1').hide();
		        				$(this).children().children('.show2').show();	
		        				$(this).children('.children').show();			        				
		        				$('#li3,#li4, #li5').children().children('.show2').hide();
		        				$('#li3,#li4, #li5').children().children('.show1').show();
		        				$('#li1').children().children('.show2').show();
		        				$('#li1').children().children('.show1').hide();
		        				$('#li1, #li3, #li4, #li5').children('.children').hide();
		        				$('#li1, #li3, #li4, #li5').removeClass('addli');
		        			});
		        			$('#li3').click(function(){	
		        				$(this).addClass('addli');	        				
		        				$(this).children().children('.show1').hide();
		        				$(this).children().children('.show2').show();
		        				$(this).children('.children').show();				        				
		        				$('#li2,#li4, #li5').children().children('.show2').hide();
		        				$('#li2,#li4, #li5').children().children('.show1').show();
		        				$('#li1').children().children('.show2').show();
		        				$('#li1').children().children('.show1').hide();
		        				$('#li2, #li1, #li4, #li5').children('.children').hide();
		        				$('#li1, #li2, #li4, #li5').removeClass('addli');
		        			});
		        			$('#li4').click(function(){	
		        				$(this).addClass('addli');	        				
		        				$(this).children().children('.show1').hide();
		        				$(this).children().children('.show2').show();
		        				$(this).children('.children').show();		        				
		        				$('#li2,#li3, #li5').children().children('.show2').hide();
		        				$('#li2,#li3, #li5').children().children('.show1').show();
		        				$('#li1').children().children('.show2').show();
		        				$('#li1').children().children('.show1').hide();
		        				$('#li1, #li2, #li3, #li5').removeClass('addli');
		        				$('#li2, #li3, #li1, #li5').children('.children').hide();
		        			});
		        				$('#li5').click(function(){	
		        				$(this).addClass('addli');	
		        				$(this).children('.children').show();		        				
		        				$(this).children().children('.show1').hide();
		        				$(this).children().children('.show2').show();		        				
		        				$('#li2,#li3, #li4').children().children('.show2').hide();
		        				$('#li2,#li3, #li4').children().children('.show1').show();
		        				$('#li1').children().children('.show2').show();
		        				$('#li1').children().children('.show1').hide();
		        				$('#li1, #li2, #li3, #li4').removeClass('addli');
		        				$('#li2, #li3, #li4, #li1').children('.children').hide();
		        			});
		        		})
		        	</script>
	<div class="tab">
		        		<ul id="ultop">
		        			<li id="li1">
		        				<a href-"#">
			        				<img src="<?php echo base_url();?>assets/trungtam-tienganh/images/face1.png" class="show1"/>
			        				<img src="<?php echo base_url();?>assets/trungtam-tienganh/images/face.png" class="show2"/>
			        			</a>
		        				<div class="children">
		        					<div class="topics">
		        						<div class="imgtopics">
		        							<img src="<?php echo base_url();?>assets/trungtam-tienganh/images/icon3.gif"/>
		        						</div>
		        						<div class="texttopics">
		        							<p><label class="deal">DEAL.com.sg-Singapore at Half the Price !</label> trên face</p>
		        							<img src="<?php echo base_url();?>assets/trungtam-tienganh/images/like.gif"/>
		        						</div>
		        					</div>
		        					<div class="like">
		        						<p style="padding:10px 0;">112 người thích<label style="font-weight:bold"> DEAL.com.sg-Singapore at Half the Price</label></p>
		        						<ul class="peoplelike">
		        							<li><a href="#">
		        								<img src="<?php echo base_url();?>assets/trungtam-tienganh/images/trang-chu_101.gif"/>
		        								<p align="center">Lisa</p>		        								
		        							</a></li>
		        							<li><a href="#">
		        								<img src="<?php echo base_url();?>assets/trungtam-tienganh/images/trang-chu_103.gif"/>
		        								<p align="center">Lisa</p>		        								
		        							</a></li>
		        							<li><a href="#">
		        								<img src="<?php echo base_url();?>assets/trungtam-tienganh/images/trang-chu_105.gif"/>
		        								<p align="center">Lisa</p>		        								
		        							</a></li>
		        							<li><a href="#">
		        								<img src="<?php echo base_url();?>assets/trungtam-tienganh/images/trang-chu_107.gif"/>
		        								<p align="center">Lisa</p>		        								
		        							</a></li>
		        							<li><a href="#">
		        								<img src="<?php echo base_url();?>assets/trungtam-tienganh/images/trang-chu_109.gif"/>
		        								<p align="center">Lisa</p>		        								
		        							</a></li>
		        							<li><a href="#">
		        								<img src="<?php echo base_url();?>assets/trungtam-tienganh/images/trang-chu_111.gif"/>
		        								<p align="center">Lisa</p>		        								
		        							</a></li>
		        							<li><a href="#">
		        								<img src="<?php echo base_url();?>assets/trungtam-tienganh/images/trang-chu_113.gif"/>
		        								<p align="center">Lisa</p>		        								
		        							</a></li>
		        							<li><a href="#">
		        								<img src="<?php echo base_url();?>assets/trungtam-tienganh/images/trang-chu_115.gif"/>
		        								<p align="center">Lisa</p>		        								
		        							</a></li>
		        							<li><a href="#">
		        								<img src="<?php echo base_url();?>assets/trungtam-tienganh/images/trang-chu_117.gif"/>
		        								<p align="center">Lisa</p>		        								
		        							</a></li>
		        							<li><a href="#">
		        								<img src="<?php echo base_url();?>assets/trungtam-tienganh/images/trang-chu_119.gif"/>
		        								<p align="center">Lisa</p>		        								
		        							</a></li>
		        							<li><a href="#">
		        								<img src="<?php echo base_url();?>assets/trungtam-tienganh/images/trang-chu_121.gif"/>
		        								<p align="center">Lisa</p>		        								
		        							</a></li>
		        							<li><a href="#">
		        								<img src="<?php echo base_url();?>assets/trungtam-tienganh/images/trang-chu_123.gif"/>
		        								<p align="center">Lisa</p>		        								
		        							</a></li>
		        								<li><a href="#">
		        								<img src="<?php echo base_url();?>assets/trungtam-tienganh/images/trang-chu_125.gif"/>
		        								<p align="center">Lisa</p>		        								
		        							</a></li>
		        							<li><a href="#">
		        								<img src="<?php echo base_url();?>assets/trungtam-tienganh/images/trang-chu_127.gif"/>
		        								<p align="center">Lisa</p>		        								
		        							</a></li>
		        							<li><a href="#">
		        								<img src="<?php echo base_url();?>assets/trungtam-tienganh/images/trang-chu_129.gif"/>
		        								<p align="center">Lisa</p>		        								
		        							</a></li>
		        							<li><a href="#">
		        								<img src="<?php echo base_url();?>assets/trungtam-tienganh/images/trang-chu_117.gif"/>
		        								<p align="center">Lisa</p>		        								
		        							</a></li>
		        							<li><a href="#">
		        								<img src="<?php echo base_url();?>assets/trungtam-tienganh/images/trang-chu_119.gif"/>
		        								<p align="center">Lisa</p>		        								
		        							</a></li>		        							        							
		        						</ul>
		        					</div>
		        				</div>
		        			</li>
		        			<li id="li2">
		        				<a href-"#">
			        				<img src="<?php echo base_url();?>assets/trungtam-tienganh/images/twiter.png" class="show1"/>
			        				<img src="<?php echo base_url();?>assets/trungtam-tienganh/images/twiter1.png" class="show2"/>
			        			</a>
			        				<div class="children">
		        					<div class="topics">
		        						<div class="imgtopics">
		        							<img src="<?php echo base_url();?>assets/trungtam-tienganh/images/icon3.gif"/>
		        						</div>
		        						<div class="texttopics">
		        							<p><label class="deal">DEAL.com.sg-Singapore at Half the Price !</label> trên face</p>
		        							<img src="images/like.gif"/>
		        						</div>
		        					</div>
		        					<div class="like">
		        						<p style="padding:10px 0;">112 người thích<label style="font-weight:bold"> DEAL.com.sg-Singapore at Half the Price</label></p>
		        						<ul class="peoplelike">
		        							<li><a href="#">
		        								<img src="<?php echo base_url();?>assets/trungtam-tienganh/images/trang-chu_101.gif"/>
		        								<p align="center">Lisa</p>		        								
		        							</a></li>
		        							<li><a href="#">
		        								<img src="<?php echo base_url();?>assets/trungtam-tienganh/images/trang-chu_103.gif"/>
		        								<p align="center">Lisa</p>		        								
		        							</a></li>
		        							<li><a href="#">
		        								<img src="<?php echo base_url();?>assets/trungtam-tienganh/images/trang-chu_105.gif"/>
		        								<p align="center">Lisa</p>		        								
		        							</a></li>
		        							<li><a href="#">
		        								<img src="<?php echo base_url();?>assets/trungtam-tienganh/images/trang-chu_107.gif"/>
		        								<p align="center">Lisa</p>		        								
		        							</a></li>
		        							<li><a href="#">
		        								<img src="<?php echo base_url();?>assets/trungtam-tienganh/images/trang-chu_109.gif"/>
		        								<p align="center">Lisa</p>		        								
		        							</a></li>
		        							<li><a href="#">
		        								<img src="<?php echo base_url();?>assets/trungtam-tienganh/images/trang-chu_111.gif"/>
		        								<p align="center">Lisa</p>		        								
		        							</a></li>
		        							<li><a href="#">
		        								<img src="<?php echo base_url();?>assets/trungtam-tienganh/images/trang-chu_113.gif"/>
		        								<p align="center">Lisa</p>		        								
		        							</a></li>
		        							<li><a href="#">
		        								<img src="<?php echo base_url();?>assets/trungtam-tienganh/images/trang-chu_115.gif"/>
		        								<p align="center">Lisa</p>		        								
		        							</a></li>
		        							<li><a href="#">
		        								<img src="<?php echo base_url();?>assets/trungtam-tienganh/images/trang-chu_117.gif"/>
		        								<p align="center">Lisa</p>		        								
		        							</a></li>
		        							<li><a href="#">
		        								<img src="<?php echo base_url();?>assets/trungtam-tienganh/images/trang-chu_119.gif"/>
		        								<p align="center">Lisa</p>		        								
		        							</a></li>
		        							<li><a href="#">
		        								<img src="<?php echo base_url();?>assets/trungtam-tienganh/images/trang-chu_121.gif"/>
		        								<p align="center">Lisa</p>		        								
		        							</a></li>
		        							<li><a href="#">
		        								<img src="<?php echo base_url();?>assets/trungtam-tienganh/images/trang-chu_123.gif"/>
		        								<p align="center">Lisa</p>		        								
		        							</a></li>
		        								<li><a href="#">
		        								<img src="<?php echo base_url();?>assets/trungtam-tienganh/images/trang-chu_125.gif"/>
		        								<p align="center">Lisa</p>		        								
		        							</a></li>
		        							<li><a href="#">
		        								<img src="<?php echo base_url();?>assets/trungtam-tienganh/images/trang-chu_127.gif"/>
		        								<p align="center">Lisa</p>		        								
		        							</a></li>
		        							<li><a href="#">
		        								<img src="<?php echo base_url();?>assets/trungtam-tienganh/images/trang-chu_129.gif"/>
		        								<p align="center">Lisa</p>		        								
		        							</a></li>
		        							<li><a href="#">
		        								<img src="<?php echo base_url();?>assets/trungtam-tienganh/images/trang-chu_117.gif"/>
		        								<p align="center">Lisa</p>		        								
		        							</a></li>
		        							<li><a href="#">
		        								<img src="<?php echo base_url();?>assets/trungtam-tienganh/images/trang-chu_119.gif"/>
		        								<p align="center">Lisa</p>		        								
		        							</a></li>		        							        							
		        						</ul>
		        					</div>
		        				</div>
		        			</li>
		        			<li id="li3">
		        				<a href-"#">
			        				<img src="<?php echo base_url();?>assets/trungtam-tienganh/images/ytb.png" class="show1"/>
			        				<img src="<?php echo base_url();?>assets/trungtam-tienganh/images/ytb1.png" class="show2"/>
			        			</a>
			        				<div class="children">
		        					<div class="topics">
		        						<div class="imgtopics">
		        							<img src="<?php echo base_url();?>assets/trungtam-tienganh/images/icon3.gif"/>
		        						</div>
		        						<div class="texttopics">
		        							<p><label class="deal">DEAL.com.sg-Singapore at Half the Price !</label> trên face</p>
		        							<img src="<?php echo base_url();?>assets/trungtam-tienganh/images/like.gif"/>
		        						</div>
		        					</div>
		        					<div class="like">
		        						<p style="padding:10px 0;">112 người thích<label style="font-weight:bold"> DEAL.com.sg-Singapore at Half the Price</label></p>
		        						<ul class="peoplelike">
		        							<li><a href="#">
		        								<img src="<?php echo base_url();?>assets/trungtam-tienganh/images/trang-chu_101.gif"/>
		        								<p align="center">Lisa</p>		        								
		        							</a></li>
		        							<li><a href="#">
		        								<img src="<?php echo base_url();?>assets/trungtam-tienganh/images/trang-chu_103.gif"/>
		        								<p align="center">Lisa</p>		        								
		        							</a></li>
		        							<li><a href="#">
		        								<img src="<?php echo base_url();?>assets/trungtam-tienganh/images/trang-chu_105.gif"/>
		        								<p align="center">Lisa</p>		        								
		        							</a></li>
		        							<li><a href="#">
		        								<img src="<?php echo base_url();?>assets/trungtam-tienganh/images/trang-chu_107.gif"/>
		        								<p align="center">Lisa</p>		        								
		        							</a></li>
		        							<li><a href="#">
		        								<img src="<?php echo base_url();?>assets/trungtam-tienganh/images/trang-chu_109.gif"/>
		        								<p align="center">Lisa</p>		        								
		        							</a></li>
		        							<li><a href="#">
		        								<img src="<?php echo base_url();?>assets/trungtam-tienganh/images/trang-chu_111.gif"/>
		        								<p align="center">Lisa</p>		        								
		        							</a></li>
		        							<li><a href="#">
		        								<img src="<?php echo base_url();?>assets/trungtam-tienganh/images/trang-chu_113.gif"/>
		        								<p align="center">Lisa</p>		        								
		        							</a></li>
		        							<li><a href="#">
		        								<img src="<?php echo base_url();?>assets/trungtam-tienganh/images/trang-chu_115.gif"/>
		        								<p align="center">Lisa</p>		        								
		        							</a></li>
		        							<li><a href="#">
		        								<img src="<?php echo base_url();?>assets/trungtam-tienganh/images/trang-chu_117.gif"/>
		        								<p align="center">Lisa</p>		        								
		        							</a></li>
		        							<li><a href="#">
		        								<img src="<?php echo base_url();?>assets/trungtam-tienganh/images/trang-chu_119.gif"/>
		        								<p align="center">Lisa</p>		        								
		        							</a></li>
		        							<li><a href="#">
		        								<img src="<?php echo base_url();?>assets/trungtam-tienganh/images/trang-chu_121.gif"/>
		        								<p align="center">Lisa</p>		        								
		        							</a></li>
		        							<li><a href="#">
		        								<img src="<?php echo base_url();?>assets/trungtam-tienganh/images/trang-chu_123.gif"/>
		        								<p align="center">Lisa</p>		        								
		        							</a></li>
		        								<li><a href="#">
		        								<img src="<?php echo base_url();?>assets/trungtam-tienganh/images/trang-chu_125.gif"/>
		        								<p align="center">Lisa</p>		        								
		        							</a></li>
		        							<li><a href="#">
		        								<img src="<?php echo base_url();?>assets/trungtam-tienganh/images/trang-chu_127.gif"/>
		        								<p align="center">Lisa</p>		        								
		        							</a></li>
		        							<li><a href="#">
		        								<img src="<?php echo base_url();?>assets/trungtam-tienganh/images/trang-chu_129.gif"/>
		        								<p align="center">Lisa</p>		        								
		        							</a></li>
		        							<li><a href="#">
		        								<img src="<?php echo base_url();?>assets/trungtam-tienganh/images/trang-chu_117.gif"/>
		        								<p align="center">Lisa</p>		        								
		        							</a></li>
		        							<li><a href="#">
		        								<img src="<?php echo base_url();?>assets/trungtam-tienganh/images/trang-chu_119.gif"/>
		        								<p align="center">Lisa</p>		        								
		        							</a></li>		        							        							
		        						</ul>
		        					</div>
		        				</div>
		        			</li>
		        			<li id="li4">
			        				<a href-"#">
			        				<img src="<?php echo base_url();?>assets/trungtam-tienganh/images/zing.png" class="show1"/>
			        				<img src="<?php echo base_url();?>assets/trungtam-tienganh/images/zing1.png" class="show2"/>
			        			</a>
			        				<div class="children">
		        					<div class="topics">
		        						<div class="imgtopics">
		        							<img src="<?php echo base_url();?>assets/trungtam-tienganh/images/icon3.gif"/>
		        						</div>
		        						<div class="texttopics">
		        							<p><label class="deal">DEAL.com.sg-Singapore at Half the Price !</label> trên face</p>
		        							<img src="<?php echo base_url();?>assets/trungtam-tienganh/images/like.gif"/>
		        						</div>
		        					</div>
		        					<div class="like">
		        						<p style="padding:10px 0;">112 người thích<label style="font-weight:bold"> DEAL.com.sg-Singapore at Half the Price</label></p>
		        						<ul class="peoplelike">
		        							<li><a href="#">
		        								<img src="<?php echo base_url();?>assets/trungtam-tienganh/images/trang-chu_101.gif"/>
		        								<p align="center">Lisa</p>		        								
		        							</a></li>
		        							<li><a href="#">
		        								<img src="<?php echo base_url();?>assets/trungtam-tienganh/images/trang-chu_103.gif"/>
		        								<p align="center">Lisa</p>		        								
		        							</a></li>
		        							<li><a href="#">
		        								<img src="<?php echo base_url();?>assets/trungtam-tienganh/images/trang-chu_105.gif"/>
		        								<p align="center">Lisa</p>		        								
		        							</a></li>
		        							<li><a href="#">
		        								<img src="<?php echo base_url();?>assets/trungtam-tienganh/images/trang-chu_107.gif"/>
		        								<p align="center">Lisa</p>		        								
		        							</a></li>
		        							<li><a href="#">
		        								<img src="<?php echo base_url();?>assets/trungtam-tienganh/images/trang-chu_109.gif"/>
		        								<p align="center">Lisa</p>		        								
		        							</a></li>
		        							<li><a href="#">
		        								<img src="<?php echo base_url();?>assets/trungtam-tienganh/images/trang-chu_111.gif"/>
		        								<p align="center">Lisa</p>		        								
		        							</a></li>
		        							<li><a href="#">
		        								<img src="<?php echo base_url();?>assets/trungtam-tienganh/images/trang-chu_113.gif"/>
		        								<p align="center">Lisa</p>		        								
		        							</a></li>
		        							<li><a href="#">
		        								<img src="<?php echo base_url();?>assets/trungtam-tienganh/images/trang-chu_115.gif"/>
		        								<p align="center">Lisa</p>		        								
		        							</a></li>
		        							<li><a href="#">
		        								<img src="<?php echo base_url();?>assets/trungtam-tienganh/images/trang-chu_117.gif"/>
		        								<p align="center">Lisa</p>		        								
		        							</a></li>
		        							<li><a href="#">
		        								<img src="<?php echo base_url();?>assets/trungtam-tienganh/images/trang-chu_119.gif"/>
		        								<p align="center">Lisa</p>		        								
		        							</a></li>
		        							<li><a href="#">
		        								<img src="<?php echo base_url();?>assets/trungtam-tienganh/images/trang-chu_121.gif"/>
		        								<p align="center">Lisa</p>		        								
		        							</a></li>
		        							<li><a href="#">
		        								<img src="<?php echo base_url();?>assets/trungtam-tienganh/images/trang-chu_123.gif"/>
		        								<p align="center">Lisa</p>		        								
		        							</a></li>
		        								<li><a href="#">
		        								<img src="<?php echo base_url();?>assets/trungtam-tienganh/images/trang-chu_125.gif"/>
		        								<p align="center">Lisa</p>		        								
		        							</a></li>
		        							<li><a href="#">
		        								<img src="<?php echo base_url();?>assets/trungtam-tienganh/images/trang-chu_127.gif"/>
		        								<p align="center">Lisa</p>		        								
		        							</a></li>
		        							<li><a href="#">
		        								<img src="<?php echo base_url();?>assets/trungtam-tienganh/images/trang-chu_129.gif"/>
		        								<p align="center">Lisa</p>		        								
		        							</a></li>
		        							<li><a href="#">
		        								<img src="<?php echo base_url();?>assets/trungtam-tienganh/images/trang-chu_117.gif"/>
		        								<p align="center">Lisa</p>		        								
		        							</a></li>
		        							<li><a href="#">
		        								<img src="<?php echo base_url();?>assets/trungtam-tienganh/images/trang-chu_119.gif"/>
		        								<p align="center">Lisa</p>		        								
		        							</a></li>		        							        							
		        						</ul>
		        					</div>
		        				</div>
		        			</li>
		        			<li id="li5">
		        				<a href-"#">
			        				<img src="<?php echo base_url();?>assets/trungtam-tienganh/images/go.png" class="show1"/>
			        				<img src="<?php echo base_url();?>assets/trungtam-tienganh/images/go1.png" class="show2"/>
			        			</a>
			        				<div class="children">
		        					<div class="topics">
		        						<div class="imgtopics">
		        							<img src="<?php echo base_url();?>assets/trungtam-tienganh/images/icon3.gif"/>
		        						</div>
		        						<div class="texttopics">
		        							<p><label class="deal">DEAL.com.sg-Singapore at Half the Price !</label> trên face</p>
		        							<img src="<?php echo base_url();?>assets/trungtam-tienganh/images/like.gif"/>
		        						</div>
		        					</div>
		        					<div class="like">
		        						<p style="padding:10px 0;">112 người thích<label style="font-weight:bold"> DEAL.com.sg-Singapore at Half the Price</label></p>
		        						<ul class="peoplelike">
		        							<li><a href="#">
		        								<img src="<?php echo base_url();?>assets/trungtam-tienganh/images/trang-chu_101.gif"/>
		        								<p align="center">Lisa</p>		        								
		        							</a></li>
		        							<li><a href="#">
		        								<img src="<?php echo base_url();?>assets/trungtam-tienganh/images/trang-chu_103.gif"/>
		        								<p align="center">Lisa</p>		        								
		        							</a></li>
		        							<li><a href="#">
		        								<img src="<?php echo base_url();?>assets/trungtam-tienganh/images/trang-chu_105.gif"/>
		        								<p align="center">Lisa</p>		        								
		        							</a></li>
		        							<li><a href="#">
		        								<img src="<?php echo base_url();?>assets/trungtam-tienganh/images/trang-chu_107.gif"/>
		        								<p align="center">Lisa</p>		        								
		        							</a></li>
		        							<li><a href="#">
		        								<img src="<?php echo base_url();?>assets/trungtam-tienganh/images/trang-chu_109.gif"/>
		        								<p align="center">Lisa</p>		        								
		        							</a></li>
		        							<li><a href="#">
		        								<img src="<?php echo base_url();?>assets/trungtam-tienganh/images/trang-chu_111.gif"/>
		        								<p align="center">Lisa</p>		        								
		        							</a></li>
		        							<li><a href="#">
		        								<img src="<?php echo base_url();?>assets/trungtam-tienganh/images/trang-chu_113.gif"/>
		        								<p align="center">Lisa</p>		        								
		        							</a></li>
		        							<li><a href="#">
		        								<img src="<?php echo base_url();?>assets/trungtam-tienganh/images/trang-chu_115.gif"/>
		        								<p align="center">Lisa</p>		        								
		        							</a></li>
		        							<li><a href="#">
		        								<img src="<?php echo base_url();?>assets/trungtam-tienganh/images/trang-chu_117.gif"/>
		        								<p align="center">Lisa</p>		        								
		        							</a></li>
		        							<li><a href="#">
		        								<img src="<?php echo base_url();?>assets/trungtam-tienganh/images/trang-chu_119.gif"/>
		        								<p align="center">Lisa</p>		        								
		        							</a></li>
		        							<li><a href="#">
		        								<img src="<?php echo base_url();?>assets/trungtam-tienganh/images/trang-chu_121.gif"/>
		        								<p align="center">Lisa</p>		        								
		        							</a></li>
		        							<li><a href="#">
		        								<img src="<?php echo base_url();?>assets/trungtam-tienganh/images/trang-chu_123.gif"/>
		        								<p align="center">Lisa</p>		        								
		        							</a></li>
		        								<li><a href="#">
		        								<img src="<?php echo base_url();?>assets/trungtam-tienganh/images/trang-chu_125.gif"/>
		        								<p align="center">Lisa</p>		        								
		        							</a></li>
		        							<li><a href="#">
		        								<img src="<?php echo base_url();?>assets/trungtam-tienganh/images/trang-chu_127.gif"/>
		        								<p align="center">Lisa</p>		        								
		        							</a></li>
		        							<li><a href="#">
		        								<img src="<?php echo base_url();?>assets/trungtam-tienganh/images/trang-chu_129.gif"/>
		        								<p align="center">Lisa</p>		        								
		        							</a></li>
		        							<li><a href="#">
		        								<img src="<?php echo base_url();?>assets/trungtam-tienganh/images/trang-chu_117.gif"/>
		        								<p align="center">Lisa</p>		        								
		        							</a></li>
		        							<li><a href="#">
		        								<img src="<?php echo base_url();?>assets/trungtam-tienganh/images/trang-chu_119.gif"/>
		        								<p align="center">Lisa</p>		        								
		        							</a></li>		        							        							
		        						</ul>
		        					</div>
		        				</div>
		        			</li>
		        		</ul>
		        		<div class="righttab">
		        			<form>
		        				<input name="keyword" id="mod_virtuemart_search" maxlength="80" class="inputbox" type="text" size="20" value="your email address..." onblur="if(this.value=='') this.value='your email address...';" onfocus="if(this.value=='your email address...') this.value='';">
		        				<input type="submit" value="Subscribe" class="submitrighttab"/>
		        			</form>
		        		</div>
		        	</div>
		        	<div class="plupgin">
		        		<img src="<?php echo base_url();?>assets/trungtam-tienganh/images/iconface.gif"/>
		        		<p>Plugin xã hội của Facebook</p>
		        	</div>
		        	<script type="text/javascript">
		        		$(document).ready(function(){		        			
		        			$(".prev12").click(function(){
						  $(".slideimage").animate({"left": "+=311px"}, "slow");
							});
							
							$(".next12").click(function(){
								
							  $(".slideimage").animate({"left": "-=311px"}, "slow");
							});
		        		});
					</script>
		        	<div class="contentbot">
		        		<div class="prev12"><img src="<?php echo base_url();?>assets/trungtam-tienganh/images/icon5.gif"/></div>
			        	<div id="clickslide">
			        		
			        		<div style="width:90%; overflow: hidden; height: 119px; margin:0 20px;">
			        		<div class="slideimage">
			        			
			        			<img src="<?php echo base_url();?>assets/trungtam-tienganh/images/trang-chu_152.gif"/>
			        			<img src="<?php echo base_url();?>assets/trungtam-tienganh/images/trang-chu_155.gif"/>
			        			<img src="<?php echo base_url();?>assets/trungtam-tienganh/images/trang-chu_152.gif"/>
			        			<img src="<?php echo base_url();?>assets/trungtam-tienganh/images/trang-chu_155.gif"/>
			        			<img src="<?php echo base_url();?>assets/trungtam-tienganh/images/trang-chu_152.gif"/>
			        			<img src="<?php echo base_url();?>assets/trungtam-tienganh/images/trang-chu_155.gif"/>
			        		</div>
			        		</div>
			        		
			        		
			        	</div>
			        	<div class="next12"><img src="<?php echo base_url();?>assets/trungtam-tienganh/images/icon8.gif"/></div>
			        	<div id="number">
			        		<table class="table">
			        			<tr>
			        				<td colspan="2" class="bd">
			        					<label>Bộ đếm</label>
			        				</td>
			        			</tr>
			        			<tr>
			        				<td><img src="<?php echo base_url();?>assets/trungtam-tienganh/images/icon6.gif"/></td>
			        				<td>Đang truy cập : <label style="font-weight:bold;">1</label></td>
			        			</tr>
			        			<tr>
			        				<td><img src="<?php echo base_url();?>assets/trungtam-tienganh/images/icon9.gif"/></td>
			        				<td>Hôm nay: <label style="font-weight:bold;">1</label></td>
			        			</tr>
			        			<tr>
			        				<td><img src="<?php echo base_url();?>assets/trungtam-tienganh/images/icon4.gif"/></td>
			        				<td>Tháng hiện tại : <label style="font-weight:bold;">1</label></td>
			        			</tr>
			        			<tr>
			        				<td><img src="<?php echo base_url();?>assets/trungtam-tienganh/images/icon7.gif"/></td>
			        				<td>Tổng lượt truy cập : <label style="font-weight:bold;">1</label></td>
			        			</tr>
			        		</table>
			        	</div>
		        	</div>
		        </div>
			</div>