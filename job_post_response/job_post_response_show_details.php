<?php include '../common/head.php';?>
<?php include '../common/header_top.php';?>
<?php include '../common/header.php';?>
<?php include '../common/welcome.php';?>
<?php include '../common/config.php';?>
	<?php 
	$region = [];
	$conn = OpenCon();
	$id = $_GET['id'];
	$sql = "select * from job_post_response where id = ".$id;
	$result = $conn->query($sql);
	while($row = $result->fetch_assoc()) {
			$job_post_response['id'] = $row['id'];
			$job_post_response['job_id'] = $row['job_id'];
			$job_post_response['lawyer_id'] = $row['lawyer_id']; 
			$job_post_response['fees_amount'] = $row['fees_amount'];
			$job_post_response['status'] = $row['status'];
    }
    $conn->close();
	
?>


	<div class="card">
	  <div class="card-header">Job Post Response</div>
	  <div class="card-body">
	  		<table class="table table-bordered">
	  			<tbody>
	  				<tr>
						<th>ID : </th>
						<td><?php echo $job_post_response['id']; ?></td>
					</tr>
					<tr>
						<th>Job Id : </th>
						<td><?php echo $job_post_response['job_id']; ?></td>
					</tr>
					<tr>
						<th>Lawyer Id : </th>
						<td><?php echo $job_post_response['lawyer_id']; ?></td>
					</tr>
					<tr>	
						<th>Fees Amount : </th>
						<td><?php echo $job_post_response['fees_amount']; ?></td>
					</tr>
					<tr>	
						<th>Status : </th>
						<td><?php echo $job_post_response['status']; ?></td>
					</tr>
	  			</tbody>
	  		</table>
	  </div> 
	</div>
<?php include '../common/footer.php';?>
