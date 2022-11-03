<?php
	include("../connect.php"); //Kết nối đến CSDL
	mysql_query("SET NAMES utf8");
	//Lấy dữ liệu
	if ($_POST['themloaitin']!="")
	{
		$tenloaitin=$_POST['tenloaitin'];
		$tenkodau=$_POST['tenkodau'];
		$thutu=$_POST['thutu'];
		$chuthich=$_POST['chuthich'];
		$trangthai=$_POST['trangthai'];
		$sql="INSERT INTO loaitin(tenloaitin,tenkodau,thutu,trangthai,chuthich) VALUES ('$tenloaitin','$tenkodau','$thutu','$trangthai','$chuthich')";
		mysql_query($sql);
		header("location:../../index.php?ac=loaitin");
	}	
	elseif($_POST['sualoaitin']!="")
	{
		//Thực hiện sửa loại tin
		$tenloaitin = $_POST['tenloaitin'];
		$tenkodau=$_POST['tenkodau'];
		$thutu = $_POST['thutu'];
		$trangthai = $_POST['trangthai'];
		$chuthich=$_POST['chuthich'];
		//Định nghĩa câu lệnh sửa
		$sql="UPDATE loaitin SET tenloaitin='$tenloaitin', tenkodau='$tenkodau', thutu='$thutu', trangthai='$trangthai' WHERE idloaitin='$_GET[id]'";
		//Thực hiện câu lệnh đã định nghĩa
		mysql_query($sql);
		header("location: ../../index.php?ac=loaitin&id=$_GET[id]");
	}
	else
	{
		//Thực hiện xóa bài viết
		$sql="delete from loaitin where idloaitin='$_GET[id]'";
		mysql_query($sql);
		header("location: ../../index.php?ac=loaitin");
	}
?>