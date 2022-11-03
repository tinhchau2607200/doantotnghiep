<?php
	$sql="select * from loaitin";
	$loaitin=mysql_query($sql);
?>
<div class="content">
	<?php
			$action = isset($_GET['ac']) ? $_GET['ac'] : "home";
			$page = isset($_GET['page']) ? $_GET['page']+0 : 0;
			if(file_exists("./modules/" . $action . ".php")){
				include("modules/" . $action . ".php");
			}
			else {
				include("modules/display.php");	
			}
	?> 
</div>