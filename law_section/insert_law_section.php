<?php include '../common/head.php';?>
<?php include '../common/header_top.php';?>
<?php include '../common/header.php';?>
<?php include '../common/welcome.php';?>
<?php include '../common/config.php';?>
	<div class="card" style="margin: 50px !important;">
	  <div class="card-header">Law section 
	  	<a style="float: right;" href="insertregion.php"><button class="btn btn-success">Add New</button></a>
	  </div>
	  <div class="card-body">
   			<form action="" method="post">
			  <div class="form-group">
			    <label for="law_id">Law_ID:</label>
			    <input type="number" name="law_id" class="form-control" id="law_id">
			  </div>
			  <div class="form-group">
			    <label for="section_id">Section Id:</label>
			    <input type="number" name="section_id" class="form-control" id="section_id">
			  </div>
			  <div class="form-group">
			    <label for="description">Description:</label>
			    <input type="text" name="description" class="form-control" id="description">
			  </div>
			  <button type="submit" class="btn btn-info">Submit</button>
			</form>
	  </div> 
	</div>
<?php include '../common/footer.php';?>
	
<?php

// Get values from form 
if($_POST){
	$law_id=$_POST['law_id'];
	$section_id=$_POST['section_id'];
	$description=$_POST['description'];

	//print_r($_POST);exit;
	insert_law_section($law_id, $section_id,$description);	
}

function insert_law_section($law_id, $section_id,$description){
	$conn = OpenCon();
	$sql = "INSERT INTO law_section (law_id, section_id, description)
VALUES (".$law_id.", ".$section_id.", '".$description."')";
	$result = $conn->query($sql);
	if($result){
		echo "successful";
		
	}else{
		echo "No Data Found";
	}
	$conn->close();	
}

?>


