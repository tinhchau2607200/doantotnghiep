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
	$sql="select * from baiviet where idbaiviet='$_GET[baiviet]'";
	$baiviet=mysql_query($sql);
	$dong=mysql_fetch_array($baiviet);
?>
<div class="tintuc bin-wp clearfix">
	<div class="titlet">
		<a href="#" style="text-decoration: none; "><h4> TIN TỨC</h4></a>
	</div>
	<div class="img">
		<a target="_blank" class="fancybox" style="margin:0 auto; display:block;" href="<? echo $dong['anhminhhoa'];?>"><img src="<? echo $dong['anhminhhoa'];?>" style="display: block; margin-left: auto; margin-right: auto; width:600px; height:450px; border-radius: 4px;"></a>
	</div>
	<div class="txt">
		<p class="tieude" style="text-align:center; font-size:19px; font-weight:bold;"> <? echo $dong['tenbaiviet']; ?> </p>
		<p class="tomtattin"> <? echo $dong['tomtat']; ?> </p>
		<p class="noidung"> <? echo $dong['noidung']; ?> </p>
	</div>
</div>