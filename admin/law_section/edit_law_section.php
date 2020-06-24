<?php include '../partials/head.php';?>
<?php include '../partials/header_menu.php';?>
<?php include '../partials/admin-sidebar.php';?>
<?php include '../partials/bredcrumb.php';?>
<?php include '../common/config.php';?>
	<?php if(isset($_GET['id'])){
		$law_section = getDetail($_GET['id']);
		//echo '<pre>';print_r($law_section);exit;
	} ?>
	<div class="card">
	  <div class="card-header">law_section 
	  	<a style="float: right;" href="insertlaw_section.php"><button class="btn btn-success">Add New</button></a>
	  </div>
	  <div class="card-body">

		<div style="margin: 0 auto;padding: 3px;">
			<form name="form1" method="post" action="">
			<div class="form-group">
				<label class="control-label">Law ID</label>
				<input class="form-control" name="law_id" value="<?php echo $law_section['law_id'] ?>" type="number" id="law_id">
			</div>
			<div class="form-group">
				<label class="control-label">Section ID</label>
				<input class="form-control" name="section_id" value="<?php echo $law_section['section_id'] ?>" type="number" id="section_id">
			</div>
			<div class="form-group">
				<label class="control-label">Description</label>
				<input class="form-control" name="description" value="<?php echo $law_section['description'] ?>" type="text" id="description">
			</div>
			<input type="hidden" name="id" value="<?php echo $law_section['id']; ?>">
			<button class="btn btn-info">Update</button>
			</form>
		</div>
	

	  </div> 
	</div>
<?php include '../partials/footer.php';?>


<?php 
	function getDetail($id){
		$conn = OpenCon();
		$sql = "select * from law_section where id = ".$id;
		$result = $conn->query($sql);

		while($row = $result->fetch_assoc()) {
			$law_section['id'] = $row['id'];
			$law_section['law_id'] = $row['law_id'];
			$law_section['section_id'] = $row['section_id'];
			$law_section['description'] = $row['description']; 
    }
    return $law_section;
    $conn->close();	
	}
	
	if($_POST){
		//echo "<pre>";print_r($_POST);exit;
		updatelaw_section($_POST);
	}

    function updatelaw_section($law_section){

	$sql = "UPDATE law_section SET law_id = ".$law_section['law_id'].", section_id = ".$law_section['section_id'].", description = '".$law_section['description']."' WHERE id = ".$law_section['id'];

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