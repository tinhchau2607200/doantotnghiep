<?php
	$sql="select * from baiviet ORDER BY idbaiviet DESC limit 8";// ORDER BY idbaiviet DESC LIMIT 10";
	$baiviet=mysql_query($sql);
?>
<link rel="stylesheet" type="text/css" href="css/jquery.datetimepicker.css"/><!-- css lịch-->
<link href="css/smoke.css" rel="stylesheet"><!--css alert-->
<script type="text/javascript" src="js/smoke.js"></script><!--js alert-->
<script type="text/javascript" src="js/smoke.min.js"></script><!--js alert-->
<div class="bottom box-wp clearfix">
	<div class="news clearfix">
		<div class="titlet">
			<a href="index.php?xem=tin-tuc-su-kien" style="text-decoration: none; "><h4> TIN TỨC</h4></a>
		</div>
		<div class="row1 clearfix">
			<?php $dong=mysql_fetch_array($baiviet)?>    
			<div class="col1">
				 <a href="tin-tuc-su-kien/<? echo $dong['idbaiviet']; ?>-<? echo $dong['tieude']; ?>.html"><img src="<?php echo $dong['anhminhhoa']; ?>" height="120"></a>
				
			</div>
			<div class="col2">
				<a href="tin-tuc-su-kien/<? echo $dong['idbaiviet']; ?>-<? echo $dong['tieude']; ?>.html" style="text-decoration: none;"><span><?php echo $dong['tenbaiviet']; ?></span></a>
				<p><?php echo $dong['tomtat']; ?></p>
				<a href="tin-tuc-su-kien/<? echo $dong['idbaiviet']; ?>-<? echo $dong['tieude']; ?>.html" style="text-decoration: none;"><p id="detail" style="float:left; font-family:Open Sans; font-size:13px;">Xem tiếp >></p></a>
			</div>
		</div>
		<div class="row2 clearfix">
			<h6>Các tin khác</h6>
			<?php
				$sql="select * from baiviet where idloaitin=5";// ORDER BY idbaiviet DESC LIMIT 10";
				$baiviet=mysql_query($sql);
			?>
			<div class="more">
				<?php 
					while ($dong=mysql_fetch_array($baiviet))
					{
				?>
            		<li> 
                      <a href="tin-tuc-su-kien/<? echo $dong['idbaiviet']; ?>-<? echo $dong['tieude']; ?>.html" style="text-decoration: none;">
                            <?php echo $dong['tenbaiviet']; ?>
                        </a>	
               		</li>
				<?php	
                    }
				?> 
			</div>
		</div>
	</div>
	<div class="booking">
		<div class="titleb">
			<a  style="text-decoration: none;"><h4> ĐẶT BÀN</h4></a>
		</div>
		<p id="we">Chúng tôi cung cấp dịch vụ đặt bàn trực tuyến để tạo thuận lợi cho Quý khách hàng!</p>
		<form action="modules/datban/xuly.php" id="datban" method="post" enctype="multipart/form-data">
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
							<input type="text" id="datetimepicker2" class="input-date" name="ngaydat" value="" autocomplete="off" required maxlength="10">
							<img src="images/calendar1.png" style="float: right; position: absolute; top: 0px; right: -5px; width:22.5px; height:27px;"/>
						</div>
					</div>
					<div class="item-frm-5">
						<div class="text">
							<span>Giờ đặt</span>
						</div>
						<div class="input" style="position:relative;">
							<input type="text" id="datetimepicker1" name="giodat"  maxlength="10" required>
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
						
					</div>
				</div>
			</form>
	</div>
</div>
<script src="js/jquery.js"></script><!-- Lịch -->
<script src="build/jquery.datetimepicker.full.js"></script><!-- Lịch -->
<script>
	$('#datetimepicker').datetimepicker({
	dayOfWeekStart : 1,
	lang:'en',
	disabledDates:['1986/01/08','1986/01/09','1986/01/10'],
	startDate:	'1986/01/05'
	});
	$('#datetimepicker').datetimepicker({value:'2015/04/15',step:10});

	$('#datetimepicker2').datetimepicker({
		lang:'ch',
		timepicker:false,
		format:'d/m/Y',
		formatDate:'Y/m/d',
		minDate:'-1970/01/01', // ngày hôm qua là ngày tối thiểu
		//maxDate:'+1970/01/02' // và ngày mai là ngày tối đa
	});
	$('#datetimepicker1').datetimepicker({
		datepicker:false,
		format:'H:i',
		step:5
	});
</script>