<?php include '../common/head.php';?>
<?php include '../common/header_top.php';?>
<?php include '../common/header.php';?>
<?php include '../common/welcome.php';?>
<?php include '../common/config.php';?>
<?php $courts = getCourtList();
	  $crimes = getCrimeList(); 	
?>
	<?php if(isset($_GET['id'])){
		$job_post = getDetail($_GET['id']);
		//echo '<pre>';print_r($region);exit;
	} ?>
	<div class="card">
	  <div class="card-header">job_post 
	  	<a style="float: right;" href="insert_job_post.php"><button class="btn btn-success">Add New</button></a>
	  </div>
	  <div class="card-body">

		<div style="margin: 0 auto;padding: 3px;">
			<form name="form1" method="post" action="">
			<div class="form-group">
				<label class="control-label">Title</label>
				<input class="form-control" name="title" value="<?php echo $job_post['title'] ?>" type="text" id="title">
			</div>
			<div class="form-group">
				<label class="control-label">Description</label>
				<textarea name="description" class="form-control"><?php echo $job_post['description'] ?></textarea>
			<div class="form-group">
				<label class="control-label">Crime Name</label>
				<select class="form-control" name="crime_id">
				    <?php foreach ($crimes as $key => $value) {?>
				    	<option value="<?php echo $value['id']; ?>"><?php echo $value['title']; ?></option>
				    <?php } ?>
				  </select>
			</div>
			<div class="form-group">
				<label class="control-label">Court Name</label>
				<select class="form-control" id="court_name" name="court_id">
				    <?php foreach ($courts as $key => $value) {?>
				    	<option value="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></option>
				    <?php } ?>
				  </select>			
			</div>
			<input type="hidden" name="id" value="<?php echo $job_post['id']; ?>">
			<button class="btn btn-info">Update</button>
			</form>
		</div>
	

	  </div> 
	</div>
<?php include '../common/footer.php';?>


<?php 
	function getDetail($id){
		$conn = OpenCon();
		$sql = "select job_post.id, job_post.title,job_post.description,crime.title crime_name,court.name court_name from job_post LEFT JOIN crime ON job_post.crime_id = crime.id LEFT JOIN court ON job_post.court_id=court.id where job_post.id = ".$id;
		$result = $conn->query($sql);

		while($row = $result->fetch_assoc()) {
			$job_post['id'] = $row['id'];
			$job_post['title'] = $row['title'];
			$job_post['description'] = $row['description']; 
			$job_post['crime_id'] = $row['crime_name'];
			$job_post['court_id'] = $row['court_name'];
    }
    return $job_post;
    $conn->close();	
	}
	
	if($_POST){
		//echo "<pre>";print_r($_POST);exit;
		updateJob_post($_POST);
	}

    function updateJob_post($job_post){

	$sql = "UPDATE job_post SET title = '".$job_post['title']."', description = '".$job_post['description']."', crime_id = ".$job_post['crime_id'].", court_id = ".$job_post['court_id']."  WHERE id = ".$job_post['id'];
	//echo $sql;exit;
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

function getCrimeList(){
	$conn = OpenCon();
	$sql = "select * from crime";
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
