<?php
	include("../connect.php"); //Kết nối đến CSDL
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
		header("location:../../index.php?xem=lien-he");
	}
	else
	{
		//Thực hiện xóa bài viết
		$sql="delete from lienhe where idlienhe='$_GET[id]'";
		mysql_query($sql);
		header("location: ../../index.php?ac=lienhe");
	}
?>