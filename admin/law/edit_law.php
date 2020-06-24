<?php include '../partials/head.php';?>
<?php include '../partials/header_menu.php';?>
<?php include '../partials/admin-sidebar.php';?>
<?php include '../partials/bredcrumb.php';?>
<?php include '../common/config.php';?>
	<?php if(isset($_GET['id'])){
		$law = getDetail($_GET['id']);
		//echo '<pre>';print_r($region);exit;
	} ?>
	<div class="card">
	  <div class="card-header">Law 
	  	<a style="float: right;" href="insertlaw.php"><button class="btn btn-success">Add New</button></a>
	  </div>
	  <div class="card-body">

		<div style="margin: 0 auto;padding: 3px;">
			<form name="form1" method="post" action="">
			<div class="form-group">
				<label class="control-label">Title</label>
				<input class="form-control" name="title" value="<?php echo $law['title'] ?>" type="text" id="title">
			</div>
			<div class="form-group">
				<label class="control-label">Year</label>
				<input class="form-control" name="year" value="<?php echo $law['year'] ?>" type="text" id="year">
			</div>
			<div class="form-group">
				<label class="control-label">Number of Section</label>
				<input class="form-control" name="number_of_section" value="<?php echo $law['number_of_section'] ?>" type="text" id="number_of_section">
			</div>
			<input type="hidden" name="id" value="<?php echo $law['id']; ?>">
			<button class="btn btn-info">Update</button>
			</form>
		</div>
	

	  </div> 
	</div>
<?php include '../partials/footer.php';?>


<?php 
	function getDetail($id){
		$conn = OpenCon();
		$sql = "select * from law where id = ".$id;
		$result = $conn->query($sql);

		while($row = $result->fetch_assoc()) {
			$law['id'] = $row['id'];
			$law['title'] = $row['title'];
			$law['year'] = $row['year'];
			$law['number_of_section'] = $row['number_of_section']; 
    }
    return $law;
    $conn->close();	
	}
	
	if($_POST){
		//echo "<pre>";print_r($_POST);exit;
		updatelaw($_POST);
	}

    function updatelaw($law){

	$sql = "UPDATE law SET title = '".$law['title']."', year = ".$law['year'].", number_of_section = ".$law['number_of_section']." WHERE id = ".$law['id'];

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