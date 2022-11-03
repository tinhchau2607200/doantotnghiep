<?php
	$sql="select * from loaitin";
	$loaitin=mysql_query($sql);
?>
<div class="general">
	<?php
			$action = isset($_GET['xem']) ? $_GET['xem'] : "home"; //kiểm tra biến rỗng.
			$trang = isset($_GET['trang']) ? $_GET['trang']+0 : 0;
			$m = isset($_GET['m']) ? $_GET['m'] : 0;
			if(file_exists("./modules/includes/" . $action . ".php")) {
				include("includes/" . $action . ".php");	
				?>
				<script type="text/javascript">
				$(document).ready(function(){
				var topPos = 620; //Chiều cao muốn scroll (px)
				var time    =  1000;// Thời gian thực hiện hiệu ứng scroll (ms)
				$('html, body').animate({scrollTop:topPos},time);
				})					   
				</script>
				<?php
			} else {
					include("modules/display.php");	
			}
	?> 
</div>