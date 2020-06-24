<style>
table, th, td {
  border: 1px solid black;
}
</style>
<?php
include 'config.php';
include 'menu.php';
?>

<table width="300" border="0" align="center" cellpadding="0" cellspacing="1">
<tr>
<td><form name="form1" method="post" action="">
<table width="100%" border="0" cellspacing="1" cellpadding="3">
<tr>
<td colspan="3"><strong>Insert Data Into mySQL Database </strong></td>
</tr>
<tr>
<td width="71">title</td>
<td width="6">:</td>
<td width="301"><input name="title" type="text" id="title"></td>
</tr>
<tr>
<td>Description</td>
<td>:</td>
<td><input name="description" type="text" id="Description"></td>
</tr>
<tr>
<td colspan="3" align="center"><input type="submit" name="Submit" value="Submit"></td>
</tr>
</table>
</form>
</td>
</tr>
</table>

<?php

// Get values from form 
if($_POST){
	$title=$_POST['title'];
	$description=$_POST['description'];
	//print_r($_POST);exit;
	insertcrime($title,$description);	
}

function insertcrime($title,$description){
	$conn = OpenCon();
	$sql = "INSERT INTO crime (title, description)
VALUES ('".$title."', '".$description."')";
echo $sql;
	$result = $conn->query($sql);
	if($result){
		echo "successful";
		
	}else{
		echo "No Data Found";
	}
	$conn->close();	
}

?>
