<?php include '../partials/head.php';?>
<?php include '../partials/header_menu.php';?>
<?php include '../partials/admin-sidebar.php';?>
<?php include '../partials/bredcrumb.php';?>
<?php include '../common/config.php';?>
	<div class="card">
	  <div class="card-header">Lawyer 
	  	<a style="float: right;" href="insertlawyer.php"><button class="btn btn-success">Add New</button></a>
	  </div>
	  <div class="card-body">
   			<form action="" method="post">
			  <div class="form-group">
			    <label for="name">Name:</label>
			    <input type="text" name="name" class="form-control" id="name">
			  </div>
			  <div class="form-group">
			    <label for="court_id">Court Id:</label>
			    <input type="number" name="court_id" class="form-control" id="court_id">
			  </div>
			  <div class="form-group">
			    <label for="address">Address:</label>
			    <input type="text" name="address" class="form-control" id="address">
			  </div>
			  <div class="form-group">
			    <label for="contact">Contact:</label>
			    <input type="text" name="contact" class="form-control" id="contact">
			  </div>
			  <div class="form-group">
			    <label for="email">email:</label>
			    <input type="text" name="email" class="form-control" id="email">
			  </div>
			  <div class="form-group">
			    <label for="user_id">User Id:</label>
				<input type="text" disabled="" name="user_id" class="form-control" value="<?php echo $_SESSION['user_id']; ?>" id="user_id">			  
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
	$court_id=$_POST['court_id'];
	$address=$_POST['address'];
	$contact=$_POST['contact'];
	$email=$_POST['email'];
	$user_id=$_SESSION['user_id'];
	
	
	//print_r($_POST);exit;
	insertlawyer($name, $court_id, $address, $contact, $email, $user_id);	
}

function insertlawyer($name,$court_id, $address, $contact, $email, $user_id){
	$conn = OpenCon();
	$sql = "INSERT INTO lawyer (name, court_id, address, contact, email, user_id)
VALUES ('".$name."', ".$court_id.",'".$address."', '".$contact."', '".$email."' , ".$user_id.")";
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
