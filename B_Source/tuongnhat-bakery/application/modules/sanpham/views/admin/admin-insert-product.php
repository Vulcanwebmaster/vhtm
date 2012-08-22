<form action="admin/savePostApp" method="post">
		<article class="module width_full">
			<header><h3>Chỉnh sửa</h3></header>
				<div class="module_content">
						<fieldset>
							<label>Danh mục</label>
							<input type="text" name="danhmuc">							
						</fieldset>
						<fieldset>
							<label>Tên (V)</label>
							<input type="text" name="tenv"/>							
						</fieldset>
						<fieldset>
							<label>Tên (E)</label>
							<input type="text" name="tene"/>							
						</fieldset>						
						<fieldset>
							<label>Unit</label>
							<input type="text" name="unit">							
						</fieldset>
						<fieldset>
							<label>Carton</label>
							<input type="text" name="carton">							
						</fieldset>
						<fieldset>
							<label>Mô tả (V)</label>
							<textarea id="motav" name="motav"></textarea>						
						</fieldset>
						<fieldset>
							<label>Mô tả (E)</label>
							<textarea id="motae" name="motae"></textarea>							
						</fieldset>
						<fieldset>
							<label>Hướng dẫn (V)</label>
							<textarea id="huongdanv" name="huongdanv"></textarea>							
						</fieldset>
						<fieldset>
							<label>Hướng dẫn (E)</label>
							<textarea id="huongdane" name="huongdane"></textarea>							
						</fieldset>
						<fieldset>
							<label>Sử dụng lò đối lưu (V)</label>
							<textarea id="lodoiluuv" name="lodoiluuv"></textarea>							
						</fieldset>
						<fieldset>
							<label>Sử dụng lò đối lưu (E)</label>
							<textarea id="lodoiluue" name="lodoiluue"></textarea>								
						</fieldset>
						<fieldset>
							<label>Sử dụng lò quay (V)</label>
							<textarea id="loquayv" name="loquayv"></textarea>							
						</fieldset>
						<fieldset>
							<label>Sử dụng lò quay (E)</label>
							<textarea id="loquaye" name="loquaye"></textarea>							
						</fieldset>
						<fieldset>
							<label>Hàm lượng dinh dưỡng (V)</label>
							<textarea id="dinhduongv" name="dinhduongv"></textarea>							
						</fieldset>
						<fieldset>
							<label>hàm lượng dinh dưỡng (E)</label>
							<textarea id="dinhduonge" name="dinhduonge"></textarea>							
						</fieldset>
						<fieldset>
							<label>Sản phẩm mới</label>
							<select name="spmoi">
								<option value="0">Không</option>
								<option value="1">Có</option>
							</select>
						</fieldset>
						
						<div class="clear"></div>
				</div>
			<footer>
				<div class="submit_link">
					
					<input type="submit" value="Post" class="alt_btn">
					
				</div>
			</footer>
		</article><!-- end of post new article -->
		</form>