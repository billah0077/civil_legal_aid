<?php include '../common/head.php';?>
<?php include '../common/header_top.php';?>
<?php include '../common/header.php';?>
<?php include '../common/welcome.php';?>
<?php include '../common/config.php';?>
	<?php if(isset($_GET['id'])){
		$law_lawyer = getDetail($_GET['id']);
		//echo '<pre>';print_r($law_section);exit;
	} ?>
	<div class="card">
	  <div class="card-header">law_lawyer 
	  	<a style="float: right;" href="insertlaw_lawyer.php"><button class="btn btn-success">Add New</button></a>
	  </div>
	  <div class="card-body">

		<div style="margin: 0 auto;padding: 3px;">
			<form name="form1" method="post" action="">
			<div class="form-group">
				<label class="control-label">Lawyer ID</label>
				<input class="form-control" name="lawyer_id" value="<?php echo $law_lawyer['lawyer_id'] ?>" type="number" id="lawyer_id">
			</div>
			<div class="form-group">
				<label class="control-label">Law ID</label>
				<input class="form-control" name="law_id" value="<?php echo $law_lawyer['law_id'] ?>" type="number" id="law_id">
			</div>
			<div class="form-group">
				<label class="control-label">Year of Experience</label>
				<input class="form-control" name="year_of_experience" value="<?php echo $law_lawyer['year_of_experience'] ?>" type="number" id="year_of_experience">
			</div>
			<input type="hidden" name="id" value="<?php echo $law_lawyer['id']; ?>">
			<button class="btn btn-info">Update</button>
			</form>
		</div>
	

	  </div> 
	</div>
<?php include '../common/footer.php';?>


<?php 
	function getDetail($id){
		$conn = OpenCon();
		$sql = "select * from law_lawyer where id = ".$id;
		$result = $conn->query($sql);

		while($row = $result->fetch_assoc()) {
			$law_lawyer['id'] = $row['id'];
			$law_lawyer['lawyer_id'] = $row['lawyer_id'];
			$law_lawyer['law_id'] = $row['law_id'];
			$law_lawyer['year_of_experience'] = $row['year_of_experience']; 
    }
    return $law_lawyer;
    $conn->close();	
	}
	
	if($_POST){
		//echo "<pre>";print_r($_POST);exit;
		updatelaw_lawyer($_POST);
	}

    function updatelaw_lawyer($law_lawyer){

	$sql = "UPDATE law_lawyer SET lawyer_id = ".$law_lawyer['lawyer_id'].", law_id = ".$law_lawyer['law_id'].", year_of_experience = '".$law_lawyer['year_of_experience']."' WHERE id = ".$law_lawyer['id'];

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