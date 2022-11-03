<?php
	session_start();
	include("modules/connect.php");
	mysql_query("SET NAMES utf8");
?>
<?php
	ob_start();
?>
<?php
	if(!isset($_SESSION['userid'])){
		header("location:login.php");exit();
	}
?>
<?php
	ob_end_flush();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">  
    <title>Administrator</title>
    <meta name="description" content="">
    <meta name="author" content="templatemo">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700' rel='stylesheet' type='text/css'>
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/templatemo-style.css" rel="stylesheet"> 
	<link rel="shortcut icon" type="image/ico" href="/admin/images/admin.jpg" />
	<script type="text/javascript" src="../admin/js/bootstrap-filestyle.min.js"></script><!--  bootstrap tem uploads --> 
	<script src="js/jquery-1.11.2.min.js"></script>      <!-- jQuery -->
	<script src="js/jquery-migrate-1.2.1.min.js"></script> <!--  jQuery Migrate Plugin --> 
	<script src="js/jquery.validate.js"></script>
	<!-- CKEditor -->
	<script type="text/javascript" src="../editor/ckeditor/ckeditor.js"></script>
	<!-- CKFinder -->
	<script type="text/javascript" src="../editor/ckfinder/ckfinder.js"></script>
  </head>
  <body>  
		<div class="templatemo-flex-row">	
			<!-- Left column -->
			<?php include("modules/templatemo-sidebar.php");?>
			<!-- Main content --> 
			<div class="templatemo-content col-1 light-gray-bg">
				<?php include("modules/menu.php");?>
				<div class="templatemo-content-container">
					<?php include("modules/content.php");?>
					<?php include("modules/footer.php");?>
				</div>
			</div>
        </div>
    
    <!-- JS -->
    <script src="js/jquery-1.11.2.min.js"></script>      <!-- jQuery -->
    <script src="js/jquery-migrate-1.2.1.min.js"></script> <!--  jQuery Migrate Plugin -->
    <script src="https://www.google.com/jsapi"></script> <!-- Google Chart -->
    
    <script type="text/javascript" src="js/templatemo-script.js"></script>      <!-- Templatemo Script -->
  </body>
</html>