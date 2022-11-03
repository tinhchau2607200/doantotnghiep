<?php
	include("../connect.php"); //Kết nối đến CSDL
	mysql_query("SET NAMES utf8");
	//Lấy dữ liệu
	if ($_POST['themtheloai']!="")
	{
		$tenthucdon=$_POST['tenthucdon'];
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
		$tenkodau=$_POST['tenkodau'];
		$noibat=$_POST['noibat'];
		$tomtat=$_POST['tomtat'];
		$noidung=$_POST['noidung'];
		$idloaitin=$_POST['loaitin'];
		$sql="INSERT INTO thucdon(tenthucdon,anhminhhoa,tenkodau,tomtat,noidung,noibat,idloaitin) VALUES ('$tenthucdon','$dich','$tenkodau','$tomtat','$noidung','$noibat','$idloaitin')";
		mysql_query($sql);
		header("location:../../index.php?ac=theloai");
	}	
	elseif($_POST['suatheloai']!="")
	{
		//Thực hiện sửa loại tin
		$tenthucdon=$_POST['tenthucdon'];
		$tenkodau=$_POST['tenkodau'];
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
		$sql="UPDATE thucdon SET tenthucdon='$tenthucdon', tenkodau='$tenkodau', anhminhhoa='$dich', tomtat='$tomtat',noidung='$noidung',idloaitin='$idloaitin' WHERE idthucdon='$_GET[id]'";
		//Thực hiện câu lệnh đã định nghĩa
		mysql_query($sql);
		header("location: ../../index.php?ac=theloai&id=$_GET[id]");
	}
	else
	{
		//Thực hiện xóa bài viết
		$sql="delete from thucdon where idthucdon='$_GET[id]'";
		mysql_query($sql);
		header("location: ../../index.php?ac=theloai");
	}
?>