<?php
	$id=$_GET['id'];
	$sql = "SELECT * FROM loaitin WHERE idloaitin='$id'";
	$ketqua = mysql_query($sql);
	$dong = mysql_fetch_array($ketqua);
	mysql_query("SET NAMES utf8");
?>
<div class="templatemo-content-widget white-bg">
	<h2 class="margin-bottom-10">Sửa loại tin</h2>
	<form action="modules/loaitin/xuly.php?id=<?php echo $dong['idloaitin'];?>" method="post" >		
		<div class="row form-group">
			<div class="col-lg-12">
				<label>Tên loại tin(*)</label>
					<input type="text" name="tenloaitin" value="<?php echo $dong['tenloaitin'];?>" class="form-control" id="inputFirstName" placeholder="Nhập tên loại tin">
			</div>
		</div>
		<div class="row form-group">
			<div class="col-lg-12 form-group">
				<label>Tên không dấu</label>
				<input type="text" name="tenkodau" value="<?php echo $dong['tenkodau'];?>" class="form-control" placeholder="Tên không dấu">
			</div>
		</div>
		<div class="row form-group">
			<div class="col-lg-12 form-group">
				<label>Thứ tự</label>
				<input type="text" name="thutu" value="<?php echo $dong['thutu'];?>" class="form-control" placeholder="Nhập số thứ tự">
			</div>
		</div>
		<div class="row form-group">
            <div class="col-lg-12 form-group">
				<label> Trạng thái  </label>
				<select multiple name="trangthai" value="<?php echo $dong['trangthai'];?>" class="templatemo-multi-select form-control" style="overflow-y: scroll;">
					<option value="0"> Hiển thị</option>
					<option value="1"> Không hiển thị</option>     
				</select>
            </div>
		</div>
		<div class="row form-group">
			<div class="col-lg-12 form-group">									 
				<label class="control-label">Chú thích</label>
				<textarea name="tomtat" class="form-control" id="inputNote" rows="3"><?php echo $dong['chuthich'];?></textarea>
			</div>
		</div>	

		<div class="form-group text-right">
		<input type="submit"  name="sualoaitin"  class="templatemo-blue-button" value="Sửa"/>
		<input type="reset" class="templatemo-white-button" value="Nhập lại" />
		</div>													 
	</form>
</div>