<?php include '../partials/head.php';?>
<?php include '../partials/header_menu.php';?>
<?php include '../partials/admin-sidebar.php';?>
<?php include '../partials/bredcrumb.php';?>
<?php include '../common/config.php';?>
	<div class="card">
	  <div class="card-header">User 
	  	<a style="float: right;" href="insert_user.php"><button class="btn btn-success">Add New</button></a>
	  </div>
	  <div class="card-body">
   			<form action="" method="post">
			  <div class="form-group">
			    <label for="username">Username:</label>
			    <input type="text" name="username" class="form-control" id="username">
			  </div>
			  <div class="form-group">
			    <label for="password">Password:</label>
			    <input type="password" name="password" class="form-control" id="password">
			  </div>
			  <div class="form-group">
			    <label for="name">Name:</label>
			    <input type="text" name="name" class="form-control" id="name">
			  </div>
			  <div class="form-group">
			    <label for="email">email:</label>
			    <input type="text" name="email" class="form-control" id="email">
			  </div>
			  <div class="form-group">
			    <label for="contact">Contact:</label>
			    <input type="text" name="contact" class="form-control" id="contact">
			  </div>
			  <div class="form-group">
			    <label for="user_type">User Type:</label>
			    <input type="text" name="user_type" class="form-control" id="user_type">
			  </div>
			  <div class="form-group">
			    <label for="image_patgh">Image Path:</label>
			    <input type="text" name="image_path" class="form-control" id="image_path">
			  </div>
			  <div class="form-group">
			    <label for="address">Address:</label>
			    <input type="text" name="address" class="form-control" id="address">
			  </div>
			  <button type="submit" class="btn btn-info">Submit</button>
			</form>
	  </div> 
	</div>
<?php include '../partials/footer.php';?>
	
<?php

// Get values from form 
if($_POST){
	$username=$_POST['username'];
	$password=$_POST['password'];
	$name=$_POST['name'];
	$email=$_POST['email'];
	$contact=$_POST['contact'];
	$user_type=$_POST['user_type'];
	$image_path=$_POST['image_path'];
	$address=$_POST['address'];

	//print_r($_POST);exit;
	insert_user($username, $password, $name, $email, $contact, $user_type, $image_path, $address);	
}

function insert_user($username, $password, $name, $email, $contact, $user_type, $image_path, $address){
	$conn = OpenCon();
	$sql = "INSERT INTO user (username, password, name, email, contact, user_type, image_path, address)
VALUES ('".$username."', '".$password."', '".$name."', '".$email."', '".$contact."', '".$user_type."', '".$image_path."', '".$address."')";
	//echo $sql;exit;
	$result = $conn->query($sql);
	if($result){
		echo "successful";
		
	}else{
		echo "No Data Found";
	}
	$conn->close();	
}

?>