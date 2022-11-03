<?php
	$ketnoi=mysql_connect("localhost","root","");
	mysql_select_db("haisan",$ketnoi);
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
?>