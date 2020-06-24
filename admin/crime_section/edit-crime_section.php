<?php include '../partials/head.php';?>
<?php include '../partials/header_menu.php';?>
<?php include '../partials/admin-sidebar.php';?>
<?php include '../partials/bredcrumb.php';?>
<?php include '../common/config.php';?>
	<?php if(isset($_GET['id'])){
		$crime_section = getDetail($_GET['id']);
		//echo '<pre>';print_r($region);exit;
	} ?>
	<div class="card">
	  <div class="card-header">crime_section 
	  	<a style="float: right;" href="insert_crime_section.php"><button class="btn btn-success">Add New</button></a>
	  </div>
	  <div class="card-body">

		<div style="margin: 0 auto;padding: 3px;">
			<form name="form1" method="post" action="">
			<div class="form-group">
				<label class="control-label">Crime Id</label>
				<input class="form-control" name="crime_id" value="<?php echo $crime_section['crime_id'] ?>" type="text" id="crime_id">
			</div>
			<div class="form-group">
				<label class="control-label">Law Section Id</label>
				<input class="form-control" name="law_section_id" value="<?php echo $crime_section['law_section_id'] ?>" type="text" id="law_section_id">
			</div>
			<div class="form-group">
				<label class="control-label">Punishment</label>
				<input class="form-control" name="punishment" value="<?php echo $crime_section['punishment'] ?>" type="text" id="punishment">
			</div>
			<input type="hidden" name="id" value="<?php echo $crime_section['id']; ?>">
			<button class="btn btn-info">Update</button>
			</form>
		</div>
	

	  </div> 
	</div>
<?php include '../partials/footer.php';?>


<?php 
	function getDetail($id){
		$conn = OpenCon();
		$sql = "select * from crime_section where id = ".$id;
		$result = $conn->query($sql);

		while($row = $result->fetch_assoc()) {
			$crime_section['id'] = $row['id'];
			$crime_section['crime_id'] = $row['crime_id'];
			$crime_section['law_section_id'] = $row['law_section_id']; 
			$crime_section['punishment'] = $row['punishment']; 

    }
    return $crime_section;
    $conn->close();	
	}
	
	if($_POST){
		//echo "<pre>";print_r($_POST);exit;
		updateCrime_section($_POST);
	}

    function updateCrime_section($crime_section){

	$sql = "UPDATE crime_section SET crime_id = ".$crime_section['crime_id'].", law_section_id = ".$crime_section['law_section_id'].", punishment = '".$crime_section['punishment']."' WHERE id = ".$crime_section['id'];

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