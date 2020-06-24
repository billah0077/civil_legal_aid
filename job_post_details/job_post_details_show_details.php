<?php include '../partials/head.php';?>
<?php include '../partials/header_menu.php';?>
<?php include '../partials/admin-sidebar.php';?>
<?php include '../partials/bredcrumb.php';?>
<?php include '../common/config.php';?>
	<?php 
	$region = [];
	$conn = OpenCon();
	$id = $_GET['id'];
	$sql = "select * from job_post_details where id = ".$id;
	$result = $conn->query($sql);
	while($row = $result->fetch_assoc()) {
			$job_post_details['id'] = $row['id'];
			$job_post_details['job_post_id'] = $row['job_post_id'];
			$job_post_details['crime_id'] = $row['crime_id']; 
			$job_post_details['description'] = $row['description'];
    }
    $conn->close();
	
?>


	<div class="card">
	  <div class="card-header">Job Post Details</div>
	  <div class="card-body">
	  		<table class="table table-bordered">
	  			<tbody>
	  				<tr>
						<th>ID : </th>
						<td><?php echo $job_post_details['id']; ?></td>
					</tr>
					<tr>
						<th>Job Post Id : </th>
						<td><?php echo $job_post_details['job_post_id']; ?></td>
					</tr>
					<tr>
						<th>Crime Id : </th>
						<td><?php echo $job_post_details['crime_id']; ?></td>
					</tr>
					<tr>	
						<th>Description : </th>
						<td><?php echo $job_post_details['description']; ?></td>
					</tr>
	  			</tbody>
	  		</table>
	  </div> 
	</div>
<?php include '../partials/footer.php';?>
