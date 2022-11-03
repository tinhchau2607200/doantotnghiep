<div class="templatemo-content-widget white-bg">
	<h2 class="margin-bottom-10">Người dùng</h2>
	<form action="modules/nguoidung/xuly.php" class="templatemo-login-form" id="datban" method="post" enctype="multipart/form-data">
		<div class="row form-group">
			<div class="col-lg-12 form-group">
				<label>Họ và Tên (*)</label>
				<input type="text" name="ten" class="form-control" id="inputFirstName" placeholder="Nhập tên đầy đủ" value="" required="required">
			</div>			
		</div>
		<div class="row form-group">
			<div class="col-lg-12 form-group">
				<label>Tên đăng nhập (*)</label>
				<input type="text" name="tendangnhap" class="form-control" placeholder="Tên đăng nhập" required="required">
			</div>
		</div>
		<div class="row form-group">
			<div class="col-lg-12 form-group">
				<label>Mật khẩu</label>
				<input type="password" name="matkhau" class="form-control" placeholder="••••••••" required="required">
			</div>
		</div>
		<div class="row form-group">
			<div class="col-lg-12 form-group">									 
				<label class="control-label">Mô tả (*)</label>
				<textarea name="chuthich" class="form-control" id="inputNote" rows="3" value=""></textarea>
			</div>
		</div>
		<div class="form-group text-right">
		<input type="submit"  name="nguoidung"  class="templatemo-blue-button" value="Đăng"/>
		<input type="reset" class="templatemo-white-button" value="Nhập lại" />
		</div>													 
	</form>
</div>