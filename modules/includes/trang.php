<?php
	$sql="select * from baiviet where idloaitin=5";//Lay tat ca bai viet cung 1 loai tin
	$baiviet=mysql_query($sql);
	$tongsobaiviet=mysql_num_rows($baiviet);
	$sotrang=ceil($tongsobaiviet/$num);//Chia va lam tron de lay trang
	$i=1;
	
	while($i<=$sotrang){
?>
	<div class="phantrang" style="padding-left:5px;">
	<a href="tin-tuc-su-kien&trang=<?php echo $_GET['loaitin'];?><?php echo $i;?>">
	<? if($i==$trang)
		{
	?>
	<div class="trang" style="background-color:#0f98ea; color:red;">
		<?php
			echo $i;
		?>
	</div>
	<?
		}
		else
		{
	?>
	<div class="trang">
		<?php
			echo $i;
		?>
	</div>
	<?
		}
	?>
	</a>
	</div>
<?php
	$i++;
	}
?>
	