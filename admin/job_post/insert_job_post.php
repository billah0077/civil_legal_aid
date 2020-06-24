<?php include '../partials/head.php';?>
<?php include '../partials/header_menu.php';?>
<?php include '../partials/admin-sidebar.php';?>
<?php include '../partials/bredcrumb.php';?>
<?php include '../common/config.php';?>
<?php $courts = getCourtList();
	  $crimes = getCrimeList(); 	
?>
<?php
function insertjob_post($title, $description, $court_id,$crime_id, $user_id){
	$conn = OpenCon();
	$sql = "INSERT INTO job_post (title, description, court_id,crime_id, user_id)
VALUES ('".$title."','".$description."', '".$court_id."', '".$crime_id."', '".$user_id."')";
	//echo $sql;
	$result = $conn->query($sql);
	if($result){
		echo "successful";
		
	}else{
		echo "No Data Found";
	}
	$conn->close();	
}

if($_POST){
	//exit;
	$title=$_POST['title'];
	$description=$_POST['description'];
	$court_id=$_POST['court_id'];
	$crime_id=$_POST['crime_id'];
	$user_id=$_POST['user_id'];

	//print_r($_POST);exit;
	insertjob_post($title, $description, $court_id,$crime_id, $user_id);	
}

?>


	<div class="card">
	  <div class="card-header">Job Post 
	  	<a style="float: right;" href="insert_crime_section.php"><button class="btn btn-success">Add New</button></a>
	  </div>
	  <div class="card-body">
   			<form action="" method="post">
			  <div class="form-group">
			    <label for="title">Title:</label>
			    <input type="text" name="title" class="form-control" id="title">
			  </div>
			  <div class="form-group">
			    <label for="description">Description:</label>
			    <input type="text" name="description" class="form-control" id="description">
			  </div>
			  <div class="form-group">
			    <label for="court_name">Court Name:</label>
			    <select class="form-control" id="court_name" name="court_id">
				    <?php foreach ($courts as $key => $value) {?>
				    	<option value="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></option>
				    <?php } ?>
				  </select>
			  </div>
			  <div class="form-group">
			    <label for="court_name">Crime Name:</label>
			    <select class="form-control" name="crime_id">
				    <?php foreach ($crimes as $key => $value) {?>
				    	<option value="<?php echo $value['id']; ?>"><?php echo $value['title']; ?></option>
				    <?php } ?>
				  </select>
			  </div>
			  <input type="hidden" name="user_id" class="form-control" value="<?php echo $_SESSION['user_id']; ?>" id="user_name">
			  
			  <button type="submit" class="btn btn-info">Submit</button>
			</form>
	  </div> 
	</div>
<?php include '../partials/footer.php';?>
	
<?php
function getCourtList(){
	$conn = OpenCon();
	$sql = "select * from court";
	$result = $conn->query($sql);
	$items = [];
	if($result->num_rows > 0){
		while($row = $result->fetch_assoc()) {
			array_push($items, $row);
	}
	return $items;
}
	else{
		echo "No Data Found";
		return $items;
	}
	$conn->close();	
}

function getCrimeList(){
	$conn = OpenCon();
	$sql = "select * from crime";
	$result = $conn->query($sql);
	$items = [];
	if($result->num_rows > 0){
		while($row = $result->fetch_assoc()) {
			array_push($items, $row);
	}
	return $items;
}
	else{
		echo "No Data Found";
		return $items;
	}
	$conn->close();	
}

?>


