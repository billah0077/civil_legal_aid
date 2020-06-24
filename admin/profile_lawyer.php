<?php include 'partials/head.php';?>
<?php include 'partials/header_menu.php';?>
<?php include 'partials/admin-sidebar.php';?>
<?php include 'partials/bredcrumb.php';?>
<?php include 'common/config.php';?>
<?php $courts = getCourtList();


?>
<?php

// Get values from form 
if($_POST){
	$name=$_POST['name'];
	$court_id=$_POST['court_id'];
	$address=$_POST['address'];
	$contact=$_POST['contact'];
	$email=$_POST['email'];
	//$user_id=3;	

	//var_dump($_POST);exit();


	$conn = OpenCon();
	$sql = "select * from lawyer where user_id = ".$_SESSION['user_id'];
	//echo $sql;
	$result = $conn->query($sql);
	if($result->num_rows > 0){
	$update_sql = "UPDATE lawyer SET name = '".$name."', court_id = ".$court_id.", address = '".$address."', contact = '".$contact."', email = '".$email."' WHERE user_id = ".$_SESSION['user_id'];
	$result = $conn->query($update_sql);
	//echo $update_sql;
    }else{
    	insertlawyer($name, $court_id, $address, $contact,$email, $user_id);	
    }
	
}

function insertlawyer($name, $court_id, $address, $contact, $email, $user_id){
	$conn = OpenCon();
	$sql = "INSERT INTO lawyer (name, court_id, address, contact,email)
VALUES ('".$name."', ".$court_id.",'".$address."', '".$contact."', '".$email."', ".$user_id.")";
	echo $sql;
	$result = $conn->query($sql);
	if($result){
		echo "successful";
		
	}else{
		echo "No Data Found";
	}
	$conn->close();	
}
$lawyer = [];
function getLawyerInfo(){
	$conn = OpenCon();
	$sql = "select * from lawyer where user_id = ".$_SESSION['user_id'];
	//echo $sql;exit;
	$result = $conn->query($sql);
	if($result->num_rows > 0){
		while($row = $result->fetch_assoc()) {
		    $lawyer['id'] = $row['id'];
			$lawyer['name'] = $row['name'];
			$lawyer['court_id'] = $row['court_id'];
			$lawyer['address'] = $row['address'];
			$lawyer['contact'] = $row['contact'];

			$lawyer['email'] = $row['email'];
			$lawyer['user_id'] = $row['user_id'];
 
   ?>

	

		<div class="card">
	  <div class="card-header">Lawyer <?php print_r($lawyer); ?>
	  	<a style="float: right;" href="insertlawyer.php"><button class="btn btn-success">Add New</button></a>
	  </div>
	  <div class="card-body">
   			<form action="" method="post">
			  <div class="form-group">
			    <label for="name">Name:</label>
			    <input type="text" name="name" value="<?php if(isset($lawyer['name'])) echo $row['name']; ?>" class="form-control" id="name">
			  </div>
			  <div class="form-group">
			    <label for="court_id">Court id:</label>
			    <input type="number" name="court_id" value="<?php if(isset($lawyer['court_id'])) echo $lawyer['court_id']; ?>" class="form-control" id="court_id">
			    <select class="form-control" id="court_name" name="court_id">
				    <?php foreach ($courts as $key => $value) {?>
				    	<option value="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></option>
				    <?php } ?>
				  </select>
			  </div>
			  <div class="form-group">
			    <label for="address">Address:</label>
			    <input type="text" name="address" value="<?php if(isset($lawyer['address'])) echo $lawyer['address']; ?>" class="form-control" id="address">
			  </div>
			  <div class="form-group">
			    <label for="contact">Contact Number:</label>
			    <input type="text" name="contact" value="<?php if(isset($lawyer['contact'])) echo $lawyer['contact']; ?>" class="form-control" id="contact">
			  </div>
			  <div class="form-group">
			    <label for="email">email:</label>
			    <input type="text" name="email" value="<?php if(isset($lawyer['email'])) echo $lawyer['email']; ?>" class="form-control" id="email">
			  </div>
			  <div class="form-group">
			    <label for="user_id">User Id:</label>
				<input type="text" disabled="" name="user_id" class="form-control" value="<?php echo $_SESSION['user_id']; ?>" id="user_id">			  
			  </div>
			  <button type="submit" class="btn btn-info">Update</button>
			</form>
	  </div> 
	</div>

	<?php

	 }
    print_r($lawyer);
	$conn->close();	
}
}

getLawyerInfo();
?>
<?php include 'partials/footer.php';?>

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

?>