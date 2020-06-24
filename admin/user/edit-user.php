<?php include '../partials/head.php';?>
<?php include '../partials/header_menu.php';?>
<?php include '../partials/admin-sidebar.php';?>
<?php include '../partials/bredcrumb.php';?>
<?php include '../common/config.php';?>
	<?php if(isset($_GET['id'])){
		$user = getDetail($_GET['id']);
		//echo '<pre>';print_r($region);exit;
	} ?>
	<div class="card">
	  <div class="card-header">User 
	  	<a style="float: right;" href="insertuser.php"><button class="btn btn-success">Add New</button></a>
	  </div>
	  <div class="card-body">

		<div style="margin: 0 auto;padding: 3px;">
			<form name="form1" method="post" action="">
			<div class="form-group">
				<label class="control-label">Username</label>
				<input class="form-control" name="username" value="<?php echo $user['username'] ?>" type="text" id="username">
			</div>
			<div class="form-group">
				<label class="control-label">Password</label>
				<input class="form-control" name="password" value="<?php echo $user['password'] ?>" type="password" id="password">
			</div>
			<div class="form-group">
				<label class="control-label">name</label>
				<input class="form-control" name="name" value="<?php echo $user['name'] ?>" type="text" id="name">
			</div>
			<div class="form-group">
				<label class="control-label">Email</label>
				<input class="form-control" name="email" value="<?php echo $user['email'] ?>" type="text" id="email">
			</div>
			<div class="form-group">
				<label class="control-label">Contact</label>
				<input class="form-control" name="contact" value="<?php echo $user['contact'] ?>" type="text" id="contact">
			</div>
			<input type="hidden" name="id" value="<?php echo $user['id']; ?>">
			<button class="btn btn-info">Update</button>
			</form>
		</div>
	

	  </div> 
	</div>
<?php include '../partials/footer.php';?>


<?php 
	function getDetail($id){
		$conn = OpenCon();
		$sql = "select * from user where id = ".$id;
		$result = $conn->query($sql);

		while($row = $result->fetch_assoc()) {
			$user['id'] = $row['id'];
			$user['username'] = $row['username'];
			$user['password'] = $row['password']; 
			$user['name'] = $row['name'];
			$user['email'] = $row['email'];
			$user['contact'] = $row['contact']; 
    }
    return $user;
    $conn->close();	
	}
	
	if($_POST){
		//echo "<pre>";print_r($_POST);exit;
		updateUser($_POST);
	}

    function updateUser($user){

	$sql = "UPDATE user SET username = '".$user['username']."', password = ".$user['password'].", name = '".$user['name']."', email = '".$user['email']."', contact = '".$user['contact']."' WHERE id = ".$user['id'];

	$conn = OpenCon();
	$result = $conn->query($sql);
	if($result){
		echo "successful";
		
	}else{
		echo "No Data Found";
	}
	$conn->close();	
}

?>	