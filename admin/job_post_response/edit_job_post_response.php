<?php include '../partials/head.php';?>
<?php include '../partials/header_menu.php';?>
<?php include '../partials/admin-sidebar.php';?>
<?php include '../partials/bredcrumb.php';?>
<?php include '../common/config.php';?>
	<?php if(isset($_GET['id'])){
		$response = getDetail($_GET['id']);
		//echo '<pre>';print_r($region);exit;
	} ?>
	<div class="card">
	  <div class="card-header">Job Post Response 
	  	<a style="float: right;" href="insert_job_post_response.php"><button class="btn btn-success">Add New</button></a>
	  </div>
	  <div class="card-body">

		<div style="margin: 0 auto;padding: 3px;">
			<form name="form1" method="post" action="">
			<div class="form-group">
				<label class="control-label">ID</label>
				<input class="form-control" name="id" value="<?php echo $response['id'] ?>" type="number" id="id">
			</div>
			<div class="form-group">
				<label class="control-label">Job_ID</label>
				<input class="form-control" name="job_id" value="<?php echo $response['job_id'] ?>" type="text" id="job_id">
			</div>
			<div class="form-group">
				<label class="control-label">Lawyer ID</label>
				<input class="form-control" name="lawyer_id" value="<?php echo $response['lawyer_id'] ?>" type="text" id="lawyer_id">
			</div>
			<div class="form-group">
				<label class="control-label">Fees Amount</label>
				<input class="form-control" name="fees_amount" value="<?php echo $response['fees_amount'] ?>" type="text" id="fees_amount">
			</div>
			<div class="form-group">
				<label class="control-label">Status</label>
				<input class="form-control" name="status" value="<?php echo $response['status'] ?>" type="text" id="status">
			</div>
			<input type="hidden" name="id" value="<?php echo $response['id']; ?>">
			<button class="btn btn-info">Update</button>
			</form>
		</div>
	

	  </div> 
	</div>
<?php include '../partials/footer.php';?>


<?php 
	function getDetail($id){
		$conn = OpenCon();
		$sql = "select * from job_post_response where id = ".$id;
		$result = $conn->query($sql);

		while($row = $result->fetch_assoc()) {
			$response['id'] = $row['id'];
			$response['job_id'] = $row['job_id'];
			$response['lawyer_id'] = $row['lawyer_id'];
			$response['fees_amount'] = $row['fees_amount']; 
			$response['status'] = $row['status']; 
    }
    return $response;
    $conn->close();	
	}
	
	if($_POST){
		//echo "<pre>";print_r($_POST);exit;
		updateresponse($_POST);
	}

    function updateresponse($response){

	$sql = "UPDATE job_post_response SET job_id = ".$response['job_id'].", lawyer_id = ".$response['lawyer_id'].", fees_amount = ".$response['fees_amount'].", status = ".$response['status']." WHERE id = ".$response['id'];

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