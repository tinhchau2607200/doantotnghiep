<?php
	$sql="select * from baiviet where idbaiviet=1";
	$baiviet=mysql_query($sql);
	$dong=mysql_fetch_array($baiviet);
?>
<div class="box-chitiet" >
    <p> <img src="<? echo $dong['anhminhhoa']; ?>" width="625" style="float:left; margin:3px;"> </p>
    <p class="tenbaiviet" style="text-align:center; font-size:18px;"> <? echo $dong['tenbaiviet']; ?> </p>
    <p class="tomtattin"> <? echo $dong['tomtat']; ?> </p>
    <p class="noidung"> <? echo $dong['noidung']; ?> </p>
</div>