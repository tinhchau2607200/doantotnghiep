<div class="templatemo-flex-row flex-content-row">
	<div class="col-1">
		<div class="panel panel-default templatemo-content-widget white-bg no-padding templatemo-overflow-hidden">
			<div class="templatemo-content-widget white-bg col-2">
				<a href="index.php?ac=nguoidung_add" title="Add" class="templatemo-white-button">Add</a>
				<h2 class="text-uppercase" style="text-align: center; padding-bottom: 10px;">Người dùng</h2>
				<table class="table table-striped table-bordered templatemo-user-table">
					<thead>
						<tr>
							<td style="text-align:center;">Id</td>
							<td>Họ và Tên</td>
							<td>Tên đăng nhập</td>
							<td>Mật khẩu</td>
							<td>Chú thích</td>
							<td>Edit</td>
							<td>Delete</td>
						</tr>
					</thead>
					<tbody>
						<?php
							$sql="select * from nguoidung";
							$nguoidung=mysql_query($sql);
							mysql_query("SET NAMES utf8");	
						?>
						<?php
						 
						  while ($dong=mysql_fetch_array($nguoidung))
						  {
						?>
						<tr>
							<td><?php echo $dong['idnguoidung']; ?></td>
							<td><?php echo $dong['ten']; ?></td>
							<td><?php echo $dong['tendangnhap']; ?></td>
							<td><?php echo $dong['matkhau']; ?></td>
							<td><?php echo $dong['chuthich']; ?></td>
							<td><a href="index.php?ac=nguoidung_edit&id=<? echo $dong['idnguoidung'];?>" class="templatemo-edit-btn">Edit</a></td>
							<td><a href="modules/nguoidung/xuly.php?id=<?php echo $dong['idnguoidung'];?>" class="templatemo-link">Delete</a></td>
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