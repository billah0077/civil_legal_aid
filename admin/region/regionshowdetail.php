<?php include '../partials/head.php';?>
<?php include '../partials/header_menu.php';?>
<?php include '../partials/admin-sidebar.php';?>
<?php include '../partials/bredcrumb.php';?>
<?php include '../common/config.php';?>
	<?php 
	$region = [];
	$conn = OpenCon();
	$id = $_GET['id'];
	$sql = "select * from region where id = ".$id;
	$result = $conn->query($sql);
	while($row = $result->fetch_assoc()) {
			$region['id'] = $row['id'];
			$region['name'] = $row['name'];
			$region['description'] = $row['description']; 
    }
    $conn->close();
	
?>


	<div class="card">
	  <div class="card-header">Region</div>
	  <div class="card-body">
	  		<table class="table table-bordered">
	  			<tbody>
	  				<tr>
						<th>ID : </th>
						<td><?php echo $region['id']; ?></td>
					</tr>
					<tr>	
						<th>Name : </th>
						<td><?php echo $region['name']; ?></td>
					</tr>
					<tr>	
						<th>Description : </th>
						<td><?php echo $region['description']; ?></td>
					</tr>
	  			</tbody>
	  		</table>
	  </div> 
	</div>
<?php include '../partials/footer.php';?>
