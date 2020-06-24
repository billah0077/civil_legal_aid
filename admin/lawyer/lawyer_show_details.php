<?php include '../partials/head.php';?>
<?php include '../partials/header_menu.php';?>
<?php include '../partials/admin-sidebar.php';?>
<?php include '../partials/bredcrumb.php';?>
<?php include '../common/config.php';?>
	<?php 
	$region = [];
	$conn = OpenCon();
	$id = $_GET['id'];
	$sql = "select * from lawyer where id = ".$id;
	$result = $conn->query($sql);
	while($row = $result->fetch_assoc()) {
			$lawyer['id'] = $row['id'];
			$lawyer['name'] = $row['name'];
			$lawyer['court_id'] = $row['court_id'];
			$lawyer['address'] = $row['address'];
			$lawyer['contact'] = $row['contact'];
			$lawyer['email'] = $row['email'];
 
    }
    $conn->close();
	
?>


	<div class="card">
	  <div class="card-header">Lawyer</div>
	  <div class="card-body">
	  		<table class="table table-bordered">
	  			<tbody>
	  				<tr>
						<th>ID : </th>
						<td><?php echo $lawyer['id']; ?></td>
					</tr>
					<tr>
						<th>Name : </th>
						<td><?php echo $lawyer['name']; ?></td>
					</tr>
					<tr>	
						<th>Court Id : </th>
						<td><?php echo $lawyer['court_id']; ?></td>
					</tr>
					<tr>	
						<th>Address : </th>
						<td><?php echo $lawyer['address']; ?></td>
					</tr>
					<tr>
						<th>Contact : </th>
						<td><?php echo $lawyer['contact']; ?></td>
					</tr>
					<tr>
						<th>Email : </th>
						<td><?php echo $lawyer['email']; ?></td>
					</tr>
					
	  			</tbody>
	  		</table>
	  </div> 
	</div>
<?php include '../partials/footer.php';?>
