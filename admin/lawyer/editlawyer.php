<?php include '../partials/head.php';?>
<?php include '../partials/header_menu.php';?>
<?php include '../partials/admin-sidebar.php';?>
<?php include '../partials/bredcrumb.php';?>
<?php include '../common/config.php';?>
<?php $courts = getCourtList();
?>
	<?php if(isset($_GET['id'])){
		$lawyer = getDetail($_GET['id']);
		//echo '<pre>';print_r($region);exit;
	} ?>
	<div class="card">
	  <div class="card-header">Lawyer 
	  </div>
	  <div class="card-body">

		<div style="margin: 0 auto;padding: 3px;">
			<form name="form1" method="post" action="">
			<div class="form-group">
				<label class="control-label">Name</label>
				<input class="form-control" name="name" value="<?php echo $lawyer['name'] ?>" type="text" id="name">
			</div>
			<div class="form-group">
				<label class="control-label">Court Name</label>
				<select class="form-control" id="court_name" name="court_id">
				    <?php foreach ($courts as $key => $value) {?>
				    	<option value="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></option>
				    <?php } ?>
				  </select>			
			</div>
			<div class="form-group">
				<label class="control-label">Address</label>
				<input class="form-control" name="address" value="<?php echo $lawyer['address'] ?>" type="text" id="address">
			</div>
			<div class="form-group">
				<label class="control-label">Contact No</label>
				<input class="form-control" name="contact" value="<?php echo $lawyer['contact'] ?>" type="text" id="contact">
			</div>
			<div class="form-group">
				<label class="control-label">Email</label>
				<input class="form-control" name="email" value="<?php echo $lawyer['email'] ?>" type="text" id="email">
			</div>
			<div>
			<input type="text" disabled="" name="lawyer_id" class="form-control" value="<?php echo $_SESSION['user_id']; ?>" id="user_name">
			</div>
			<input type="hidden" name="id" value="<?php echo $lawyer['id']; ?>">
			<button class="btn btn-info">Update</button>
			</form>
		</div>
	

	  </div> 
	</div>
<?php include '../partials/footer.php';?>


<?php 
	function getDetail($id){
		$conn = OpenCon();
		$sql = "select * from lawyer where id = ".$id;
		$result = $conn->query($sql);

		while($row = $result->fetch_assoc()) {
			$lawyer['id'] = $row['id'];
			$lawyer['name'] = $row['name'];
			$lawyer['court_id'] = $row['court_id'];
			$lawyer['address'] = $row['address']; 
			$lawyer['contact'] = $row['contact'];
			$lawyer['email'] = $row['email'];
    }
    return $lawyer;
    $conn->close();	
	}
	
	if($_POST){
		//echo "<pre>";print_r($_POST);exit;
		updateLawyer($_POST);
	}

    function updateLawyer($lawyer){

	$sql = "UPDATE lawyer SET name = '".$lawyer['name']."', court_id = ".$lawyer['court_id'].", address = '".$lawyer['address']."', contact = '".$lawyer['contact']."', email = '".$lawyer['email']."' WHERE id = ".$lawyer['id'];
	//echo $sql;
	$conn = OpenCon();
	$result = $conn->query($sql);
	if($result){
		echo "successful";
		
	}else{
		echo "No Data Found";
	}
	$conn->close();	
}

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