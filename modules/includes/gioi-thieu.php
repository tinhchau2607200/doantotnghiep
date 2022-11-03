<?php
	$sql="select * from baiviet where idbaiviet=4";
	$baiviet=mysql_query($sql);
	$dong=mysql_fetch_array($baiviet);
?>
<div class="tintuc bin-wp clearfix">
	<div class="title">
		<a href="#" style="text-decoration: none; "><h4>GIỚI THIỆU </h4></a>
	</div>
	<div class="img">
		<img src="<? echo $dong['anhminhhoa'];?>" style="display: block; margin-left: auto; margin-right: auto; width:650px; height:400px; border-radius:8px;">
	</div>
	<div class="txt" style="padding:20px;">
		<p class="tieude" style="text-align:center; font-size:19px; font-weight:bold;"> <? echo $dong['tenbaiviet']; ?> </p>
		<!--<p class="tomtattin" style="font-size:17px;">  </p>-->
		<p class="noidung" style="font-size:17px;"> <? echo $dong['noidung']; ?> </p>
	</div>
</div>