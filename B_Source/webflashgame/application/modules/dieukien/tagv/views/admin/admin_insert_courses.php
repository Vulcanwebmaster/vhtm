	
		<?php 
			echo validation_errors('<div class="error">','</div>');
		?>	
<form method="post" action="<?php echo base_url();?>khoahoc/admin/insert">	
	<article class="module width_3_quarter" style="width:95%;">
		<header><h3 class="tabs_involved"><?php echo $title;?></h3>
		
		</header>
		<div class="tab_container">
			
			<div id="tab1" class="tab_content">
				<fieldset>
					<label>Tên khóa học(Việt)</label>
					<input type="text" name="courses_name" style="width:92%"/>
				</fieldset>
				<fieldset>
					<label>Tên khóa học(Anh)</label>
					<input type="text" name="courses_namee" style="width:92%"/>
				</fieldset>
				<fieldset>
					<label>Mục khóa học</label>
					<select name="courses_category">
						<option></option>
						<?php foreach ($list as $item)
						{?>
							<option value="<?php echo $item->id?>"><?php echo $item->cate_name;?></option>							
						<?php }?>
					</select>
				</fieldset>
				<fieldset>
					<label>Ngày tháng</label>
					<input type="text" name="courses_date" id="courses_date" value="<?php echo date('Y/m/d', time()+7*3600);?>"/>
				</fieldset>
				<fieldset>
					<label>Nội dung(Việt) </label>
					<?php echo $this->ckeditor->editor('courses_content','',$config);?>
				</fieldset>
				<fieldset>
					<label>Nội dung(Anh) </label>
					<?php echo $this->ckeditor->editor('courses_contente','',$config);?>
				</fieldset>
			</div>
			
			<footer style="float:left">
					<div class="submit_link">
						<input type="submit" name="submit" value="Thêm" class="alt_btn">
					</div>
			</footer>
		</div><!-- end of .tab_container -->
				</article><!-- end of content manager article -->	
</form>
		