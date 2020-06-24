<?php include '../common/head.php';?>
<?php include '../common/header_top.php';?>
<?php include '../common/header.php';?>
<?php include '../common/welcome.php';?>
<?php include '../common/config.php';?>
	<?php 
	$region = [];
	$conn = OpenCon();
	$id = $_GET['id'];
	$sql = "select * from crime where id = ".$id;
	$result = $conn->query($sql);
	while($row = $result->fetch_assoc()) {
			$crime['id'] = $row['id'];
			$crime['title'] = $row['title'];
			$crime['description'] = $row['description']; 
    }
    $conn->close();
	
?>


	<div class="card">
	  <div class="card-header">Crime</div>
	  <div class="card-body">
	  		<table class="table table-bordered">
	  			<tbody>
	  				<tr>
						<th>ID : </th>
						<td><?php echo $crime['id']; ?></td>
					</tr>
					<tr>
						<th>Title : </th>
						<td><?php echo $crime['title']; ?></td>
					</tr>
					<tr>	
						<th>Description : </th>
						<td><?php echo $crime['description']; ?></td>
					</tr>
	  			</tbody>
	  		</table>
	  </div> 
	</div>
<?php include '../common/footer.php';?>
