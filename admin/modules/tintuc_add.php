<div class="templatemo-content-widget white-bg">
	<h2 class="margin-bottom-10">Thêm bài viết</h2>
	<form action="modules/baiviet/xuly.php" class="templatemo-login-form" id="thembaiviet" method="post" enctype="multipart/form-data">		
		<div class="row form-group">
			<div class="col-lg-12">
				<label>Tên bài viết (*)</label>
					<input type="text" name="tenbaiviet" class="form-control" id="tenbaiviet" value="" placeholder="Nhập tên bài viết" required="required">
			</div>
		</div>
		<div class="row form-group">
		<div class="col-lg-12 form-group">
			<label class="control-label templatemo-block">Chuyên mục (*)</label>
			<select multiple name="loaitin" value="" class="templatemo-multi-select form-control" style="overflow-y: scroll;" required="required">
				<?php 
					$sql = "SELECT * FROM loaitin";
					$loaitin=mysql_query($sql);
					while($arCat = mysql_fetch_array($loaitin)){
						$idloaitin = $arCat['idloaitin'];
						$tenloaitin = $arCat['tenloaitin'];
						?>	
							<option value="<?php echo $idloaitin; ?>">
								<?php echo $tenloaitin ?>
							</option>
						<?php
					}
				?>
			</select>
		</div>
		</div>
		<div class="row form-group">
			<div class="col-lg-12">
				<label class="control-label templatemo-block">Hình ảnh</label> 
				<input type="file" name="anhminhhoa" id="fileToUpload" class="filestyle" data-buttonName="btn-primary" data-buttonBefore="true" data-icon="false">
				<p>Dung lượng tối đa hình ảnh là 5 MB.</p>									
			</div>
		</div>
		
		<div class="row form-group">
			<div class="col-lg-12 form-group">									 
				<label class="control-label">Mô tả (*)</label>
				<textarea name="tomtat" class="form-control" id="inputNote" rows="3" value="" required="required"></textarea>
			</div>
		</div>
		
		<div class="row form-group">
			<div class="col-lg-12 form-group">									 
				<label class="control-label">Nội dung</label>
				<textarea name="noidung" rows="7" cols="90" class="input-long ckeditor" style="visibility: hidden; display: none;"></textarea>
			</div>
		</div>
		
		<div class="form-group text-right">
		<input type="submit"  name="thembaiviet"  class="templatemo-blue-button" value="Đăng"/>
		<input type="reset" class="templatemo-white-button" value="Nhập lại" />
		</div>													 
	</form>
</div>
<script type="text/javascript" src="../admin/js/bootstrap-filestyle.min.js"></script><!--  bootstrap tem uploads --> 