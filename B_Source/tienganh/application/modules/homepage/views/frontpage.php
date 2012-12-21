<!--<?php
if (isset($_POST['sendmail']) && $_POST['sendmail']=="send")
{
$from=$_POST['trungnt20290@gmail.com'];
$to=$_POST['to'];
$subject=$_POST['Ðã hoàn tất đăng ký gửi tin!'];
$message=$_POST['Bạn sẽ được thông báo khi có bản tin mới'];
$options="Content-type:text/html;charset=utf-8\r\nFrom:$from\r\nReply-to:$from";
mail($to,$subject,$message,$options);
echo"Ðã gửi mail";
}
?>-->
	<?php if (validation_errors())
	{
		echo '<div class="error-panel">';
		//echo validation_errors('<p style="color:#f83d43">','</p>');
		echo '</div>';
	}?>

				<style>
					#slider img{ width:960px; height:354px !important;}
				</style>
<div id="content">
<div class="slider-wrapper theme-default">
		            <div id="slider" class="nivoSlider">
		           		<?php foreach ($list_slide as $slide)
									{
										 echo $slide->anh1;
										 echo $slide->anh2;
										 echo $slide->anh3;
										 echo $slide->anh4;
									}?>
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
			        				<p class="title"><a href="<?php echo base_url();?>tintuc/detail/<?php echo $item->news_id."-".$item->alias;?>">
															<?php echo $item->news_title ?><br>
														  </a></p>
														  <p>(<?php echo ($item->news_post_date); ?>)</p>
			        				<p><?php echo word_limiter(strip_tags($item->news_content), 18)?></br>
			        					<a href="<?php echo base_url();?>tintuc/detail/<?php echo $item->news_id."-".$item->alias;?>">
			        						Tìm hiểu thêm về sự kiện này <img src="assets/trungtam-tienganh/images/icon19.png"/>
			        					</a>
			        				</p>
			        			</div>
			        		</div>
			        		<?php } ?>
			        		<!----<div class="readmore1"><a href="#">Xem thêm</a></div>--->
			        		<div class="readmore1"><a href="<?php echo base_url();?>tintuc">Xem thêm</a></div>
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
		        				<p class="title">
		        					<a href="<?php echo base_url();?>khoahoc/detail/<?php echo $item->courses_id."-".$item->alias;?>">
		        					<?php echo $item->courses_name ?>
		        					</a></p>
		        					<p>(<?php echo $item->courses_date ?>)</br></p>
		        				<p><?php echo word_limiter(strip_tags($item->courses_content), 18)?>
		        					<a href="<?php echo base_url();?>khoahoc/detail/<?php echo $item->courses_id."-".$item->alias;?>">
			        						</br>Tìm hiểu thêm về sự kiện này <img src="assets/trungtam-tienganh/images/icon19.png"/>
			        					</a>
		        				</p>
		        			</div>
		        		</div>
		        		<?php } ?>
		        		<!---<div class="readmore"><a href="#">Xem thêm</a></div>-->
		        		<div class="readmore"><a href="<?php echo base_url()?>khoahoc">Xem thêm</a></div>
		        	</div>
		        	</div>
		        	<script>
			        /*	$(document).ready(function(){
			        		
			        		$('.panel1 ').click(function(){
			        			alert('123');
			        			$(this).addClass('.anythingslidecontrols');
			        			
			        		});
			        	});*/
							// DOM Ready
						$(function(){
							$('#slidervideo').anythingSlider({
								resizeContents      : true,
								addWmodeToObject    : 'transparent',
								navigationFormatter : function(index, panel){ // Format navigation labels with text
									return ['', '', '', '', ''][index - 1];
									
								}
							});
						});
					</script>
		        	<div class="video">		        		
		            		<div class="contentvideo">	
								<ul id="slidervideo">
									<!-- YouTube: iframe -->
									<li class="panel3">
										<iframe src="http://www.youtube.com/embed/ZnOAK04tJhc" frameborder="0" allowfullscreen></iframe>
									</li>
									<li class="panel3">
										<iframe src="http://www.youtube.com/embed/ulOb9gIGGd0" frameborder="0" allowfullscreen></iframe>
									</li>
									<li class="panel3">
										<iframe src="http://www.youtube.com/embed/Xdv83MFJd7U" frameborder="0" allowfullscreen></iframe>
									</li>
									<li class="panel3">
										<iframe src="http://www.youtube.com/embed/Xdv83MFJd7U" frameborder="0" allowfullscreen></iframe>
									</li>
									<li class="panel3">
										<iframe src="http://www.youtube.com/embed/Xdv83MFJd7U" frameborder="0" allowfullscreen></iframe>
									</li>
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
		        				<a href="#">
			        				<img src="<?php echo base_url();?>assets/trungtam-tienganh/images/face1.png" class="show1"/>
			        				<img src="<?php echo base_url();?>assets/trungtam-tienganh/images/face.png" class="show2"/>
			        			</a>
		        				<div class="children">
		        					<div class="topics">
		        						<div class="imgtopics">
		        							<img src="<?php echo base_url();?>assets/trungtam-tienganh/images/icon3.gif"/>
		        						</div>
		        						<div class="texttopics">
		        							 <script>
										        // Load the SDK Asynchronously
										        (function(d){
										           var js, id = 'facebook-jssdk', ref = d.getElementsByTagName('script')[0];
										           if (d.getElementById(id)) {return;}
										           js = d.createElement('script'); js.id = id; js.async = true;
										           js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
										           ref.parentNode.insertBefore(js, ref);
										         }(document));
										      </script>
 											 <fb:like href="<?php echo base_url();?>assets/trungtam-tienganh/images/like.gif" show_faces="false" width="280" font="tahoma"></fb:like>
		        							<p><label class="deal">DEAL.com.sg-Singapore at Half the Price !</label> trên face</p>
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
		        				<a href="#">
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
							<!-------- Gửi mail------------>
							<?php 
								echo '<p style="color:#f83d43; margin:10px;  font-size: 13px; font-weight: bold ">'.$this->session->userdata('lienhe_result').'</p>';
								$this->session->unset_userdata('email_result');
							?>
							<form action="<?php echo base_url();?>homepage/send" method="post">
							<input name="e_mail" id="mod_virtuemart_search" maxlength="80" class="inputbox" type="text" size="20" value="your email address..." onblur="if(this.value=='') this.value='your email address...';" onfocus="if(this.value=='your email address...') this.value='';">
							<input type="submit" value="Send" name="sendmail">
							</form>
							<?php echo validation_errors('','</p>'); ?>
		        		</div>
		        	</div>
		        	<div class="plupgin">
		        		<img src="<?php echo base_url();?>assets/trungtam-tienganh/images/iconface.gif"/>
		        		<span><a class="uiLinkSubtle" target="_blank" href="http://developers.facebook.com/plugins/?footer=1">Plugin xã hội của Facebook</a></span>
		        	</div>
		        	<!--<script type="text/javascript">
		        		$(document).ready(function(){		        			
		        			$(".prev12").click(function(){
						  $(".slideimage").animate({"left": "+=311px"}, "slow");
							});
							
							$(".next12").click(function(){
								
							  $(".slideimage").animate({"left": "-=311px"}, "slow");
							});
		        		});
					</script>-->
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
			<!--<script type="text/javascript">
				$('#homehd').addClass('bgli');
			</script>-->