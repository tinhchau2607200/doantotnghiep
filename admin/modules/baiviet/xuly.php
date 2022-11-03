<?php
	include("../connect.php"); //Kết nối đến CSDL
	mysql_query("SET NAMES utf8");
	//Lấy dữ liệu
	if ($_POST['thembaiviet']!="")
	{
		$tenbaiviet=$_POST['tenbaiviet'];
		$name=$_FILES['anhminhhoa']['name'];//Lấy tên của tệp tin ảnh
		//echo $name;
		if(isset($name))
		{	
			$time=date("Ymdhis");
			$name=$time."_".$name;//Nối thêm ngày và thời gian vào tên file ảnh
			$dich="../../../images/uploads/".$name;// đường dẫn file ảnh 
			copy($_FILES['anhminhhoa']['tmp_name'],$dich); //Sao chép file ảnh đến đường dẫn đích
			$dich=substr($dich,9);//Cắt bớt 9 ký tự đầu trong đường dẫn
		}
		$tomtat=$_POST['tomtat'];
		$noidung=$_POST['noidung'];
		$idloaitin=$_POST['loaitin'];
		$vitri=$_POST['vitri'];
		$sql="INSERT INTO baiviet(tenbaiviet,anhminhhoa,tomtat,noidung,vitri,idloaitin) VALUES ('$tenbaiviet','$dich','$tomtat','$noidung','$vitri','$idloaitin')";
		mysql_query($sql);
		header("location:../../index.php?ac=tintuc");
	}	
	elseif($_POST['suabaiviet']!="")
	{
		//Thực hiện sửa loại tin
		$tenbaiviet=$_POST['tenbaiviet'];
		$name=$_FILES['anhminhhoa']['name'];//Lấy tên của tệp tin ảnh
		if($name!='')
		{
			$time=date("Ymdhis");
			$name=$time."_".$name;//Nối thêm ngày và thời gian vào tên file ảnh
			$dich="../../../images/uploads/".$name;// đường dẫn file ảnh 
			copy($_FILES['anhminhhoa']['tmp_name'],$dich); //Sao chép file ảnh đến đường dẫn đích
			$dich=substr($dich,9);//Cắt bớt 9 ký tự đầu trong đường dẫn
		}
		$tomtat=$_POST['tomtat'];
		$noidung=$_POST['noidung'];
		$idloaitin=$_POST['loaitin'];
		//Định nghĩa câu lệnh sửa
		$sql="UPDATE baiviet SET tenbaiviet='$tenbaiviet',anhminhhoa='$dich', tomtat='$tomtat',noidung='$noidung',idloaitin='$idloaitin' WHERE idbaiviet='$_GET[id]'";
		//Thực hiện câu lệnh đã định nghĩa
		mysql_query($sql);
		header("location: ../../index.php?ac=tintuc&id=$_GET[id]");
	}
	else
	{
		//Thực hiện xóa bài viết
		$sql="delete from baiviet where idbaiviet='$_GET[id]'";
		mysql_query($sql);
		header("location: ../../index.php?ac=tintuc");
	}
?>