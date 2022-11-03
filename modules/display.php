	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<!-- Add jQuery library -->
	<script type="text/javascript" src="../lib/jquery-1.10.2.min.js"></script>
	<!-- Add mousewheel plugin (this is optional) -->
	<script type="text/javascript" src="../lib/jquery.mousewheel.pack.js?v=3.1.3"></script>
	<!-- Add fancyBox main JS and CSS files -->
	<script type="text/javascript" src="../source/jquery.fancybox.pack.js?v=2.1.5"></script>
	<link rel="stylesheet" type="text/css" href="../source/jquery.fancybox.css?v=2.1.5" media="screen" />
	<!-- Add Button helper (this is optional) -->
	<link rel="stylesheet" type="text/css" href="../source/helpers/jquery.fancybox-buttons.css?v=1.0.5" />
	<script type="text/javascript" src="../source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
	<!-- Add Thumbnail helper (this is optional) -->
	<link rel="stylesheet" type="text/css" href="../source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" />
	<script type="text/javascript" src="../source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>
	<!-- Add Media helper (this is optional) -->
	<script type="text/javascript" src="../source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$('.fancybox').fancybox();
		});
	</script>
<?php
	$sql="select * from thucdon where noibat=1 ORDER BY idthucdon DESC limit 8";//limit $batdau, $num
	$thucdon=mysql_query($sql);
?>
<div class="display box-wp clearfix">
	<?php
		$sql="select * from baiviet where idbaiviet=4";
		$baiviet=mysql_query($sql);
		$dong=mysql_fetch_array($baiviet);
	?>
	<div class="main box-wp clearfix">
		<div class="column1">
			<div class="title">
				<a href="#" style="text-decoration: none; "><h4> GIỚI THIỆU</h4></a>
			</div>
			<div class="txt" style="padding-top:15px;">
				<p style="font-size:13px; font-family:Open Sans;"><? echo $dong['tomtat']; ?> </p>
				<a href="gioi-thieu"><p id="detail" style="font-family:Open Sans;">Xem thêm >></p></a>
			</div>
		</div>
		<div class="column2">
			<div class="title1">
				<a href="#" style="text-decoration: none;"><h4> LIÊN HỆ</h4></a>
			</div>
			<?php
				$sql="select * from lienhe where 1=1";
				$lienhe=mysql_query($sql);
				$dong=mysql_fetch_array($lienhe);
			?>
			<div class="contact" style="margin-top:17px; font-family:Open Sans; font-size:13px;">
				<p class="hot" style=" padding-top:10px; padding-bottom:2px;">
				<strong style="font-size:14px;">Hotline:</strong> <span style="font-size:13px;"><? echo $dong['sdt']; ?></span></br>
				</p>
				<div class="img">
					<a href="skype:cantuyenbovip?chat"><img src="images/skypee.png" style="margin:5px; width:25%;"></a>
					<a href="https://www.facebook.com/thinhcoi555" target="_blank" title="Facebook"><img src="images/fbb.png" style="margin:5px; width:10%;"></a>
					<a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3833.985611293289!2d108.24395041426591!3d16.066236443787044!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31421784487dff5f%3A0x72f59e0a18777c18!2zTmjDoCBow6BuZyBo4bqjaSBz4bqjbiBTYW4gSMO0IMSQw6AgTuG6tW5n!5e0!3m2!1svi!2s!4v1458098190256"
					class="various fancybox.iframe" title="Bản đồ"><img src="images/map.png" style="float:right; padding-right:15px; padding-top:15px; width:26%;"/></a>
				</div>
				<p id="kh" style="font-family:Open Sans; font-weight:bold; font-size:13px; color:#981900; padding-bottom:15px;">
					Sẵn sàng hỗ trợ quý khách!
				</p>
			</div>
		</div>
	</div>
	<div class="menu box-wp clearfix">
		<div class="title">
			<a href="thuc-don" style="text-decoration: none; "><h4>THỰC ĐƠN</h4></a>
		</div>
		<div class="dish clearfix">
		<?php while ($menu=mysql_fetch_array($thucdon)){?>
			<div class="item">
				<div class="img" style="text-align:center;">
					<?php echo "<a href=thuc-don/".$menu['idthucdon']."-".$menu['tenkodau'].".html>" ?><img src="<?php echo $menu['anhminhhoa'] ?>" style="width:204px; height:140px;"><?php echo "</a>"?>
				</div>
				<div class="bong"></div>
				<div class="txt">
					<a href="index.php?xem=thuc-don&post=<?php echo $menu['idthucdon'] ?>" style="text-decoration: none; "><h5><? echo $menu['tenthucdon']; ?></h5></a>
					<p class="comment"><? echo $menu['tomtat']; ?> </p>
				</div>
			</div>
		<?php }?>
		</div>
	</div>
</div>
<script type="text/javascript">
	$(document).ready(function() {
		$(".various").fancybox({
			maxWidth	: 800,
			maxHeight	: 700,
			fitToView	: false,
			width		: '70%',
			height		: '90%',
			autoSize	: false,
			closeClick	: false,
			openEffect	: 'elastic',
			closeEffect	: 'none'
		});
	});
</script>