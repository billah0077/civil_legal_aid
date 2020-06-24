<?php include '../partials/head.php';?>
<?php include '../partials/header_menu.php';?>
<?php include '../partials/admin-sidebar.php';?>
<?php include '../partials/bredcrumb.php';?>
<?php include '../common/config.php';?>
	<div class="card">
	  <div class="card-header">Crime Section 
	  	<a style="float: right;" href="insert_crime_section.php"><button class="btn btn-success">Add New</button></a>
	  </div>
	  <div class="card-body">
   			<form action="" method="post">
			  <div class="form-group">
			    <label for="pwd">Crime Id:</label>
			    <input type="number" name="crime_id" class="form-control" id="crime_id">
			  </div>
			  <div class="form-group">
			    <label for="law_section_id">Law Section Id:</label>
			    <input type="number" name="law_section_id" class="form-control" id="law_section_id">
			  </div>
			  <div class="form-group">
			    <label for="Punishment">Punishment:</label>
			    <input type="text" name="punishment" class="form-control" id="punishment">
			  </div>
			  <button type="submit" class="btn btn-info">Submit</button>
			</form>
	  </div> 
	</div>
<?php include '../partials/footer.php';?>
	
<?php

// Get values from form 
if($_POST){
	$crime_id=$_POST['crime_id'];
	$law_section_id=$_POST['law_section_id'];
	$punishment=$_POST['punishment'];

	//print_r($_POST);exit;
	insertcrime_section($crime_id,$law_section_id, $punishment);	
}

function insertcrime_section($crime_id,$law_section_id, $punishment){
	$conn = OpenCon();
	$sql = "INSERT INTO crime_section (crime_id, law_section_id, punishment)
VALUES (".$crime_id.",".$law_section_id.", '".$punishment."')";
	$result = $conn->query($sql);
	if($result){
		echo "successful";
		
	}else{
		echo "No Data Found";
	}
	$conn->close();	
}

?>


