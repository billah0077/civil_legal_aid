<?php
include 'config.php';
include 'menu.php';
?>
<?php 
$id = $_GET['id'];

$conn = OpenCon();
	$sql = "delete from law_lawyer where id = ".$id;
	$result = $conn->query($sql);
	if($result){
		echo "successful";
		
	}else{
		echo "Sorry Could Not Delete!";
	}
	$conn->close();	
?>
