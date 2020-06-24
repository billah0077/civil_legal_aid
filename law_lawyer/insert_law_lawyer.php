<?php include '../common/head.php';?>
<?php include '../common/header_top.php';?>
<?php include '../common/header.php';?>
<?php include '../common/welcome.php';?>
<?php include '../common/config.php';?>
	<div class="card">
	  <div class="card-header">Law Lawyer
	  	<a style="float: right;" href="insert_law_lawyer.php"><button class="btn btn-success">Add New</button></a>
	  </div>
	  <div class="card-body">
   			<form action="" method="post">
			  <div class="form-group">
			    <label for="lawyer_id">Lawyer Id:</label>
			    <input type="number" name="lawyer_id" class="form-control" id="lawyer_id">
			  </div>
			  <div class="form-group">
			    <label for="law_id">Law Id:</label>
			    <input type="number" name="law_id" class="form-control" id="law_id">
			  </div>
			  <div class="form-group">
			    <label for="year_of_experience">Year of Experience:</label>
			    <input type="number" name="year_of_experience" class="form-control" id="year_of_experience">
			  </div>
			  <button type="submit" class="btn btn-info">Submit</button>
			</form>
	  </div> 
	</div>
<?php include '../common/footer.php';?>
	
<?php

// Get values from form 
if($_POST){
	$lawyer_id=$_POST['lawyer_id'];
	$law_id=$_POST['law_id'];
	$year_of_experience=$_POST['year_of_experience'];
	//print_r($_POST);exit;
	insert_law_lawyer($lawyer_id, $law_id, $year_of_experience);	
}

function insert_law_lawyer($lawyer_id, $law_id, $year_of_experience){
	$conn = OpenCon();
	$sql = "INSERT INTO law_lawyer (lawyer_id, law_id, year_of_experience)
VALUES (".$lawyer_id.",".$law_id.", ".$year_of_experience.")";
	$result = $conn->query($sql);
	if($result){
		echo "successful";
		
	}else{
		echo "No Data Found";
	}
	$conn->close();	
}

?>


