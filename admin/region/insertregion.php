<?php include '../partials/head.php';?>
<?php include '../partials/header_menu.php';?>
<?php include '../partials/admin-sidebar.php';?>
<?php include '../partials/bredcrumb.php';?>
<?php include '../common/config.php';?>
	<div class="card">
	  <div class="card-header">Region 
	  	<a style="float: right;" href="insertregion.php"><button class="btn btn-success">Add New</button></a>
	  </div>
	  <div class="card-body">
   			<form action="" method="post">
			  <div class="form-group">
			    <label for="email">Region Name:</label>
			    <input type="text" name="name" class="form-control" id="email">
			  </div>
			  <div class="form-group">
			    <label for="pwd">Description:</label>
			    <textarea class="form-control" name="description"></textarea>
			  </div>
			  <button type="submit" class="btn btn-info">Submit</button>
			</form>
	  </div> 
	</div>
<?php include '../partials/footer.php';?>
	
<?php

// Get values from form 
if($_POST){
	$name=$_POST['name'];
	$description=$_POST['description'];
	//print_r($_POST);exit;
	insertregion($name,$description);	
}

function insertregion($name,$description){
	$conn = OpenCon();
	$sql = "INSERT INTO region (name, description)
VALUES ('".$name."', '".$description."')";
	$result = $conn->query($sql);
	if($result){
		echo "successful";
		
	}else{
		echo "No Data Found";
	}
	$conn->close();	
}

?>


