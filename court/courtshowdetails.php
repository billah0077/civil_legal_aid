<?php include '../common/head.php';?>
<?php include '../common/header_top.php';?>
<?php include '../common/header.php';?>
<?php include '../common/welcome.php';?>
<?php include '../common/config.php';?>
	<?php 
	$region = [];
	$conn = OpenCon();
	$id = $_GET['id'];
	$sql = "select * from court where id = ".$id;
	$result = $conn->query($sql);
	while($row = $result->fetch_assoc()) {
			$court['id'] = $row['id'];
			$court['region_id'] = $row['region_id'];
			$court['name'] = $row['name'];
			$court['description'] = $row['description']; 
    }
    $conn->close();
	
?>


	<div class="card">
	  <div class="card-header">Court</div>
	  <div class="card-body">
	  		<table class="table table-bordered">
	  			<tbody>
	  				<tr>
						<th>ID : </th>
						<td><?php echo $court['id']; ?></td>
					</tr>
					<tr>
						<th>Region ID : </th>
						<td><?php echo $court['region_id']; ?></td>
					</tr>
					<tr>	
						<th>Name : </th>
						<td><?php echo $court['name']; ?></td>
					</tr>
					<tr>	
						<th>Description : </th>
						<td><?php echo $court['description']; ?></td>
					</tr>
	  			</tbody>
	  		</table>
	  </div> 
	</div>
<?php include '../common/footer.php';?>
