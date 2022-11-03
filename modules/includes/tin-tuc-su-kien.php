<?php
	$num=4;//So bai viet tren 1 trang
	if( isset($_GET['trang']))
	{
		$trang=$_GET['trang'];//So trang dang xem hien tai
	}
	else{
		$trang=1;
	}
	$batdau =($trang-1)*$num;
	$sql="select * from baiviet where idloaitin=5 limit $batdau, $num";//limit $batdau, $num
	$baiviet=mysql_query($sql);
?>
<div class="box-chitiet" style="padding:20px 50px; height:745px;">
	<div class="titlet" style="padding-bottom:10px;">
		<a href="#" style="text-decoration: none; "><h4> TIN TỨC - SỰ KIỆN</h4></a>
	</div>
	<?php while ($dong=mysql_fetch_array($baiviet)){?>
    	<div style="float:left; border-bottom:1px solid #c0c0c0; margin:5px; padding-top:10px;" >
           <?php echo "<a href=tin-tuc-su-kien/".$dong['idbaiviet']."-".$dong['tieude'].".html>" ?>
            <p> <img src="<? echo $dong['anhminhhoa']; ?>" width="200" height="130" style="float:left;margin-bottom:7px; border-radius: 4px;"> </p>
             <?php echo "</a>"?>
            <p class="tieude" style="padding-top:7px; padding-left:220px; "> 
				<a href="tin-tuc-su-kien/<? echo $dong['idbaiviet'];?>-<? echo $dong['tieude'];?>.html" style="text-decoration:none; color:#be1c1c; font-size:18px;">
            	<? echo $dong['tenbaiviet']; ?> 
                </a>
            </p>
            <p class="tomtattin" style="padding-top:3px; padding-left:220px; color:#360e00;"> <? echo $dong['tomtat']; ?> </p>
			<p class="xem" style="padding-top:20px; padding-left:220px;">
			<a href="tin-tuc-su-kien/<? echo $dong['idbaiviet'];?>-<? echo $dong['tieude'];?>.html" style="color:#306ec2; text-decoration:none; font-weight:bold;">>>Xem tiếp </a>
			</p>
         </div> 
         <div style="clear:both"> </div>
       <?php }?>
	   </br>
	  <?php include("trang.php");?>
</div>
