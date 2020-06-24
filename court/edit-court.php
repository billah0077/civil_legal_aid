<?php include '../common/head.php';?>
<?php include '../common/header_top.php';?>
<?php include '../common/header.php';?>
<?php include '../common/welcome.php';?>
<?php include '../common/config.php';?>
	<?php if(isset($_GET['id'])){
		$court = getDetail($_GET['id']);
		//echo '<pre>';print_r($region);exit;
	} ?>
	<div class="card">
	  <div class="card-header">Court 
	  	<a style="float: right;" href="insertcourt.php"><button class="btn btn-success">Add New</button></a>
	  </div>
	  <div class="card-body">

		<div style="margin: 0 auto;padding: 3px;">
			<form name="form1" method="post" action="">
			<div class="form-group">
				<label class="control-label">Region ID</label>
				<input class="form-control" name="region_id" value="<?php echo $court['region_id'] ?>" type="number" id="region_id">
			</div>
			<div class="form-group">
				<label class="control-label">Name</label>
				<input class="form-control" name="name" value="<?php echo $court['name'] ?>" type="text" id="name">
			</div>
			<div class="form-group">
				<label class="control-label">Description</label>
				<textarea name="description" class="form-control"><?php echo $court['description'] ?></textarea>
			</div>
			<input type="hidden" name="id" value="<?php echo $court['id']; ?>">
			<button class="btn btn-info">Update</button>
			</form>
		</div>
	

	  </div> 
	</div>
<?php include '../common/footer.php';?>

<?php 
	function getDetail($id){
		$conn = OpenCon();
		$sql = "select * from court where id = ".$id;
		$result = $conn->query($sql);

		while($row = $result->fetch_assoc()) {
			$court['id'] = $row['id'];
			$court['region_id'] = $row['region_id'];
			$court['name'] = $row['name'];
			$court['description'] = $row['description']; 
    }
    return $court;
    $conn->close();	
	}
	
	if($_POST){
		//echo "<pre>";print_r($_POST);exit;
		updateCourt($_POST);
	}

    function updateCourt($court){

	$sql = "UPDATE court SET region_id = ".$court['region_id'].", name = '".$court['name']."', description = '".$court['description']."' WHERE id = ".$court['id'];

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