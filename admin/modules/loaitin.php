<div class="templatemo-flex-row flex-content-row">
	<div class="col-1">
		<div class="panel panel-default templatemo-content-widget white-bg no-padding templatemo-overflow-hidden">
			
			<div class="templatemo-content-widget white-bg col-2">
				<a href="index.php?ac=loaitin_add" title="Add" class="templatemo-white-button">Add</a>
				<h2 class="text-uppercase" style="text-align: center; padding-bottom: 10px;">Loại tin</h2>
				<table class="table table-striped table-bordered templatemo-user-table">
					<thead>
						<tr>
							<td style="text-align:center;">Id</td>
							<td>Tên loại tin</td>
							<td>Kí hiệu</td>
							<td>Thứ tự</td>
							<td>Trạng thái</td>
							<td>Edit</td>
							<td>Delete</td>
						</tr>
					</thead>
					<tbody>
						<?php
							$sql="select * from loaitin";
							$loaitin=mysql_query($sql);
							mysql_query("SET NAMES utf8");	
						?>
						<?php
						 
						  while ($dong=mysql_fetch_array($loaitin))
						  {
						?>
						<tr>
							<td><?php echo $dong['idloaitin']; ?></td>
							<td><?php echo $dong['tenloaitin']; ?></td>
							<td><?php echo $dong['tenkodau']; ?></td>
							<td><?php echo $dong['thutu']; ?></td>
								<?php 
									if ($dong['trangthai']==0)
									{ 
										$trangthai="Hiển thị";
									}
									else
										$trangthai="Không hiển thị";
								?>
							<td><?php echo $trangthai ; ?></td>
							<td><a href="index.php?ac=loaitin_edit&id=<? echo $dong['idloaitin'];?>" class="templatemo-edit-btn">Edit</a></td>
							<td><a href="modules/loaitin/xuly.php?id=<?php echo $dong['idloaitin'];?>" class="templatemo-link">Delete</a></td>
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