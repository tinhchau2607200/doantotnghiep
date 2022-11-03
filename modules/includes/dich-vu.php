<?php
	$sql="select * from baiviet where idloaitin=2";
	$baiviet=mysql_query($sql);
?>
<div class="box-chitiet" style="padding:20px 50px; height:745px;">
	<div class="titlet" style="padding-bottom:10px;">
		<a href="#" style="text-decoration: none; "><h4> DỊCH VỤ</h4></a>
	</div>
	<?php while ($dong=mysql_fetch_array($baiviet)){?>
    	<div class="boxdichvu" style="float:left; border-bottom:1px solid #c0c0c0; margin:5px; width:100%; padding-top:15px;" >
			<div class="img" style="width:200px;">
				<?php echo "<a href=dich-vu/".$dong['idbaiviet']."-".$dong['tieude'].".html>" ?>
					<img src="<? echo $dong['anhminhhoa']; ?>" width="200" height="130" style="float:left;margin-bottom:7px; border-radius: 4px;">
				<?php echo'</a>'?>
			</div>
            <p class="tieude" style="padding-top:7px; padding-left:220px; "> 
				<a href="dich-vu/<? echo $dong['idbaiviet'];?>-<? echo $dong['tieude'];?>.html" style="text-decoration:none; color:#be1c1c; font-size:18px;">
            	<? echo $dong['tenbaiviet']; ?> 
                </a>
            </p>
            <p class="tomtattin" style="padding-top:3px; padding-left:220px; color:#360e00;"> <? echo $dong['tomtat']; ?> </p>
			<p class="xem" style="padding-top:20px; padding-left:220px;">
			<a href="dich-vu/<? echo $dong['idbaiviet'];?>-<? echo $dong['tieude'];?>.html" style="color:#306ec2; text-decoration:none; font-weight:bold;">>>Xem tiếp </a>
			</p>
         </div> 
         <div style="clear:both"> </div>
       <?php }?>
</div>