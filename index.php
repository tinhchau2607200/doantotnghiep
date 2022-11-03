<?php
	include("admin/modules/connect.php");
	mysql_query("SET NAMES utf8");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<base href="http://dnw.haisan.demo/" />
	<title>Nhà hàng San Hô Đà Nẵng</title>
	<meta charset='utf-8'>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="css/style.css" type="text/css" rel="stylesheet">
	<link rel="stylesheet" href="js/modal/jquery.modal.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="css/animate.css">
	<link rel="shortcut icon" type="image/gif" href="images/logo.png" />
	<link rel="stylesheet" type="text/css" href="css/jquery.datetimepicker.css"/><!-- css lịch-->	
	<script src="js/jquery.js"></script><!-- Lịch -->
	<script src="js/modal/jquery.modal.js" type="text/javascript" charset="utf-8"></script>
	<script type="text/javascript">
		$(function(){
		$(window).scroll(function () {
		if ($(this).scrollTop() > 100) $('.goTop').fadeIn();
		else $('.goTop').fadeOut();
		});
		$('.goTop').click(function () {
		$('body,html').animate({scrollTop: 0}, 'slow');
		});
		});
	</script>
	<style type="text/css">
	.goTop {
		bottom: 46px;
		cursor: pointer;
		display: none;
		height: 55px;
		position: fixed;
		right: 62px;
		width: 50px;
		z-index: 1000;
	}
	</style>
</head>
<body>
	<div id="wrapper">
		<div class="container">
			<?php
				include("modules/header.php");
				include("modules/slogan.php");
				include("modules/content.php");
			?>
		</div>	
	</div>
	<div class="goTop animated fadeInUp">
		<img src="images/back-to-top.png" width="57px" Height="56px" alt="zkiwi demo" Title="Top" />
	</div>
	
	<div id="order" class="modal booking-modal" style="display: none;">
		<div class="titleb">
			<a><h4> ĐẶT BÀN</h4></a>
		</div>
		<p id="we">Chúng tôi cung cấp dịch vụ đặt bàn trực tuyến để tạo thuận lợi cho Quý khách hàng!</p>
		<form class="login_form" action="modules/datban/xuly.php" method="post" enctype="multipart/form-data" >
			<div class="form-booking clearfix">
				<div class="item-frm-5">
					<div class="text">
						<span>Họ và tên</span>
					</div>
					<div class="input">
						<input type="text" name="ten" value="" maxlength="150" placeholder="" required="required">
					</div>
				</div>

				<div class="item-frm-5">
					<div class="text">
						<span>Điện thoại</span>
					</div>
					<div class="input">
						<input type="text" name="sdt" value="" maxlength="20" required="required">
					</div>
				</div>
				<div class="item-frm-5">
					<div class="text">
						<span>Ngày đặt</span>
					</div>
					<div class="input" style="position:relative;">
						<input type="text" id="datetimepicker3" class="input-date" name="ngaydat" value="" autocomplete="off" required maxlength="10">
						<img src="images/calendar1.png" style="float: right; position: absolute; top: 0px; right: -5px; width:22.5px; height:27px;"/>
					</div>
				</div>
				<div class="item-frm-5">
					<div class="text">
						<span>Giờ đặt</span>
					</div>
					<div class="input" style="position:relative;">
						<input type="text" id="datetimepicker4" name="giodat"  maxlength="10" required>
						<img src="images/alarm-clock.png" style="float: right; position: absolute; top: 1px; right: -5px; width:23px; height:24px;"/>
					</div>
				</div>
				<div class="item-frm-5">
					<div class="text">
						<span>Số người</span>
					</div>
					<div class="input">
						<input type="text" name="songuoi" value="" maxlength="200" required="required">
					</div>
				</div>	
				<div class="item-frm-5">
					<div class="text">
						<span>Loại phòng</span>
					</div>
					<div class="input" style="width:58.7%;">
						<select name="phong">
							<?php 
								$sql = "SELECT * FROM phong";
								$phong=mysql_query($sql);
								while($arCat = mysql_fetch_array($phong)){
									$idphong = $arCat['idphong'];
									$loaiphong = $arCat['loaiphong'];
									?>	
										<option value="<?php echo $idphong; ?>" required="required">
											<?php echo $loaiphong ?>
										</option>
									<?php
								}
							?>
						</select>
					</div>
				</div>
				<div class="item-frm-1" style="margin-top:12px;">
					<input type="submit" name="datban" value="Đặt bàn" id="datban">
				</div>
				<div class="item-frm-3" style="color:red; margin: 0px auto; width:100px; font-size: 20px;">
					<?php
						if(isset($_GET['m'])){
							echo '<script type="text/javascript" >smoke.alert("Xin chân thành cảm ơn Quý khách đã quan tâm và sử dụng dịch vụ của chúng tôi! Yêu cầu của Quý khách đã gửi thành công. Chúng tôi sẽ phản hồi lại trong vòng 24h tới..");</script>';
							
						}
					?>
				</div>
				
			</div>
		</form>		
		<script src="build/jquery.datetimepicker.full.js"></script><!-- Lịch -->
		<script>
			$('#datetimepicker3').datetimepicker({
				lang:'ch',
				timepicker:false,
				format:'d/m/Y',
				formatDate:'Y/m/d',
				minDate:'-1970/01/01', // ngày hôm qua là ngày tối thiểu
				//maxDate:'+1970/01/02' // và ngày mai là ngày tối đa
			});
			$('#datetimepicker4').datetimepicker({
				datepicker:false,
				format:'H:i',
				step:5
			});
		</script>
	</div>
</body>
</html>