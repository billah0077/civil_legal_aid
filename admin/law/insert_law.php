	<?php include '../common/head.php';?>
	<?php include '../common/menu.php'; ?>
	<?php include '../common/config.php';?>
	<div class="card">
	  <div class="card-header">Law 
	  	<a style="float: right;" href="insert_law.php"><button class="btn btn-success">Add New</button></a>
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
			    <label for="number_of_section">Number of Section:</label>
			    <input type="number" name="number_of_section" class="form-control" id="number_of_section">
			  </div>
			  <button type="submit" class="btn btn-info">Submit</button>
			</form>
	  </div> 
	</div>
	<?php include '../common/footer.php'; ?>
<?php

// Get values from form 
if($_POST){
	$title=$_POST['title'];
	$year=$_POST['year'];
	$number_of_section=$_POST['number_of_section'];
	//print_r($_POST);exit;
	insertresponse($title,$year,$number_of_section);	
}

function insertresponse($title,$year,$number_of_section){
	$conn = OpenCon();
	$sql = "INSERT INTO law (title, year, number_of_section)
VALUES ('".$title."', ".$year.", ".$number_of_section.")";
	$result = $conn->query($sql);
	if($result){
		echo "successful";
		
	}else{
		echo "No Data Found";
	}
	$conn->close();	
}

?>


