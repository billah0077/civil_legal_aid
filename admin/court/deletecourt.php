
<?php include '../common/config.php';?>
<?php 
$id = $_GET['id'];

$conn = OpenCon();
	$sql = "delete from court where id = ".$id;
	$result = $conn->query($sql);
	if($result){
		header('Location: '.$path.'court/court.php');
	}else{
		echo "Sorry Could Not Delete!";
	}
	$conn->close();	
?>
