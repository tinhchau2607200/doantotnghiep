
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">  
	    <title>Admin - Login</title>
        <meta name="description" content="">
        <meta name="author" content="templatemo">

	    <link href="css/font-awesome.min.css" rel="stylesheet">
	    <link href="css/bootstrap.min.css" rel="stylesheet">
	    <link href="css/templatemo-style.css" rel="stylesheet">
	</head>
	<body class="light-gray-bg">
		<div class="templatemo-content-widget templatemo-login-widget white-bg">
			<header class="text-center">
				<div class="square"></div>
				<h1>Administrator</h1>
	        <form action="" class="templatemo-login-form" method="post" style="padding-top:40px;">
	        	<div class="form-group">
	        		<div class="input-group">
		        		<div class="input-group-addon"><i class="fa fa-user fa-fw"></i></div>	        		
		              	<input type="text" class="form-control" placeholder="Username" name="tendangnhap">           
		          	</div>	
	        	</div>
	        	<div class="form-group">
	        		<div class="input-group">
		        		<div class="input-group-addon"><i class="fa fa-key fa-fw"></i></div>	        		
		              	<input type="password" class="form-control" placeholder="Password" name="matkhau">           
		          	</div>	
	        	</div>	
				
				<div class="form-group">
					<button type="submit" class="templatemo-blue-button width-100" name="login">Login</button>
				</div>
				<?php
					if(isset($_POST['login']))
					{
					$u=$p="";
					 if($_POST['tendangnhap'] == NULL)
					 {
					  echo "<p style='color:red; font-weight:bold;'>Vui lòng nhập Username</p>";
					 }
					 else
					 {
					  $u=$_POST['tendangnhap'];
					 }
					 if($_POST['matkhau'] == NULL)
					 {
					  echo "<p style='color:red; font-weight:bold;'>Vui lòng nhập Password</p>";
					 }
					 else
					 {
					  $p=$_POST['matkhau'];
					 }
					 if($u && $p)
					 {
						session_start();
						include("modules/connect.php");
						ob_start();
						$sql="select * from nguoidung where tendangnhap='".$u."' and matkhau='".$p."'";
						$query=mysql_query($sql);
						if(mysql_num_rows($query) == 0)
						{
						  echo "<p style='color:red; font-weight:bold;'>Username hoặc Password không chính xác<br/> Vui lòng nhập lại!</p>";
						}
						else{
							$row=mysql_fetch_array($query);
						    session_start();
						    $_SESSION['userid'] = $row[idnguoidung];
						    $_SESSION['level'] = $row[ten];
							header("location:index.php");
							exit();
						}
					 }
					}
				?>
	        </header>
	        </form>
		</div>
	</body>
</html>
<?php
	ob_end_flush();
?>