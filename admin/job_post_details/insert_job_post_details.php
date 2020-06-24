<?php include '../partials/head.php';?>
<?php include '../partials/header_menu.php';?>
<?php include '../partials/admin-sidebar.php';?>
<?php include '../partials/bredcrumb.php';?>
<?php include '../common/config.php';?>
	<div class="card">
	  <div class="card-header">Job Post Details
	  	<a style="float: right;" href="insert_crime_section.php"><button class="btn btn-success">Add New</button></a>
	  </div>
	  <div class="card-body">
   			<form action="" method="post">
			  <div class="form-group">
			    <label for="job_post_id">Job Post Id:</label>
			    <input type="number" name="job_post_id" class="form-control" id="job_post_id">
			  </div>
			  <div class="form-group">
			    <label for="crime_id">Crime Id:</label>
			    <input type="number" name="crime_id" class="form-control" id="crime_id">
			  </div>
			  <div class="form-group">
			    <label for="description">Description:</label>
			    <input type="text" name="description" class="form-control" id="description">
			  </div>
			  <button type="submit" class="btn btn-info">Submit</button>
			</form>
	  </div> 
	</div>
<?php include '../partials/footer.php';?>
	
<?php

// Get values from form 
if($_POST){
	$job_post_id=$_POST['job_post_id'];
	$crime_id=$_POST['crime_id'];
	$description=$_POST['description'];
	//print_r($_POST);exit;
	insertjob_post_details($job_post_id,$crime_id, $description);	
}

function insertjob_post_details($job_post_id,$crime_id, $description){
	$conn = OpenCon();
	$sql = "INSERT INTO job_post_details (job_post_id, crime_id, description)
VALUES ('".$job_post_id."','".$crime_id."', '".$description."')";
	$result = $conn->query($sql);
	if($result){
		echo "successful";
		
	}else{
		echo "No Data Found";
	}
	$conn->close();	
}

?>


