<?php
	$id = isset($_GET['post']) ? $_GET['post']+0 : 0;

	if($id==0) {

	$sql="select * from thucdon where idloaitin=3";//limit $batdau, $num
	$thucdon=mysql_query($sql);
?>
<div class="detail bin-wp clearfix">
	<div class="title">
		<a href="#" style="text-decoration: none; "><h4>THỰC ĐƠN</h4></a>
	</div>
	<?php while ($dong=mysql_fetch_array($thucdon)){?>
	<div class="itemd">
		<a href="thuc-don/<?php echo $dong['idthucdon']?>-<?php echo $dong['tenkodau']?>.html"><img src="<? echo $dong['anhminhhoa']; ?>" width="210" height="140" style="border: 4px solid #ffffff; border-radius: 4px;"></a>
		<div class="bong"></div>
		<p class="name"><a href="thuc-don/<?php echo $dong['idthucdon'] ?>-<?php echo $dong['tenkodau']?>.html" style="text-decoration: none; "><? echo $dong['tenthucdon']; ?> </a></p>
		<p class="comment"><? echo $dong['tomtat']; ?> </p>
	</div>
	<?php }?>
	<div class="xoa"></div>
</div>

<?php
}
else {
	include("danh-sach-mon.php");
}