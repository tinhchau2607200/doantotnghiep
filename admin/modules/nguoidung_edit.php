<?php
	$id=$_GET['id'];
	$sql = "SELECT * FROM nguoidung WHERE idnguoidung='$id'";
	$ketqua = mysql_query($sql);
	$dong = mysql_fetch_array($ketqua);
	mysql_query("SET NAMES utf8");
?>
<div class="templatemo-content-widget white-bg">
	<h2 class="margin-bottom-10">Sửa người dùng</h2>
	<form action="modules/nguoidung/xuly.php?id=<?php echo $dong['idnguoidung'];?>" method="post" >		
		<div class="row form-group">
			<div class="col-lg-12">
				<label>Họ và Tên*)</label>
					<input type="text" name="ten" value="<?php echo $dong['ten'];?>" class="form-control" id="inputFirstName">
			</div>
		</div>
		<div class="row form-group">
			<div class="col-lg-12 form-group">
				<label>Tên đăng nhập (*)</label>
				<input type="text" name="tendangnhap"  value="<?php echo $dong['tendangnhap'];?>" class="form-control"  >
			</div>
		</div>
		<div class="row form-group">
			<div class="col-lg-12 form-group">
				<label>Mật khẩu</label>
				<input type="password" name="matkhau" class="form-control"  value="<?php echo $dong['matkhau'];?>" >
			</div>
		</div>
		<div class="row form-group">
			<div class="col-lg-12 form-group">									 
				<label class="control-label">Mô tả (*)</label>
				<textarea name="chuthich" class="form-control"  id="inputNote" rows="3" value=""><?php echo $dong['chuthich'];?></textarea>
			</div>
		</div>

		<div class="form-group text-right">
		<input type="submit"  name="suanguoidung"  class="templatemo-blue-button" value="Sửa"/>
		<input type="reset" class="templatemo-white-button" value="Nhập lại" />
		</div>													 
	</form>
</div>