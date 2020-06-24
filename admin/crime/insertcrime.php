<?php include '../partials/head.php';?>
<?php include '../partials/header_menu.php';?>
<?php include '../partials/admin-sidebar.php';?>
<?php include '../partials/bredcrumb.php';?>
<?php include '../common/config.php';?>
	<div class="card">
	  <div class="card-header">Crime 
	  	<a style="float: right;" href="insertcrime.php"><button class="btn btn-success">Add New</button></a>
	  </div>
	  <div class="card-body">
   			<form action="" method="post">
			  <div class="form-group">
			    <label for="title">title:</label>
			    <input type="text" name="title" class="form-control" id="title">
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
	$title=$_POST['title'];
	$description=$_POST['description'];
	//print_r($_POST);exit;
	insertcrime($title,$description);	
}

function insertcrime($title,$description){
	$conn = OpenCon();
	$sql = "INSERT INTO crime (title, description)
VALUES ('".$title."', '".$description."')";
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


