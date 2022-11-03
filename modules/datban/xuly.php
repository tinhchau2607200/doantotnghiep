<?php
	$ketnoi=mysql_connect("localhost","root","");
	mysql_select_db("haisan",$ketnoi);
	mysql_query("SET NAMES utf8");
	//Lấy dữ liệu
	if ($_POST['datban']!="")
	{
		$ten=$_POST['ten'];
		$sdt=$_POST['sdt'];
		$email=$_POST['email'];
		$ngaydat=$_POST['ngaydat'];
		//$ngaydat=date('Y-m-d', strtotime($_POST['ngaydat']));convert date php
		$giodat=date('H:i:s', strtotime($_POST['giodat']));
		$songuoi=$_POST['songuoi'];
		$idphong=$_POST['phong'];
		$sql="INSERT INTO datban(ten,sdt,email,ngaydat,giodat,songuoi,idphong) VALUES ('$ten','$sdt','$email','$ngaydat','$giodat','$songuoi','$idphong')";
		mysql_query($sql);
		header("location:../../index.php?m");
	}
?>