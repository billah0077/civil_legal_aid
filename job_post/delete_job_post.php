<?php include '../common/head.php';?>
<?php include '../common/menu.php'; ?>
<?php include '../common/config.php';?>
<?php 
$id = $_GET['id'];

$conn = OpenCon();
	$sql = "delete from job_post where id = ".$id;
	$result = $conn->query($sql);
	if($result){
		header('Location: '.$path.'job_post/job_post.php');
	}else{
		echo "Sorry Could Not Delete!";
	}
	$conn->close();	
?>
