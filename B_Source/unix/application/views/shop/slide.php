<div id="slide-container">
	
	<div id="slider" class="nivoSlider">
		<?php if ($this->MKaimonokago->homepageLoadNoiDung('slide'))
		{
			$slide=$this->MKaimonokago->homepageLoadNoiDung('slide');
			foreach(explode(',', $slide->dulieu) as $item)
			{
				echo '<img src="'.$item.'" alt="" />';
			}
		}?>
          <!-- img src="<?php echo base_url();?>assets/unix/images/khoahoc-slide.jpg" alt="" />
          <img src="<?php echo base_url();?>assets/unix/images/thuvien-slide.jpg" alt="" data-transition="slideInLeft" / -->
    </div>
          <div id="slidemenus">
          	<center>
          	<table id="menu-slide">
          		<tr>
          			<td>
          				<table>
          					<tr><td>
          						<center>
	          						<fieldset class="slideitem">
		          						<img src="<?php echo base_url();?>assets/unix/images/image-khoahoc.png" alt=""/>
		          						<h3>Khóa học</h3>
	          						</fieldset>
          						</center>
          					</td></tr>
          				</table>
          			</td>
          			
          			<td>
          				<table>
          					<tr><td>
          						<center>
	          						<fieldset class="slideitem">
		          						<img src="<?php echo base_url();?>assets/unix/images/image-thuvien.png" alt=""/>
		          						<h3>Thư viện</h3>
	          						</fieldset>
          						</center>
          					</td></tr>
          					<!-- tr><td><h2>Khóa học</h2></td></tr -->
          				</table>
          			</td>
          		</tr>
          	</table>
          	</center>
          </div> 
          <hr style="border:solid 2px #05a6e3; width:1000px; margin:auto"/>
</div>