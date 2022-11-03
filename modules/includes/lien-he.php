<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<?php
	include("admin/modules/connect.php");
	mysql_query("SET NAMES utf8");
	//Lấy dữ liệu
	if ($_POST['lienhe']!="")
	{
		$hovaten=$_POST['hovaten'];
		$diachi=$_POST['diachi'];
		$sdt=$_POST['sdt'];
		$email=$_POST['email'];
		$noidung=$_POST['noidung'];
		$sql="INSERT INTO lienhe(hovaten,diachi,sdt,email,noidung) VALUES ('$hovaten','$diachi','$sdt','$email','$noidung')";
		mysql_query($sql);
		echo '<script type="text/javascript">alert("Cảm ơn bạn đã liên hệ với chúng tôi!");</script>';
	}
?>
<div class="detail bin-wp clearfix">
	<div class="title">
		<a href="#" style="text-decoration: none; "><h4>LIÊN HỆ</h4></a>
	</div>
	<p class="map" style="padding-top:20px;"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3833.985611293289!2d108.24395041426591!3d16.066236443787044!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31421784487dff5f%3A0x72f59e0a18777c18!2zTmjDoCBow6BuZyBo4bqjaSBz4bqjbiBTYW4gSMO0IMSQw6AgTuG6tW5n!5e0!3m2!1svi!2s!4v1458098190256" width="870" height="300" frameborder="0" style="border:1px solid #CCC; display: block; margin-left: auto; margin-right: auto" allowfullscreen></iframe></p>
	<div class="thongtin">
		<h6>Nhà Hàng Hải Sản San Hô Đà Nẵng</h6>
		<p><strong>Địa chỉ :</strong> Lô 12-13 đường Hoàng Sa, Q. Sơn Trà, TP Đà Nẵng, Việt Nam</p>
		<p><strong>Điện thoại:</strong> 01656 799 559</p>
		<p><strong>Fax:</strong> (05113) 938 997</p>
		<p><strong>Email:</strong> info@sanhodn.com</p>
	</div>
	<form action="" class="frm" method="post" style="padding-left:25px; padding-top:12px;">
		<div class="f-space05 clearfix">
			<div class="form-item form-sm">
				<input type="text" name="hovaten" placeholder="Họ và tên: (*)" value="" maxlength="150" required="required">
				<i class="fa fa-user"></i>
			</div>
			<div class="form-item form-sm">
				<input type="text" name="diachi" placeholder="Địa chỉ:" value="" maxlength="250">
				<i class="fa fa-building-o"></i>
			</div>
			<div class="clearfix"></div>
			<div class="form-item form-so">
				<input type="text" name="email" placeholder="Email: (*)" value="" maxlength="250" required="required">
				<i class="fa fa-envelope"></i>
			</div>
			<div class="form-item form-so">
				<input type="text" name="sdt" placeholder="Số điện thoại: (*)" value="" maxlength="20" required="required">
				<i class="fa fa-phone fa-lg"></i>
			</div>
		</div>
		<div class="form-item form-bg">
			<textarea name="noidung" placeholder="Nội dung: (*)" cols="10" rows="5" required="required"></textarea>
			<i class="fa fa-pencil"></i>
		</div>
		<div class="form-bg clearfix">
			<div class="form-item form-sm">
				<input type="submit" name="lienhe" value="."/>
			</div>
		</div>
	</form>
</div>