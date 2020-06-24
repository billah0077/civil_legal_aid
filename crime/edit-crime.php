<?php include '../common/head.php';?>
<?php include '../common/header_top.php';?>
<?php include '../common/header.php';?>
<?php include '../common/welcome.php';?>
<?php include '../common/config.php';?>
	<?php if(isset($_GET['id'])){
		$crime = getDetail($_GET['id']);
		//echo '<pre>';print_r($region);exit;
	} ?>
	<div class="card">
	  <div class="card-header">crime 
	  	<a style="float: right;" href="insertcrime.php"><button class="btn btn-success">Add New</button></a>
	  </div>
	  <div class="card-body">

		<div style="margin: 0 auto;padding: 3px;">
			<form name="form1" method="post" action="">
			<div class="form-group">
				<label class="control-label">Title</label>
				<input class="form-control" name="title" value="<?php echo $crime['title'] ?>" type="text" id="title">
			</div>
			<div class="form-group">
				<label class="control-label">Description</label>
				<textarea name="description" class="form-control"><?php echo $crime['description'] ?></textarea>
			</div>
			<input type="hidden" name="id" value="<?php echo $crime['id']; ?>">
			<button class="btn btn-info">Update</button>
			</form>
		</div>
	

	  </div> 
	</div>
<?php include '../common/footer.php';?>

<?php 
	function getDetail($id){
		$conn = OpenCon();
		$sql = "select * from crime where id = ".$id;
		$result = $conn->query($sql);

		while($row = $result->fetch_assoc()) {
			$crime['id'] = $row['id'];
			$crime['title'] = $row['title'];
			$crime['description'] = $row['description']; 
    }
    return $crime;
    $conn->close();	
	}
	
	if($_POST){
		//echo "<pre>";print_r($_POST);exit;
		updateCrime($_POST);
	}

    function updateCrime($crime){

	$sql = "UPDATE crime SET title = '".$crime['title']."', description = '".$crime['description']."' WHERE id = ".$crime['id'];

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