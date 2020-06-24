<?php include '../common/head.php';?>
<?php include '../common/header_top.php';?>
<?php include '../common/header.php';?>
<?php include '../common/welcome.php';?>
<?php include '../common/config.php';?>
	<?php 
	$region = [];
	$conn = OpenCon();
	$id = $_GET['id'];
	$sql = "select * from user where id = ".$id;
	$result = $conn->query($sql);
	while($row = $result->fetch_assoc()) {
			$user['id'] = $row['id'];
			$user['username'] = $row['username'];
			$user['password'] = $row['password'];
			$user['name'] = $row['name'];
			$user['email'] = $row['email'];
			$user['contact'] = $row['contact'];

    }
    $conn->close();
	
?>


	<div class="card">
	  <div class="card-header">User</div>
	  <div class="card-body">
	  		<table class="table table-bordered">
	  			<tbody>
	  				<tr>
						<th>ID : </th>
						<td><?php echo $user['id']; ?></td>
					</tr>
					<tr>
						<th>Username : </th>
						<td><?php echo $user['username']; ?></td>
					</tr>
					<tr>	
						<th>Password : </th>
						<td><?php echo $user['password']; ?></td>
					</tr>
					<tr>	
						<th>Name : </th>
						<td><?php echo $user['name']; ?></td>
					</tr>
					<tr>	
						<th>Email : </th>
						<td><?php echo $user['email']; ?></td>
					</tr>
					<tr>	
						<th>Contact : </th>
						<td><?php echo $user['contact']; ?></td>
					</tr>
	  			</tbody>
	  		</table>
	  </div> 
	</div>
<?php include '../common/footer.php';?>
