<?php include '../common/head.php';?>
<?php include '../common/header_top.php';?>
<?php include '../common/header.php';?>
<?php include '../common/welcome.php';?>
<?php include '../common/config.php';?>
	<?php 
	$lawyer = [];
	$conn = OpenCon();
	$sql = "select * from lawyer where user_id = ".$_SESSION['user_id'];
	$result = $conn->query($sql);
	if($result->num_rows > 0){
		while($row = $result->fetch_assoc()) {
			$lawyer['id'] = $row['id'];
			$lawyer['name'] = $row['name'];
			$lawyer['court_id'] = $row['court_id'];
			$lawyer['address'] = $row['address'];
			$lawyer['contact'] = $row['contact'];
			$lawyer['email'] = $row['email'];
			$lawyer['user_id'] = $row['user_id']; 			
    }
    }
	$conn->close();
?>


	<div class="card">
	  <div class="card-header">Lawyer
		
	  </div>
	  
	  <div class="card-body">
	  		<table class="table table-bordered">
	  			<tbody>
	  				<?php if(isset($lawyer['id'])): ?>
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
					<tr>
						<th>User Id : </th>
						<td><?php echo $_SESSION['user_id']; ?></td>
					</tr>
				<?php endif; ?>
				<tr>
					<th>Please Update your profile first!</th>
				</tr>
					
	  			</tbody>
	  		</table>
	  </div> 
	</div>
<?php include '../common/footer.php';?>
