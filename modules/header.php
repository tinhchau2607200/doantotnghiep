<?php
	$sql="select * from loaitin where trangthai=0 order by thutu asc"; //desc: Giam dan, asc: tang dan
	$loaitin=mysql_query($sql);
	function Danhsachthucdon($idloaitin){
		$qr ="select * from thucdon where idloaitin=$idloaitin";
		return mysql_query($qr);
	}
?>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="cssmenu/styles.css">
   <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <!--<script src="/cssmenu/script.js"></script>-->
<div class="header animated slideInDown box-wp clearfix" >
	<div id="cssmenu">
			<ul>
				<li><a href="trang-chu">
				 TRANG CHỦ
				</a></li>
				<?php 
					while($category=mysql_fetch_array($loaitin)){
					$idloaitin = $category['idloaitin']
				?>
				<li>
				<?php
				if($category['tenkodau']=="dat-ban") echo '<a rel="modal:open" href="#order">' . $category['tenloaitin'] . '</a>';
				else echo '<a href="' . $category['tenkodau']. '">' . $category['tenloaitin'] . '</a>';
				?>
					<ul>
						<?php 
						$thucdon = Danhsachthucdon($idloaitin);
						while($menu=mysql_fetch_array($thucdon)){
						?>
						 <li class='has-sub'><?php echo "<a href=".$category['tenkodau']."/".$menu['idthucdon']."-".$menu['tenkodau'].".html>" ?><?php echo $menu['tenthucdon'] ?><?php echo "</a>"?>
						 </li>
						<?php 
							}
						?>
					</ul>
				</li>
				<?php 
				}
			   ?>
		   </ul>
	</div>
</div>