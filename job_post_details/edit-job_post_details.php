<?php include '../partials/head.php';?>
<?php include '../partials/header_menu.php';?>
<?php include '../partials/admin-sidebar.php';?>
<?php include '../partials/bredcrumb.php';?>
<?php include '../common/config.php';?>
	<?php if(isset($_GET['id'])){
		$job_post_details = getDetail($_GET['id']);
		//echo '<pre>';print_r($region);exit;
	} ?>
	<div class="card">
	  <div class="card-header">job_post_details 
	  	<a style="float: right;" href="insert_job_post_details.php"><button class="btn btn-success">Add New</button></a>
	  </div>
	  <div class="card-body">

		<div style="margin: 0 auto;padding: 3px;">
			<form name="form1" method="post" action="">
			<div class="form-group">
				<label class="control-label">Job Post ID</label>
				<input class="form-control" name="job_post_id" value="<?php echo $job_post_details['job_post_id'] ?>" type="number" id="job_post_id">
			</div>
			<div class="form-group">
				<label class="control-label">Crime Id</label>
				<input class="form-control" name="crime_id" value="<?php echo $job_post_details['crime_id'] ?>" type="text" id="crime_id">
			</div>
			<div class="form-group">
				<label class="control-label">Description</label>
				<textarea name="description" class="form-control"><?php echo $job_post_details['description'] ?></textarea>
			</div>
			<input type="hidden" name="id" value="<?php echo $job_post_details['id']; ?>">
			<button class="btn btn-info">Update</button>
			</form>
		</div>
	

	  </div> 
	</div>
<?php include '../partials/footer.php';?>


<?php 
	function getDetail($id){
		$conn = OpenCon();
		$sql = "select * from job_post_details where id = ".$id;
		$result = $conn->query($sql);

		while($row = $result->fetch_assoc()) {
			$job_post_details['id'] = $row['id'];
			$job_post_details['job_post_id'] = $row['job_post_id'];
			$job_post_details['crime_id'] = $row['crime_id'];
			$job_post_details['description'] = $row['description']; 
    }
    return $job_post_details;
    $conn->close();	
	}
	
	if($_POST){
		//echo "<pre>";print_r($_POST);exit;
		updateJob_post_details($_POST);
	}

    function updatejob_post_details($job_post_details){

	$sql = "UPDATE job_post_details SET job_post_id = ".$job_post_details['job_post_id'].", crime_id = ".$job_post_details['crime_id'].", description = '".$job_post_details['description']."' WHERE id = ".$job_post_details['id'];

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