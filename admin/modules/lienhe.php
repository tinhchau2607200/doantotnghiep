<div class="templatemo-flex-row flex-content-row">
	<div class="col-1">
		<div class="panel panel-default templatemo-content-widget white-bg no-padding templatemo-overflow-hidden">
			
			<div class="templatemo-content-widget white-bg col-2">
				<h2 class="text-uppercase" style="text-align: center; padding-bottom: 10px;">Liên hệ</h2>
				<table class="table table-striped table-bordered templatemo-user-table">
					<thead>
						<tr>
							<td style="text-align:center;">Id</td>
							<td>Họ và Tên</td>
							<td>Địa chỉ</td>
							<td>Số điện thoại</td>
							<td>Email</td>
							<td>Nội dung</td>
							<td>Delete</td>
						</tr>
					</thead>
					<tbody>
						<?php
							$sql="select * from lienhe";
							$lienhe=mysql_query($sql);
							mysql_query("SET NAMES utf8");	
						?>
						<?php
						 
						  while ($dong=mysql_fetch_array($lienhe))
						  {
						?>
						<tr>
							<td><?php echo $dong['idlienhe']; ?></td>
							<td><?php echo $dong['hovaten']; ?></td>
							<td><?php echo $dong['diachi']; ?></td>
							<td><?php echo $dong['sdt']; ?></td>
							<td><?php echo $dong['email']; ?></td>
							<td><?php echo $dong['noidung']; ?></td>
							<td><a href="modules/lienhe/xuly.php?id=<?php echo $dong['idlienhe'];?>" class="templatemo-edit-btn">Delete</a></td>
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