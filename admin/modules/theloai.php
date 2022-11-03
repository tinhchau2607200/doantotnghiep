<?php
	//tính toán phân chia trang
	$sql = "SELECT count(idthucdon) AS tongsodong FROM thucdon";
	$thucdon=mysql_query($sql);
	$arTSD = mysql_fetch_array($thucdon);
	$tongsodong = $arTSD['tongsodong'];
	//số dòng trên 1 trang
	$num=4;
	//tổng số trang
	$sotrang = ceil($tongsodong/$num); 
	//lấy trang hiện tại
	$current_page = ($page>0) ? $page : 1;
	$offset = ($current_page - 1) * $num;
	//kết thúc phân trang
?>
<div class="templatemo-flex-row flex-content-row">
	<div class="col-1">
		<div class="panel panel-default templatemo-content-widget white-bg no-padding templatemo-overflow-hidden">
			<div class="templatemo-content-widget white-bg col-2">
				<a href="index.php?ac=theloai_add" title="Add" class="templatemo-white-button">Add</a>
				<h2 class="text-uppercase" style="text-align: center; padding-bottom: 10px;">Thể loại</h2>
				<table class="table table-striped table-bordered templatemo-user-table">
					<thead>
						<tr>
							<td>Id</td>
							<td>Tên thể loại</td>
							<td>Kí hiệu</td>
							<td>Loại tin</td>
							<td>Tóm tắt</td>
							<td>Nội dung</td>
							<td>Hình ảnh</td>
							<td>Nổi bật</td>
							<td>Edit</td>
							<td>Delete</td>
						</tr>
					</thead>
					<tbody>
						<?php
							$sql="select * from thucdon limit $offset, $num";
							$thucdon=mysql_query($sql);
							mysql_query("SET NAMES utf8");	
						?>
						<?php
						 
						  while ($dong=mysql_fetch_array($thucdon))
						  {
						?>
						<tr>
							<td><?php echo $dong['idthucdon']; ?></td>
							<td><?php echo $dong['tenthucdon']; ?></td>
							<td><?php echo $dong['tenkodau']; ?></td>				
							<?php
								$sql="select * from loaitin where idloaitin='$dong[idloaitin]'";
								$loaitin=mysql_query($sql);
								$dongloaitin=mysql_fetch_array($loaitin);
							?>
							<td><?php echo $dongloaitin['tenloaitin']; ?></td>
							<td><?php echo $dong['tomtat']; ?></td>
							<td style="width:230px;"><?php echo $dong['noidung']; ?></td>
							<td><img src="../<?php echo $dong['anhminhhoa']; ?>" alt="<?php echo $tenthucdon ?>" width="100px" height="70px" /></td>
								<?php
									if($dong['noibat']==1)
									{ $noibat="Có";
									}
									else
										$noibat="Không";
								?>
							<td><?php echo  $noibat; ?></td>
							<td><a href="index.php?ac=theloai_edit&id=<?php echo $dong['idthucdon'];?>" class="templatemo-edit-btn">Edit</a></td>
							<td><a href="modules/theloai/xuly.php?id=<?php echo $dong['idthucdon'];?>" class="templatemo-link">Delete</a></td>
						</tr>
						  <?php
						  }
						?>
					</tbody>
				</table>
				<div class="pagination-wrap" style="margin-right:0px;"> 
					<ul class="pagination">
						<?php
							for ($i = 1; $i <= $sotrang; $i++){
								if ($i != $current_page) {
									?>
										<li><a href="?ac=theloai&page=<?php echo $i?>"><?php echo $i?></a></li>
									<?php 
								} else {
									?>
										<li class="active"><a><?php echo $i?> <span class="sr-only">(current)</span></a></li>
									<?php 
								}
							}
						?>
					</ul>
				</div>
			</div>
		</div>
	</div> 
</div>	