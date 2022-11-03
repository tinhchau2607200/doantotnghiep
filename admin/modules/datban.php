<div class="templatemo-flex-row flex-content-row">
	<div class="col-1">
		<div class="panel panel-default templatemo-content-widget white-bg no-padding templatemo-overflow-hidden">
			
			<div class="templatemo-content-widget white-bg col-2">
				<h2 class="text-uppercase" style="text-align: center; padding-bottom: 10px;">Đặt bàn</h2>
				<table class="table table-striped table-bordered templatemo-user-table">
					<thead>
						<tr>
							<td style="text-align:center;">Id</td>
							<td>Họ và Tên</td>
							<td>Số điện thoại</td>
							<td>Ngày đặt</td>
							<td>Giờ đặt</td>
							<td>Số người</td>
							<td>Loại Phòng</td>
							<td>Delete</td>
						</tr>
					</thead>
					<tbody>
						<?php
							$sql="select * from datban";
							$datban=mysql_query($sql);
							mysql_query("SET NAMES utf8");	
						?>
						<?php
						 
						  while ($dong=mysql_fetch_array($datban))
						  {
						?>
						<tr>
							<td><?php echo $dong['iddatban']; ?></td>
							<td><?php echo $dong['ten']; ?></td>
							<td><?php echo $dong['sdt']; ?></td>
							<td><?php echo $dong['ngaydat']; ?></td>
							<td><?php echo $dong['giodat']; ?></td>
							<td><?php echo $dong['songuoi']; ?></td>
									<?php
										$sql="select * from phong where idphong='$dong[idphong]'";
										$phong=mysql_query($sql);
										$dongphong=mysql_fetch_array($phong);
									?>
							<td><?php echo $dongphong['loaiphong']; ?></td>
							<td><a href="modules/datban/xuly.php?id=<?php echo $dong['iddatban'];?>" class="templatemo-edit-btn">Delete</a></td>
						</tr>
						  <?php
						  }
						?>
					</tbody>
				</table>
			</div>
		</div>
	</div> 
</div>
<style>
	td{
		text-align:center;
	}
</style>