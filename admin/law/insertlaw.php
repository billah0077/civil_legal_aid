<?php include '../partials/head.php';?>
<?php include '../partials/header_menu.php';?>
<?php include '../partials/admin-sidebar.php';?>
<?php include '../partials/bredcrumb.php';?>
<?php include '../common/config.php';?>
	<div class="card">
	  <div class="card-header">Law 
	  	<a style="float: right;" href="insert_job_post_response.php"><button class="btn btn-success">Add New</button></a>
	  </div>
	  <div class="card-body">
   			<form action="" method="post">
			  <div class="form-group">
			    <label for="title">Title:</label>
			    <input type="text" name="title" class="form-control" id="title">
			  </div>
			  <div class="form-group">
			    <label for="year">Year:</label>
			    <input type="number" name="year" class="form-control" id="year">
			  </div>
			  <div class="form-group">
			    <label for="number_of_section">Number of section:</label>
			    <input type="number" name="number_of_section" class="form-control" id="number_of_section">
			  </div>
			  <button type="submit" class="btn btn-info">Submit</button>
			</form>
	  </div> 
	</div>
<?php include '../partials/footer.php';?>
	
<?php

// Get values from form 
if($_POST){
	$title=$_POST['title'];
	$year=$_POST['year'];
	$number_of_section=$_POST['number_of_section'];

	//print_r($_POST);exit;
	insertlaw($title,$year,$number_of_section);	
}

function insertlaw($title,$year,$number_of_section){
	$conn = OpenCon();
	$sql = "INSERT INTO law (title,year,number_of_section)
VALUES ('".$title."', ".$year.",".$number_of_section.")";
echo $sql;
	$result = $conn->query($sql);
	if($result){
		echo "successful";
		
	}else{
		echo "No Data Found";
	}
	$conn->close();	
}

?>


