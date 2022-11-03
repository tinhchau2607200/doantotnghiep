<?php
	include("../connect.php"); //Kết nối đến CSDL
	mysql_query("SET NAMES utf8");
	//Lấy dữ liệu
	if ($_POST['themimages']!="")
	{
		$ten=$_POST['ten'];
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
		$chuthich=$_POST['chuthich'];
		$idloaitin=$_POST['loaitin'];
		$sql="INSERT INTO images(ten,anhminhhoa,chuthich,idloaitin) VALUES ('$ten','$dich','$chuthich','$idloaitin')";
		mysql_query($sql);
		header("location:../../index.php?ac=images");
	}	
	elseif($_POST['suaimages']!="")
	{
		//Thực hiện sửa loại tin
		$ten=$_POST['ten'];
		$name=$_FILES['anhminhhoa']['name'];//Lấy tên của tệp tin ảnh
		if($name!='')
		{
			$time=date("Ymdhis");
			$name=$time."_".$name;//Nối thêm ngày và thời gian vào tên file ảnh
			$dich="../../../images/uploads/".$name;// đường dẫn file ảnh 
			copy($_FILES['anhminhhoa']['tmp_name'],$dich); //Sao chép file ảnh đến đường dẫn đích
			$dich=substr($dich,9);//Cắt bớt 9 ký tự đầu trong đường dẫn
		}
		$chuthich=$_POST['chuthich'];
		$idloaitin=$_POST['loaitin'];
		//Định nghĩa câu lệnh sửa
		$sql="UPDATE images SET ten='$ten', anhminhhoa='$dich', chuthich='$chuthich',idloaitin='$idloaitin' WHERE idimages='$_GET[id]'";
		//Thực hiện câu lệnh đã định nghĩa
		mysql_query($sql);
		header("location: ../../index.php?ac=images&id=$_GET[id]");
	}
	else
	{
		//Thực hiện xóa bài viết
		$sql="delete from images where idimages='$_GET[id]'";
		mysql_query($sql);
		header("location: ../../index.php?ac=images");
	}
?>