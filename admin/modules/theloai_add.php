<div class="templatemo-content-widget white-bg">
	<h2 class="margin-bottom-10">Thêm thể loại</h2>
	<form action="modules/theloai/xuly.php" class="templatemo-login-form" id="themtheloai" method="post">
		<div class="row form-group">
			<div class="col-lg-12 form-group">
				<label>Tên thể loại (*)</label>
				<input type="text" name="tenthucdon" class="form-control" id="inputFirstName" placeholder="Nhập tên thể loại" required="required">
			</div>			
		</div>
		<div class="row form-group">
			<div class="col-lg-12 form-group">
				<label>Kí hiệu</label>
				<input type="text" name="tenkodau" class="form-control" id="inputFirstName" placeholder="Nhập kí hiệu">
			</div>			
		</div>
		 <div class="row form-group">
                <div class="col-lg-12 form-group">   
					<label>Nổi bật :</label>
                    <div class="margin-right-15 templatemo-inline-block">
                      <input type="radio" name="noibat" id="r4" value="1">
                      <label for="r4" class="font-weight-400"><span></span>Có</label>
                    </div>
                    <div class="margin-right-15 templatemo-inline-block">
                      <input type="radio" name="noibat" id="r5" value="0" checked>
                      <label for="r5" class="font-weight-400"><span></span>Không</label>
                    </div>
                </div>
              </div>
		<div class="row form-group">
			<div class="col-lg-12 form-group">									 
				<label class="control-label" >Tóm tắt (*)</label>
				<textarea name="tomtat" class="form-control" id="inputNote" rows="3" required="required"></textarea>
			</div>
		</div>
		<div class="row form-group">
		<div class="col-lg-12 form-group">
			<label class="control-label templatemo-block" >Loại tin (*)</label>
			<select  name="loaitin" class="form-control" style="overflow-y: scroll;" required="required">
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
			<label class="control-label">Nội dung</label>
			<textarea name="noidung" rows="7" cols="90" class="input-long ckeditor" style="visibility: hidden; display: none;"></textarea>
		</div>
		</div>

		<div class="form-group text-right">
		<input type="submit"  name="themtheloai"  class="templatemo-blue-button" value="Đăng"/>
		<input type="reset" class="templatemo-white-button" value="Nhập lại" />
		</div>													 
	</form>
</div>
<script type="text/javascript" src="../admin/js/bootstrap-filestyle.min.js"></script><!--  bootstrap tem uploads --> 