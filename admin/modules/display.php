<div class="templatemo-flex-row flex-content-row">
	<div class="templatemo-content-widget white-bg col-2">
	  <i class="fa fa-times"></i>
	  <div class="square"></div>
	  <h2 class="templatemo-inline-block">Admin</h2><hr>
	  <p>Chương trình được viết trên nền tảng PHP & MySQL</p>
	  <p>Thực hiện: Châu Văn Tình</p> 
		<p>Email: Tinh_1851220053@dau.edu.vn</p>
		<p> Số điện thoại: 0843 505 468</p>
	</div> 

	<div class="templatemo-content-widget white-bg col-2">
		<i class="fa fa-times"></i>
		<a href="index.php?ac=nguoidung_add" title="Add" class="templatemo-white-button" data-toggle="modal"  data-target="#nguoidung">Add</a>
		<i class="fa fa-times"></i>
		<h2 class="text-uppercase" style="text-align: center; padding-bottom: 10px;">
			<a href="index.php?ac=nguoidung" style="color: black">	
				Người dùng
			</a>	
		</h2>

		<table class="table table-striped table-bordered templatemo-user-table">
			<thead>
				<tr align="center">
					<td>Id</td>
					<td>Username</td>
					<td>Fullname</td>
				</tr>
			</thead>
			<tbody>
				<?php
					$sql = "SELECT * FROM nguoidung";
					$nguoidung=mysql_query($sql);
					while ($arUser = mysql_fetch_array($nguoidung)){
						$idnguoidung = $arUser['idnguoidung'];
						$tendangnhap = $arUser['tendangnhap'];
						$ten = $arUser['ten'];
						?>
							<tr align="center">
								<td align="center"><?php echo $idnguoidung;?></td>
								<td><?php echo $tendangnhap;?></td>
								<td><?php echo $ten;?></td>
							</tr>
						<?php 
					}
				?>
			</tbody>
		</table>	
	</div> 
  </div>
  <div class="templatemo-flex-row flex-content-row">
	          
      <div class="templatemo-content-widget white-bg col-2">
		<i class="fa fa-times"></i>
		<h2 class="text-uppercase" style="text-align: center; padding-bottom: 10px;">Thống kê</h2>
		<table class="table table-striped table-bordered templatemo-user-table">
			<thead>
				<tr align="center">
					<td>Bài viết</td>
					<td>
						Số bài
					</td>
				</tr>
			</thead>
			<tbody>
				<tr align="center">
					<td>Giới thiệu</td>
					<td>
						<?php
							$sql = "SELECT COUNT(*) AS gt FROM baiviet where idloaitin=1";
							$baiviet=mysql_query($sql);
							while ($dembaiviet = mysql_fetch_array($baiviet)){
								$gt = $dembaiviet['gt'];
								echo $gt;
							}
						?>
					</td>
				</tr>
				<tr align="center">
					<td>Dịch vụ</td>
					<td>
						<?php
							$sql = "SELECT COUNT(*) AS dv FROM baiviet where idloaitin=2";
							$baiviet=mysql_query($sql);
							while ($dembaiviet = mysql_fetch_array($baiviet)){
								$dv = $dembaiviet['dv'];
								echo $dv;
							}
						?>
					</td>
				</tr>
				<tr align="center">
					<td>Tin tức</td>
					<td>
						<?php
							$sql = "SELECT COUNT(*) AS tt FROM baiviet where idloaitin=5";
							$baiviet=mysql_query($sql);
							while ($dembaiviet = mysql_fetch_array($baiviet)){
								$tt = $dembaiviet['tt'];
								echo $tt;
							}
						?>
					</td>
				</tr>
			</tbody>
			<thead>
				<tr align="center">
					<td>Hình ảnh</td>
					<td>
						Số hình
					</td>
				</tr>
			</thead>
			<tbody>
				<tr align="center">
					<td>Slides</td>
					<td>
						<?php
							$sql = "SELECT COUNT(*) AS s FROM images where idloaitin=0";
							$images=mysql_query($sql);
							while ($demimages = mysql_fetch_array($images)){
								$s = $demimages['s'];
								echo $s;
							}
						?>
					</td>
				</tr>
				<tr align="center">
					<td>Nhà hàng</td>
					<td>
						<?php
							$sql = "SELECT COUNT(*) AS i FROM images where idloaitin=4";
							$images=mysql_query($sql);
							while ($demimages = mysql_fetch_array($images)){
								$i = $demimages['i'];
								echo $i;
							}
						?>
					</td>
				</tr>
				<tr align="center">
					<td>Thực đơn</td>
					<td>
						<?php
							$sql = "SELECT COUNT(*) AS t FROM thucdon";
							$thucdon=mysql_query($sql);
							while ($demimages = mysql_fetch_array($thucdon)){
								$t = $demimages['t'];
								echo $t;
							}
						?>
					</td>
				</tr>
			</tbody>
		</table>
		
	</div>            
	
	
	  <div class="templatemo-content-widget white-bg col-2" style="margin-botom:10px;">
		<!--<a href="index.php?ac=loaitin_add" title="Add" class="templatemo-white-button" data-toggle="modal"  data-target="#danhmuctin">Add</a>-->
		<i class="fa fa-times"></i>
		<h2 class="text-uppercase" style="text-align: center; padding-bottom: 10px;">
			<a href="index.php?ac=loaitin"  title="Loại tin" style="color: black">
				Danh mục loại tin
			</a>
		</h2>
		<table class="table table-striped table-bordered templatemo-user-table">
	
			<thead>
				<tr align="center">
					<td>Id</td>
					<td>Tên chuyên mục</td>
					<td>Sửa</td>
					<td>Xóa</td>
				</tr>
			</thead>
			<tbody>
				<?php
					$sql = "SELECT * FROM loaitin";
					$loaitin=mysql_query($sql);
					while ($arUser = mysql_fetch_array($loaitin)){
						$idloaitin = $arUser['idloaitin'];
						$tenloaitin = $arUser['tenloaitin'];
						?>
							<tr align="center">
								<td align="center"><?php echo $idloaitin;?></td>
								<td><?php echo $tenloaitin;?></td>
								<td align="center"><a href="index.php?ac=loaitin_edit&id=<?php echo $idloaitin;?>">Sửa</a></td>
								<td align="center"><a href="modules/loaitin/xuly.php?id=<?php echo $idloaitin;?>">Xóa</a></td>
							</tr>
						<?php 
					}
				?>
			</tbody>
		</table>    
	</div> 
	 
	</div>           
  </div> <!-- Second row ends -->      