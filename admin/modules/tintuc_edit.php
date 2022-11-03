<?php
	$id=$_GET['id'];
	$sql = "SELECT * FROM baiviet WHERE idbaiviet='$id'";
	$ketqua = mysql_query($sql);
	$dong = mysql_fetch_array($ketqua);
	mysql_query("SET NAMES utf8");
?>
<div class="templatemo-content-widget white-bg">
	<h2 class="margin-bottom-10">Sửa bài viết</h2>
	<form action="modules/baiviet/xuly.php?id=<?php echo $_GET['id']?>" method="post" id="suabaiviet">		
		<div class="row form-group">
			<div class="col-lg-12">
				<label>Tên bài viết(*)</label>
					<input type="text" name="tenbaiviet" value="<?php echo $dong['tenbaiviet'];?>" class="form-control" id="inputFirstName">
			</div>
		</div>
		<div class="row form-group">
			<div class="col-lg-12 form-group">
				<label class="control-label templatemo-block">Chuyên mục (*)</label>
				<?php
					$sql="select * from loaitin";
					$loaitin=mysql_query($sql);
				?>
				<select multiple name="loaitin" class="templatemo-multi-select form-control" style="overflow-y: scroll;">
					<?php 
						while ($dong_loaitin=mysql_fetch_array($loaitin))
						{
							if($dong_loaitin['idloaitin']==$dong['idloaitin'])
							{
								echo "<option  value =".$dong_loaitin['idloaitin']."selected = selected>".$dong_loaitin['tenloaitin']."</option>";
							}
							else
							{
								echo "<option value =".$dong_loaitin['idloaitin'].">".$dong_loaitin['tenloaitin']."</option>";
							}
						}
					?>
				</select>
			</div>
		</div>
		<div class="row form-group">
			<div class="col-lg-12">
				<label class="control-label templatemo-block">Hình ảnh</label> 
				<input type="file" name="anhminhhoa" id="fileToUpload" class="filestyle" data-buttonName="btn-primary" data-buttonBefore="true" data-icon="false">
				<img src="../<?php echo $dong['anhminhhoa'];?>" width="150px"/>
				<p>Dung lượng tối đa hình ảnh là 5 MB.</p>									
			</div>
		</div>
		
		<div class="row form-group">
			<div class="col-lg-12 form-group">									 
				<label class="control-label">Mô tả</label>
				<textarea name="tomtat" class="form-control" id="inputNote" rows="3"><?php echo $dong['tomtat'];?></textarea>
			</div>
		</div>
		
		<div class="row form-group">
			<div class="col-lg-12 form-group">									 
				<label class="control-label">Nội dung</label>
				<textarea name="noidung" rows="7" cols="90" class="input-long ckeditor" style="visibility: hidden; display: none;"><?php echo $dong['noidung'];?></textarea>
			</div>
		</div>
		<div class="form-group text-right">
		<input type="submit"  name="suabaiviet"  class="templatemo-blue-button" value="Sửa"/>
		<input type="reset" class="templatemo-white-button" value="Nhập lại" />
		</div>													 
	</form>
</div>
<script type="text/javascript" src="../admin/js/bootstrap-filestyle.min.js"></script><!--  bootstrap tem uploads --> 