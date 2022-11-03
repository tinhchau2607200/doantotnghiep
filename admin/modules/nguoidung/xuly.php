<?php
	include("../connect.php"); //Kết nối đến CSDL
	mysql_query("SET NAMES utf8");
	//Lấy dữ liệu
	if ($_POST['nguoidung']!="")
	{
		$ten=$_POST['ten'];
		$tendangnhap=$_POST['tendangnhap'];
		$matkhau=$_POST['matkhau'];
		$chuthich=$_POST['phong'];
		$sql="INSERT INTO nguoidung(ten,tendangnhap,matkhau,chuthich) VALUES ('$ten','$tendangnhap','$matkhau','$chuthich')";
		mysql_query($sql);
		header("location:../../index.php?ac=nguoidung");
	}	
	elseif($_POST['suanguoidung']!="")
	{
		//Thực hiện sửa loại tin
		$ten=$_POST['ten'];
		$tendangnhap=$_POST['tendangnhap'];
		$matkhau=$_POST['matkhau'];
		$chuthich=$_POST['chuthich'];
		//Định nghĩa câu lệnh sửa
		$sql="UPDATE nguoidung SET ten='$ten', tendangnhap='$tendangnhap',matkhau='$matkhau',chuthich='$chuthich' WHERE idnguoidung='$_GET[id]'";
		//Thực hiện câu lệnh đã định nghĩa
		mysql_query($sql);
		header("location: ../../index.php?ac=nguoidung&id=$_GET[id]");
	}
	else
	{
		//Thực hiện xóa bài viết
		$sql="delete from nguoidung where idnguoidung='$_GET[id]'";
		mysql_query($sql);
		header("location: ../../index.php?ac=nguoidung");
	}
?>