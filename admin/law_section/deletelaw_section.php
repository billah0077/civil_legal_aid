<?php include '../common/head.php';?>
<?php include '../common/menu.php'; ?>
<?php include '../common/config.php';?>
<?php 
$id = $_GET['id'];

$conn = OpenCon();
	$sql = "delete from law_section where id = ".$id;
	$result = $conn->query($sql);
	if($result){
		header('Location: '.$path.'law_section/law_section.php');
	}else{
		echo "Sorry Could Not Delete!";
	}
	$conn->close();	
?>
