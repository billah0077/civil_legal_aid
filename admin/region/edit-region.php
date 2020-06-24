<?php include '../partials/head.php';?>
<?php include '../partials/header_menu.php';?>
<?php include '../partials/admin-sidebar.php';?>
<?php include '../partials/bredcrumb.php';?>
<?php include '../common/config.php';?>
	<?php if(isset($_GET['id'])){
		$region = getDetail($_GET['id']);
		//echo '<pre>';print_r($region);exit;
	} ?>
	<div class="card">
	  <div class="card-header">Region 
	  	<a style="float: right;" href="insertregion.php"><button class="btn btn-success">Add New</button></a>
	  </div>
	  <div class="card-body">

		<div style="margin: 0 auto;padding: 3px;">
			<form name="form1" method="post" action="">
			<div class="form-group">
				<label class="control-label">Name</label>
				<input class="form-control" name="name" value="<?php echo $region['name'] ?>" type="text" id="name">
			</div>
			<div class="form-group">
				<label class="control-label">Description</label>
				<textarea name="description" class="form-control"><?php echo $region['description'] ?></textarea>
			</div>
			<input type="hidden" name="id" value="<?php echo $region['id']; ?>">
			<button class="btn btn-info">Update</button>
			</form>
		</div>
	

	  </div> 
	</div>
<?php include '../partials/footer.php';?>


<?php 
	function getDetail($id){
		$conn = OpenCon();
		$sql = "select * from region where id = ".$id;
		$result = $conn->query($sql);

		while($row = $result->fetch_assoc()) {
			$region['id'] = $row['id'];
			$region['name'] = $row['name'];
			$region['description'] = $row['description']; 
    }
    return $region;
    $conn->close();	
	}
	
	if($_POST){
		//echo "<pre>";print_r($_POST);exit;
		updateRegion($_POST);
	}

    function updateRegion($region){

	$sql = "UPDATE region SET name = '".$region['name']."', description = '".$region['description']."' WHERE id = ".$region['id'];

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