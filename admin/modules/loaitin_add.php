<div class="templatemo-content-widget white-bg">
	<h2 class="margin-bottom-10">Thêm Loại tin</h2>
	<form action="modules/loaitin/xuly.php" class="templatemo-login-form" id="themloaitin" method="post" enctype="multipart/form-data">
		<div class="row form-group">
			<div class="col-lg-12 form-group">
				<label>Tên loại tin (*)</label>
				<input type="text" name="tenloaitin" class="form-control" id="inputFirstName" placeholder="Nhập tên loại tin" value="" required="required">
			</div>			
		</div>
		<div class="row form-group">
			<div class="col-lg-12 form-group">
				<label>Tên không dấu</label>
				<input type="text" name="tenkodau" class="form-control" placeholder="Tên không dấu">
			</div>
		</div>
		<div class="row form-group">
			<div class="col-lg-12 form-group">
				<label>Thứ tự</label>
				<input type="text" name="thutu" class="form-control" placeholder="Nhập số thứ tự">
			</div>
		</div>
		<div class="row form-group">
            <div class="col-lg-12 form-group">
				<label> Trạng thái  </label>
				<select multiple name="trangthai" value="" class="templatemo-multi-select form-control" style="overflow-y: scroll;">
					<option value="0"> Hiển thị</option>
					<option value="1"> Không hiển thị</option>           
				</select>
            </div>
		</div>
		<div class="row form-group">
			<div class="col-lg-12 form-group">									 
				<label class="control-label">Chú thích</label>
				<textarea name="chuthich" class="form-control" id="inputNote" rows="3"></textarea>
			</div>
		</div>
		

		<div class="form-group text-right">
		<input type="submit"  name="themloaitin"  class="templatemo-blue-button" value="Đăng"/>
		<input type="reset" class="templatemo-white-button" value="Nhập lại" />
		</div>													 
	</form>
</div>