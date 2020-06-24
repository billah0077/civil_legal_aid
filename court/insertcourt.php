<?php include '../common/head.php';?>
<?php include '../common/header_top.php';?>
<?php include '../common/header.php';?>
<?php include '../common/welcome.php';?>
<?php include '../common/config.php';?>
	<div class="card">
	  <div class="card-header">Court 
	  	<a style="float: right;" href="insertcourt.php"><button class="btn btn-success">Add New</button></a>
	  </div>
	  <div class="card-body">
   			<form action="" method="post">
			  <div class="form-group">
			    <label for="region_id">Region Id:</label>
			    <input type="number" name="region_id" class="form-control" id="region_id">
			  </div>
			  <div class="form-group">
			    <label for="name">Name:</label>
			    <textarea class="form-control" name="name" id="name"></textarea>
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
	$region_id=$_POST['region_id'];
	$name=$_POST['name'];
	$description=$_POST['description'];
	//print_r($_POST);exit;
	insertcourt($region_id,$name,$description);	
}

function insertcourt($region_id,$name,$description){
	$conn = OpenCon();
	$sql = "INSERT INTO court (region_id, name, description)
VALUES (".$region_id.", '".$name."', '".$description."')";
	$result = $conn->query($sql);
	if($result){
		echo "successful";
		
	}else{
		echo "No Data Found";
	}
	$conn->close();	
}

?>


