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
<td width="71">Name</td>
<td width="6">:</td>
<td width="301"><input name="name" type="text" id="name"></td>
</tr>
<tr>
<td width="71">Court_id</td>
<td width="6">:</td>
<td width="301"><input name="court_id" type="text" id="court_id"></td>
</tr>
<tr>
<td width="71">Contact</td>
<td width="6">:</td>
<td width="301"><input name="contact" type="text" id="contact"></td>
</tr>
<tr>
<td width="71">email</td>
<td width="6">:</td>
<td width="301"><input name="email" type="text" id="email"></td>
</tr>
<tr>
<td>Username</td>
<td>:</td>
<td><input name="username" type="text" id="username"></td>
</tr>
<tr>
<td>Password</td>
<td>:</td>
<td><input name="password" type="password" id="password"></td>
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
	$name=$_POST['name'];
	$court_id=$_POST['court_id'];
	$contact=$_POST['contact'];
	$email=$_POST['email'];
	$username=$_POST['username'];
	$password=$_POST['password'];
	
	//print_r($_POST);exit;
	insertlawyer($name,$court_id,$contact,$email,$username,$password);	
}

function insertlawyer($name,$court_id,$contact,$email,$username,$password){
	$conn = OpenCon();
	$sql = "INSERT INTO lawyer (name,court_id,contact,email,username,password)
VALUES ('".$name."', ".$court_id.",'".$contact."', '".$email."','".$username."', '".$password."')";
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
