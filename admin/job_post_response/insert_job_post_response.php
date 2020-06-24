<?php include '../partials/head.php';?>
<?php include '../partials/header_menu.php';?>
<?php include '../partials/admin-sidebar.php';?>
<?php include '../partials/bredcrumb.php';?>
<?php include '../common/config.php';?>
	<div class="card">
	  <div class="card-header">Job Post Response 
	  	<a style="float: right;" href="insert_job_post_response.php"><button class="btn btn-success">Add New</button></a>
	  </div>
	  <div class="card-body">
   			<form action="" method="post">
			  <div class="form-group">
			    <label for="job_id">Job Id:</label>
			    <input type="number" name="job_id" class="form-control" id="job_id">
			  </div>
			  <div class="form-group">
			    <label for="lawyer_id">lawyer_id:</label>
			    <input type="number" name="lawyer_id" class="form-control" id="lawyer_id">
			  </div>
			  <div class="form-group">
			    <label for="fees_amount">fees_amount:</label>
			    <input type="number" name="fees_amount" class="form-control" id="fees_amount">
			  </div>
			   <div class="form-group">
			    <label for="status">status:</label>
			    <input type="number" name="status" class="form-control" id="status">
			  </div>
			  <button type="submit" class="btn btn-info">Submit</button>
			</form>
	  </div> 
	</div>
<?php include '../partials/footer.php';?>
	
<?php

// Get values from form 
if($_POST){
	$job_id=$_POST['job_id'];
	$lawyer_id=$_POST['lawyer_id'];
	$fees_amount=$_POST['fees_amount'];
	$status=$_POST['status'];
	//print_r($_POST);exit;
	insertresponse($job_id,$lawyer_id,$fees_amount,$status);	
}

function insertresponse($job_id,$lawyer_id,$fees_amount,$status){
	$conn = OpenCon();
	$sql = "INSERT INTO job_post_response (job_id, lawyer_id, fees_amount,status)
VALUES (".$job_id.", '".$lawyer_id."', '".$fees_amount."', '".$status."')";
	$result = $conn->query($sql);
	if($result){
		echo "successful";
		
	}else{
		echo "No Data Found";
	}
	$conn->close();	
}

?>


