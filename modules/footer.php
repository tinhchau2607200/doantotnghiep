<?php
	$sql="select * from baiviet where 1=1 ORDER BY idbaiviet DESC limit 3";// ORDER BY idbaiviet DESC LIMIT 10";
	$baiviet=mysql_query($sql);
?>
<div class="footer box-wp clearfix">
	<div class="contactus">
		<h3 style="color:#ebeaea; font-weight:300;">Về chúng tôi</h3>
		<div class="link">
			<a href="gioi-thieu" style="text-decoration: none;"><li>Giới thiệu</li></a>
			<a href="kho-anh" style="text-decoration: none;"><li>Hình ảnh nhà hàng</li></a>
			<a href="lien-he" style="text-decoration: none;"><li>Thông tin liên hệ</li></a>
		</div>
	</div>
	<div class="news">
		
		<h3 style="color:#ebeaea; font-weight:300;">Tin tức nổi bật</h3>
		<div class="ns">
			<?php 
				while ($dong=mysql_fetch_array($baiviet))
				{
			?>   
			<a href="tin-tuc-su-kien/<? echo $dong['idbaiviet']; ?>-<? echo $dong['tieude']; ?>.html" style="text-decoration: none;">
			<li><?php echo $dong['tenbaiviet']; ?></li></a>
			<?php	
				}
			?>
		</div>
	</div>
	<div class="lk" style="padding-top:10px;">
		<a href="https://www.facebook.com" target="_blank" title="Facebook"><img src="images/fa.png"></a>
		<a href="https://plus.google.com" target="_blank" title="Google"><img src="images/gg.png"></a>
		<a href="#" target="_blank"><img src="images/tt.png"></a>
		<a href="https://www.youtube.com/channel/UCIQfmjUyX8HzRRdB-vpWRGg" target="_blank" title="Youtube"><img src="images/youtu.png"></a>		
	</div>
	<div class="xoa"></div>
	<div class="NH">
		<img src="images/nhang.png" style="display:block; margin:0 auto;">
		<p id="text">Địa chỉ : Lô 12-13 đường Hoàng Sa, Q. Sơn Trà, TP Đà Nẵng</br>
					Điện thoại: 0843 505 468 - Email: info@sanhodn.com</p>
	</div>
</div>
